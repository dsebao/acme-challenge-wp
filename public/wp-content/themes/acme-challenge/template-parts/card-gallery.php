<div class="component-card">
    <a href="" class="component-card__link">

        <?php if (has_post_thumbnail()) {
            $imgurl = wp_get_attachment_image_src(get_post_thumbnail_id(), 'medium');
            $imgurl = $imgurl[0];
        } else {
            $imgurl =  get_template_directory_uri() . '/images/grey-placeholder.jpg';
        } ?>

        <img src="<?php echo $imgurl; ?>" alt="<?php the_title(); ?>" class="component-card__image" />

    </a>
    <div class="component-card__data">
        <div class="component-card__content d-flex">
            <?php if (my_image($post->ID, 'medium')) : ?>
                <img src="<?php echo esc_url(get_avatar_url($post->post_author)); ?>" alt="User" class="component-card__avatar rounded-circle" />
            <?php else : ?>

            <?php endif; ?>
            <div class="component-card__description">
                <h3 class="component-card__username">
                    <?php echo get_the_author_meta('display_name', $post->post_author); ?>
                </h3>
                <div class="component-card__tag"><?php echo get_hashtag($post->ID); ?></div>
            </div>
        </div>
    </div>
</div>