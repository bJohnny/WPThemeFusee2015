<?php
/**
 * Plugin Name: Team Members Plugin
 * Description: Custom Plugin for the Fusee Theme. Displays Team Member Profiles
 * Version: 0.1
 * Author: John Brown
 * License GPL2
 */
/* Copyright 2015 John Brown
 */

function team_post_type() {

// Labels
    $labels = array(
        'name' => _x("Team", "post type general name"),
        'singular_name' => _x("Team", "post type singular name"),
        'menu_name' => 'Team Profiles',
        'add_new' => _x("Add New", "team item"),
        'add_new_item' => __("Add New Profile"),
        'edit_item' => __("Edit Profile"),
        'new_item' => __("New Profile"),
        'view_item' => __("View Profile"),
        'search_items' => __("Search Profiles"),
        'not_found' =>  __("No Profiles Found"),
        'not_found_in_trash' => __("No Profiles Found in Trash"),
        'parent_item_colon' => ''
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => false,
        'menu_icon' => 'dashicons-groups',
        'rewrite' => false,
        'supports' => array('title')
    );

// Register post type
    register_post_type('team' , $args);
}
add_action( 'init', 'team_post_type' );

function team_rewrite_flush() {
    team_post_type();

    flush_rewrite_rules();
}
register_activation_hook(__FILE__, 'team_rewrite_flush');