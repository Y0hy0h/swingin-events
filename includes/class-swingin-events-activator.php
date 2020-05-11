<?php

/**
 * Fired during plugin activation
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Swingin_Events
 * @subpackage Swingin_Events/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Swingin_Events
 * @subpackage Swingin_Events/includes
 * @author     Your Name <email@example.com>
 */
class Swingin_Events_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
        require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-swingin-events-database.php';

        $db = new Swingin_Events_Database();
        $db->up();
	}

}
