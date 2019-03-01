<?php
	$atts = $data['atts'];
	$content = $data['content'];

	$attributes = $classes = array();

	$classes[] = 'fruitful_alert';
	$classes[] = 'ff-' . $atts['color'];

	$attributes[] = 'id="' . $atts['id'] . '"';
	$attributes[] = 'class="' . implode( ' ', $classes ) . '"';

?>
<div <?php echo implode( $attributes ); ?>>

	<i class="ff-icon"></i>

	<?php echo $content; ?>

	<a href="#" class="ff-alert-dismiss"></a>

</div>