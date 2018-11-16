<?php
/**
 * The public-specific functionality of WooCommerce Image Hover.
 *
 * @author     Bradley Davis
 * @package    WooCommerce_Image_Hover
 * @subpackage WooCommerce_Image_Hover/public
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
class Wcih_Public {
	/**
	 * The Constructor!
	 *
	 * @since 1.0
	 */
	public function __construct() {
		$this->wcih_public_activate();
	}

	/**
	 * Add all filter type actions.
	 *
	 * @since 3.0
	 */
	public function wcih_public_activate() {
		add_action( 'wp_enqueue_scripts', array( $this, 'wcih_enqueue_scripts' ) );
	}

	/**
	 * Enqueue the script.
	 *
	 * @since 1.0
	 */
	public function wcih_enqueue_scripts() {
		wp_enqueue_script( 'wcih_js', plugins_url( '../includes/js/wcih.js', __FILE__ ), array( 'jquery' ), '2.0', true );
	}

}

/**
 * Instantiate the class
 *
 * @since 2.0.0
 */
$wcih_public = new Wcih_Public();
