<?php
/**
 * Plugin Name: WooCommerce Image Hover
 * Plugin URI: http://bradley-davis.com/wordpress-plugins/woocommerce-image-hover/
 * Description: WooCommerce Image Hover simply replaces the main WooCommerce product image with the thumbnail when you hover over it.
 * Version: 3.0
 * Author: Bradley Davis
 * Author URI: http://bradley-davis.com
 * License: GPL3
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain: woocommerce-image-hover
 * WC requires at least: 3.0.0
 * WC tested up to: 3.4.1
 *
 * @author   Bradley Davis
 * @package  WooCommerce Image Hover
 * @since    1.0
 *
 * WooCommerce RRP. A Plugin that works with the WooCommerce plugin for WordPress.
 * Copyright (C) 2014 Bradley Davis - bd@bradley-davis.com
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.

 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see http://www.gnu.org/licenses/gpl-3.0.html.
 */

if ( ! defined( 'ABSPATH' ) ) :
	exit; // Exit if accessed directly.
endif;

/**
 * Check if WooCommerce is active
 *
 * @since 1.0
 */
if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ), true ) ) :
	/**
	 * WooCommerce is installed so it is time to make it all happen.
	 */
	woocommerce_image_hover_activate();
endif;

/**
 * Require in the driver class that makes it all happen.
 *
 * @since 3.0.0
 */
function woocommerce_image_hover_activate() {
	/**
	 * The class responsible for bringing all the includes, admin and public
	 * functionality together.
	 */
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wcih.php';
}
