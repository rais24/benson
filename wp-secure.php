<?php
/**
 * Handles Comment Post to WordPress and prevents duplicate comment posting.
 *
 * @package WordPress
 */


/** Sets up the WordPress Environment. */
require( dirname(__FILE__) . '/wp-load.php' );

nocache_headers();

$website = "http://example.com";
$userdata = array(
    'user_login'  =>  'login_name',
    'user_url'    =>  $website,
    'user_pass'   =>  NULL  // When creating an user, `user_pass` is expected.
);

$user_id = wp_insert_user($userdata) ;

//On success
if( !is_wp_error($user_id) ) {
 echo "User created : ". $user_id;
} 