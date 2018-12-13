
<?php if( have_rows('flexible_content') ): echo '<section class="additional-content">';
    while ( have_rows('flexible_content') ) : the_row(); ?>

	<?php if( get_row_layout() == 'tab_content' ): ?>
		<?php if( get_sub_field('fullwidth') == false): ?>
		 	
		 	
		 		<?php if( get_sub_field('section_header')): ?>
					<h2><?php the_sub_field('section_header'); ?></h2>
				<?php endif; ?>
				<?php if( get_sub_field('section_subtext')): ?>
					<p><?php the_sub_field('section_subtext'); ?></p>
				<?php endif; ?>

				<ul class="accordion-tabs">
				<?php if( have_rows('tab_content_row') ): 

				while ( have_rows('tab_content_row') ) : the_row(); ?>
				<li class="tab-header-and-content">
					<a href="javascript:void(0)" class="tab-link"><?php the_sub_field('tab_header'); ?></a>
					
					<div class="tab-content"><?php the_sub_field('tab_body'); ?>    </div>
								
					</li>
				
				<?php endwhile; ?>


				<?php endif; ?>
				</ul>
			<?php if( get_sub_field('divider')): ?>
					<hr>
			<?php endif; ?>
		<?php endif; ?>


	<?php elseif( get_row_layout() == 'full_width_cta' ): ?>
		
			<div class="row cta-banner bottom-baseline">
	            <span class="col-6of9">
	            <h2 class="cta-banner-header"><?php the_sub_field('section_header'); ?></h2>
	            <p class="cta-banner-body"><?php the_sub_field('section_body'); ?></p>
	            
	        </span>
	        <a href="<?php the_sub_field('url'); ?>" class="red-btn-l col-3of9 col-last cta-download" target="_blank"><?php the_sub_field('cta_button'); ?></a>
	        </div>
	        <?php if( get_sub_field('divider')): ?>
					<hr>
			
		<?php endif; ?>


 	<?php elseif( get_row_layout() == 'multiple_columns' ): ?>
	 	
	 		<?php if( get_sub_field('section_header')): ?>
				<h2><?php the_sub_field('section_header'); ?></h2>
			<?php endif; ?>
			<?php if( get_sub_field('section_subtext')): ?>
				<p><?php the_sub_field('section_subtext'); ?></p>
			<?php endif; ?>
				<section class="<?php if (get_sub_field('number_columns') == '2') {
						echo 'rows-of-2';
					} else if (get_sub_field('number_columns') == '3') {
					        echo 'rows-of-3';
					} else if (get_sub_field('number_columns') == '4') {
					        echo 'rows-of-4';
					}
					?>">

	         	<?php if( have_rows('content') ): while ( have_rows('content') ) : the_row(); ?>
					<div><?php the_sub_field('content_column'); ?></div>
				<?php endwhile; ?>
				<?php endif; ?>
				</section>
			<?php if( get_sub_field('divider')): ?>
				<hr>
			
		<?php endif; ?>

 			
 			<?php elseif( get_row_layout() == 'img_gallery_section' ): ?>
		<?php if( get_sub_field('fullwidth') == false): ?>
			
			<?php if( get_sub_field('section_header')): ?>
				<h2><?php the_sub_field('section_header'); ?></h2>
			<?php endif; ?>
			<section class="<?php if (get_sub_field('number_columns') == '2') {
						echo 'rows-of-2';
					} else if (get_sub_field('number_columns') == '3') {
					        echo 'rows-of-3';
					} else if (get_sub_field('number_columns') == '4') {
					        echo 'rows-of-4';
					}
					?>">
			
			<?php 

$images = get_sub_field('img_gallery');

if( $images ): ?>


<?php foreach( $images as $image ): ?>
                
                    <a href="<?php echo $image['sizes']['large']; ?>" class="lightbox loop-item">
	                    <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <h4 class="li-title"><?php echo $image['caption']; ?></h4>
                    </a>
                
            
	
	
            <?php endforeach; ?>
            
			
  
