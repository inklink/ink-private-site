<?php
/*
Plugin Name: Ink Private Site
Plugin URI: https://github.com/inklink/ink-private-site
Description: Require login in order to view site
Author: inklink
Author URI: https://github.com/inklink
Version: 0.3

GitHub Plugin URI: https://github.com/inklink/ink-private-site
*/

!defined( 'ABSPATH' ) && die;

add_filter( 'pre_option_blog_public', '__return_zero' );
add_action( "parse_request", function() {
	global $pagenow;
	( $pagenow != 'wp-login.php' && is_user_logged_in() ) || auth_redirect();
} );
