<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title> 
	<?php wp_head(); ?>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<?php $shortname = "studiomag"; ?>
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,200' rel='stylesheet' type='text/css' />
	<link href='https://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />		
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" title="no title" charset="utf-8"/>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/mobile.css" type="text/css" media="screen" title="no title" charset="utf-8"/>
	<!--[if IE]>
		<script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.infinitescroll.js" type="text/javascript" charset="utf-8"></script>    
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/scripts.js"></script>
	
	<style type="text/css">
	body {
	<?php if(get_option($shortname.'_background_image_url','') != "") { ?>
		background: url('<?php echo get_option($shortname.'_background_image_url',''); ?>') no-repeat center center fixed; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;
	<?php } ?>		
	<?php if(get_option($shortname.'_custom_background_color','') != "") { ?>
		background-color: <?php echo get_option($shortname.'_custom_background_color',''); ?>;
	<?php } ?>	
	}
	</style>			
</head>
<body>
<header id="header">
	<div class="container">
		<div class="logo_cont">
			<?php if(get_option($shortname.'_custom_logo_url','') != "") { ?>
				<a href="<?php bloginfo('url'); ?>"><img src="<?php echo get_option($shortname.'_custom_logo_url',''); ?>" alt="logo" class="logo" /></a>
			<?php } else { ?>	
				<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" alt="logo" class="logo" /></a>
			<?php } ?>				
		</div><!--//logo_cont-->
	</div><!--//container-->
	<div class="container" id="menu_container_cont">
		<div class="menu_container">
			<?php wp_nav_menu('theme_location=header-menu&container=false&menu_id='); ?>
			
			<div class="header_social">
				<?php if(get_option($shortname.'_twitter_link','') != '') { ?>
					<a href="<?php echo get_option($shortname.'_twitter_link',''); ?>" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/twitter-icon.jpg" alt="twitter" /></a>
				<?php  } ?>
				<?php if(get_option($shortname.'_facebook_link','') != '') { ?>
					<a href="<?php echo get_option($shortname.'_facebook_link',''); ?>" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/facebook-icon.jpg" alt="facebook" /></a>
				<?php } ?>
				<?php if(get_option($shortname.'_google_plus_link','') != '') { ?>
					<a href="<?php echo get_option($shortname.'_google_plus_link',''); ?>" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/gplus-icon.jpg" alt="gplus" /></a>
				<?php } ?>
				<?php if(get_option($shortname.'_instagram_link','') != '') { ?>
					<a href="<?php echo get_option($shortname.'_instagram_link',''); ?>" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/instagram-icon.jpg" alt="instagram" /></a>
				<?php } ?>
				<?php if(get_option($shortname.'_pinterest_link','') != '') { ?>
					<a href="<?php echo get_option($shortname.'_pinterest_link',''); ?>" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/pinterest-icon.jpg" alt="pinterest" /></a>
				<?php } ?>
				<?php if(get_option($shortname.'_vimeo_link','') != '') { ?>
					<a href="<?php echo get_option($shortname.'_vimeo_link',''); ?>" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/vimeo-icon.jpg" alt="vimeo" /></a>
				<?php } ?>
				<?php if(get_option($shortname.'_tumblr_link','') != '') { ?>
					<a href="<?php echo get_option($shortname.'_tumblr_link',''); ?>" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/tumblr-icon.jpg" alt="tumblr" /></a>
				<?php } ?>
				<?php if(get_option($shortname.'_flickr_link','') != '') { ?>
					<a href="<?php echo get_option($shortname.'_flickr_link',''); ?>" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/flickr-icon.jpg" alt="flickr" /></a>
				<?php } ?>
				<?php if(get_option($shortname.'_youtube_link','') != '') { ?>
					<a href="<?php echo get_option($shortname.'_youtube_link',''); ?>" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/youtube-icon.jpg" alt="youtube" /></a>
				<?php } ?>
			</div><!--//header_social-->
			<div class="clear"></div>
		<div><!--//menu_container-->	
	</div><!--//container-->
</header><!--//header-->