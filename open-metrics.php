<?php
/**
 * Plugin Name: Open Metrics
 * Plugin URI: https://wordpress.org/plugins/open-metrics
 * Description: Display e-commerce metrics on a single page.
 * Author: Armando Lüscher
 * Author URI: http://noplanman.ch
 * Version: 1.0.0
 * Text Domain: open-metrics
 * Domain Path: languages
 *
 * Open Metrics is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * any later version.
 *
 * Open Metrics is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Open Metrics. If not, see <http://www.gnu.org/licenses/>.
 *
 * @package Open_Metrics
 * @version 1.0.0
 * @author Armando Lüscher
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'Open_Metrics' ) ) {

	/**
	 * Main Open_Metrics class.
	 *
	 * @since 1.0.0
	 */
	final class Open_Metrics {

		/**
		 * Single instance of Open_Metrics.
		 *
		 * @since 1.0.0
		 *
		 * @var Open_Metrics
		 */
		private static $_instance;

		/**
		 * Get the only Open_Metrics instance.
		 *
		 * @since 1.0.0
		 *
		 * @return Open_Metrics The single instance of the Open_Metrics class.
		 */
		public static function instance() {
			if ( ! isset( self::$_instance ) && ! ( self::$_instance instanceof Open_Metrics ) ) {
				self::$_instance = new Open_Metrics;
			}
			return self::$_instance;
		}

		/**
		 * Singleton, don't allow clone.
		 *
		 * @since 1.0.0
		 *
		 * @access protected
		 */
		public function __clone() {
			_doing_it_wrong( __FUNCTION__, __( 'Yeah... but no!', 'open-metrics' ), '1.0.0' );
		}

		/**
		 * Singleton, don't allow wakeup.
		 *
		 * @since 1.0.0
		 *
		 * @access protected
		 */
		public function __wakeup() {
			_doing_it_wrong( __FUNCTION__, __( 'Yeah... but no!', 'open-metrics' ), '1.0.0' );
		}
	}
}
