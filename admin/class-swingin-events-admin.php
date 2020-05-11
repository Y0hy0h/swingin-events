<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Swingin_Events
 * @subpackage Swingin_Events/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Swingin_Events
 * @subpackage Swingin_Events/admin
 * @author     Your Name <email@example.com>
 */
class Swingin_Events_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $swingin_events    The ID of this plugin.
	 */
	private $swingin_events;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $swingin_events       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $swingin_events, $version ) {

		$this->swingin_events = $swingin_events;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Swingin_Events_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Swingin_Events_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->swingin_events, plugin_dir_url( __FILE__ ) . 'css/swingin-events-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Swingin_Events_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Swingin_Events_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->swingin_events, plugin_dir_url( __FILE__ ) . 'js/swingin-events-admin.js', array( 'jquery' ), $this->version, false );

	}

}
