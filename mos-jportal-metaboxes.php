<?php
function mos_jportal_metaboxes() {

    $prefix = '_mos_jportal_';

    $jportal_settings = new_cmb2_box(array(
        'id' => $prefix . 'jportal_settings',
        'title' => __('Job Settings', 'cmb2'),
        'object_types' => array('job'),
    ));
    $jportal_settings->add_field( array(
        'name' => 'Position Field',
        'desc' => 'Check if you have already received enough application',
        'id'   => $prefix . 'position_field',
        'type' => 'checkbox'
    ));
    $jportal_settings->add_field( array(
        'name'           => 'Functional Category',
        'id'             => $prefix . 'functional_category',
        'taxonomy'       => 'job-fcategory', //Enter Taxonomy Slug
        'type'           => 'taxonomy_select',
        'remove_default' => 'true' // Removes the default metabox provided by WP core. Pending release as of Aug-10-16
    ));
    $jportal_settings->add_field( array(
        'name'           => 'Skill Category',
        'id'             => $prefix . 'functional_sategory',
        'taxonomy'       => 'job-fcategory', //Enter Taxonomy Slug
        'type'           => 'taxonomy_select',
        'remove_default' => 'true' // Removes the default metabox provided by WP core. Pending release as of Aug-10-16
    ));
}
add_action('cmb2_admin_init', 'mos_jportal_metaboxes');