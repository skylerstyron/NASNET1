<?php
/**
 * Template Name: Wireless Solutions Page Template
 *
 * Template for displaying the Wireless Solutions page.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

while ( have_posts() ) :
	the_post();
	get_template_part( 'loop-templates/content', 'wireless-solutions' );
endwhile;

get_footer();
?>