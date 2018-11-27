<!-- favorites module start -->
<div class="favorites-module os-animation obj-animation-duration" data-os-animation="fadeInUp" data-os-animation-delay="0.2s">
	<div class="inner-wrap">
		
		<?php if(get_field('fm_heading')) : ?>
		<h2 class="fm-heading"><?php the_field('fm_heading') ; ?></h2>
		<?php endif; ?>

		<?php if( have_rows('fm_item') ): while ( have_rows('fm_item') ) : the_row(); ?>
		<div class="fm-item">

			<?php if(get_sub_field('fmi_image')) : ?>

				<?php $fmi_image = get_sub_field('fmi_image'); ?>
				<img src="<?php echo $fmi_image['url']; ?>" alt="<?php echo $fmi_image['title']; ?>" title="<?php echo $fmi_image['title']; ?>" class="fmi-img">

			<?php endif; ?>

			<?php if(get_sub_field('fmi_title')) : ?>
			<span class="fmi-text"><?php the_sub_field('fmi_title') ; ?></span>
			<?php endif; ?>

		</div>
		<?php endwhile;
		endif; ?>

	</div>
</div>
<!-- favories module end -->