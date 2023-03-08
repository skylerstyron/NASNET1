<?php
/**
 * Template Name: Structured Cabling Page Template
 *
 * Template for displaying the Structured Cabling page.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

while ( have_posts() ) :
	the_post();
	get_template_part( 'loop-templates/content', 'structured-cabling' );
endwhile;

get_footer();
?>