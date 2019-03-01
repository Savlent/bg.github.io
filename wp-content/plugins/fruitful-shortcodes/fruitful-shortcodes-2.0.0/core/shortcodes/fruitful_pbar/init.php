<?php

	if( ! function_exists( 'display_fruitful_pbar_shortcode') ) {

		function display_fruitful_pbar_shortcode( $atts, $content ) {

			wp_enqueue_style('font-awesome');
			wp_enqueue_style('ff-fruitful_pbar');
			wp_enqueue_script('wow');
			wp_enqueue_script('ff-fruitful_pbar');

			return apply_filters( 'fruitful_pbar_shortcode', FF_SHORTCODES()->view->load( FF_SHORTCODES()->shortcodes_dir . '/' . 'fruitful_pbar/view', array( 'content' => $content ), false, true ) );
		}

	}

    add_shortcode( 'fruitful_pbar', 'display_fruitful_pbar_shortcode' );
