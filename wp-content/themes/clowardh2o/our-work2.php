<?php

	/*
		Template Name: Our Work 2
	*/
?>
 
    
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

</div>
<!-- Site header wrap end-->
       
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	<!--Site Content-->
	<section class="site-content" role="main">
	    <div class="inner-wrap">

	        <article class="site-content-primary-fullwidth"> 


	        	<?php if(get_field('ow_heading')) : ?>
		
					<h1 class="ow_heading"><?php the_field('ow_heading') ; ?></h1>

				<?php else: ?>
							
					<h1 class="pi_full_heading"><?php the_title(); ?></h1>

				<?php endif; ?>

	       		<?php the_content(); ?> 

				<div class="our-work flexslider">
					<ul class="slides">
						<li><img src="<?php bloginfo('template_url'); ?>/img/ow-slide1.jpg" alt="" title=""></li>
					</ul>
				</div>
				<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/flexible-content' ) ); ?>

	        </article>
	        
	
			

		</div>
	</section>

<?php endwhile; ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/slidebox' ) ); ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>