<?php

	use ffshortcodes\helper\media;

	$atts = $data['atts'];

	$cols = absint( $atts['cols'] );
	$cols_bootstrap = absint( 12 / $cols );

	$attributes = $classes = array();

	$classes[] = 'ff ff-recent-posts';
	$classes[] = 'fruitful_recent_posts';

	$classes[] = 'ff-style-' . $atts['style'];

	$attributes[] = 'class="' . implode( ' ', $classes ) . '"';
?>
<div <?php echo implode( ' ', $attributes ); ?>>

	<?php
		$posts = $data['posts_query'];
		if( $posts->have_posts() ):
	?>

	<div class="ff-container">
		<div class="ff-row ff-row-eq-height">
			<?php $i=1; while( $posts->have_posts() ): $posts->the_post(); ?>
				<div class="ff-col-item ff-col-md-<?php echo $cols_bootstrap; ?>">
					<div class="ff-item">
					<?php if( filter_var( $atts['show_thumbs'], FILTER_VALIDATE_BOOLEAN ) ): ?>
						<?php
							$thumb_width = absint( $atts['thumb_width'] );
							$thumb_height = absint( $atts['thumb_height'] );
							$img = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ));
							$img_src = media::img_resize( $img, $thumb_width, $thumb_height );
							if( $img_src <> '' ):
						?>
						<div class="ff-thumb">
							<a href="<?php the_permalink(); ?>"><img src="<?php echo esc_attr( $img_src ); ?>" alt="" <?php if( $atts['thumb_radius'] <> '' ): ?>style="border-radius: <?php echo absint( $atts['thumb_radius'] ); ?>px"<?php endif; ?>></a>
						</div>
					<?php endif; endif; ?>

					<?php if( filter_var( $atts['show_date'], FILTER_VALIDATE_BOOLEAN ) ): ?>
						<div class="ff-date">
							<?php echo get_the_date( get_option('date_format')); ?>
						</div>
					<?php endif; ?>

					<?php if( filter_var( $atts['show_header'], FILTER_VALIDATE_BOOLEAN ) ): ?>
						<div class="ff-title">
							<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						</div>
					<?php endif; ?>

					<?php if( filter_var( $atts['show_excerpt'], FILTER_VALIDATE_BOOLEAN ) ): ?>
						<div class="ff-excerpt">
							<?php echo wp_trim_words( get_the_excerpt(), absint( $atts['excerpt_len'] ) ); ?>
						</div>
					<?php endif; ?>

					<?php if( filter_var( $atts['show_metadata'], FILTER_VALIDATE_BOOLEAN ) ): ?>
						<div class="ff-meta">
							<div class="ff-meta-content">
								<span class="ff-author"><?php _e( 'by', 'ff_shortcodes'); ?> <?php the_author(); ?></span>
								<span class="ff-tax"><?php _e( 'in', 'ff_shortcodes'); ?> <?php echo get_the_category_list( ', ' ); ?></span>
								<span class="ff-comments"><i></i> <?php comments_number( 0, 1, '%' ); ?></span>
							</div>
						</div>
					<?php endif; ?>
					</div>

			</div>

			<?php if( $i == $cols ): $i = 0; ?>
			<div class="ff-w-100"></div>
			<?php endif; ?>

			<?php $i++; endwhile; ?>
		</div>
	</div>

	<?php wp_reset_postdata(); ?>

	<?php endif; ?>

</div>