<?php
/**
 * Register a custom post type called "blog".
 *
 * @see get_post_type_labels() for label keys.
 */

function wpdocs_codex_blog_init() {
	$labels = array(
		'name'                  => _x( 'Blogs', 'Post type general name', 'textdomain' ),
		'singular_name'         => _x( 'Blog', 'Post type singular name', 'textdomain' ),
		'menu_name'             => _x( 'Blogs', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar'        => _x( 'Blog', 'Add New on Toolbar', 'textdomain' ),
		'add_new'               => __( 'Add New', 'textdomain' ),
		'add_new_item'          => __( 'Add New Blog', 'textdomain' ),
		'new_item'              => __( 'New Blog', 'textdomain' ),
		'edit_item'             => __( 'Edit Blog', 'textdomain' ),
		'view_item'             => __( 'View Blog', 'textdomain' ),
		'all_items'             => __( 'All Blogs', 'textdomain' ),
		'search_items'          => __( 'Search Blogs', 'textdomain' ),
		'parent_item_colon'     => __( 'Parent Blogs:', 'textdomain' ),
		'not_found'             => __( 'No blogs found.', 'textdomain' ),
		'not_found_in_trash'    => __( 'No blogs found in Trash.', 'textdomain' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 
			'with_front' => false 
		),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
		'menu_icon'          => 'dashicons-grid-view',
	);

	register_post_type( 'blog', $args );
}

add_action( 'init', 'wpdocs_codex_blog_init' );
