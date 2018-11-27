<section class="resources-module">
        <div class="inner-wrap">
        <?php if(get_field('rm_heading','option')):?>
          <h2><?php the_field('rm_heading','option'); ?></h2>
        <?php endif; ?>
          <div class="rows-of-3">
          <?php if( have_rows('rm_item','option') ): while ( have_rows('rm_item','option') ) : the_row(); ?>
            <?php if(get_sub_field('rm_cta_link','option')):?>
                <div class="rm-item">
                <a href="<?php the_sub_field('rm_cta_link','option'); ?>">
                <?php if(get_sub_field('rm_title','option')):?><h3 class="rm-item-title"><span><?php the_sub_field('rm_title','option');?></span></h3><?php endif; ?>
            <?php $image = get_sub_field('rm_image','option');
            if( !empty($image) ): ?>
            <figure class="rm-item-img"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"></figure>
            <?php endif;?>
            <?php if(get_sub_field('rm_cta_text','option')):?>
            <span class="rm-item-cta btn"><?php the_sub_field('rm_cta_text','option');?></span>
          <?php endif; ?>
            </a>
            </div>
            <?php endif; ?>
            <?php endwhile;
                endif; ?>
        </div>
        
        </div>
      </section>