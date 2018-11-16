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
class Wcih {
	/**
	 * The Constructor!
	 *
	 * @since 1.0
	 */
	public function __construct() {
		$this->wcih_activate();
	}

	/**
	 * Include all the required include partials.
	 *
	 * @since 3.0
	 */
	public function wcih_activate() {
		/**
		 * The class responsible for defining all actions that occur in the admin area.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/class-wcih-admin.php';
		/**
		 * The class responsible for defining all actions that occur on the public-facing side of the site.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/class-wcih-public.php';
	}
}

/**
 * Instantiate the class
 *
 * @since 2.0.0
 */
$wcih = new Wcih();
