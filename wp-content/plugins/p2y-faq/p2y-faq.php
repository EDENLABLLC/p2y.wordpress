<?php

/**
* Plugin Name: P2Y.FAQ
* Description: Add faq post types
* Version: 1.0
* Author: Alexey Bondarenko (Nebo15)
* Author URI: http://nebo15.com/
**/

/**
* Register a faq post type, with REST API support
*
* Based on example at: http://codex.wordpress.org/Function_Reference/register_post_type
*/

add_action('init', 'faq_cpt');
function faq_cpt() {
  $labels = array(
    'name'               => _x( 'FAQs', 'post type general name', 'p2y-faqs' ),
    'singular_name'      => _x( 'FAQ', 'post type singular name', 'p2y-faqs' ),
    'menu_name'          => _x( 'FAQs', 'admin menu', 'p2y-faqs' ),
    'name_admin_bar'     => _x( 'FAQ', 'add new on admin bar', 'p2y-faqs' ),
    'add_new'            => _x( 'Add New', 'faq', 'p2y-faqs' ),
    'add_new_item'       => __( 'Add New FAQ', 'p2y-faqs' ),
    'new_item'           => __( 'New FAQ', 'p2y-faqs' ),
    'edit_item'          => __( 'Edit FAQ', 'p2y-faqs' ),
    'view_item'          => __( 'View FAQ', 'p2y-faqs' ),
    'all_items'          => __( 'All FAQs', 'p2y-faqs' ),
    'search_items'       => __( 'Search FAQs', 'p2y-faqs' ),
    'parent_item_colon'  => __( 'Parent FAQs:', 'p2y-faqs' ),
    'not_found'          => __( 'No faqs found.', 'p2y-faqs' ),
    'not_found_in_trash' => __( 'No faqs found in Trash.', 'p2y-faqs' )
  );

  $args = array(
    'labels'             => $labels,
    'description'        => __( 'Description.', 'p2y-faqs' ),
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'faq' ),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => null,
    'show_in_rest'       => true,
    'rest_base'          => 'faqs',
    'rest_controller_class' => 'WP_REST_Posts_Controller',
    'supports'           => array( 'title', 'thumbnail', 'editor', 'custom-fields')
  );

  register_post_type('faq', $args);
}

?>
