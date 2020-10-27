<?php
/*
Plugin Name: Custom post type for press releases
Description: This plugin will create a custom post type "Press Releases"  for you website.
Version: 0.1
Author: Stefano Maffulli
License: AGPLv3
*/
/* Start Adding Functions Below this Line */

// Register Custom Post Type
function sm_pr_post_type() {

	$labels = array(
		'name'                  => _x( 'Press Releases', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Press Release', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Press Release', 'text_domain' ),
		'name_admin_bar'        => __( 'Press Release', 'text_domain' ),
		'archives'              => __( 'PR Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent PR:', 'text_domain' ),
		'all_items'             => __( 'All Press Releases', 'text_domain' ),
		'add_new_item'          => __( 'Add New Press Release', 'text_domain' ),
		'add_new'               => __( 'New Press Release', 'text_domain' ),
		'new_item'              => __( 'New Press Release', 'text_domain' ),
		'edit_item'             => __( 'Edit PR', 'text_domain' ),
		'update_item'           => __( 'Update PR', 'text_domain' ),
		'view_item'             => __( 'View PR', 'text_domain' ),
		'view_items'            => __( 'View PR', 'text_domain' ),
		'search_items'          => __( 'Search PR', 'text_domain' ),
		'not_found'             => __( 'No PR found', 'text_domain' ),
		'not_found_in_trash'    => __( 'No PR found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into PR', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this PR', 'text_domain' ),
		'items_list'            => __( 'PRs list', 'text_domain' ),
		'items_list_navigation' => __( 'PRs list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter PRs list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Press release', 'text_domain' ),
		'description'           => __( 'Announcements and press releases', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'custom-fields' ),
		'taxonomies'            => array( 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-text-page',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'show_in_rest'          => true,
	);
	register_post_type( 'pr', $args );

}
add_action( 'init', 'sm_pr_post_type', 0 );

/* Stop Adding Functions Below this Line */
?>
