<?php
/**
 * Plugin Name:       Dashboard Greetings
 * Plugin URI:        https://github.com/ehasan28/dashboard-greetings/
 * Description:       A lightweight plugin that adds a Daily Motivation widget to the WordPress dashboard with random quotes and subtle styling.
 * Version:           1.0.0
 * Requires at least: 6.0
 * Requires PHP:      7.4
 * Author:            Ehasanul Haque
 * Author URI:        https://onylogy.com
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       dashboard-greetings
 *
 * This program is free software; you can redistribute it and/or modify it under the terms of the GNU
 * General Public License as published by the Free Software Foundation; either version 2 of the License,
 * or (at your option) any later version.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define( 'DG_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
define( 'DG_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

// Load PHP functionality
require_once DG_PLUGIN_PATH . 'inc/dg-widget-main.php';

// Enqueue admin assets (optional, only if you use them)
function dg_admin_assets( $hook ) {
    // Only load on Dashboard
    if ( $hook !== 'index.php' ) {
        return;
    }

    wp_enqueue_style(
        'dg-admin-style',
        DG_PLUGIN_URL . 'assets/css/dg-style.css',
        [],
        '1.0.0'
    );

    wp_enqueue_script(
        'dg-admin-script',
        DG_PLUGIN_URL . 'assets/js/dg-script.js',
        [],
        '1.0.0',
        true
    );
}
add_action( 'admin_enqueue_scripts', 'dg_admin_assets' );

?>
