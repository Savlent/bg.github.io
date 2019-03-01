<?php

	/**
	 * Display dbox shortcode on a front-end part
	**/

	if( ! function_exists( 'display_fruitful_dbox_shortcode') ) {

		function display_fruitful_dbox_shortcode( $atts, $content ) {

			$atts = shortcode_atts( [
				'small_heading'	=> '',
				'heading' 			=> '',
				'button_title' 	=> '',
				'button_link'		=> '',
				'style' 				=> 'style-1'
			], $atts, 'fruitful_dbox' );

			wp_enqueue_style('ff-fruitful_dbox');

			return apply_filters( 'fruitful_dbox_shortcode', FF_SHORTCODES()->view->load(
				FF_SHORTCODES()->shortcodes_dir . '/' . 'fruitful_dbox/view', [
					'atts' => $atts,
					'content' => $content
				], false, true ) );

		}

	}

    add_shortcode( 'fruitful_dbox', 'display_fruitful_dbox_shortcode' );