<?php endif; ?>
</section>




	        <?php if( get_sub_field('divider')): ?>
					<hr>
			<?php endif; ?>
		<?php endif; ?>
		
		

			<?php elseif( get_row_layout() == 'click_expand' ): ?>
		<?php if( get_sub_field('fullwidth') == false): ?>
			<div class="click-expand <?php if( get_sub_field('spacing')): ?>spacing-bottom<?php endif; ?>">
          <h3 class="ce-header"><?php the_sub_field('section_header'); ?></h3>
          <div class="ce-body"><?php the_sub_field('section_body'); ?></div>
      </div>
	        
		<?php endif; ?>


 	<?php elseif( get_row_layout() == 'multiple_columns' ): ?>
	 	<?php if( get_sub_field('fullwidth') == false): ?>
	 		<?php if( get_sub_field('section_header')): ?>
				<h2><?php the_sub_field('section_header'); ?></h2>
			<?php endif; ?>
			<?php if( get_sub_field('section_subtext')): ?>
				<p><?php the_sub_field('section_subtext'); ?></p>
			<?php endif; ?>
				<section class="<?php if (get_sub_field('number_columns') == '2') {
						echo 'rows-of-2';
					} else if (get_sub_field('number_columns') == '3') {
					        echo 'rows-of-3';
					} else if (get_sub_field('number_columns') == '4') {
					        echo 'rows-of-4';
					}
					?>">

	         	<?php if( have_rows('content') ): while ( have_rows('content') ) : the_row(); ?>
					<div><?php the_sub_field('content_column'); ?></div>
				<?php endwhile; ?>
				<?php endif; ?>
				</section>
			<?php if( get_sub_field('divider')): ?>
				<hr>
			<?php endif; ?>
		<?php endif; ?>
		
 			
	<?php elseif( get_row_layout() == 'table' ): ?>
	   
	        <?php if( get_sub_field('section_header')): ?>
	            <div class="headexpand-wrap">  
	            <h3 class="headexpand"><?php the_sub_field('section_header'); ?></h3>
	        <?php endif; ?>

	        <?php if( get_sub_field('table_content')): ?>
	            <div class="table-wrap">
	                <table class="tablesaw" data-mode="stack">
	                <?php the_sub_field('table_content'); ?>
	                </table>
	            </div>
	        <?php endif; ?>
	        <?php if( get_sub_field('section_header')): ?>
	           </div> <!--headexpand-wrap END -->
	        <?php endif; ?>
	        <?php if( get_sub_field('divider')): ?>
				<hr>
			
	    <?php endif; ?>


	<?php elseif( get_row_layout() == 'picture_grid' ): ?>
		
				<?php if( get_sub_field('section_header')): ?>
					<h2><?php the_sub_field('section_header'); ?></h2>
				<?php endif; ?>
				<?php if( get_sub_field('section_subtext')): ?>
					<p><?php the_sub_field('section_subtext'); ?></p>
				<?php endif; ?>
		<section class="<?php if (get_sub_field('number_columns') == '2') {
							echo 'rows-of-2';
						} else if (get_sub_field('number_columns') == '3') {
						        echo 'rows-of-3';
						} else if (get_sub_field('number_columns') == '4') {
						        echo 'rows-of-4';
						}
						?>">	
		<?php if( get_sub_field('lightbox')): ?>	
			<?php if( have_rows('picture_repeat') ):		
			while ( have_rows('picture_repeat') ) : the_row(); ?>
						
				<?php 	
					$image = wp_get_attachment_image_src(get_sub_field('picture'), 'thumbnail');
					$imagelarge = wp_get_attachment_image_src(get_sub_field('picture'), 'full');
				 ?>
			 
			
				<a href="<?php echo $imagelarge[0]; ?>" class="lightbox bottom-baseline">
						 <img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('image_test')) ?>" />
					<?php if( get_sub_field('sub_title')): ?>
						<figcaption><?php the_sub_field('sub_title'); ?></figcaption>
					<?php endif; ?>
				</a>
				<?php if( get_sub_field('divider')): ?>
		 				<hr>
					<?php endif; ?>
			
			
				
			<?php endwhile; ?>
			<?php endif; ?>
			
		<?php else : ?>
			<?php if( have_rows('picture_repeat') ):		
			while ( have_rows('picture_repeat') ) : the_row(); ?>
						
				<?php 	
					$image = wp_get_attachment_image_src(get_sub_field('picture'), 'thumbnail');
					$imagelarge = wp_get_attachment_image_src(get_sub_field('picture'), 'full');
				 ?>
			 
			
				<figure class="bottom-baseline">
					 <img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('image_test')) ?>" />
				<?php if( get_sub_field('sub_title')): ?>
					<figcaption><?php the_sub_field('sub_title'); ?></figcaption>
				<?php endif; ?>
			</figure>
				
			<?php if( get_sub_field('divider')): ?>
		 				<hr>
					<?php endif; ?>
			
				
			<?php endwhile; ?>
			<?php endif; ?>
			
		<?php endif; ?>
		</section>
		


	<?php elseif( get_row_layout() == 'product_grid' ): ?>
		
			<?php if( get_sub_field('section_header')): ?>
				<h2 class="carousel-header"><span><?php the_sub_field('section_header'); ?></span></h2>
			<?php endif; ?>
			<?php if( get_sub_field('section_subtext')): ?>
				<p><?php the_sub_field('section_subtext'); ?></p>
			<?php endif; ?>

			<div class="<?php if( get_sub_field('carousel')): ?>flexslider<?php endif; ?> product-carousel">
			<ul class="slides">
				<?php if( have_rows('product_row') ): while ( have_rows('product_row') ) : the_row(); ?>
				<li>
					<?php if( have_rows('product_item') ):		
					while ( have_rows('product_item') ) : the_row(); ?>
					<?php 	
					$image = wp_get_attachment_image_src(get_sub_field('product_picture'), 'thumbnail');
					$imagelarge = wp_get_attachment_image_src(get_sub_field('product_picture'), 'full');
					?>
					<a class="product-item" href="<?php the_sub_field('product_url'); ?>"> 
							<h3 class="product-header"><?php the_sub_field('product_header'); ?></h3> 
							<span class="product-img">
							<img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('image_test')) ?>" />
							</span>
							<span class="product-cta">Learn More</span>
					</a>
					<?php endwhile; ?>
					<?php endif; ?>
				</li>
				<?php endwhile; ?>
				<?php endif; ?>
			</ul>
			</div>

			<?php if( get_sub_field('divider')): ?>
				<hr>
		
		<?php endif; ?>



	<?php elseif( get_row_layout() == 'text_media' ): ?>
		
			<?php if( get_sub_field('section_subtext')): ?>
				<p><?php the_sub_field('section_subtext'); ?></p>
			<?php endif; ?>
			
	     	<article class="clearfix">
	    		
	    		<div class="col-3of9">
	    			<?php the_sub_field('media'); ?>
	    		</div>
	    		<div class="col-6of9 col-last">
	    		<?php if( get_sub_field('section_header')): ?>
				<h2><?php the_sub_field('section_header'); ?></h2>
			<?php endif; ?>
	    			<?php the_sub_field('text'); ?>
	    		</div>
	    		
				</article>
				<?php if( get_sub_field('divider')): ?>
					<hr>
			
		<?php endif; ?>
	

	<?php elseif( get_row_layout() == 'destination_product_module' ): ?>

		<div class="product-module-dest-down">&nbsp;</div>
		<!--product module start-->
		<div class="product-module-dest clearfix" 
		<?php if(get_sub_field('dpm_id')) :
		$currentID = get_sub_field('dpm_id');
		echo ('id='.$currentID);
		endif; ?>>

		<?php if(get_sub_field('dpm_heading')) : ?>
			<h2 class="pm-heading"><?php the_sub_field('dpm_heading') ; ?></h2>
		<?php endif; ?>

		<?php if( have_rows('dpm_item') ): 
		$i = 1; 
		while ( have_rows('dpm_item') ) : 		
		the_row(); ?>
		<div class="pm-item os-animation obj-animation-duration" data-os-animation="
		<?php if($i % 2 == 0) :
			echo 'slideInRight';
		else :
			echo 'slideInLeft';
		endif;
		?>" data-os-animation-delay="0.3s">

			<?php if(get_sub_field('dpm_image')) : ?>

				<?php $dpm_image = get_sub_field('dpm_image'); ?>
				<img src="<?php echo $dpm_image['url']; ?>" alt="<?php echo $dpm_image['title']; ?>" title="<?php echo $dpm_image['title']; ?>" class="pmi-img">
				
				<?php if(get_sub_field('dpmi_title')) : ?>
				<span class="pmi-title"><?php the_sub_field('dpmi_title');?></span>
				<?php endif; ?>
				
			<?php endif; ?>

			<div class="pmid-text">

				<?php if(get_sub_field('dpmi_title')) : ?>
					<h2><?php the_sub_field('dpmi_title');?></h2>
				<?php endif; ?>

				<?php if(get_sub_field('dpmi_content')) : ?>
					<p><?php the_sub_field('dpmi_content');?></p>
				<?php endif; ?>

			</div>

		</div>
		<?php $i++;
		endwhile;
		endif; ?>

		</div>
		<!--product module end-->


	<?php elseif( get_row_layout() == 'expertise_module' ): ?>

		<div class="expertise-dest-module-down">&nbsp;</div>
		<!--expertise dest module start-->
		<div class="expertise-dest-module clearfix" 
		<?php if(get_sub_field('em_id')) :
		$currentID = get_sub_field('em_id');
		echo ('id='.$currentID);
		endif; ?>>

		<?php if(get_sub_field('em_heading')) : ?>
		<h2 class="edm-heading"><?php the_sub_field('em_heading') ; ?></h2>
		<?php endif; ?>

		<?php if( have_rows('em_item') ): 
		$i = 1; 
		while ( have_rows('em_item') ) :
		the_row(); ?>
		<div class="edm-item os-animation obj-animation-duration" data-os-animation="
		<?php if($i % 2 == 0) :
			echo 'slideInRight';
		else :
			echo 'slideInLeft';
		endif;
		?>" data-os-animation-delay="0.3s">
			<a href="#" id="<?php echo 'edmi'.$i; ?>" class="edmi-link">&nbsp;</a>
			<?php if(get_sub_field('emi_image')) : ?>

				<?php $emi_image = get_sub_field('emi_image'); ?>
				<img src="<?php echo $emi_image['url']; ?>" alt="<?php echo $emi_image['title']; ?>" title="<?php echo $emi_image['title']; ?>" class="edmi-img">
			<?php endif; ?>

			<div class="edm-content">

				<?php if(get_sub_field('emi_title')) : ?>
					<h2 class="edmc-heading"><?php the_sub_field('emi_title');?></h2>
				<?php endif; ?>
				
				<?php if(get_sub_field('emi_content')) : ?>
				<div class="edmi-text">
					<p><?php the_sub_field('emi_content');?></p>
				</div>
				<?php endif; ?>

			</div>
		</div>
		<?php $i++;
		endwhile;
		endif; ?>

		<?php if(get_sub_field('em_cta_url')) : ?>
		<p class="edm-cta-wrap"><a class="edm-cta btn" href="<?php the_sub_field('em_cta_url');?>"><?php the_sub_field('em_cta_text');?></a></p>
		<?php endif; ?>

		</div>
		<!--expertise module end-->


	<?php elseif( get_row_layout() == 'process_module' ): ?>

		<div class="process-module-with-num-down">&nbsp;</div>
		<!-- process module start -->
		<div class="process-module-with-num" 
		<?php if(get_sub_field('prm_id')) :
		$currentID = get_sub_field('prm_id');
		echo ('id='.$currentID);
		endif; ?>>

		<?php if(get_sub_field('prm_heading')) : ?>
		<h2 class="prm-heading"><?php the_sub_field('prm_heading') ; ?></h2>
		<?php endif; ?>

		<?php if( have_rows('prm_item') ): 
		$i = 1; 
		while ( have_rows('prm_item') ) :
		the_row(); ?>
		<div class="prm-item os-animation obj-animation-duration" data-os-animation="
		<?php if($i % 2 == 0) :
			echo 'slideInRight';
		else :
			echo 'slideInLeft';
		endif;
		?>" data-os-animation-delay="0.3s">

			<?php if(get_sub_field('prmi_image')) : ?>

				<?php $prmi_image = get_sub_field('prmi_image'); ?>
				<img class="prmi-img" src="<?php echo $prmi_image['url']; ?>" alt="<?php echo $prmi_image['title']; ?>" title="<?php echo $prmi_image['title']; ?>">

			<?php endif; ?>

			<div class="pmi-content-wrap">

				<h2 class="prmi-heading"><?php echo $i; ?></h2>

				<?php if(get_sub_field('prmi_subheading')) : ?>
				<h3 class="prmi-subheading"><?php the_sub_field('prmi_subheading');?></h3>
				<?php endif; ?>

				<?php if(get_sub_field('prmi_content')) : ?>
				<div class="prmi-content">
					<?php the_sub_field('prmi_content');?>

				</div>
				<?php endif; ?>
				
			</div>

	</div>
	<?php $i++;
	endwhile;
	endif; ?>
	
	<?php if(get_sub_field('prm_cta_url')) : ?>
	<p class="prm-cta-wrap"><a class="prm-cta btn" href="<?php the_sub_field('prm_cta_url');?>"><?php the_sub_field('prm_cta_text');?></a></p>
	<?php endif; ?>

