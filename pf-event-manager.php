<?php
/*
Plugin Name: PF Event Manager
Version: 1.0.2
Author: Pathfinders Advertising
Description: You know... event... stuff
Author URI: http://www.pathfind.com
*/

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
	// Download the Advanced Custom Fields: Date and Time Picker plugin
	if(!is_plugin_active('acf-field-date-time-picker/acf-date_time_picker.php')){
		$plugin_messages[] = 'PF Event Manager requires you to install the Advanced Custom Fields: Date and Time Picker plugin, <a href="https://wordpress.org/plugins/acf-field-date-time-picker/">download it from here</a>.';
	}
	if(count($plugin_messages) > 0){
		echo '<div id="message" class="error">';
			foreach($plugin_messages as $message){
				echo '<p><strong>'.$message.'</strong></p>';
			}
		echo '</div>';
	}
}

/* Include our updater file */
include_once(plugin_dir_path(__FILE__).'updater.php');
$updater = new EM_Updater(__FILE__); // instantiate our class
$updater->set_username('Pathfinders'); // set username
$updater->set_repository('pf-event-manager' ); // set repo
$updater->initialize(); // initialize the updater