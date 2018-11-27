<!-- page intro start -->
<div class="page-intro" style="
<?php if(get_field('pi_image')) : ?>
	<?php $pi_image = get_field('pi_image'); ?>
	background-image:url(<?php echo $pi_image['url']; ?>);
<?php endif; ?>
">
	<div class="inner-wrap-wide">

		<?php if(get_field('pi_heading')) : ?>
		
			<h1 class="pi-header os-animation obj-animation-duration" data-os-animation="slideInLeft" data-os-animation-delay="0.3s"><?php the_field('pi_heading') ; ?></h1>

		<?php else: ?>
					
			<h1 class="pi-header os-animation obj-animation-duration" data-os-animation="slideInLeft" data-os-animation-delay="0.3s"><?php the_title(); ?></h1>

		<?php endif; ?>
		
		<div class="pi-text-wrap"><p class="pi-text os-animation obj-animation-duration" data-os-animation="slideInRight" data-os-animation-delay="0.3s">

			<?php if( have_rows('pi_links') ): while ( have_rows('pi_links') ) : the_row(); ?>
				
				<?php if(get_sub_field('pil_link')) : ?>
				<a href="<?php the_sub_field('pil_link') ; ?>"><?php the_sub_field('pil_text') ; ?></a>
				<?php endif; ?>

			<?php endwhile;
			endif; ?>

		</p>

		<?php if(get_field('pi_cta_url')) : ?>
		<a href="<?php the_field('pi_cta_url') ; ?>" class="pi-cta btn os-animation obj-animation-duration" data-os-animation="slideInUp" data-os-animation-delay="0.3s"><?php the_field('pi_cta_text') ; ?></a>
		<?php endif; ?>

		</div>	

	</div>
</div>
<!-- page intro end -->