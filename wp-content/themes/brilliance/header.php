<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>  
    <?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>

	<div class="outer" id="top"  >
	
		<?php do_action('cpotheme_before_wrapper'); ?>
		<div class="wrapper"   >
		
			<div id="topbar" class="topbar secondary-color-bg dark" >
			
				<div class="container" align=right>
				<h1><a href="tel://+79038689966 " >+79038689966</a></h1>
					<div class="clear">
					</div>
				</div>
			</div>
			<header id="header"  class="header"<?php if(cpotheme_get_option('header_opaque')) echo ' header-opaque'; ?>>
			
				<div class="header-wrapper" >
		         

					<div class="container">
					
					   <font size="5">
						<?php do_action('cpotheme_header'); ?>
						
					   </font>
						<div class='clear'></div>
					</div>
					
				</div>
			</header>
			<?php do_action('cpotheme_before_main'); ?>
			<div class="clear"></div>