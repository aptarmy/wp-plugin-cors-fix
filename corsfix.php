<?php
/*
Plugin Name: CORS Fix
Description: Fix CORS error to allow all origin
Author: Arm
Version: 0.0.1
*/

function cors_fix(){
	header("Access-Control-Allow-Origin: " . $_SERVER['HTTP_ORIGIN']);
	header("Access-Control-Allow-Credentials: true");
	if ( 'OPTIONS' == $_SERVER['REQUEST_METHOD'] ) {
		header("HTTP/1.1 200 OK");
		header("Access-Control-Allow-Headers: DNT,Authorization,X-CSRFToken,Keep-Alive,User-Agent,X-Requested-With,If-Modified-Since,Cache-Control,Content-Type");
		header("Access-Control-Allow-Methods: HEAD,GET,POST,PATCH,PUT,DELETE,OPTIONS");
		exit();
	}
}
add_action('init', 'cors_fix');