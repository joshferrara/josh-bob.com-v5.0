<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

    // excerpt love
    function new_excerpt_more( $more ) {
    	return "...";
    }
    add_filter('excerpt_more', 'new_excerpt_more');

    // post format love
    add_theme_support( 'post-formats', array( 'gallery', 'link', 'image', 'quote', 'video', 'audio' ) );

?>