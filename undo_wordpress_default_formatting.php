<?php
/*
Plugin Name: Undo Wordpress Default Formatting
Description: Wordpress applies default text formatting that replaces characters such as '-', '--', quotes, ... to pretty HTML characters. This plugin was created to revert that back. This is especially useful for tech-oriented blogs that need the original input.
Version: 1.0
Author: Mattias Geniar
Author URI: http://mattiasgeniar.be/
*/

add_filter( 'the_content' , 'mg_undo_wordpress_default_formatting' , 99 );
function mg_undo_wordpress_default_formatting ($text) {
	/* Each htmlchar can only occur once here. That sucks, because wordpress converts different input
	   to the same HTML char. That means I have to decide what will be the most dominant output. */
	$arrHtmlChars = array (	"&#8217;",  	/* Single quote */
				"&#8216;",	/* Also a single quote */
				"&#8212;",	/* Em dash */
				"&#8211;",	/* En dash */
				"&#8230;",	/* A triple dot ... */
				"&#8220;",	/* Opening curly quote */
				"&#8221;",	/* Closing curly quote */
			);
	$arrSimpleChars = array("'", 		/* Single quote */
				"'", 		/* Also a single quote */
				"---",		/* Em dash */
				"--",		/* En dash */
				"...",		/* A triple dot ... */
				"\"",		/* Opening curly quote */
				"\"",		/* Closing curly quote */
			);

	/* Replace all occurences */
	return str_replace( $arrHtmlChars, $arrSimpleChars, $text);
	/* For debugging*/ 
	/*return $text;*/
}
