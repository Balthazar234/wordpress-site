<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

// Add a custom welcome message
echo "<h1 style='text-align: center; color: green;'>DOO00M! Welcome to Puffersoft New Blog Post!</h1>";
echo "<p style='text-align: center; font-size: 20px;'>This is a custom introduction to your blog. Enjoy your stay!</p>";

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define( 'WP_USE_THEMES', true );

/** Loads the WordPress Environment and Template */
require __DIR__ . '/wp-blog-header.php';

