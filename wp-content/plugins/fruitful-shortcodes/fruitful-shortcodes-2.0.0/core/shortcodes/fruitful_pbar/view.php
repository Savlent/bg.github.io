<div class="fruitful_pbar">
	<?php
		global $ff_pbar_shortcode_delay;
		$ff_pbar_shortcode_delay = 0.0;
		echo do_shortcode( $data['content'] );
	?>
</div>