<?php
/**
 * Plugin Bootstrapping
 *
 * @link              http://github.com/ollywarren
 * @since             1.0.0
 * @package           Presta_Press
 *
 * Plugin Name:       Presta-Press
 * Plugin URI:        https://github.com/ollywarren/presta-press
 * Description:       Integrates with a Prestashop install to automagically grab products related to posts and create adverts in relevant posts.
 * Version:           1.0.0
 * Author:            Olly Warren
 * Author URI:        http://github.com/ollywarren
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       presta-press
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-plugin-name-activator.php
 */
function activate_plugin_name() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-plugin-name-activator.php';
	Plugin_Name_Activator::activate();
}
/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-plugin-name-deactivator.php
 */
function deactivate_plugin_name() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-plugin-name-deactivator.php';
	Plugin_Name_Deactivator::deactivate();
}
register_activation_hook( __FILE__, 'activate_plugin_name' );
register_deactivation_hook( __FILE__, 'deactivate_plugin_name' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-plugin-name.php';


/**
 * Instantiate a new instance of the plugin.
 */
function run_plugin_name() {
	$plugin = new Plugin_Name();
	$plugin->run();
}
run_plugin_name();