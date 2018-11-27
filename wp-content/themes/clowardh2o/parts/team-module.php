<div class="team-content-down">&nbsp;</div>
<!-- team content start -->
<div class="team-content" 
<?php if(get_field('tm_id')) :
	$currentID = get_field('tm_id');
	echo ('id=#'.$currentID);
endif; ?>>

	<?php if( have_rows('tm_item') ): while ( have_rows('tm_item') ) : the_row(); ?>
	<div class="tc-item">

		<?php if(get_sub_field('tmi_image')) : ?>

			<?php $tmi_image = get_sub_field('tmi_image'); ?>
			<img class="tci-img" src="<?php echo $tmi_image['url']; ?>" alt="<?php echo $tmi_image['title']; ?>" title="<?php echo $tmi_image['title']; ?>">

		<?php endif; ?>
		<div class="tci-content">

			<?php if(get_sub_field('tmi_heading')) : ?>
				<h2 class="tcic-heading"><?php the_sub_field('tmi_heading');?></h2>
			<?php endif; ?>

			<?php if(get_sub_field('tmi_subheading')) : ?>
				<p class="tcic-subheading"><?php the_sub_field('tmi_subheading');?></p>
			<?php endif; ?>
		</div>
	</div>
	<?php endwhile;
	endif; ?>

</div>
<!-- team content end -->