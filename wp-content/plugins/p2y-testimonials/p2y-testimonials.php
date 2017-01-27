<?php

/**
* Plugin Name: P2Y.Testimonials
* Description: Add testimonials post types
* Version: 1.0
* Author: Alexey Bondarenko (Nebo15)
* Author URI: http://nebo15.com/
**/

/**
* Register a book post type, with REST API support
*
* Based on example at: http://codex.wordpress.org/Function_Reference/register_post_type
*/

add_action('init', 'my_testimonial_cpt');
function my_testimonial_cpt() {
  $labels = array(
    'name'               => _x( 'Testimonials', 'post type general name', 'p2y-testimonials' ),
    'singular_name'      => _x( 'Testimonial', 'post type singular name', 'p2y-testimonials' ),
    'menu_name'          => _x( 'Testimonials', 'admin menu', 'p2y-testimonials' ),
    'name_admin_bar'     => _x( 'Testimonial', 'add new on admin bar', 'p2y-testimonials' ),
    'add_new'            => _x( 'Add New', 'testimonial', 'p2y-testimonials' ),
    'add_new_item'       => __( 'Add New Testimonial', 'p2y-testimonials' ),
    'new_item'           => __( 'New Testimonial', 'p2y-testimonials' ),
    'edit_item'          => __( 'Edit Testimonial', 'p2y-testimonials' ),
    'view_item'          => __( 'View Testimonial', 'p2y-testimonials' ),
    'all_items'          => __( 'All Testimonials', 'p2y-testimonials' ),
    'search_items'       => __( 'Search Testimonials', 'p2y-testimonials' ),
    'parent_item_colon'  => __( 'Parent Testimonials:', 'p2y-testimonials' ),
    'not_found'          => __( 'No testimonials found.', 'p2y-testimonials' ),
    'not_found_in_trash' => __( 'No testimonials found in Trash.', 'p2y-testimonials' )
  );

  $args = array(
    'labels'             => $labels,
    'description'        => __( 'Description.', 'p2y-testimonials' ),
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'testimonial' ),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => null,
    'show_in_rest'       => true,
    'rest_base'          => 'testimonials',
    'rest_controller_class' => 'WP_REST_Posts_Controller',
    'supports'           => array( 'title', 'thumbnail', 'editor', 'custom-fields')
  );

  register_post_type('testimonial', $args);
}

?>
