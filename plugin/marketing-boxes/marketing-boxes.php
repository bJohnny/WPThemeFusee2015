<?php
/**
 * Plugin Name: Marketing Boxes
 * Description: A Custom Plugin for Theme Fusee2015
 * Version: 0.1
 * Author: John Brown
 * License GPL2
 */
/*
 * Copyright: 2015 John Brown
 */

function marketing_box_post_type(){

    //Labels
    $labels = array(
        'name' => _x("Marketing Box", "post type general name"),
        'singular_name' => _x("Marketing Box", "post type singular name"),
        'menu_name' => 'Marketing Boxes',
        'add_new' => _x("Add New", "box item"),
        'add_new_item' => __("Add New Box"),
        'edit_item' => __("Edit Box"),
        'new_item' => __("New Box"),
        'view_item' => __("View Box"),
        'search_items' => __("Search Boxes"),
        'not_found' =>  __("No Boxes Found"),
        'not_found_in_trash' => __("No Boxes Found in Trash"),
        'parent_item_colon' => ''
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => false,
        'menu_icon' => 'dashicons-star-filled',
        'rewrite' => false,
        'supports' => array('title')
    );

    //Register post type
    register_post_type('marketing-box', $args);
}

add_action( 'init', 'marketing_box_post_type' );

function marketing_box_rewrite_flush(){
    marketing_box_post_type();

    flush_rewrite_rules(__FILE__, 'marketing_box_rewrite_flush' );
}