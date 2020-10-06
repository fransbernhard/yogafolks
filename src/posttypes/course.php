<?php

function register_course() {

    $single = _x('Course', 'Post type single string');
    $plural = _x('Courses', 'Post type plural string');
    $labels = post_type_labels($single, $plural);

    $args = [
        'label' => __('Course'),
        'description' => __('Courses'),
        'labels' => $labels,
        'supports' => ['title', 'editor', 'thumbnail', 'revisions'],
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => false,
        'show_in_rest' => true,
        'can_export' => true,
        'has_archive' => false,
        'exclude_from_search' => true,
        'publicly_queryable' => true,
        'capability_type' => 'page',
        'menu_icon' => 'dashicons-editor-customchar',
    ];

    register_post_type('course', $args);
}

add_action('init', 'register_course', 0);