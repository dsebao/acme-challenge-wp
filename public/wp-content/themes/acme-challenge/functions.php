<?php

// Exit if accessed directly.
defined('ABSPATH') || exit;


$theme_includes = array(
	//General
	'/globals.php',
	'/wp-reset.php',
	'/utils.php',

	//theme Base
	'/enqueue.php',
	'/pagination.php',
	'/shortcode.php',
	'/users.php',
	'/post-types.php',
	'/metaboxes.php',
	'/taxonomies.php',
	'/ajax.php',
	'/theme_settings.php', // Initialize theme default settings.
	'/wp_bootstrap_nav.php',
);

foreach ($theme_includes as $file) {

	require_once get_template_directory() . '/inc' . $file;
}

/**
 * Custom functions or settings for this demo
 */



//Resize of image media size for square ratio
update_option('medium_size_w', 600);
update_option('medium_size_h', 600);


// Get all the tags for an post id
function get_hashtag($postid)
{
	$hashes = wp_get_post_terms($postid, 'hashtag');
	foreach ($hashes as $hash) {
		return '<a href="' . home_url() . '/hashtag/' . $hash->slug . '" class="hashtag">#' . $hash->name . '</a>';
	}
}

//Change url search for taxonomies
function wpb_change_search_url()
{
	if (!empty($_GET['s'])) {
		wp_redirect(home_url("/hashtag/") . urlencode(get_query_var('s')));
		exit();
	}
}
add_action('template_redirect', 'wpb_change_search_url');
