<?php
function mos_jportal_metaboxes() {

    $prefix = '_mos_jportal_';

    $jportal_settings = new_cmb2_box(array(
        'id' => $prefix . 'jportal_settings',
        'title' => __('Page Settings', 'cmb2'),
        'object_types' => array('job'),
    ));
    $jportal_settings->add_field( array(
        'name' => 'Position Field',
        'desc' => 'Check if you have already received enough application',
        'id'   => $prefix . 'jportal_position_field',
        'type' => 'checkbox'
    ));

}
add_action('cmb2_admin_init', 'mos_jportal_metaboxes');