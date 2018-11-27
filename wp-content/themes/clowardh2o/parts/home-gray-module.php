<div class="home-gray-module">
	<div class="inner-wrap">
		
		<?php if(get_field('hgm_heading')) : ?>
		<h2 class="hgm-heading os-animation obj-animation-duration" data-os-animation="fadeInUp" data-os-animation-delay="0.2s"><?php the_field('hgm_heading') ; ?></h2>		
		<?php endif; ?>
		
		<?php if(get_field('hgm_cta_url')) : ?>
		<p class="hgm-cta-wrap os-animation obj-animation-duration" data-os-animation="fadeInUp" data-os-animation-delay="0.2s"><a class="hgm-cta btn" href="<?php the_field('hgm_cta_url') ; ?>"><?php the_field('hgm_cta_text') ; ?></a></p>
		<?php endif; ?>

	</div>
</div>