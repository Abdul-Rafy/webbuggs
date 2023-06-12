<?php
/*
Plugin Name: Divi Countdown Timer Maker
Description: The ultimate upgraded Divi countdown timer module with 20x more functionality and design features. 
Version:     3.0
Author:      Pee-Aye Creative
Author URI:  www.peeayecreative.com
Update URI:  https://www.elegantthemes.com/
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: ditp-divi-timer-pro
Domain Path: /languages

Divi Countdown Maker  is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

Divi Countdown Maker is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Divi Evergreen Countdown Timer. If not, see https://www.gnu.org/licenses/gpl-2.0.html.
*/

function smpl_load_countdown_timer_assets( $modules ) {
	array_push( $modules, 'et_pb_countdown_timer' );
	return $modules;
}
 function smpl_load_countdown_timer_assets_atf( $atf_modules ) {
	array_push( $atf_modules, 'et_pb_countdown_timer' );
	return $atf_modules;
}
add_filter( 'et_required_module_assets', 'smpl_load_countdown_timer_assets' );
add_filter( 'et_dynamic_assets_modules_atf', 'smpl_load_countdown_timer_assets_atf', 20 );

function divi_timer_pro_view_documentation_links( $links_array, $plugin_file_name, $plugin_data, $status ) {
    if ( strpos( $plugin_file_name, basename(__FILE__) ) ) {
 
        // You can still use `array_unshift()` to add links at the beginning.
        $links_array[] = '<a href="https://www.peeayecreative.com/docs/divi-timer-pro/" target="_blank">View Documentation</a>';
      
    }
  
    return $links_array;
}
 
add_filter( 'plugin_row_meta', 'divi_timer_pro_view_documentation_links', 10, 4 );
define('DWF_PATH_ditp', untrailingslashit(plugin_dir_path( __FILE__ )) );
define('DWF_URL_ditp', untrailingslashit(plugin_dir_url( __FILE__ )) );

/**
 * Set constants.
 */
define( 'DWF_FILE_ditp', __FILE__ );
define( 'DWF_BASE_ditp', plugin_basename( DWF_FILE_ditp ) );
define( 'DWF_DIR_ditp', 	plugin_dir_path( DWF_FILE_ditp ) );
define( 'DWF_URI_ditp', 	plugins_url( '/', DWF_FILE_ditp ) );
define( 'DWF_VER_ditp', 	'2.0.0' );

if ( ! function_exists( 'ditp_initialize_extension' ) ):
/**
 * Creates the extension's main class instance.
 *
 * @since 1.0.0
 */
function ditp_initialize_extension() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/DiviTimerPro.php';
}
add_action( 'divi_extensions_init', 'ditp_initialize_extension' );


// function creative_blog_scripts() {

// ///	wp_deregister_script('jquery');
//     wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js', false, '1.4.2', true);
// //	wp_dequeue_script('jquery');
// 	wp_enqueue_script('creative-blog-script', plugins_url().'/divi-timer-pro/includes/modules/DiviTimerPro/custom_visibility.js',  array("jquery"), null, true); 
// 	//wp_deregister_script('jquery');
	
// }
// add_action('wp_enqueue_scripts', 'creative_blog_scripts');


add_filter( 'et_pb_all_fields_unprocessed_ditp_countdown_timer', 'add_section_setting');

function add_section_setting($fields_unprocessed){	

	if ( is_plugin_active( 'woocommerce/woocommerce.php' ) ) {
		$fields_unprocessed['start_trigger_3']['options']['woo_product_start_date'] = 'Woo Product Sale Start Date';
	    $fields_unprocessed['end_trigger_3']['options']['woo_product_end_date'] = 'Woo Product Sale End Date';
	}

	if ( is_plugin_active( 'the-events-calendar/the-events-calendar.php' ) ) {
		$fields_unprocessed['start_trigger_3']['options']['next_upcoming_event_start_date'] = 'Next Upcoming Event Start Date';
	    $fields_unprocessed['end_trigger_3']['options']['next_upcoming_event_end_date'] = 'Next Upcoming Event Start Date';
		$fields_unprocessed['start_trigger_3']['options']['current_event_start_date'] = 'Current Event Start Date';
	    $fields_unprocessed['end_trigger_3']['options']['current_event_end_date'] = 'Current Event Start Date';
	}
		
 return $fields_unprocessed;
//  return  array_merge($fields_unprocessed,$fields);
}


add_filter( 'et_fb_backend_helpers', 'func_custom_et_fb_backend_helpers', 11, 1 );
function func_custom_et_fb_backend_helpers($helpers){

	$helpers['defaults']['ditp_countdown_timer'] = array(
		'title' => 'Your Title Goes Here',
	);

	return $helpers;
}
endif;
