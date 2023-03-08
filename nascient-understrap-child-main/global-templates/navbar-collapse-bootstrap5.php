<?php

/**
 * Header Navbar (bootstrap5)
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$container = get_theme_mod('understrap_container_type');
?>

<nav class="navbar navbar-expand-lg bg-dark static-top clear-nav nav-link dark-nav">
	<div class="container">
		<a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
			<img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/img/Nascient-Networks-Logo-RGB-Reversed.png'); ?>" alt="..." height="36">
		</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'understrap'); ?>">
			<span class="navbar-toggler-icon top-toggle-line"></span>
			<span class="navbar-toggler-icon middle-toggle-line"></span>
			<span class="navbar-toggler-icon bottom-toggle-line"></span>
		</button>
		<!-- The WordPress Menu goes here -->
		<?php
		wp_nav_menu(
			array(
				'theme_location'  => 'primary',
				'container_class' => 'collapse navbar-collapse justify-content-end',
				'container_id'    => 'navbarNavDropdown',
				'menu_class'      => 'navbar-nav align-items-center justify-content-between',
				'fallback_cb'     => '',
				'menu_id'         => 'main-menu',
				'depth'           => 2,
				'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
			)
		);
		?>
	</div>
</nav>