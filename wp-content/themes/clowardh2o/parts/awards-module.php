<!-- awards module start -->
<div class="awards-module">
	<div class="inner-wrap">

		<?php if(get_field('am_heading')) : ?>
		<h2 class="am-heading"><?php the_field('am_heading') ; ?></h2>
		<?php endif; ?>

		<?php if( have_rows('am_item') ): 
		$i = 1; 
		while ( have_rows('am_item') ) : 		
		the_row(); ?>
		<div class="am-item os-animation obj-animation-duration" data-os-animation="
		<?php if($i % 2 == 0) :
			echo 'fadeInUp';
		else :
			echo 'fadeInUp';
		endif;
		?>" data-os-animation-delay="0.2s">
			
			<?php if(get_sub_field('ami_link')) : ?>
			<a href="<?php the_sub_field('ami_link') ; ?>" target="_blank">
			<?php endif; ?>

				<?php if(get_sub_field('ami_image')) : ?>

					<?php $ami_image = get_sub_field('ami_image'); ?>
					<img class="ami-img" src="<?php echo $ami_image['url']; ?>" alt="<?php echo $ami_image['title']; ?>" title="<?php echo $ami_image['title']; ?>">

				<?php endif; ?>
				
				<?php if(get_sub_field('ami_title')) : ?>
				<span class="ami-text"><span><?php the_sub_field('ami_title') ; ?></span><?php the_sub_field('ami_sub_title') ; ?></span>
				<?php endif; ?>

			<?php if(get_sub_field('ami_image')) : ?>
			</a>
			<?php endif; ?>

		</div>
		<?php $i++;
		endwhile;
		endif; ?>
		
		<?php if(get_field('am_cta_url')) : ?>
		<p class="ami-cta-wrap os-animation obj-animation-duration" data-os-animation="fadeInUp" data-os-animation-delay="0.2s"><a class="ami-cta btn" href="<?php the_field('am_cta_url') ; ?>"><?php the_field('am_cta_text') ; ?></a></p>
		<?php endif; ?>
		
	</div>
</div>
<!-- awards module end -->