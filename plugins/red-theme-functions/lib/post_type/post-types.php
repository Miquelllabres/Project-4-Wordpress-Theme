<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

function return_args ($post) {
  $safe_name = str_replace(' ','',$post);
  $labels = array(
    'name'               => _x( $post, 'post type general name', 'your-plugin-textdomain' ),
    'singular_name'      => _x( $post, 'post type singular name', 'your-plugin-textdomain' ),
    'menu_name'          => _x( $post, 'admin menu', 'your-plugin-textdomain' ),
    'name_admin_bar'     => _x( $post, 'add new on admin bar', 'your-plugin-textdomain' ),
    'add_new'            => _x( 'Add New', $post, 'your-plugin-textdomain' ),
    'add_new_item'       => __( 'Add New '.$post, 'your-plugin-textdomain' ),
    'new_item'           => __( 'New '.$post, 'your-plugin-textdomain' ),
    'edit_item'          => __( 'Edit '.$post, 'your-plugin-textdomain' ),
    'view_item'          => __( 'View '.$post, 'your-plugin-textdomain' ),
    'all_items'          => __( 'All '.$post, 'your-plugin-textdomain' ),
    'search_items'       => __( 'Search '.$post, 'your-plugin-textdomain' ),
    'parent_item_colon'  => __( 'Parent :'.$post, 'your-plugin-textdomain' ),
    'not_found'          => __( 'No '.$post.' found.', 'your-plugin-textdomain' ),
    'not_found_in_trash' => __( 'No '.$post.' found in Trash.', 'your-plugin-textdomain' )
  );
  $args = array(
    'labels'             => $labels,
    'description'        => __( 'Description.', 'your-plugin-textdomain' ),
    'show_in_nav_menus'  => true,
    'public'             => true,
    'rewrite'            => array( 'slug' => $safe_name ),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => true,
    'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments','custom-fields' ),
    'show_in_rest'       => true,
  );
  return $args;
}

function custom_post_types() {
  $post_types = array(
    'courses',
    'events',
    'instructors',
    'FAQ',
    'students',
  );

  foreach ($post_types as $post) {
    register_post_type( $post, return_args($post) );
  }
}

add_action( 'init', 'custom_post_types' );
