<?php
/*
Plugin Name: PF Event Manager
Version: 1.0.2
Author: Pathfinders Advertising
Description: You know... event... stuff
Author URI: http://www.pathfind.com
*/

include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

/* Notice of required plugins */
add_action('admin_notices', 'showAdminMessages');
function showAdminMessages(){
	$plugin_messages = array();
	include_once(ABSPATH.'wp-admin/includes/plugin.php');
	// Download the Advanced Custom Fields PRO plugin
	if(!is_plugin_active('advanced-custom-fields-pro/acf.php')){
		$plugin_messages[] = 'PF Event Manager requires you to install the Advanced Custom Fields PRO plugin, <a href="https://www.advancedcustomfields.com/pro/">download it from here</a>.';
	}
	// Download the Gravity Forms plugin
	if(!is_plugin_active('gravityforms/gravityforms.php')){
		$plugin_messages[] = 'PF Event Manager requires you to install the Gravity Forms plugin, <a href="http://www.gravityforms.com/purchase-gravity-forms/">download it from here</a>.';
	}
	// Download the Gravity Forms + Custom Post Types plugin
	if(!is_plugin_active('gravity-forms-custom-post-types/gfcptaddon.php')){
		$plugin_messages[] = 'PF Event Manager requires you to install the Gravity Forms + Custom Post Types plugin, <a href="https://wordpress.org/plugins/gravity-forms-custom-post-types/">download it from here</a>.';
	}
	if(count($plugin_messages) > 0){
		echo '<div id="message" class="error">';
			foreach($plugin_messages as $message){
				echo '<p><strong>'.$message.'</strong></p>';
			}
		echo '</div>';
	}
}

/* Check if a Gravity Form exists */
function gravity_form_exists($form_name){
  $forms = GFFormsModel::get_forms();
	foreach($forms as &$form){
		if ($form->title == $form_name) {
			return true;
		}
	}
  return false;
}

/* Create the required ACF fields */
if(is_plugin_active('advanced-custom-fields-pro/acf.php')){
	include_once(plugin_dir_path(__FILE__).'acf-fields.php');
}

/* Create the required GF Forms if they don't already exist */
if(is_plugin_active('gravityforms/gravityforms.php')){
	include_once(plugin_dir_path(__FILE__).'gf-forms.php');
	$gf_event_filtering_array = json_decode($gf_event_filtering,true);
	if(!gravity_form_exists('Event Filtering')){
		GFAPI::add_form($gf_event_filtering_array[0]);
	}
	if(!gravity_form_exists('Submit an Event')){
		GFAPI::add_form($gf_submit_an_event[0]);
	}
}

/* Include our updater file */
include_once(plugin_dir_path(__FILE__).'updater.php');
$updater = new EM_Updater(__FILE__); // instantiate our class
$updater->set_username('Pathfinders'); // set username
$updater->set_repository('pf-event-manager' ); // set repo
$updater->initialize(); // initialize the updater