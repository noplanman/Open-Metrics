<?php
/**
 * Main Open Metrics tests
 *
 * @since 1.0.0
 *
 * @package Open_Metrics\Tests
 */

/**
 * Main test class.
 *
 * @since 1.0.0
 */
class Tests_Open_Metrics extends WP_UnitTestCase {
	/**
	 * Instance of the Open_Metrics class.
	 *
	 * @since 1.0.0
	 *
	 * @var Open_Metrics
	 */
	protected $object;

	/**
	 * Set up the instance of the main class.
	 *
	 * @since 1.0.0
	 */
	public function setUp() {
		parent::setUp();
		$this->object = Open_Metrics::instance();
	}

	/**
	 * Make sure all the constants have been set up correctly.
	 *
	 * @since 1.0.0
	 *
	 * @covers Open_Metrics::constants
	 */
	public function test_constants() {
		$this->markTestIncomplete( 'This test has not been implemented yet.' );
	}

	/**
	 * Check if all necessary files can be included.
	 *
	 * @since 1.0.0
	 *
	 * @covers Open_Metrics::includes
	 */
	public function test_includes() {
		$this->markTestIncomplete( 'This test has not been implemented yet.' );
	}
}
