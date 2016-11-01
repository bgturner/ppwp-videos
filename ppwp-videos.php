<?php namespace PassionsPlay\Videos;
/**
 * The Passions Play Videos plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://passionsplay.com
 * @since             0.0.1
 * @package           PPWP_Videos
 *
 * @wordpress-plugin
 * Plugin Name:       Passions Play Videos
 * Description:       Organize, sort and display videos from external sources.
 * Version:           0.0.1
 * Author:            Benjamin Turner
 * Author URI:        http://passionsplay.com
 * Plugin URI:        http://passionsplay.com/plugins/ppwp-videos
 * Text Domain:       ppwp-videos
 * Domain Path:       /languages
 */
// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

if (file_exists($composer = __DIR__ . '/vendor/autoload.php')) {
	require_once $composer;
}

