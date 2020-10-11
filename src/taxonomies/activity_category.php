<?php 

add_action('init', function() {
    $labels = [
        'name' => _x('Categories', 'plural', 'magdalundberg'),
        'singular_name' => _x('Category', 'singular', 'magdalundberg'),
        'menu_name' => _x('Categories', 'admin menu', 'magdalundberg'),
        'all_items' => __('All Categories', 'magdalundberg'),
        'edit_item' => __('Edit Category', 'magdalundberg'),
        'view_item' => __('View Category', 'magdalundberg'),
        'update_item' => __('Update Category', 'magdalundberg'),
        'add_new_item' => __('Add new Category', 'magdalundberg'),
        'new_item_name' => __('New Categories name', 'magdalundberg'),
        'parent_item' > __('Parent Category', 'magdalundberg'),
        'parent_item_colon' => __('Parent Category', 'magdalundberg'),
        'search_items' => __('Search Categories', 'magdalundberg'),
        'popular_items' => __('Popular Categories', 'magdalundberg'),
        'separate_items_with_commas' => __('Seperate Categories with comma', 'magdalundberg'),
        'add_or_remove_items' => __('Add or remove Categories', 'magdalundberg'),
        'choose_from_most_used' => __('Choose from the most used Categories', 'magdalundberg'), 
        'not_found' => __('No Categories found', 'magdalundberg'),
    ];

    $args = [
        'labels' => $labels,
        'hierarchical' => true,
        'public' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'show_in_nav_menus' => true,
        'query_var' => true,
        'show_in_rest' => true,
    ];

    register_taxonomy('activity_category', ['activity'], $args);
}, 0); 