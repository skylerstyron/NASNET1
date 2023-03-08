<?php

/**
 * Template Name: Privacy Policy Template
 *
 * Template for displaying a privacy policy page.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();

while (have_posts()) : the_post(); 

    get_template_part( 'loop-templates/content', 'privacy-policy' );
    
endwhile;

get_footer();

?>