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

        <div class="row js-container-posts">

            <?php
            global $wp_query;

            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

            if (have_posts()) : while (have_posts()) : the_post(); ?>
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