=== WooCommerce Image Hover ===
Contributors: Brad Davis
Tags: woocommerce, woocommerce-image, woocommerce-product-images
Requires at least: 4.0
Tested up to: 4.9.6
Stable tag: 2.0
License: GPLv3 or later
License URI: http://www.gnu.org/licenses/gpl-3.0.html

WooCommerce Image Hover simply replaces the main WooCommerce product image with the thumbnail when you hover over it.

== Description ==

WooCommerce Image Hover simply replaces the main WooCommerce product image with the thumbnail image when you hover over a thumbnail. When you stop hovering over a thumbnail, the main WooCommerce product image is returned to the original like magic.
Please Note, if your theme supports WooCommerce Gallery Slider, this functionality will be disabled for this plugin to work. The good news is the zoom and lightbox functionality will continue to work.
** Requires WooCommerce to be installed. **

== Installation ==

= Requires WooCommerce to be installed. =
= WooCommerce Compatibility Test: v3.4.1 =

1. Upload WooCommerce Image Hover to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. That's it.

== Frequently Asked Questions ==

= Why doesn't WooCommerce Gallery Slider work with this plugin? =
For this plugin to work, the WooCommerce Gallery Slider functionality needs to be removed. The good news is the zoom and lightbox still work if your theme supported them.

= Why doesn't it work with my theme? =
It is impossible to make this plugin work with every theme as it depends on the html of your theme. WooCommerce Image Hover was built and tested on Storefront by WooCommerce to ensure it works with the standard WooCommerce classes.

= How can I make it work with my theme? =
You could visit the Git repo and fork it and make as many changes as you need. Alternatively you can hire me to do it for you. :)


== Changelog ==

= 2.0 =
* Tested on WordPress v4.9.6
* Tested on WooCommerce v3.4.1
* Removed theme support for WooCommerce gallery lightbox, zoom and slider so this plugin can work
* Refactored JS for new WooCommerce 3.0 html
* Fixed typo in JS var name for original main image

= 1.2 =
* Tested on WordPress 4.5.1
* Tested on WooCommerce 2.5.5, everything seems to be in order here
* Added srcset compatibility - sorry it took so long to get updated

= 1.1 =
* Tested on WordPress 4.3.1
* Tested on WooCommerce 2.4.7, everything is a ok
* Refactored jQuery for consistent spacing and use of "" to ''

= 1.0 =
* Original commit and released to the world

== Upgrade Notice ==
* Nope, nothing to report, everything is quite and stable.
