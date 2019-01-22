<?php
//Jobs
add_action( 'init', 'mos_jportal_jobs_init' );
function mos_jportal_jobs_init() {
	$labels = array(
		'name'               => _x( 'Jobs', 'post type general name', 'excavator-template' ),
		'singular_name'      => _x( 'Job', 'post type singular name', 'excavator-template' ),
		'menu_name'          => _x( 'Jobs', 'admin menu', 'excavator-template' ),
		'name_admin_bar'     => _x( 'Job', 'add new on admin bar', 'excavator-template' ),
		'add_new'            => _x( 'Add New', 'job', 'excavator-template' ),
		'add_new_item'       => __( 'Add New Job', 'excavator-template' ),
		'new_item'           => __( 'New Job', 'excavator-template' ),
		'edit_item'          => __( 'Edit Job', 'excavator-template' ),
		'view_item'          => __( 'View Job', 'excavator-template' ),
		'all_items'          => __( 'All Jobs', 'excavator-template' ),
		'search_items'       => __( 'Search Jobs', 'excavator-template' ),
		'parent_item_colon'  => __( 'Parent Jobs:', 'excavator-template' ),
		'not_found'          => __( 'No Jobs found.', 'excavator-template' ),
		'not_found_in_trash' => __( 'No Jobs found in Trash.', 'excavator-template' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'excavator-template' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'job' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 9,
		'menu_icon' => 'dashicons-groups',
		'supports'           => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
	);

	register_post_type( 'job', $args );
}
add_action( 'after_switch_theme', 'flush_rewrite_rules' );