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

// This file should not be called directly,
// If it is then WPINC wont be defined so we can abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Plugin Activation Methods
 */
function activate_presta_press() {
	//Require the activation class
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-presta-press-activator.php';

	//Call the activate method to setup our plugin.
	Presta_Press_Activator::activate();
}
/**
 * Plugin Deactivation Methods
 */
function deactivate_presta_press() {
	//Require the relevant class
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-presta-press-deactivator.php';

	Presta_Press_Deactivator::deactivate();
}
register_activation_hook( __FILE__, 'activate_presta_press' );
register_deactivation_hook( __FILE__, 'deactivate_presta_press' );

/**
 * The Core plugin class that controls everything! IN THE WORLD!!!!!! MOOOHAHAHA
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-presta-press.php';


/**
 * Instantiate a new instance of the plugin.
 */
function run_presta_press() {
	$plugin = new Presta_Press();
	$plugin->run();
}
run_presta_press();