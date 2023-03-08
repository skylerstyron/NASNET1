<?php

/**
 * Footer Column 2 content
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
?>

<div class="col-sm-12 col-md-12 col-lg-2 mob-center">
    <h4>Contact</h4>
    <ul class="nav flex-column p-0 m-0">
        <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('/about'); ?>"><i class="bi bi-geo-alt-fill"></i>Humanity</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('/careers'); ?>">Careers</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('/team'); ?>">Team</a>
        </li>
    </ul>
    <nav class="nav social-nav">
        <a class="nav-link" href="#">
            <img class="mb-4" src="<?php echo esc_url(get_stylesheet_directory_uri() . '/img/insta.svg'); ?>" alt="Instagram Logo" width="28" height="28" />
        </a>
        <a class="nav-link" href="#">
            <img class="mb-4" src="<?php echo esc_url(get_stylesheet_directory_uri() . '/img/facebook.svg'); ?>" alt="Facebook Logo" width="28" height="28" />
        </a>
        <a class="nav-link" href="#">
            <img class="mb-4" src="<?php echo esc_url(get_stylesheet_directory_uri() . '/img/linkedin.svg'); ?>" alt="LinkedIn Logo" width="28" height="28" />
        </a>
    </nav>
</div>