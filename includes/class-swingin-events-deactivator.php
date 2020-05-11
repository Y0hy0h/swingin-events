<?php

/**
 * Fired during plugin deactivation
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Swingin_Events
 * @subpackage Swingin_Events/includes
 */

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0.0
 * @package    Swingin_Events
 * @subpackage Swingin_Events/includes
 * @author     Your Name <email@example.com>
 */
class Swingin_Events_Deactivator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function deactivate() {
        require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-swingin-events-database.php';

        $db = new Swingin_Events_Database();
        $db->down();
	}

}
