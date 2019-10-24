<?php get_header(); ?>	
<div class="container">
	
	<div id="posts_cont">
	
		<?php
		global $wp_query;
		$args = array_merge( $wp_query->query, array( 'posts_per_page' => -1 ) );
		query_posts( $args );        
		$x = 0;
		while (have_posts()) : the_post(); ?>        
		
			<div class="home_box <?php if($x == 2) { echo 'home_box_last'; } ?>">
				<?php if(get_post_meta( get_the_ID(), 'page_featured_type', true ) == 'youtube') { ?>
					<iframe width="560" height="315" src="http://www.youtube.com/embed/<?php echo get_post_meta( get_the_ID(), 'page_video_id', true ); ?>" frameborder="0" allowfullscreen></iframe>
				<?php } elseif(get_post_meta( get_the_ID(), 'page_featured_type', true ) == 'vimeo') { ?>
					<iframe src="http://player.vimeo.com/video/<?php echo get_post_meta( get_the_ID(), 'page_video_id', true ); ?>?title=0&amp;byline=0&amp;portrait=0&amp;color=085e17" width="500" height="338" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
				<?php } else { ?>						
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('home-box-image'); ?></a>
				<?php } ?>
				<div class="home_box_cont">
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<p><?php echo ds_get_excerpt('110'); ?></p>
				</div><!--//home_box_cont-->
			</div><!--//home_box-->	
			
			<?php if($x == 2) { $x = -1; echo '<div class="clear"></div>'; } ?>
			
		<?php $x++; ?>
		<?php endwhile; ?>		
		
		<div class="clear"></div>
		
	</div><!--//posts_cont-->
	
	<div class="clear"></div>
	
</div><!--//container-->
<?php get_footer(); ?> 