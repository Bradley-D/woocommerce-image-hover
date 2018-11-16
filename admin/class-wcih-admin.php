<?php
/**
 * The includes are included for WooCommerce Image Hover.
 *
 * @author     Bradley Davis
 * @package    WooCommerce_Image_Hover
 * @subpackage WooCommerce_Image_Hover/includes
 * @since      3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) :
	exit; // Exit if accessed directly.
endif;

/**
 * Includes parent class that pulls everything together.
 *
 * @since 1.0
 */
class Wcih_Admin {
	/**
	 * The Constructor!
	 *
	 * @since 1.0
	 */
	public function __construct() {
		$this->wcih_admin_activate();
	}

	/**
	 * Add all filter type actions.
	 *
	 * @since 3.0
	 */
	public function wcih_admin_activate() {
		add_action( 'after_setup_theme', array( $this, 'wcih_remove_wc_product_image' ), 100 );
	}

	/**
	 * Remove theme support for gallery lightbox, gallery zoom, gallery slider.
	 *
	 * @since 2.0
	 */
	public function wcih_remove_wc_product_image() {
		remove_theme_support( 'wc-product-gallery-slider' );
		remove_theme_support( 'wc-product-gallery-zoom' );
	}
}

/**
 * Instantiate the class
 *
 * @since 2.0.0
 */
$wcih_admin = new Wcih_Admin();
