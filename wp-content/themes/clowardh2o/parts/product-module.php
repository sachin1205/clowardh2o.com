<!--product module start-->
<div class="product-module">
	<div class="inner-wrap">

		<?php if(get_field('pm_heading')) : ?>
		<h2 class="pm-heading">

			<?php if(get_field('pm_heading_link')) : ?>
				<a href="<?php the_field('pm_heading_link') ; ?>">
			<?php endif; ?>

				<?php the_field('pm_heading') ; ?>

			<?php if(get_field('pm_heading_link')) : ?>
				</a>
			<?php endif; ?>

		</h2>
		<?php endif; ?>

		<?php if( have_rows('pm_item') ): 
		$i = 1; 
		while ( have_rows('pm_item') ) : 		
		the_row(); ?>
		<div class="pm-item os-animation obj-animation-duration" data-os-animation="
		<?php if($i % 2 == 0) :
			echo 'fadeInUp';
		else :
			echo 'fadeInUp';
		endif;
		?>" data-os-animation-delay="0.2s">
			<a href="<?php the_sub_field('pmi_link') ; ?>">
				<?php if(get_sub_field('pmi_image')) : ?>

					<?php $pmi_image = get_sub_field('pmi_image'); ?>
					<img src="<?php echo $pmi_image['url']; ?>" alt="<?php echo $pmi_image['title']; ?>" title="<?php echo $pmi_image['title']; ?>" class="pmi-img">

				 <?php endif; ?>

				<?php if(get_sub_field('pmi_title')) : ?>
				<span class="pmi-text"><?php the_sub_field('pmi_title') ; ?></span>
				<?php endif; ?>
			</a>
		</div>
		<?php $i++;
		endwhile;
		endif; ?>

	</div>
</div>
<!--product module end-->