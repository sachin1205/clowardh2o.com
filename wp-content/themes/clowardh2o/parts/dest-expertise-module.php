<div class="expertise-dest-module-down">&nbsp;</div>
<!--expertise dest module start-->
<div class="expertise-dest-module clearfix" 
<?php if(get_field('em_id')) :
	$currentID = get_field('em_id');
	echo ('id=#'.$currentID);
endif; ?>>

	<?php if(get_field('em_heading')) : ?>
	<h2 class="edm-heading"><?php the_field('em_heading') ; ?></h2>
	<?php endif; ?>
	
	<?php if( have_rows('em_item') ): 
	$i = 1; 
	while ( have_rows('em_item') ) :
	the_row(); ?>
	<div class="edm-item os-animation obj-animation-duration" data-os-animation="
	<?php if($i % 2 == 0) :
		echo 'fadeInUp';
	else :
		echo 'fadeInUp';
	endif;
	?>" data-os-animation-delay="0.3s">

		<?php if(get_sub_field('emi_image')) : ?>

			<?php $emi_image = get_sub_field('emi_image'); ?>
			<img src="<?php echo $emi_image['url']; ?>" alt="<?php echo $emi_image['title']; ?>" title="<?php echo $emi_image['title']; ?>" class="edmi-img">
		<?php endif; ?>

		<div class="edm-content">

			<?php if(get_sub_field('emi_title')) : ?>
				<h2 class="edmc-heading"><?php the_sub_field('emi_title');?></h2>
			<?php endif; ?>
			
			<?php if(get_sub_field('emi_content')) : ?>
			<div class="edmi-text">
				<p><?php the_sub_field('emi_content');?></p>
			</div>
			<?php endif; ?>

		</div>
	</div>
	<?php $i++;
	endwhile;
	endif; ?>
	
	<?php if(get_field('em_cta_url')) : ?>
	<p class="edm-cta-wrap"><a class="edm-cta btn" href="<?php the_field('em_cta_url');?>"><?php the_field('em_cta_text');?></a></p>
	<?php endif; ?>

</div>
<!--expertise module end-->