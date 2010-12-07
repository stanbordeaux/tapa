<?php

/*
Plugin Name: Hello World
Description: Echos "Hello World" in footer of theme
Version: 1.0
Author: Stan Bordeaux
Author URI: http://www.cagintranet.com/
*/

# get correct id for plugin
$thisfile=basename(__FILE__, ".php");

# register plugin
register_plugin(
	$thisfile, 
	'Hello World', 	
	'1.0', 		
	'Chris Cagle',
	'http://www.cagintranet.com/', 
	'Finds email addresses in content and components and "hides" them',
	'theme',
	'hello_world_show'  
);

# activate filter
add_hook('content','hello_world'); 

# functions
function hello_world() {
	echo '<h1>Hello shithead</h1>';
}

function hello_world_show() {
	echo '<h2>I like to echo "Hello World" in the footers of all themes.</h2>';
}
