<?php
/**
 * Layout: views/layouts/app.php
 *
 * The main template file.
 *
 * This is the template that is used for displaying:
 * - posts
 * - single posts
 * - archive pages
 * - search results pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MyApp
 */

$blocks = [
	'hero',
	'features',
	'last-posts',
];

foreach ( $blocks as $block ) {
	my_app_template( "views/blocks/{$block}" );
}
