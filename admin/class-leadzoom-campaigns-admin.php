<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://app.leadzoom.co.uk
 * @since      1.0.0
 *
 * @package    Leadzoom_Campaigns
 * @subpackage Leadzoom_Campaigns/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Leadzoom_Campaigns
 * @subpackage Leadzoom_Campaigns/admin
 * @author     Leadzoom <web@leadzoom.co.uk>
 */
class Leadzoom_Campaigns_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

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
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
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
		 * defined in Leadzoom_Campaigns_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Leadzoom_Campaigns_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/leadzoom-campaigns-admin.css', array(), $this->version, 'all' );

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
		 * defined in Leadzoom_Campaigns_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Leadzoom_Campaigns_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/leadzoom-campaigns-admin.js', array( 'jquery' ), $this->version, false );

	}

	public function add_sidebar_menu()
	{
		add_menu_page(
			'Leadzoom Dashboard', // page title
			'Leadzoom Dashboard', // menu title
			'manage_options', // capability
			'leadzoom-dashboard', // menu slug
			[$this, 'menu_callback'], // callback function
			'dashicons-businessperson', // icon URL
			30 // position
		);

		add_submenu_page(
			'leadzoom-dashboard',
			'Settings',
			'Settings',
			'manage-options',
			'leadzoom-settings',
			[$this, 'menu_settings_callback'],
		);
	}

	public function menu_callback()
	{
		
	}

	public function menu_settings_callback()
	{

	}
}
