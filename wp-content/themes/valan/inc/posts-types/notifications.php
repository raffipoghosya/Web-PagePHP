<?php
/**
 * Register a custom post type called "notification".
 *
 * @see get_post_type_labels() for label keys.
 */

function wpdocs_codex_notification_init() {
	$labels = array(
		'name'                  => _x( 'Notifications', 'Post type general name', 'textdomain' ),
		'singular_name'         => _x( 'Notification', 'Post type singular name', 'textdomain' ),
		'menu_name'             => _x( 'Notifications', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar'        => _x( 'Notification', 'Add New on Toolbar', 'textdomain' ),
		'add_new'               => __( 'Add New', 'textdomain' ),
		'add_new_item'          => __( 'Add New Notification', 'textdomain' ),
		'new_item'              => __( 'New Notification', 'textdomain' ),
		'edit_item'             => __( 'Edit Notification', 'textdomain' ),
		'view_item'             => __( 'View Notification', 'textdomain' ),
		'all_items'             => __( 'All Notifications', 'textdomain' ),
		'search_items'          => __( 'Search Notifications', 'textdomain' ),
		'parent_item_colon'     => __( 'Parent Notifications:', 'textdomain' ),
		'not_found'             => __( 'No notifications found.', 'textdomain' ),
		'not_found_in_trash'    => __( 'No notifications found in Trash.', 'textdomain' )
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => false,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array(
            'with_front'     => false
        ),
        'capability_type'    => 'post',
        'capabilities'       => array(
            // 'create_posts'   => false,
        ),
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor' ),
        'menu_icon'          => 'dashicons-megaphone'
	);

	register_post_type( 'notification', $args );
}

add_action( 'init', 'wpdocs_codex_notification_init' );