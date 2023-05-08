<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://app.leadzoom.co.uk
 * @since      1.0.0
 *
 * @package    Leadzoom_Campaigns
 * @subpackage Leadzoom_Campaigns/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Leadzoom_Campaigns
 * @subpackage Leadzoom_Campaigns/includes
 * @author     Leadzoom <web@leadzoom.co.uk>
 */
class Leadzoom_Campaigns_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'leadzoom-campaigns',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
