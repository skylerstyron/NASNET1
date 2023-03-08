<?php
/**
 * Template Name: Voice & Telephony Page Template
 *
 * Template for displaying the Voice & Telephony page.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

while ( have_posts() ) :
    remove_post_type_support( 'page', 'editor' );
	the_post();
	get_template_part( 'loop-templates/content', 'voice-telephony' );
endwhile;

get_footer();
?>