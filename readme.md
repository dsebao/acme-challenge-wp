# Acme gallery WordPress theme

## Instructions

Clone repo

`git clone https://github.com/dsebao/acme-challenge-wp.git`

Install dependencies

`npm install`

## Build all the project

Copy dependencies to the project (BS4 & jQuery) and compile scss/javascript files

`npm start`

If you want to make changes you should install [gulp](https://rkrupnick.github.io/install-gulp.html)

Then run:
`gulp`

The root of this WP site is /public if you are using local flywheel just clone it in app folder and import the dump.sql

If you need to change the public folder name you can change it in package.json, then run npm start again

The url of this the dump is acmewp.local, you can change it using wp-cli or manually in the sql (there are not any serialized arrays in the db).
