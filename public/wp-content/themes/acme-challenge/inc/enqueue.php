<?php

/**
 * Enqueue Scripts and styles
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

if (!function_exists('theme_scripts')) {
	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function theme_scripts()
	{
		// Inject theme styles and scripts.
		wp_enqueue_style('theme-styles', get_template_directory_uri() . '/style.css');
		wp_enqueue_script('theme-core', get_template_directory_uri() . '/js/core.js', array(), null, true);

		wp_enqueue_script('lightbox', 'https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js', array(), null, true);

		wp_enqueue_script('theme-app', get_template_directory_uri() . '/js/app.js', array(), null, true);

		wp_localize_script('theme-app', 'jsvars', array(
			'ajaxurl' => admin_url('admin-ajax.php'),
			'security' => wp_create_nonce('load_more_posts'),
		));

		//If comments are using
		if (is_singular() && comments_open() && get_option('thread_comments')) {
			wp_enqueue_script('comment-reply');
		}
	}
} // End of if function_exists( 'theme_scripts' ).

add_action('wp_enqueue_scripts', 'theme_scripts');
