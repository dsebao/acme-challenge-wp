$(function () {

    const lightbox = GLightbox();

    $('.js-load-more').on('click', function (event) {
        event.preventDefault();

        var elem = $(this);

        var container = $('.js-container-posts');

        var page = $('.js-load-more').data('page');
        var max = $('.js-load-more').data('max');

        if (page != max) {

            $.ajax({
                url: jsvars.ajaxurl,
                type: 'post',
                data: {
                    action: 'sendform',
                    page: page,
                    max: max,
                    security: jsvars.security
                },
                beforeSend: function () {
                    console.log('Loading posts');
                },
                success: function (result) {
                    //For the DOM
                    elem.attr('data-page', page + 1);
                    //For save in memory
                    elem.data('page', page + 1);
                    container.append(result.data);


                    lightbox.reload();
                }
            });
        } else {
            elem.parent().prepend('<p class="text-center lead">No more posts found</p>');
        }
    })

});