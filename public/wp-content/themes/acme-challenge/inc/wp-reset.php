<?php

// Exit if accessed directly.
defined('ABSPATH') || exit;

/**
 * Hide WordPress update nag to all but admins
 */

function hide_update_notice_to_all_but_admin()
{
    if (!current_user_can('update_core')) {
        remove_action('admin_notices', 'update_nag', 3);
    }
}
add_action('admin_head', 'hide_update_notice_to_all_but_admin', 1);


/**
 * Disable Emoji mess
 */

function disable_wp_emojicons()
{
    remove_action('admin_print_styles', 'print_emoji_styles');
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
    remove_filter('the_content_feed', 'wp_staticize_emoji');
    remove_filter('comment_text_rss', 'wp_staticize_emoji');
    add_filter('tiny_mce_plugins', 'disable_emojicons_tinymce');
    add_filter('emoji_svg_url', '__return_false');
}
add_action('init', 'disable_wp_emojicons');

function disable_emojicons_tinymce($plugins)
{
    return is_array($plugins) ? array_diff($plugins, array('wpemoji')) : array();
}

/**
 * Disable xmlrpc.php
 */

add_filter('xmlrpc_enabled', '__return_false');

remove_action('wp_head', 'rsd_link'); // remove really simple discovery link
remove_action('wp_head', 'wp_generator'); // remove wordpress version

remove_action('wp_head', 'feed_links', 2); // remove rss feed links (make sure you add them in yourself if youre using feedblitz or an rss service)
remove_action('wp_head', 'feed_links_extra', 3); // removes all extra rss feed links

remove_action('wp_head', 'index_rel_link'); // remove link to index page
remove_action('wp_head', 'wlwmanifest_link'); // remove wlwmanifest.xml (needed to support windows live writer)

remove_action('wp_head', 'start_post_rel_link', 10, 0); // remove random post link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // remove parent post link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // remove the next and previous post links
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0); // Remove shortlink


/* ----------------------------------------------------------------------------
 * Remove WordPress version from header
 * ------------------------------------------------------------------------- */

function simple_remove_version_info()
{
    return '';
}
add_filter('the_generator', 'simple_remove_version_info');


/* ----------------------------------------------------------------------------
 * Remove welcome panel in dashboard
 * ------------------------------------------------------------------------- */

remove_action('welcome_panel', 'wp_welcome_panel');


/** 
 * Disable JSON REST API  
 */

add_filter('json_enabled', '__return_false');
add_filter('json_jsonp_enabled', '__return_false');


/* 
    remove wordpress logo and menu admin bar
*/
function remove_admin_bar_links()
{
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('wp-logo');          // Remove the WordPress logo
    $wp_admin_bar->remove_menu('about');            // Remove the about WordPress link
    $wp_admin_bar->remove_menu('wporg');            // Remove the WordPress.org link
    $wp_admin_bar->remove_menu('documentation');    // Remove the WordPress documentation link
    $wp_admin_bar->remove_menu('support-forums');   // Remove the support forums link
    $wp_admin_bar->remove_menu('feedback');         // Remove the feedback link
    $wp_admin_bar->remove_menu('updates');          // Remove the updates link
}
add_action('wp_before_admin_bar_render', 'remove_admin_bar_links');


/* 
    Cleaner Dashboard
*/
function disable_default_dashboard_widgets()
{
    remove_meta_box('dashboard_recent_comments', 'dashboard', 'core');
    remove_meta_box('dashboard_incoming_links', 'dashboard', 'core');
    remove_meta_box('dashboard_plugins', 'dashboard', 'core');
    remove_meta_box('dashboard_quick_press', 'dashboard', 'core');
    remove_meta_box('dashboard_primary', 'dashboard', 'core');
    remove_meta_box('dashboard_secondary', 'dashboard', 'core');
    remove_meta_box('dashboard_recent_drafts', 'dashboard', 'core');
    //remove_meta_box('dashboard_right_now', 'dashboard', 'core');
}
add_action('admin_menu', 'disable_default_dashboard_widgets');
