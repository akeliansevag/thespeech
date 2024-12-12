<?php
if (! defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}


function thespeech_setup()
{

	add_theme_support('title-tag');

	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'thespeech'),
		)
	);


	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);
}
add_action('after_setup_theme', 'thespeech_setup');

function thespeech_scripts()
{
	// Get file paths
	$css_file = get_template_directory() . '/build/output.css';
	$js_file = get_template_directory() . '/assets/js/scripts.js'; // Get file paths

	// Dynamic versioning based on file modification time
	$css_version = file_exists($css_file) ? filemtime($css_file) : _S_VERSION;
	$js_version = file_exists($js_file) ? filemtime($js_file) : _S_VERSION;

	// Enqueue styles and scripts with dynamic versions
	wp_enqueue_style('thespeech-style', get_template_directory_uri() . "/build/output.css", array(), $css_version);
	wp_enqueue_script('thespeech-navigation', get_template_directory_uri() . '/assets/js/scripts.js', array(), $js_version, true);

	//wp_style_add_data('thespeech-style', 'rtl', 'replace');

}
add_action('wp_enqueue_scripts', 'thespeech_scripts');
