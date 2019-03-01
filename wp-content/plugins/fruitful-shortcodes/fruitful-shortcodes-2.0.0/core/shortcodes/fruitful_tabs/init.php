<?php

	if( ! function_exists( 'display_fruitful_tabs_shortcode') ) {

		function display_fruitful_tabs_shortcode( $atts, $content ) {

			$atts = shortcode_atts( [
				'type' 	=> 'default',
				'resp_break' => 767,
			], $atts, 'fruitful_alert' );

			wp_enqueue_style('ff-fruitful_tabs');
			wp_enqueue_script('ff-fruitful_tabs');

			return apply_filters( 'fruitful_tabs_shortcode', FF_SHORTCODES()->view->load(
				FF_SHORTCODES()->shortcodes_dir . '/' . 'fruitful_tabs/view', [
					'atts' => $atts,
					'content' => $content
				], false, true ) );

		}

	}

    add_shortcode( 'fruitful_tabs', 'display_fruitful_tabs_shortcode' );
