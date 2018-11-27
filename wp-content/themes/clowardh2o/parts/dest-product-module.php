<div class="product-module-dest-down">&nbsp;</div>
<!--product module start-->
<div class="product-module-dest clearfix" 
<?php if(get_field('dpm_id')) :
	$currentID = get_field('dpm_id');
	echo ('id=#'.$currentID);
endif; ?>>

	<?php if(get_field('dpm_heading')) : ?>
		<h2 class="pm-heading"><?php the_field('dpm_heading') ; ?></h2>
	<?php endif; ?>

	<?php if( have_rows('dpm_item') ): 
	$i = 1; 
	while ( have_rows('dpm_item') ) : 		
	the_row(); ?>
	<div class="pm-item os-animation obj-animation-duration" data-os-animation="
	<?php if($i % 2 == 0) :
		echo 'fadeInUp';
	else :
		echo 'fadeInUp';
	endif;
	?>" data-os-animation-delay="0.3s">

		<?php if(get_sub_field('dpm_image')) : ?>

			<?php $dpm_image = get_sub_field('dpm_image'); ?>
			<img src="<?php echo $dpm_image['url']; ?>" alt="<?php echo $dpm_image['title']; ?>" title="<?php echo $dpm_image['title']; ?>" class="pmi-img">
			
		<?php endif; ?>

		<div class="pmid-text">

			<?php if(get_sub_field('dpmi_title')) : ?>
				<h2><?php the_sub_field('dpmi_title');?></h2>
			<?php endif; ?>

			<?php if(get_sub_field('dpmi_content')) : ?>
				<p><?php the_sub_field('dpmi_content');?></p>
			<?php endif; ?>

		</div>

	</div>
	<?php $i++;
	endwhile;
	endif; ?>

</div>
<!--product module end-->