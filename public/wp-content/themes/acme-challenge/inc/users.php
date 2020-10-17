<?php

//Create a basic role
function add_custom_roles()
{
    add_role('gallery_author', 'Gallery author', array('read' => true, 'level_0' => true));
}

add_action('after_setup_theme', 'add_custom_roles');


add_filter('wp_dropdown_users_args', 'change_user_dropdown', 10, 2);

function change_user_dropdown($query_args, $r)
{
    // get screen object
    $screen = get_current_screen();

    // list users whose role is e.g. 'Administrator' for 'page' post type
    if ($screen->post_type == 'gallery') :
        $query_args['role'] = array('gallery_author');

        // unset default role 
        unset($query_args['who']);
    endif;

    return $query_args;
}
