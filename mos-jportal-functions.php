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
