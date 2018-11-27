<?php

	/*
		Template Name: Contact
	*/
?>
 
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/page-intro' ) ); ?>

</div>
<!-- Site header wrap end-->

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	<!--Site Content-->
	<section class="site-content one-column" role="main">
	    <div class="inner-wrap">

	        <article class="site-content-primary">
	        	
				<?php the_content(); ?> 
				
				<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/flexible-content' ) ); ?>


				<?php if (is_page( '9' )) : ?>
				<!--Sitemap Page-->
				<?php wp_nav_menu(array(
				'menu'            => 'Sitemap',
				'container'       => 'ul',
				'menu_class'      => 'sitemap-menu',
				)); ?>
				<?php endif; ?> 

	        </article>
	        
			<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/sidebar' ) ); ?>
			

		</div>
	</section>

<?php endwhile; ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/slidebox' ) ); ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>