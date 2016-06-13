<?php
/*
Plugin Name: PF Event Manager
Version: 0.1.0
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

/*  */
class PFEM_Updater {
	protected $file;
	protected $plugin;
	protected $basename;
	protected $active;
	public function __construct($file){
		$this->file = $file;
		add_action('admin_init',array($this,'set_plugin_properties'));
		return $this;
	}
	public function set_plugin_properties() {
		$this->plugin = get_plugin_data($this->file);
		$this->basename = plugin_basename($this->file);
		$this->active = is_plugin_active($this->basename);
	}
}
?>