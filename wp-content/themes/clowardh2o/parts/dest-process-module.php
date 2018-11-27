<div class="process-module-with-num-down">&nbsp;</div>
<!-- process module start -->
<div class="process-module-with-num" 
<?php if(get_field('prm_id')) :
	$currentID = get_field('prm_id');
	echo ('id=#'.$currentID);
endif; ?>>

	<?php if(get_field('prm_heading')) : ?>
	<h2 class="prm-heading"><?php the_field('prm_heading') ; ?></h2>
	<?php endif; ?>

	<?php if( have_rows('prm_item') ): 
	$i = 1; 
	while ( have_rows('prm_item') ) :
	the_row(); ?>
	<div class="prm-item os-animation obj-animation-duration" data-os-animation="
	<?php if($i % 2 == 0) :
		echo 'fadeInUp';
	else :
		echo 'fadeInUp';
	endif;
	?>" data-os-animation-delay="0.3s">

		<h2 class="prmi-heading"><?php echo $i; ?></h2>

		<?php if(get_sub_field('prmi_subheading')) : ?>
		<h3 class="prmi-subheading"><?php the_sub_field('prmi_subheading');?></h3>
		<?php endif; ?>

		<?php if(get_sub_field('prmi_content')) : ?>
		<div class="prmi-content"><?php the_sub_field('prmi_content');?></div>
		<?php endif; ?>

	</div>
	<?php $i++;
	endwhile;
	endif; ?>
	
	<?php if(get_field('prm_cta_url')) : ?>
	<p class="prm-cta-wrap"><a class="prm-cta btn" href="<?php the_field('prm_cta_url');?>"><?php the_field('prm_cta_text');?></a></p>
	<?php endif; ?>

</div>
<!-- process module end -->