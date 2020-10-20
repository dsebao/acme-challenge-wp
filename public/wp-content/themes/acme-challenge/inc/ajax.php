<?php

//Ajax actions


// Exit if accessed directly.
defined('ABSPATH') || exit;

function sendform()
{
    check_ajax_referer('load_more_posts', 'security');

    $paged = $_POST['page'] + 1;
    $args = array(
        'post_type' => 'gallery',
        'posts_per_page' => get_option('posts_per_page'),
        'paged' => $paged,
    );
    $galleryposts = new WP_Query($args);
    if ($galleryposts->have_posts()) :

        ob_start();
        while ($galleryposts->have_posts()) : $galleryposts->the_post(); ?>
            <div class="col-lg-4 col-md-6 mb-5">
                <?php get_template_part('template-parts/card', 'gallery'); ?>
            </div>
<?php
        endwhile;

        wp_send_json_success(ob_get_clean());

    endif;

    die();
}
add_action('wp_ajax_sendform', 'sendform');
add_action('wp_ajax_nopriv_sendform', 'sendform');
