<?php
// remove_role( 'subscriber' );

$employer = add_role(
    'employer',
    __( 'Employer', 'testdomain' ),
    array(
        'read'			=> true,
		'create_posts'	=> true,
        'edit_posts'	=> true
    )
);
$employee = add_role(
    'employee',
    __( 'Employee', 'testdomain' ),
    array(
        'read'			=> true
    )
);
mos_jportal_add_page('welcome', 'Welcome', '[jportal_welcome]', 'default');
function mos_jportal_add_page($page_slug, $page_title, $page_content, $page_template) {
    $page = get_page_by_path( $page_slug , OBJECT );
    //var_dump($page);
    if(!$page){
        $page_details = array(
            'post_title' => $page_title,
            'post_name' => $page_slug,
            'post_date' => gmdate("Y-m-d h:i:s"),
            'post_content' => $page_content,
            'post_status' => 'publish',
            'post_type' => 'page',
        );
        $page_id = wp_insert_post( $page_details );
        add_post_meta( $page_id, '_wp_page_template', $page_template );
    }
}