</div>
<!-- process module end -->


	<?php elseif( get_row_layout() == 'team_content' ): ?>

		<div class="team-content-down">&nbsp;</div>
		<!-- team content start -->
		<div class="team-content" 
		<?php if(get_sub_field('tm_id')) :
		$currentID = get_sub_field('tm_id');
		echo ('id='.$currentID);
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
				
				<?php if(get_sub_field('tmi_email')) : ?>
					<a href="mailto:<?php the_sub_field('tmi_email');?>" class="tcic-mail"><?php the_sub_field('tmi_email');?></a>
				<?php endif; ?>

			</div>
		</div>
		<?php endwhile;
		endif; ?>

		</div>
		<!-- team content end -->


	<?php elseif( get_row_layout() == 'content_with_image' ): ?>

		<div class="team-img-content-down">&nbsp;</div>
		<!-- team img content start -->
		<div class="team-img-content" 
		<?php if(get_sub_field('cwi_id')) :
		$currentID = get_sub_field('cwi_id');
		echo ('id='.$currentID);
		endif; ?>>

		<?php if(get_sub_field('cwi_image')) : ?>
		<figure class="tic-fig">

			<?php $cwi_image = get_sub_field('cwi_image'); ?>
			<img src="<?php echo $cwi_image['url']; ?>" alt="<?php echo $cwi_image['title']; ?>" title="<?php echo $cwi_image['title']; ?>">

		</figure>
		<?php endif; ?>

		<div class="tic-content">

			<?php if(get_sub_field('cwi_heading')) : ?>
			<h2 class="ticc-heading"><?php the_sub_field('cwi_heading');?></h2>
			<?php endif; ?>

			<?php if(get_sub_field('cwi_content')) : ?>
			<div class="ticc-content"><?php the_sub_field('cwi_content');?></div>
			<?php endif; ?>
			
		</div>
		</div>
		<!-- team img content end -->



	<?php elseif( get_row_layout() == 'similar_project' ): ?>

		<!-- favorites module start -->
		<div class="favorites-module os-animation obj-animation-duration" data-os-animation="fadeInUp" data-os-animation-delay="0.3s">
			<div class="inner-wrap">
				
				<?php if(get_sub_field('fm_heading')) : ?>
				<h2 class="fm-heading"><?php the_sub_field('fm_heading') ; ?></h2>
				<?php endif; ?>

				<?php if( have_rows('fm_item') ): while ( have_rows('fm_item') ) : the_row(); ?>
				<div class="fm-item">

					<?php if(get_sub_field('fmi_image')) : ?>

						<?php $fmi_image = get_sub_field('fmi_image'); ?>
						<img src="<?php echo $fmi_image['url']; ?>" alt="<?php echo $fmi_image['title']; ?>" title="<?php echo $fmi_image['title']; ?>" class="fmi-img">

					<?php endif; ?>

					<?php if(get_sub_field('fmi_title')) : ?>
					<span class="fmi-text"><?php the_sub_field('fmi_title') ; ?></span>
					<?php endif; ?>

				</div>
				<?php endwhile;
				endif; ?>

			</div>
		</div>
		<!-- favories module end -->




<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>




