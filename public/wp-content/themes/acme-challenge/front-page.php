<?php


get_header();


//Load hero section
get_template_part('template-parts/hero', 'main');

?>



<section class="main-content my-5">
    <div class="container">

        <div class="component-search d-flex justify-content-end mb-5">
            <?php get_template_part('template-parts/home', 'search'); ?>
        </div>

        <div class="row">
            <?php

            $q = array(
                'post_type' => 'gallery',
                'posts_per_page' => get_option('posts_per_page'),
            );

            $the_query = new WP_Query($q);

            if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post();
            ?>
                    <div class="col-lg-4 col-md-6 mb-5">
                        <?php get_template_part('template-parts/card', 'gallery'); ?>
                    </div>

                <?php endwhile; ?>

            <?php else : ?>

                <p>Posts not found</p>

            <?php endif; ?>

        </div>

        <div class="load-more text-center my-5">
            <a href="" class="btn btn-text js-load-more-posts">Load More</a>
        </div>

    </div>
</section>

<?php get_footer(); ?>