<!-- about company module start -->
<div class="about-company-module">
	<div class="inner-wrap">
		<div class="flexslider">
			<ul class="slides">

				<?php if( have_rows('acm_item') ): while ( have_rows('acm_item') ) : the_row(); ?>
				<li>

					<?php if(get_sub_field('acmi_image')) : ?>
					<figure class="acm-fig os-animation obj-animation-duration" data-os-animation="fadeInUp" data-os-animation-delay="0.3s">

						<?php $acmi_image = get_sub_field('acmi_image'); ?>
						<img src="<?php echo $acmi_image['url']; ?>" alt="<?php echo $acmi_image['title']; ?>" title="<?php echo $acmi_image['title']; ?>">

					</figure>
					<?php endif; ?>

					<div class="acm-content os-animation obj-animation-duration" data-os-animation="fadeInUp" data-os-animation-delay="0.3s">

						<?php if(get_sub_field('acmi_content_image')) : ?>
						<figure class="acmc-fig">

							<?php $acmi_content_image = get_sub_field('acmi_content_image'); ?>
							<img src="<?php echo $acmi_content_image['url']; ?>" alt="<?php echo $acmi_content_image['title']; ?>" title="<?php echo $acmi_content_image['title']; ?>">

						</figure>
						<?php endif; ?>
						
						<?php if(get_sub_field('acmi_content')) : ?>
						<div class="acmc-content"><?php the_sub_field('acmi_content') ; ?></div>
						<?php endif; ?>
						
					</div>
				</li>
				<?php endwhile;
				endif; ?>

			</ul>
		</div>
	</div>	
</div>
<!-- about company module end -->