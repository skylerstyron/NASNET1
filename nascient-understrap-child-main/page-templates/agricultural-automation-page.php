<?php
/**
 * Template Name: Agricultural Automation Page Template
 *
 * Template for displaying the Agricultural Automation page.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

while ( have_posts() ) :
	the_post();
	get_template_part( 'loop-templates/content', 'agricultural-automation' );
endwhile;

get_footer();
?>