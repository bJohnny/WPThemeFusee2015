<?php
/**
 * Plugin Name: Custom Orbit Slider
 * Description: A simple Orbit Slider from ZURB Foundation
 * Version: 0.1
 * Author: John Brown
 * License GPL2
 */
/* Copyright 2015 John Brown
 */

function custom_orbit_slider() {
    $labels = array(
        'name'              => 'Slides',
        'singular_name'     => 'Slide',
        'menu_name'         => 'Slides',
        'name_admin_bar'    => 'Slide',
        'add_new'           => 'Add New',
        'add_new_item'      => 'Add New Slide',
        'edit_item'         => 'Edit Slide',
        'view_item'         => 'View Slide',
        'all_items'         => 'All Slides',
        'search_items'      => 'Search Slides',
        'not_found'         => 'No Slides found',
        'not_found_in_trash'    => 'No Slides found in Trash',
    );

    $args = array(
        'labels'            => $labels,
        'public'            => true,
        'publicy_queryable' => true,
        'show_ui'           => true,
        'show_in_menu'      => true,
        'menu_position'     => 5,
        'menu_icon'         => 'dashicons-images-alt2',
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'Slider' ),
        'capability_type'   => 'post',
        'has_archive'       => true,
        'hierarchical'      => false,
        'supports'          => array( 'title', 'editor', 'thumbnail', 'gallery' )
    );
    register_post_type( 'orbit_slider', $args );
}

add_action( 'init', 'custom_orbit_slider' );
function my_rewrite_flush() {
    custom_orbit_slider();

    flush_rewrite_rules();
}
register_activation_hook(__FILE__, 'my_rewrite_flush');