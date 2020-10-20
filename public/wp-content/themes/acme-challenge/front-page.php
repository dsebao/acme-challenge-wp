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

        <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>

        <div class="row js-container-posts">
            <?php

            global $wp_query;

            $q = array(
                'post_type' => 'gallery',
                'posts_per_page' => get_option('posts_per_page'),
                'paged' => $paged
            );

            $wp_query = new WP_Query($q);

            if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
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
            <a href="" data-page="<?php echo $paged; ?>" data-max="<?php echo $wp_query->max_num_pages; ?>" class="btn btn-text js-load-more">Load More</a>
        </div>

    </div>
</section>

<?php get_footer(); ?>