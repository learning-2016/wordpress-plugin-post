<?php
/**
 * @package Erwin
 * @version 1.0
 */
/*
Plugin Name: Wordpress Plugin For Post
Plugin URI: http://fashionsponge.com
Description: Post development
Author: Jesus Erwin Suarez
Version: 1.0
Author URI: http://erwin.com  
src:  https://www.youtube.com/watch?v=_nW-h52I7Tg
*/ 
 
/**
* Append content to the post
*/
function add_content($post) {

	$append_text = '<h1> This is new content '.  rand(0,100). ' </h1>';

	$append_text .= $post;

	return $append_text; 
}

add_filter('the_content', 'add_content');



