<?php
/*
 * Plugin Name: Reason HTTP Test - MG
 * Description: A http test plugin for reasomn
 * Version: 0.0.1
 * Author: Martin Greenwood
 * Author URI: https://martingreenwood.com
 * Text Domain: reason-http-test
 * Domain Path: /languages
 * License: GPL v2 or later
 */

if (!defined( 'ABSPATH' ) ) die( 'Forbidden' );

class ReasonHTTPTest {

	private static $instance = null;
	private $wpspx;

	public static function get_instance()
	{
		if ( is_null( self::$instance ) )
		{
			self::$instance = new self;
		}
		return self::$instance;
	}

	private function __construct()
	{
        // load scripts / hooks etc
    }
}


include plugin_dir_path( __FILE__ )  . '/post-interaction.php';

ReasonHTTPTest::get_instance();
