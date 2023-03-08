<?php
/**
 * Template Name: Data Centers Page Template
 *
 * Template for displaying the Data Centers page.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

while ( have_posts() ) :
	the_post();
	get_template_part( 'loop-templates/content', 'data-centers' );
endwhile;

get_footer();