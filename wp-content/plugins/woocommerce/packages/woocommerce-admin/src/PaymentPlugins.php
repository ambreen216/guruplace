<?php
/**
 * WooCommerce Payment methods.
 * NOTE: DO NOT edit this file in WooCommerce core, this is generated from woocommerce-admin.
 */

namespace Automattic\WooCommerce\Admin;

/**
 * Contains backend logic for retrieving payment plugin recommendations.
 */
class PaymentPlugins {

	/**
	 * Name of recommended plugins transient.
	 *
	 * @var string
	 */
	const RECOMMENDED_PLUGINS_TRANSIENT = 'wc_recommended_payment_plugins';


	/**
	 * Class instance.
	 *
	 * @var PaymentPlugins instance
	 */
	protected static $instance = null;

	/**
	 * Get class instance.
	 */
	public static function get_instance() {
		if ( ! self::$instance ) {
			self::$instance = new self();
		}
		return self::$instance;
	}

	/**
	 * Load recommended payment plugins from WooCommerce.com
	 *
	 * @return array
	 */
	public function get_recommended_plugins() {
		if ( ! self::allow_recommendations() ) {
			return array();
		}
		$plugins_data = get_transient( self::RECOMMENDED_PLUGINS_TRANSIENT );

		if ( false === $plugins_data ) {
			include_once ABSPATH . '/wp-admin/includes/plugin-install.php';

			$url     = 'https://woocommerce.com/wp-json/wccom/marketplace-suggestions/1.0/payment-suggestions.json';
			$request = wp_safe_remote_get( $url );
			$plugins = [];

			if ( ! is_wp_error( $request ) && 200 === $request['response']['code'] ) {
				$plugins = json_decode( $request['body'], true );
			}
			foreach ( $plugins as $key => $plugin ) {
				if ( ! array_key_exists( 'copy', $plugins[ $key ] ) ) {
					$api = plugins_api(
						'plugin_information',
						array(
							'slug'   => $plugin['product'],
							'fields' => array(
								'short_description' => true,
							),
						)
					);
					if ( is_wp_error( $api ) ) {
						continue;
					}
					$plugins[ $key ]['copy'] = $api->short_description;
				}
			}

			$plugins_data = array(
				'recommendations' => $plugins,
				'updated'         => time(),
			);

			set_transient(
				self::RECOMMENDED_PLUGINS_TRANSIENT,
				$plugins_data,
				// Expire transient in 15 minutes if remote get failed.
				// Cache an empty result to avoid repeated failed requests.
				empty( $plugins ) ? 900 : 3 * DAY_IN_SECONDS
			);
		}

		return array_values( $plugins_data['recommendations'] );
	}

	/**
	 * Should recommendations be displayed?
	 *
	 * @return bool
	 */
	private function allow_recommendations() {
		// Suggestions are only displayed if user can install plugins.
		if ( ! current_user_can( 'install_plugins' ) ) {
			return false;
		}

		// Suggestions may be disabled via a setting under Accounts & Privacy.
		if ( 'no' === get_option( 'woocommerce_show_marketplace_suggestions', 'yes' ) ) {
			return false;
		}

		// User can disabled all suggestions via filter.
		return apply_filters( 'woocommerce_allow_payment_recommendations', true );
	}
}

