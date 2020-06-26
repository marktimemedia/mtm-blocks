<?php
/*
	Plugin Name: ACF Custom Blocks
	Description: Custom Blocks, Patterns, and Block Page Templates
	Author: Marktime Media
	Version: 1.0
	Author URI: http://www.marktimemedia.com
 */

 // If this file is called directly, abort.
 if ( ! defined( 'WPINC' ) ) {
 	die;
 }

// Plugin directory
define( 'MTM_CBLOCK_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

// Plugin File URL
define( 'MTM_CBLOCK_PLUGIN_FILE_URL' , __FILE__);

require_once( MTM_CBLOCK_PLUGIN_DIR . 'lib/class-mtm-field-definitions.php' );
require_once( MTM_CBLOCK_PLUGIN_DIR . 'lib/class-mtm-field-groups.php' );
require_once( MTM_CBLOCK_PLUGIN_DIR . 'lib/class-mtm-field-add.php' );
require_once( MTM_CBLOCK_PLUGIN_DIR . 'lib/class-mtm-block-template.php' );
require_once( MTM_CBLOCK_PLUGIN_DIR . 'lib/class-gamajo-template-loader.php' );
require_once( MTM_CBLOCK_PLUGIN_DIR . 'lib/class-mtm-template-loader.php' );
require_once( MTM_CBLOCK_PLUGIN_DIR . 'lib/class-tgm-plugin-activation.php' );
require_once( MTM_CBLOCK_PLUGIN_DIR . 'lib/mtm-acf-check-functions.php' );
require_once( MTM_CBLOCK_PLUGIN_DIR . 'lib/mtm-acf-plugin-templates.php' );
require_once( MTM_CBLOCK_PLUGIN_DIR . 'lib/mtm-acf-plugin-requirements.php' );
require_once( MTM_CBLOCK_PLUGIN_DIR . 'lib/mtm-helpers.php' );
require_once( MTM_CBLOCK_PLUGIN_DIR . 'lib/mtm-config.php' );
require_once( MTM_CBLOCK_PLUGIN_DIR . 'lib/mtm-fs-wp-options.php' );


// Plugin Scripts
function mtm_block_components_load_scripts() {
    wp_enqueue_script( 'mtm-tabs', plugins_url( 'assets/js/mtm-tabs.js', __FILE__), array( 'jquery' ) );
    wp_enqueue_script( 'back-to-top', plugins_url( 'assets/js/back-to-top.js', __FILE__), array( 'jquery' ) );
    wp_enqueue_script( 'smooth-scroll-mtm', plugins_url( 'assets/js/smooth-scroll-mtm.js', __FILE__), array( 'jquery' ), false, true );
}
add_action( 'wp_enqueue_scripts', 'mtm_block_components_load_scripts' );

// Plugin Styles
function mtm_block_components_load_styles() {
	wp_enqueue_style( 'mtm-style', plugins_url( 'mtm-style.css', __FILE__) );
}
if( _get_field( 'mtm_block_enqueue_stylesheets', 'option' ) ) {
	add_action( 'wp_enqueue_scripts', 'mtm_block_components_load_styles' );
}

// Plugin Styles in Editor
function mtm_block_components_load_styles_in_editor() {
  wp_enqueue_style( 'mtm-editor-style', plugins_url( 'mtm-style.css', __FILE__) ); // enqueue style sheet
}
if( _get_field( 'mtm_block_enqueue_stylesheets', 'option' ) ) {
	add_action( 'enqueue_block_editor_assets', 'mtm_block_components_load_styles_in_editor',10,0 );
}

// Editor-Specific Styles
function mtm_block_components_editor_scripts() {
    wp_enqueue_style( 'mtm-admin-style', plugins_url( 'assets/css/mtm-editor-style.css', __FILE__) ); // enqueue style sheet
}
add_action( 'enqueue_block_editor_assets', 'mtm_block_components_editor_scripts',10,0 );

// Admin-Specific Styles
function mtm_block_components_admin_assets() {
    wp_enqueue_style( 'admin-styles', plugins_url( 'assets/css/mtm-admin-style.css', __FILE__) );
}
add_action( 'admin_enqueue_scripts', 'mtm_block_components_admin_assets' );

// Add Templates
add_action( 'plugins_loaded', array( 'Mtm_Block_Templates', 'get_instance' ) );

// Flexslider
function mtm_mtm_fs_wp_scripts() {

	$mtm_fs_options = get_option( 'mtm_fs_wp_options' );
  wp_enqueue_script( 'flexslider-options', plugins_url( 'assets/js/flexslider-options.js', __FILE__) );
	wp_localize_script( 'flexslider-options', 'fsOptions', $mtm_fs_options );

	if( 'yes' == $mtm_fs_options['mtm_fs_wp_field_enqueue_flexslider'] ) {
		wp_enqueue_script('flexslider', plugins_url( 'assets/js/min/jquery.flexslider-min.js', __FILE__), array( 'jquery' ) );
	}
	if( 'yes' == $mtm_fs_options['mtm_fs_wp_field_enqueue_css'] ) {
		wp_enqueue_style('flexslider_css', plugins_url( 'assets/css/flexslider.css', __FILE__) );
	}
}
add_action( 'wp_enqueue_scripts', 'mtm_mtm_fs_wp_scripts' );

?>