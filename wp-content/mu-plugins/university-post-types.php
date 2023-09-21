<?php
//CUSTOM POST TYPE

function university_post_types(){
    //EVENT POST TYPE
    register_post_type('event', array(
        'show_in_rest' => true,
        'supports' => array(
            'title', 'editor', 'excerpt',
        ),
        'public' => true,
        'rewrite' => array(
            'slug' => 'events'
        ),
        'has_archive' => true,
        'menu_icon' => 'dashicons-calendar',
        'labels' => array(
            'name' => 'Events',
            'add_new_item' => 'Add New Event',
            'edit_item' => 'Edit Event',
            'all_items' => 'All Events',
            'singular_name' => 'Event'
        )
    ));

    //PROGRAM POST TYPE
    register_post_type('program', array(
        'show_in_rest' => true,
        'supports' => array(
            'title', 'editor',
        ),
        'public' => true,
        'rewrite' => array(
            'slug' => 'programs'
        ),
        'has_archive' => true,
        'menu_icon' => 'dashicons-awards',
        'labels' => array(
            'name' => 'Programs',
            'add_new_item' => 'Add New Program',
            'edit_item' => 'Edit Program',
            'all_items' => 'Programs',
            'singular_name' => 'Program '
        )
    ));

    //PROFESSOR POST TYPE
    register_post_type('professor', array(
        'show_in_rest' => true,
        'supports' => array(
            'title', 'editor',
            'thumbnail'
        ),
        'public' => true,
        'has_archive' => false,
        'menu_icon' => 'dashicons-welcome-learn-more',
        'labels' => array(
            'name' => 'Professors',
            'add_new_item' => 'Add New Professor',
            'edit_item' => 'Edit Professor',
            'all_items' => 'Professors',
            'singular_name' => 'Professor '
        )
    ));
}



add_action('init', 'university_post_types');

?>