<?php
/**
 * The Template for displaying all single posts
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
<?php //Starkers_Utilities::get_template_parts( array( 'parts/page-intro' ) ); ?>
	</div>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<!--Site Content-->
	<section class="site-content" role="main">
	    <div class="inner-wrap">
	    	    <article class="site-content-primary-fullwidth">
	        	<?php if(get_field('ow_heading')) : ?>
		
					<h1 class="ow_heading"><?php the_field('ow_heading') ; ?></h1>

				<?php else: ?>
							
					<h1 class="ow_heading"><?php the_title(); ?></h1>

				<?php endif; ?>

	       		
				<div class="our-work flexslider">
					<?php 

$images = get_field('pg_images');
$size = 'full'; // (thumbnail, medium, large, full or custom size)

if( $images ): ?>
    <ul class="slides">
        <?php foreach( $images as $image ): ?>
            <li>
            	<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
				</div>
				<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/flexible-content' ) ); ?>

			<?php the_content(); ?> 
				
				
	        </article>
	       	<?php //Starkers_Utilities::get_template_parts( array( 'parts/shared/sidebar-blog','parts/shared/flexible-content'  ) ); ?>
	    </div>
	</section>
<?php endwhile; ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>