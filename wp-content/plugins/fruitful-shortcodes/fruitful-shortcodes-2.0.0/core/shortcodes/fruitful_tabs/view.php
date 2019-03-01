<?php
	$atts = $data['atts'];
	$content = $data['content'];
?>
<div class="fruitful_tabs type-<?php echo esc_attr( $atts['type'] ); ?> from-shortcodes" data-type="<?php echo esc_attr( $atts['type'] ); ?>" data-break="<?php echo absint( $atts['resp_break'] ); ?>">
	<?php echo do_shortcode( $content ); ?>
</div>