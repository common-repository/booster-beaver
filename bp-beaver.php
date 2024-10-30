<?php
/**
* Plugin Name: Booster Pack for Beaver Builder
* Plugin URI: https://bpbb.wpvibes.com
* Description: Boost Beaver Builder with more widgets. Flip Box, Before After Image Comparison, Advanced Progressbar, Social Icon, Advanced Separator and many more coming soon.
* Author: WPVibes
* Version: 1.1
* Author URI: https://wpvibes.com/
* Text Domain: bp-bb
* License: GPLv2
*/


// Define Constants
define( 'BP_BB__FILE__', __FILE__ );
define( 'BP_BB_PLUGIN_BASE', plugin_basename( BP_BB__FILE__ ) );
define( 'BP_BB_URL', plugins_url( '/', BP_BB__FILE__ ) );
define( 'BP_BB_PATH', plugin_dir_path( BP_BB__FILE__ ) );
define( 'BP_BB_INC_PATH', BP_BB_PATH . '/inc' );

define( 'BP_BB_MODULE_PATH', BP_BB_PATH . 'modules' );
define( 'BP_BB_MODULE_URL', BP_BB_URL . 'modules' );

define( 'BP_BB_ASSETS_URL', BP_BB_URL . 'assets/' );
define( 'BP_BB_VERSION', '1.1' );
define( 'BP_BB_PHP_VERSION_REQUIRED', '5.6' );
define( 'BP_BB_TEXTDOMAIN', 'bp-bb' );

$basic_config = get_option( 'bpbb_basic', '' );

if(isset($basic_config['bpbb_gmap_key'])){
	define( 'BP_BB_GMAP_KEY', $basic_config['bpbb_gmap_key'] );
}else{
	define( 'BP_BB_GMAP_KEY', '' );
}

require_once( BP_BB_INC_PATH . '/bootstrap.php' );

