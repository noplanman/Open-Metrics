<?php
// Load the test environment.
$_SERVER['SERVER_PROTOCOL'] = 'HTTP/1.1';
$_SERVER['SERVER_NAME'] = '';
$PHP_SELF = $GLOBALS['PHP_SELF'] = $_SERVER['PHP_SELF'] = '/index.php';

// Load the WP Tests.
$wp_tests_dir = getenv( 'WP_TESTS_DIR' );
if ( ! $wp_tests_dir ) {
	$wp_tests_dir = '/tmp/wordpress-tests-lib';
}
require_once $wp_tests_dir . '/includes/functions.php';

// Load the plugin manually.
tests_add_filter( 'muplugins_loaded', function() {
	require_once dirname( __FILE__ ) . '/../open-metrics.php';
} );

require_once $wp_tests_dir . '/includes/bootstrap.php';
activate_plugin( 'open-metrics/open-metrics.php' );
