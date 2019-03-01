<?php
	$atts = $data['atts'];

	$css = '';

	if( $atts['height'] <> '' ) {
		$css .= 'height: ' . absint( $atts['height'] ) . 'px;';
	}

    if( $atts['style'] <> '' ) {
        $atts['style'] = preg_replace('#;$#', '', $atts['style']);
        $css .= $atts['style'] . ';';
    }

	if( $atts['color'] <> '' ) {
		$css .= 'background-color: ' . $atts['color'] . ';';
	}

	$attributes = $classes = array();

	$classes[] = 'ff fruitful_sep';

	$attributes[] = 'class="' . implode( ' ', $classes ) . '"';
	$attributes[] = 'style="' . $css . '"';

?>
<div <?php echo implode( $attributes ); ?>></div>