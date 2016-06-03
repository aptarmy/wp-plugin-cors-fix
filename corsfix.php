<?php
/*
Plugin Name: CORS Fix
Description: Fix CORS error to allow all origin
Author: Mr.Pakpoom Tiwakornkit
Version: 0.0.1
*/

/*add_filter( 'wp_headers', array( 'apt_cors_fix' ), 11, 1 );
function apt_cors_fix( $headers ) {
    header("Access-Control-Allow-Origin: " . get_http_origin());
    header("Access-Control-Allow-Credentials: true");

    // Access-Control headers are received during OPTIONS requests
    if ( 'OPTIONS' == $_SERVER['REQUEST_METHOD'] ) {
		header("Access-Control-Allow-Headers: DNT,Authorization,X-CSRFToken,Keep-Alive,User-Agent,X-Requested-With,If-Modified-Since,Cache-Control,Content-Type");
		header("Access-Control-Allow-Methods: HEAD,GET,POST,PATCH,PUT,DELETE,OPTIONS");
    }
    return $headers;
}*/

function cors_fix(){
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Credentials: true");
	if ( 'OPTIONS' == $_SERVER['REQUEST_METHOD'] ) {
		header("Access-Control-Allow-Headers: DNT,Authorization,X-CSRFToken,Keep-Alive,User-Agent,X-Requested-With,If-Modified-Since,Cache-Control,Content-Type");
		header("Access-Control-Allow-Methods: HEAD,GET,POST,PATCH,PUT,DELETE,OPTIONS");
	}
}
add_action('init', 'cors_fix');