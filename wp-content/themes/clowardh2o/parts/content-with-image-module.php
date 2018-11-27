<div class="team-img-content-down">&nbsp;</div>
<!-- team img content start -->
<div class="team-img-content" 
<?php if(get_field('cwi_id')) :
	$currentID = get_field('cwi_id');
	echo ('id=#'.$currentID);
endif; ?>>
	
	<?php if(get_field('cwi_image')) : ?>
	<figure class="tic-fig">

		<?php $cwi_image = get_field('cwi_image'); ?>
		<img src="<?php echo $cwi_image['url']; ?>" alt="<?php echo $cwi_image['title']; ?>" title="<?php echo $cwi_image['title']; ?>">

	</figure>
	<?php endif; ?>

	<div class="tic-content">

		<?php if(get_field('cwi_heading')) : ?>
		<h2 class="ticc-heading"><?php the_field('cwi_heading');?></h2>
		<?php endif; ?>

		<?php if(get_field('cwi_content')) : ?>
		<div class="ticc-content"><?php the_field('cwi_content');?></div>
		<?php endif; ?>
		
	</div>
</div>
<!-- team img content end -->