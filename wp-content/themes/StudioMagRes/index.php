<?php get_header(); ?>	

<?php $shortname = "studiomag"; ?>

<script type="text/javascript">

$(document).ready(

function($){

  $('#posts_cont').infinitescroll({

 

    navSelector  : "div.load_more_text",            

		   // selector for the paged navigation (it will be hidden)

    nextSelector : "div.load_more_text a:first",    

		   // selector for the NEXT link (to page 2)

    itemSelector : "#posts_cont .home_box"

		   // selector for all items you'll retrieve

  },function(arrayOfNewElems){

  

      //$('.home_post_cont img').hover_caption();

      

      $('#posts_cont').append('<div class="clear"></div>');

 

     // optional callback when new content is successfully loaded in.

 

     // keyword `this` will refer to the new DOM content that was just added.

     // as of 1.5, `this` matches the element you called the plugin on (e.g. #content)

     //                   all the new elements that were found are passed in as an array

 

  });  

}  

);

</script>	

<div class="container">

	<?php if(get_option($shortname.'_disable_slideshow','') != "Yes") { ?>

	<div id="slideshow_cont">

		<img src="<?php bloginfo('stylesheet_directory'); ?>/images/slide-prev.jpg" alt="image" class="slide_prev" />

		<img src="<?php bloginfo('stylesheet_directory'); ?>/images/slide-next.jpg" alt="image" class="slide_next" />

		<div id="slideshow">

			<?php

			$slider_arr = array();

			$x = 0;

			$args = array(

				 'post_type' => 'post',

				 'meta_key' => 'ex_show_in_slideshow',

				 'meta_value' => 'Yes',

				 'posts_per_page' => 20

				 );

			query_posts($args);

							 //'category_name' => 'blog',				 

			while (have_posts()) : the_post(); ?>

		

				<div class="slide_box <?php if($x == 0) { echo 'slide_box_first'; } ?>">

					<?php if(get_post_meta( get_the_ID(), 'page_featured_type', true ) == 'youtube') { ?>

						<iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo get_post_meta( get_the_ID(), 'page_video_id', true ); ?>?wmode=transparent" frameborder="0" allowfullscreen></iframe>

					<?php } elseif(get_post_meta( get_the_ID(), 'page_featured_type', true ) == 'vimeo') { ?>

						<iframe src="https://player.vimeo.com/video/<?php echo get_post_meta( get_the_ID(), 'page_video_id', true ); ?>?title=0&amp;byline=0&amp;portrait=0&amp;color=085e17" width="500" height="338" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>

					<?php } else { ?>				

						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('slide-image'); ?></a>

					<?php } ?>

					<div class="slide_box_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>

				</div><!--//slide_box-->

			

			<?php array_push($slider_arr,get_the_ID()); ?>

			<?php $x++; ?>

			<?php endwhile; ?>

			<?php wp_reset_query(); ?>                                    			

		</div><!--//slideshow-->

	</div><!--//slideshow_cont-->

	

	<?php } ?>

	

	<div class="home_box home_box_text home_box_last">

		<div class="home_box_cont">

			<p><?php echo stripslashes(stripslashes(get_option($shortname.'_home_featured_text',''))); ?></p>

		</div><!--//home_box_cont-->

	</div><!--//home_box-->

	<div class="clear"></div>

	

	<div id="posts_cont">

	

		<?php

		$category_ID = get_category_id('blog');

		$x = 0;

		$args = array(

			 'post_type' => 'post',

			 'posts_per_page' => 9,

			 'post__not_in' => $slider_arr,

			 'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1)

			 );

	//		 'cat' => '-' . $category_ID,		

		query_posts($args);

		while (have_posts()) : the_post(); ?>                        						

		

			<div class="home_box <?php if($x == 2) { echo 'home_box_last'; } ?>">

				<?php if(get_post_meta( get_the_ID(), 'page_featured_type', true ) == 'youtube') { ?>

					<iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo get_post_meta( get_the_ID(), 'page_video_id', true ); ?>?wmode=transparent" frameborder="0" allowfullscreen></iframe>

				<?php } elseif(get_post_meta( get_the_ID(), 'page_featured_type', true ) == 'vimeo') { ?>

					<iframe src="https://player.vimeo.com/video/<?php echo get_post_meta( get_the_ID(), 'page_video_id', true ); ?>?title=0&amp;byline=0&amp;portrait=0&amp;color=085e17" width="500" height="338" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>

				<?php } else { ?>			

					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('home-box-image'); ?></a>

				<?php } ?>

				<div class="home_box_cont">

					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

					<p><?php echo ds_get_excerpt('120'); ?></p>

				</div><!--//home_box_cont-->

			</div><!--//home_box-->	

			

			<?php if($x == 2) { $x = -1; echo '<div class="clear"></div>'; } ?>

			

		<?php $x++; ?>

		<?php endwhile; ?>

		

		<div class="clear"></div>

		

	</div><!--//posts_cont-->

		

	<div class="load_more_cont">

		<div align="center"><div class="load_more_text">

		<?php

		ob_start();

		next_posts_link('<img src="' . get_bloginfo('stylesheet_directory') . '/images/loading-button.png" />');

		$buffer = ob_get_contents();

		ob_end_clean();

		if(!empty($buffer)) echo $buffer;

		?>

		</div></div>

	</div><!--//load_more_cont-->                			

	

	<?php wp_reset_query(); ?>                                    										

		

	

	

</div><!--//container-->

<?php get_footer(); ?> 