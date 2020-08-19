<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php
if( !defined(THEME_IMG_PATH)){
   define( 'THEME_IMG_PATH', get_stylesheet_directory_uri() . '/images' );
  }?>
	<div class="outer" id="top">
		<div style="padding-bottom: 2%;"></div>
		<div style="background-color: white; padding-bottom: 1%; padding-top: 1%;">
		<center><a href="<?php echo get_home_url(); ?>"><img src="<?php echo THEME_IMG_PATH; ?>/logo.png" alt="barebells" width="280" height="0"></a></center><div style="align-content: right"><?php echo do_shortcode( '[popup_anything id="2284"]' );  ?></div></div>
        
		<?php do_action('cpotheme_before_wrapper'); ?>
		
			
		<div class="wrapper">

			<header id="header" class="header">
				<div style="padding-left: 23%;" class="container">
					<?php do_action('cpotheme_header'); ?>
					
				</div>
			</header>

			<?php do_action('cpotheme_before_main'); ?>
			<div class="clear"></div>
