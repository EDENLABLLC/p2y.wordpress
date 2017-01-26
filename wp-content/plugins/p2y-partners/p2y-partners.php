<?php

/**
* Plugin Name: P2Y.Partners
* Description: Add partners post types
* Version: 1.0.1
* Author: Alexey Bondarenko (Nebo15)
* Author URI: http://nebo15.com/
**/

/**
* Register a book post type, with REST API support
*
* Based on example at: http://codex.wordpress.org/Function_Reference/register_post_type
*/

add_action('init', 'my_partner_cpt');
function my_partner_cpt() {
  $labels = array(
    'name'               => _x( 'Partners', 'post type general name', 'p2y-partners' ),
    'singular_name'      => _x( 'Partner', 'post type singular name', 'p2y-partners' ),
    'menu_name'          => _x( 'Partners', 'admin menu', 'p2y-partners' ),
    'name_admin_bar'     => _x( 'Partner', 'add new on admin bar', 'p2y-partners' ),
    'add_new'            => _x( 'Add New', 'book', 'p2y-partners' ),
    'add_new_item'       => __( 'Add New Partner', 'p2y-partners' ),
    'new_item'           => __( 'New Partner', 'p2y-partners' ),
    'edit_item'          => __( 'Edit Partner', 'p2y-partners' ),
    'view_item'          => __( 'View Partner', 'p2y-partners' ),
    'all_items'          => __( 'All Partners', 'p2y-partners' ),
    'search_items'       => __( 'Search Partners', 'p2y-partners' ),
    'parent_item_colon'  => __( 'Parent Partners:', 'p2y-partners' ),
    'not_found'          => __( 'No partners found.', 'p2y-partners' ),
    'not_found_in_trash' => __( 'No partners found in Trash.', 'p2y-partners' )
  );

  $args = array(
    'labels'             => $labels,
    'description'        => __( 'Description.', 'p2y-partners' ),
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'partner' ),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => null,
    'show_in_rest'       => true,
    'rest_base'          => 'partners',
    'rest_controller_class' => 'WP_REST_Posts_Controller',
    'supports'           => array( 'title', 'thumbnail', 'editor') 
  );

  register_post_type('partner', $args);
}

?>
