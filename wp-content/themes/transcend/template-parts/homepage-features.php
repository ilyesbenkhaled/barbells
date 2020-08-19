<?php $query = new WP_Query('post_type=cpo_feature&posts_per_page=-1&order=ASC&orderby=menu_order'); ?>
<?php if($query->posts): $feature_count = 0; ?>
<div id="features" class="features">
	<div class="container">	
	<center><?php echo do_shortcode('[popup_anything id="2194"][popup_anything id="2196"] [popup_anything id="2199"] [popup_anything id="2202"] [popup_anything id="2205"]') ?>	</center>
		<?php cpotheme_block('home_features', 'section-heading heading'); ?>
		<?php cpotheme_grid($query->posts, 'element', 'feature', 3, array('class' => 'column-narrow')); ?>
	</div>
</div>
<?php endif; ?>