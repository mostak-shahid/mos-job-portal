<?php
/*
Plugin Name: Mos Job Portal
Description: Base of future plugin
Version: 0.0.1
Author: Md. Mostak Shahid
*/


if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly.
}

// Define MOS_JPORTAL_FILE.
if ( ! defined( 'MOS_JPORTAL_FILE' ) ) {
  define( 'MOS_JPORTAL_FILE', __FILE__ );
}
// Define MOS_JPORTAL_SETTINGS.
if ( ! defined( 'MOS_JPORTAL_SETTINGS' ) ) {
  define( 'MOS_JPORTAL_SETTINGS', admin_url('/edit.php?post_type=job&page=mos_jportal_settings') );
}
$mos_jportal_option = get_option( 'mos_jportal_option' );
$plugin = plugin_basename(MOS_JPORTAL_FILE); 
require_once ( plugin_dir_path( MOS_JPORTAL_FILE ) . 'mos-jportal-functions.php' );
require_once ( plugin_dir_path( MOS_JPORTAL_FILE ) . 'mos-jportal-hooks.php' );
require_once ( plugin_dir_path( MOS_JPORTAL_FILE ) . 'mos-jportal-settings.php' );
require_once ( plugin_dir_path( MOS_JPORTAL_FILE ) . 'mos-jportal-post-type.php' );
require_once ( plugin_dir_path( MOS_JPORTAL_FILE ) . 'mos-jportal-taxonomy.php' );

require_once( plugin_dir_path( MOS_JPORTAL_FILE ) . 'plugins/metabox/init.php'); 
// require_once( plugin_dir_path( MOS_JPORTAL_FILE ) . 'plugins/metabox/custom-cmb2-fields.php'); 
// require_once( plugin_dir_path( MOS_JPORTAL_FILE ) . 'plugins/metabox/extensions/cmb-field-sorter/cmb-field-sorter.php');
// require_once( plugin_dir_path( MOS_JPORTAL_FILE ) . 'plugins/metabox/extensions/cmb2-conditionals/cmb2-conditionals.php');
require_once( plugin_dir_path( MOS_JPORTAL_FILE ) . 'mos-jportal-metaboxes.php'); 

require_once('plugins/update/plugin-update-checker.php');
$pluginInit = Puc_v4_Factory::buildUpdateChecker(
  'https://raw.githubusercontent.com/mostak-shahid/update/master/mos-jportal.json',
  MOS_JPORTAL_FILE,
  'mos-jportal'
);


register_activation_hook(MOS_JPORTAL_FILE, 'mos_jportal_activate');
add_action('admin_init', 'mos_jportal_redirect');
 
function mos_jportal_activate() {
    $mos_jportal_option = array();
    // $mos_jportal_option['mos_login_type'] = 'basic';
    // update_option( 'mos_jportal_option', $mos_jportal_option, false );
    add_option('mos_jportal_do_activation_redirect', true);
}
 
function mos_jportal_redirect() {
    if (get_option('mos_jportal_do_activation_redirect', false)) {
        delete_option('mos_jportal_do_activation_redirect');
        if(!isset($_GET['activate-multi'])){
            wp_safe_redirect(MOS_JPORTAL_SETTINGS);
        }
    }
}

// Add settings link on plugin page
function mos_jportal_settings_link($links) { 
  $settings_link = '<a href="'.MOS_JPORTAL_SETTINGS.'">Settings</a>'; 
  array_unshift($links, $settings_link); 
  return $links; 
} 
add_filter("plugin_action_links_$plugin", 'mos_jportal_settings_link' );

// function page_template_name() {
//   echo get_page_template() . is_page( 'welcome' );  
// }
// add_action('wp_head', 'page_template_name');

add_filter( 'page_template', 'mos_jportal_page_template' );
function mos_jportal_page_template( $page_template ) {
    if ( is_page( 'job-portal' ) ) {
        $page_template = dirname( __FILE__ ) . '/page-jportal.php';
    }
    return $page_template;
}