<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://example.com
 * @since             1.0.0
 * @package           Swingin_Events
 *
 * @wordpress-plugin
 * Plugin Name:       Swingin’ Events
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'SWINGIN_EVENTS_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-swingin-events-activator.php
 */
function activate_swingin_events() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-activator.php';
	Swingin_Events_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-swingin-events-deactivator.php
 */
function deactivate_swingin_events() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-deactivator.php';
	Swingin_Events_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_swingin_events' );
register_deactivation_hook( __FILE__, 'deactivate_swingin_events' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-swingin_events.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_swingin_events() {

	$plugin = new Swingin_Events();
	$plugin->run();

}
run_swingin_events();
