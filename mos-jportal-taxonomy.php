<?php
// hook into the init action and call mosacademy_taxonomies when it fires
add_action( 'init', 'mos_jportal_taxonomies', 0 );

// create two taxonomies, categories and tags for the post type "book"
function mos_jportal_taxonomies() {


	$slabels = array(
		'name'              => _x( 'Functional Categories', 'taxonomy general name', 'textdomain' ),
		'singular_name'     => _x( 'Functional Category', 'taxonomy singular name', 'textdomain' ),
		'search_items'      => __( 'Search Functional Categories', 'textdomain' ),
		'all_items'         => __( 'All Functional Categories', 'textdomain' ),
		'parent_item'       => __( 'Parent Functional Category', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Functional Category:', 'textdomain' ),
		'edit_item'         => __( 'Edit Functional Category', 'textdomain' ),
		'update_item'       => __( 'Update Functional Category', 'textdomain' ),
		'add_new_item'      => __( 'Add New Functional Category', 'textdomain' ),
		'new_item_name'     => __( 'New Functional Category Name', 'textdomain' ),
		'menu_name'         => __( 'Functional Categories', 'textdomain' ),
	);
	$sargs = array(
		'hierarchical'      => true,
		'labels'            => $slabels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'job-fucategory' ),
	);
	register_taxonomy( 'job-fucategory', array( 'job' ), $sargs );

	$slabels = array(
		'name'              => _x( 'Skill Categories', 'taxonomy general name', 'textdomain' ),
		'singular_name'     => _x( 'Skill Category', 'taxonomy singular name', 'textdomain' ),
		'search_items'      => __( 'Search Skill Categories', 'textdomain' ),
		'all_items'         => __( 'All Skill Categories', 'textdomain' ),
		'parent_item'       => __( 'Parent Skill Category', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Skill Category:', 'textdomain' ),
		'edit_item'         => __( 'Edit Skill Category', 'textdomain' ),
		'update_item'       => __( 'Update Skill Category', 'textdomain' ),
		'add_new_item'      => __( 'Add New Skill Category', 'textdomain' ),
		'new_item_name'     => __( 'New Skill Category Name', 'textdomain' ),
		'menu_name'         => __( 'Skill Categories', 'textdomain' ),
	);
	$sargs = array(
		'hierarchical'      => true,
		'labels'            => $slabels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'job-scategory' ),
	);
	register_taxonomy( 'job-scategory', array( 'job' ), $sargs );

	// Add new taxonomy, NOT hierarchical (like tags)
	$labels = array(
		'name'                       => _x( 'Tags', 'taxonomy general name', 'textdomain' ),
		'singular_name'              => _x( 'Tag', 'taxonomy singular name', 'textdomain' ),
		'search_items'               => __( 'Search Tags', 'textdomain' ),
		'popular_items'              => __( 'Popular Tags', 'textdomain' ),
		'all_items'                  => __( 'All Tags', 'textdomain' ),
		'parent_item'                => null,
		'parent_item_colon'          => null,
		'edit_item'                  => __( 'Edit Tag', 'textdomain' ),
		'update_item'                => __( 'Update Tag', 'textdomain' ),
		'add_new_item'               => __( 'Add New Tag', 'textdomain' ),
		'new_item_name'              => __( 'New Tag Name', 'textdomain' ),
		'separate_items_with_commas' => __( 'Separate tags with commas', 'textdomain' ),
		'add_or_remove_items'        => __( 'Add or remove tags', 'textdomain' ),
		'choose_from_most_used'      => __( 'Choose from the most used tags', 'textdomain' ),
		'not_found'                  => __( 'No tags found.', 'textdomain' ),
		'menu_name'                  => __( 'Tags', 'textdomain' ),
	);

	$args = array(
		'hierarchical'          => false,
		'labels'                => $labels,
		'show_ui'               => true,
		'show_admin_column'     => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var'             => true,
		'rewrite'               => array( 'slug' => 'job-tag' ),
	);

	register_taxonomy( 'job-tag', 'job', $args );
}