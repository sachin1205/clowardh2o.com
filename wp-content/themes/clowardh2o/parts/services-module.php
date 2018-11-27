<!-- services module start -->
<div class="services-module">
	<div class="inner-wrap">

		<?php if( have_rows('sm_item') ): 
		$i = 1; 
		while ( have_rows('sm_item') ) : 		
		the_row(); ?>
		<div class="sm-item os-animation obj-animation-duration" data-os-animation="
		<?php if($i % 2 == 0) :
			echo 'slideInRight';
		else :
			echo 'slideInLeft';
		endif;
		?>" data-os-animation-delay="0.2s">

			<?php if(get_sub_field('sm_image')) : ?>

				<?php if(get_sub_field('sm_link')) : ?>
					<a href="<?php the_sub_field('sm_link') ; ?>">
				<?php endif; ?>

					<?php $sm_image = get_sub_field('sm_image'); ?>
					<img class="smi-img" src="<?php echo $sm_image['url']; ?>" alt="<?php echo $sm_image['title']; ?>" title="<?php echo $sm_image['title']; ?>">

				<?php if(get_sub_field('sm_link')) : ?>
					</a>
				<?php endif; ?>

			<?php endif; ?>

			
			<div class="smi-content-wrap">
				<?php if(get_sub_field('sm_heading')) : ?>
				<h2 class="smi-heading">

					<?php if(get_sub_field('sm_link')) : ?>
						<a href="<?php the_sub_field('sm_link') ; ?>">
					<?php endif; ?>

						<?php the_sub_field('sm_heading') ; ?>
						
					<?php if(get_sub_field('sm_link')) : ?>
						</a>
					<?php endif; ?>

				</h2>
				<?php endif; ?>


				<?php if(get_sub_field('sm_content')) : ?>
				<div class="smi-content"><?php the_sub_field('sm_content') ; ?></div>
				<?php endif; ?>
			</div>
			
		</div>
		<?php $i++;
		endwhile;
		endif; ?>

	</div>
</div>
<!-- services module end -->