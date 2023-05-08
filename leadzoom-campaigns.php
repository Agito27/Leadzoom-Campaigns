<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://app.leadzoom.co.uk
 * @since             1.0.0
 * @package           Leadzoom_Campaigns
 *
 * @wordpress-plugin
 * Plugin Name:       Leadzoom Campaigns
 * Plugin URI:        https://app.leadzoom.co.uk
 * Description:       This is a description of the plugin.
 * Version:           1.0.0
 * Author:            Leadzoom
 * Author URI:        https://app.leadzoom.co.uk
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       leadzoom-campaigns
 * Domain Path:       /languages
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
define( 'LEADZOOM_CAMPAIGNS_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-leadzoom-campaigns-activator.php
 */
function activate_leadzoom_campaigns() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-leadzoom-campaigns-activator.php';
	Leadzoom_Campaigns_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-leadzoom-campaigns-deactivator.php
 */
function deactivate_leadzoom_campaigns() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-leadzoom-campaigns-deactivator.php';
	Leadzoom_Campaigns_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_leadzoom_campaigns' );
register_deactivation_hook( __FILE__, 'deactivate_leadzoom_campaigns' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-leadzoom-campaigns.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_leadzoom_campaigns() {

	$plugin = new Leadzoom_Campaigns();
	$plugin->run();

}
run_leadzoom_campaigns();
