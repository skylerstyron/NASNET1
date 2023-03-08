<?php
/**
 * Template Name: Physical Security Technology Page Template
 *
 * Template for displaying the Physical Security Technology page.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

while ( have_posts() ) :
	the_post();
	get_template_part( 'loop-templates/content', 'physical-security-technology' );
endwhile;

get_footer();
?>