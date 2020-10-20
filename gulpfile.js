
// Config for theme
let settings = require('./package.json'),
    themePath = './' + settings.themeSettings.wpFolder + '/wp-content/themes/' + settings.themeSettings.themeFolder + '/';

// Gulp Nodes
let gulp = require('gulp');
let plumber = require('gulp-plumber');
let watch = require('gulp-watch');
let minifyCSS = require('gulp-minify-css');
let terser = require('gulp-terser');
let rename = require('gulp-rename');
let notify = require('gulp-notify');
let include = require('gulp-include');
let sass = require('gulp-sass');
let autoprefixer = require('gulp-autoprefixer');
let concat = require('gulp-concat');
let imagemin = require('gulp-imagemin');
let sourcemaps = require('gulp-sourcemaps');
let newer = require('gulp-newer');

sass.compiler = require('node-sass');

// Error Handling
let onError = function (err) {
    console.log('An error occurred:', err.message);
    this.emit('end');
};

// Copy Assets
gulp.task('assets', function (done) {
    // Copy all JS files
    gulp
        .src('./node_modules/jquery/dist/jquery.js')
        .pipe(gulp.dest(themePath + 'js/core/jquery'));

    gulp
        .src('./node_modules/bootstrap/dist/js/**/*.js')
        .pipe(gulp.dest(themePath + 'js/core/bootstrap4'));

    // Copy all Bootstrap SCSS files
    gulp
        .src('./node_modules/bootstrap/scss/**/*.scss')
        .pipe(gulp.dest(themePath + 'scss/bs4/'));

    done();
});

//Styles
gulp.task('scss', () => {
    return gulp.src(themePath + 'scss/style.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(autoprefixer('last 4 version'))
        //.pipe(minifyCSS({ keepSpecialComments: 1, processImport: false }))
        //.pipe(sourcemaps.write('./maps'))
        .pipe(gulp.dest(themePath))
        .pipe(notify({ message: 'Scss task complete' }));
});

gulp.task('js', (done) => {
    gulp.src([
        themePath + 'js/core/jquery/jquery.js',
        themePath + 'js/core/bootstrap4/bootstrap.bundle.js',
        themePath + 'js/libs/**/*.js',
    ])
        .pipe(concat('/js/core.js'))
        .pipe(gulp.dest(themePath))
        .pipe(rename({ suffix: '.min' }))
        .pipe(terser())
        .pipe(gulp.dest(themePath))

    gulp.src(themePath + '/js/development/**/*.js')
        .pipe(concat('/js/app.js'))
        .pipe(gulp.dest(themePath))
        .pipe(rename({ suffix: '.min' }))
        .pipe(terser())
        .pipe(gulp.dest(themePath))
        .pipe(notify({ message: 'Scripts task complete' }));

    done();
});

// Watch task -- this runs on every save.
gulp.task('watch', () => {

    // Watch main style.scss file for new inclusions
    gulp.watch(themePath + 'scss/**/**/*.scss', gulp.series('scss'));

    gulp.watch(themePath + 'scss/style.scss', gulp.series('scss'));

    // Watch js files
    gulp.watch(themePath + 'js/development/**/*.js', gulp.series('js'));

});


// Default task -- runs scss and watch functions
gulp.task('default', gulp.parallel('assets', 'js', 'scss', 'watch'));