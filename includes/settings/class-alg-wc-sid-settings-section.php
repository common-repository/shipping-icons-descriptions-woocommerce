<?php
/**
 * Shipping Icons and Descriptions for WooCommerce - Section Settings
 *
 * @version 2.0.0
 * @since   1.0.0
 * @author  WP Design Duo
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if ( ! class_exists( 'Alg_WC_Shipping_Icons_Descs_Settings_Section' ) ) :

class Alg_WC_Shipping_Icons_Descs_Settings_Section {

	/**
	 * Constructor.
	 *
	 * @version 1.0.0
	 * @since   1.0.0
	 */
	function __construct() {
		add_filter( 'woocommerce_get_sections_alg_wc_shipping_icons_descs',                   array( $this, 'settings_section' ) );
		add_filter( 'woocommerce_get_settings_alg_wc_shipping_icons_descs' . '_' . $this->id, array( $this, 'get_settings' ), PHP_INT_MAX );
	}

	/**
	 * settings_section.
	 *
	 * @version 1.0.0
	 * @since   1.0.0
	 */
	function settings_section( $sections ) {
		$sections[ $this->id ] = $this->desc;
		return $sections;
	}

}

endif;
