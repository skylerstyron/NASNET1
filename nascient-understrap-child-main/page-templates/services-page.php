<?php
/**
 * Template Name: Services Page Template
 *
 * Template for displaying a services page.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

while ( have_posts() ) :
	the_post();
	get_template_part( 'loop-templates/content', 'services' );
endwhile;

get_footer();

?>