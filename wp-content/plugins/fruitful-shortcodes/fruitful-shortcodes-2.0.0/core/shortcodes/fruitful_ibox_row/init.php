<?php

	if( ! function_exists( 'display_fruitful_ibox_row_shortcode') ) {

		function display_fruitful_ibox_row_shortcode( $atts, $content ) {

			wp_enqueue_style('ff-shortcodes-grid');

			return apply_filters( 'fruitful_ibox_row_shortcode', FF_SHORTCODES()->view->load(
				FF_SHORTCODES()->shortcodes_dir . '/' . 'fruitful_ibox_row/view', [
					'atts' => $atts,
					'content' => $content
				], false, true ) );

		}

	}

    add_shortcode( 'fruitful_ibox_row', 'display_fruitful_ibox_row_shortcode' );
