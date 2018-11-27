<!--Site intro container start-->
<section class="site-intro-container">
	<!-- site intro start -->
	<div class="site-intro">
		<div class="inner-wrap">

			<?php if(get_field('si_header')) : ?>
			<h1 class="si-header os-animation obj-animation-duration" data-os-animation="slideInLeft" data-os-animation-delay="0.3s"><?php the_field('si_header') ; ?></h1>
			<?php endif; ?>

			<?php if(get_field('si_text')) : ?>
			<p class="si-text os-animation obj-animation-duration" data-os-animation="slideInRight" data-os-animation-delay="0.3s"><?php the_field('si_text') ; ?></p>
			<?php endif; ?>

			<?php if(get_field('si_cta_url')) : ?>
			<a href="<?php the_field('si_cta_url') ; ?>" class="si-cta btn os-animation obj-animation-duration" data-os-animation="slideInUp" data-os-animation-delay="0.3s"><?php the_field('si_cta_text') ; ?></a>
			<?php endif; ?>
			
		</div>
	</div>
	<!-- site intro end -->
</section>
<!--Site intro container end-->