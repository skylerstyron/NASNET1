<?php
/**
 * Template Name: Managed Cloud Services Page Template
 *
 * Template for displaying the Managed Cloud Services page.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

while ( have_posts() ) :
	the_post();
	get_template_part( 'loop-templates/content', 'managed-cloud-services' );
endwhile;

get_footer();
?>