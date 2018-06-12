<?php
/**
 * Plugin Name: Awesome Plugin
 * Plugin URI: https://www.throttleup.io/
 * Description: Test GIT Development workflow
 * Author: Maximo Leza
 * Author URI: https://www.throttleup.io/
 * Version: 1.0
 * Text Domain: awesome-plugin
 * Domain Path: /languages
 *
 * Copyright (C) 2018 Throttle Up
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * See <http://www.gnu.org/licenses/> for the GNU General Public License
 *
 * ███╗   ███╗ █████╗ ██╗   ██╗
 * ████╗ ████║██╔══██╗╚██╗ ██╔╝
 * ██╔████╔██║███████║ ╚████╔╝ 
 * ██║╚██╔╝██║██╔══██║ ██╔╝██╗
 * ██║ ╚═╝ ██║██║  ██║██╔╝ ╚██╗ 
 * ╚═╝     ╚═╝╚═╝  ╚═╝╚═╝   ╚═╝
 */

define( 'AWESOME_PLUGIN_DIR', dirname( __FILE__ ) );

register_activation_hook( __FILE__, 'awesome_plugin_activate' );

function awesome_plugin_activate() {
    register_uninstall_hook( __FILE__, 'awesome_plugin_uninstall' );
}

function awesome_plugin_uninstall() {
    /* Clean up whatever needs to be cleaned up */
}


add_action( 'init', 'awesome_plugin_init' );

function awesome_plugin_init() {
    require_once AWESOME_PLUGIN_DIR . '/functions.php';
}


















