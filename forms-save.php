<?php

// don't load directly
if ( ! defined( 'ABSPATH' ) ) {
	die();
}

/**
 * The plugin bootstrap file
 *
 * This file is read by KCMS to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/kubeecms/forms-save/
 * @since             1.4
 * @package           forms-save
 *
 * @wordpress-plugin
 * Plugin Name: Forms Save
 * Plugin URI: https://github.com/KubeeCMS/Forms-Save
 * Description: Adds support for partial form submissions.
 * Version: 1.4
 * Author: Kubee CMS
 * Author URI: https://github.com/KubeeCMS/
 * License: GNU GENERAL PUBLIC LICENSE
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       gravityformspartialentries
 * Domain Path:       /languages
 */


/*
------------------------------------------------------------------------
Copyright 2016-2020 Kubee

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

define( 'GF_PARTIAL_ENTRIES_VERSION', '1.4' );

add_action( 'gform_loaded', array( 'GF_Partial_Entries_Bootstrap', 'load' ), 5 );

class GF_Partial_Entries_Bootstrap {

	public static function load() {
		require_once( 'class-gf-partial-entries.php' );
		GFAddOn::register( 'GF_Partial_Entries' );
	}
}

