<?php
/**
 * @package Akismet
 */
/**
 * Plugin Name: Latest YouTube Video Fetcher
 * Plugin URI:  https://github.com/mehmetyilmaz001/latest-youtube-video-wp-plugin
 * Description: A simple plugin that fetches the latest video from the provided Youtube channel.
 * Version:     1.0.0
 * Author:      Mehmet Yilmaz
 * Author URI:  https://github.com/mehmetyilmaz001/latest-youtube-video-wp-plugin
 * License:     GPL2 or another license
 * License URI: License URI
 * Text Domain: latest-youtube-video-fetcher
 * Domain Path: /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'ABSPATH' ) ) {
    die( 'Kangaroos cannot jump here' );
}

// Check SSL Mode

if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && ( $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ) ) {
    $_SERVER['HTTPS'] = 'on';
}




include_once(plugin_dir_path(__FILE__) . 'admin-settings.php');
include_once(plugin_dir_path(__FILE__) . 'api-functions.php');
include_once(plugin_dir_path(__FILE__) . 'shortcode.php');
include_once(plugin_dir_path(__FILE__) . 'styles.php');
