<?php get_header(); ?>

<?php get_template_part('element', 'page-header'); ?>
	
<div id="main" class="main">
	<div class="container">		
		<section id="content" class="content">
		 <?php echo do_shortcode( ' [showyamap center="55.754736,37.620875"  controls="fullscreenControl,geolocationControl,rulerControl,routeEditor,typeSelector,zoomControl,searchControl,trafficControl" behaviors="dblClickZoom,drag,multiTouch,,rightMouseButtonMagnifier,scrollZoom"] [placemark address="Россия, Москва, проезд Воскресенские Ворота" coordinates="55.755525,37.618183" placemark="islands#blueDotIcon"/] [/showyamap]' ); ?>	
			<?php do_action('cpotheme_before_content'); ?>
			<?php $description = term_description(); ?>
			<?php if($description != ''): ?>
			<div class="page-content">
				<?php echo $description; ?>
			</div>
			<?php endif; ?>
			
			<?php if(have_posts()): ?>
			<?php if(is_author()) cpotheme_author(); ?>
			<?php while(have_posts()): the_post(); ?>
			<?php get_template_part('element', 'blog'); ?>
			<?php endwhile; ?>
			<?php cpotheme_numbered_pagination(); ?>
			<?php endif; ?>
			
			<?php do_action('cpotheme_after_content'); ?>
		</section>
		<?php get_sidebar(); ?>
		<div class="clear"></div>
	</div>
</div>

<?php get_footer(); ?>