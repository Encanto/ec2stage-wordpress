<div id="post-<?php the_ID(); ?>" <?php post_class('post clearfix'); ?>>

	<?php if ( has_post_thumbnail() ) { ?>

	<div class="post-media">
		<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__('Permalink to %s', 'rocknrolla'), the_title_attribute('echo=0') ); ?>" rel="bookmark">
			<?php the_post_thumbnail('blog-standard'); ?>
		</a>
	</div>
    
	<?php } if ( has_post_thumbnail() == '' ) { ?>
    
	<div class="post-media">
		<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__('Permalink to %s', 'rocknrolla'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><div class="no-post-image"></div></a>
	</div>
	<?php } ?>

	<div class="post-title">
		<?php the_time('m'); ?>/<?php the_time('d'); ?>/<?php the_time('Y'); ?> <?php the_title(); ?>
	</div><!-- End of Title -->

	

	<div class="post-content">
  	<?php if ( get_option( 'rss_use_excerpt' , $default ) ) : ?>
			<?php the_excerpt(); ?>
    <?php else : ?>
    	<?php the_content(); ?>
    <?php endif ?>
    <?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>   
	</div><!-- End of Content -->

    <div class="post-tags styled-list">
        <ul>
            <?php the_tags( '<ul> <li><i class="fa fa-tags"></i> ', ',&nbsp; </li><li><i class="fa fa-tags"></i> ', ' </li> </ul>'); ?>
        </ul>
    </div><!-- End of Tags -->

</div><!-- End of Post -->


