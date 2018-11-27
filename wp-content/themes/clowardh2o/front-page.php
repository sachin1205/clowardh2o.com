<?php

	/*
		Template Name: Front Page
	*/
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/site-intro' ) ); ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/add-banner-module' ) ); ?>

</div>
<!-- Site header wrap end-->

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<!--Site Content-->
	<section class="site-content" role="main">


		<?php Starkers_Utilities::get_template_parts( array( 'parts/product-module' ) ); ?>
		<?php Starkers_Utilities::get_template_parts( array( 'parts/all-things-module' ) ); ?>
		<?php Starkers_Utilities::get_template_parts( array( 'parts/services-module' ) ); ?>
		<?php Starkers_Utilities::get_template_parts( array( 'parts/favorites-module' ) ); ?>
		<?php //Starkers_Utilities::get_template_parts( array( 'parts/about-company-module' ) ); ?>
		<?php Starkers_Utilities::get_template_parts( array( 'parts/awards-module' ) ); ?>
		<?php Starkers_Utilities::get_template_parts( array( 'parts/home-gray-module' ) ); ?>


	</section>

<?php endwhile; ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>