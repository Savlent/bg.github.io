<?php

	if( ! function_exists( 'display_fruitful_sep_shortcode') ) {

		function display_fruitful_sep_shortcode( $atts ) {

			$atts = shortcode_atts( [
				'height'	=> '10',
				'color' 	=> '#e0e0e0',
                'style'     => ''
			], $atts, 'fruitful_sep' );

			return apply_filters( 'fruitful_sep_shortcode', FF_SHORTCODES()->view->load(
				FF_SHORTCODES()->shortcodes_dir . '/' . 'fruitful_sep/view', [
					'atts' => $atts
				], false, true ) );

		}

	}

    add_shortcode( 'fruitful_sep', 'display_fruitful_sep_shortcode' );
