<?php
/**
 * Template Name: Fiber Optics Page Template
 *
 * Template for displaying the Fiber Optics page.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

while ( have_posts() ) :
	the_post();
	get_template_part( 'loop-templates/content', 'fiber-optics' );
endwhile;

get_footer();