<?php
/**
 * Plugin Name:     Fusee Examples
 * Description:     A Custom Plugin for theme FUSEE2015. Creates Custom Post Type.
 * Version:         0.1
 * Author:          John Brown
 * License:         GPL2
 */

/*
 * Copyright:       2015 John Brown
 */

function fusee_examples_box_post_type(){

    //Labels
    $labels = array(
        'name' => _x("Examples", "post type general name"),
        'singular_name' => _x("Example", "post type singular name"),
        'menu_name' => 'Examples',
        'add_new' => _x("Add New", "item"),
        'add_new_item' => __("Add New"),
        'edit_item' => __("Edit Examples"),
        'new_item' => __("New Example"),
        'view_item' => __("View Example"),
        'search_items' => __("Search Examples"),
        'not_found' =>  __("No Examples Found"),
        'not_found_in_trash' => __("No Examples Found in Trash"),
        'parent_item_colon' => ''
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => false,
        'menu_icon' => 'dashicons-download',
        'rewrite' => false,
        'supports' => array('title', 'editor')
    );

    //Register post type
    register_post_type('fusee-examples', $args);
}

add_action( 'init', 'fusee_examples_box_post_type' );

function fusee_examples_rewrite_flush(){
    fusee_examples_box_post_type();

    flush_rewrite_rules(__FILE__, 'fusee_examples_rewrite_flush' );
}