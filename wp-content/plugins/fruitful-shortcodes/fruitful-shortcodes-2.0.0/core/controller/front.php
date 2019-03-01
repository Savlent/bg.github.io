<?php

	namespace ffshortcodes\controller;
	use ffshortcodes\helper\utils;

	/**
	 * Front-end part of plugin
	**/

	class front {

		function __construct() {

			// load scripts and styles
			add_action( 'wp_enqueue_scripts', [ $this, 'load_assets' ] );

			// load custom styles
			add_action( 'wp_footer', [ $this, 'load_custom_styles' ] );

		}

		/**
		 * Load JavaScript and CSS files in a front-end
		**/
		function load_assets() {

			// CSS styles
			wp_register_style( 'font-awesome', FF_SHORTCODES()->plugin_url . 'assets/libs/fontawesome/css/font-awesome.min.css', false, FF_SHORTCODES()->cache_time );
			wp_register_style( 'slick', FF_SHORTCODES()->plugin_url . 'assets/libs/slick/slick.css', false, FF_SHORTCODES()->cache_time );
			wp_register_style( 'ff-shortcodes-grid', FF_SHORTCODES()->plugin_url . 'assets/libs/bootstrap/bootstrap-grid.min.css', false, FF_SHORTCODES()->cache_time );

			wp_enqueue_style( 'ff-google-fonts', '//fonts.googleapis.com/css?family=Raleway:400,500,700', false, FF_SHORTCODES()->cache_time );
			wp_enqueue_style( 'ff-shortcodes', FF_SHORTCODES()->plugin_url . 'assets/css/front.css', false, FF_SHORTCODES()->cache_time );

			$postfix = FF_SHORTCODES()->dev_mode ? '' : '.min';

			utils::register_shortcodes_assets();

			// JS scripts
			wp_register_script( 'wow', FF_SHORTCODES()->plugin_url . 'assets/libs/wow/wow.min.js', [ 'jquery' ], FF_SHORTCODES()->cache_time, true );
			wp_register_script( 'slick', FF_SHORTCODES()->plugin_url . 'assets/libs/slick/slick.min.js', [ 'jquery' ], FF_SHORTCODES()->cache_time, true );
			wp_enqueue_script( 'ff-shortcodes', FF_SHORTCODES()->plugin_url . 'assets/js/front' . $postfix . '.js', [ 'jquery' ], FF_SHORTCODES()->cache_time, true );

		}

		/**
		 * Load custom styles generated based on user settings
		**/
		function load_custom_styles() {
			?>
			<!-- Fruitful Shortcodes Custom Styles -->
			<style>
			<?php do_action( 'ff_shortcodes_print_custom_styles'); ?>
			</style>
			<?php
		}

	}
