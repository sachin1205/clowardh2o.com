<!-- add banner module start -->
<?php if(!get_field('ad_turn_off')) : ?>
<div class="add-banner-module">
	<a href="<?php the_field('ad_banner_link') ?>" target="_blank"><img src="<?php the_field('ad_banner_image') ?>"></a>
</div>
<?php endif; ?>
<!-- add banner module end -->