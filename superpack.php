<?php
/*
 * Plugin Name: SuperPack
 * Version: 0.2.2
 * Plugin URI: https://xfrontend.com/plugins/superpack/
 * Description: Provides a backend to supercharge your site.
 * Author: xFrontend
 * Author URI: http://xfrontend.com/
 * Text Domain: superpack
 * Domain Path: /languages/
 * License: GPL v3
 */

/**
 * SuperPack
 * Copyright (C) 2015, Omaar Osmaan - omo@xfrontend.com
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
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

if ( ! defined( 'ABSPATH' ) ) :
	exit; // Exit if accessed directly
endif;

if ( ! defined( 'SUPERPACK__PLUGIN_DIR' ) ) {
	define( 'SUPERPACK__PLUGIN_DIR', untrailingslashit( plugin_dir_path( __FILE__ ) ) );
}

if ( ! defined( 'SUPERPACK__ASSETS_URI' ) ) {
	define( 'SUPERPACK__ASSETS_URI', untrailingslashit( plugin_dir_url( __FILE__ ) ) . '/assets' );
}

if ( ! defined( 'SUPERPACK__CSSJS_SUFFIX' ) ) {
	define( 'SUPERPACK__CSSJS_SUFFIX', ( ( defined( 'SCRIPT_DEBUG' ) && true === SCRIPT_DEBUG ) ? '' : '.min' ) );
}

require SUPERPACK__PLUGIN_DIR . '/settings.php';
