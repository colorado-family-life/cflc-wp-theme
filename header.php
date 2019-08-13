<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes('xhtml'); ?>>

	<head>
	
		<meta name="google-site-verification" content="vgdQjUfGSI31R-PfCJltnqFlnyePxuu_Gv61fYqVROs" />
		
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
	
		<title>
		
			<?php
			/*
			 * Print the <title> tag based on what is being viewed.
			 */
			global $page, $paged;
		
			wp_title( '|', true, 'right' );
		
			// Add the blog name.
			bloginfo( 'name' );
		
			// Add the blog description for the home/front page.
			$site_description = get_bloginfo( 'description', 'display' );
			if ( $site_description && ( is_home() || is_front_page() ) )
				echo " | $site_description";
		
			// Add a page number if necessary:
			if ( $paged >= 2 || $page >= 2 )
				echo ' | ' . sprintf( 'Page %s', max( $paged, $page ) );
			
			?>
		
		</title>
		
		<?php
			
			if ( is_front_page() ) {
				$page_description = 'Colorado Family Life Center';
			}
			
			elseif ( is_category() ) {
				
				$cat_descritpion = category_description( get_category_by_slug('category-slug')->term_id );
				
				$page_description =strip_tags($cat_descritpion);
			}
			else {
				
				global $wp_query;
				$thePostID = $wp_query->post->ID;
				$postinfo = get_post($thePostID);
				if ($postinfo->post_content) {
					$stripinfo = strip_tags($postinfo->post_content);
					$page_description = substr($stripinfo, 0, 135);
				}
			}
			
		?>
		
		<!-- Load Typekit -->
		<script type="text/javascript" src="//use.typekit.net/dsz4iqd.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
		
		<!--Script for Email service klaviyo-->
		<script type="text/javascript">
		  var _learnq = _learnq || [];
		
		  _learnq.push(['account', 'mVij3a']);
		
		  (function () {
		  var b = document.createElement('script'); b.type = 'text/javascript'; b.async = true;
		  b.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'a.klaviyo.com/media/js/analytics/analytics.js';
		  var a = document.getElementsByTagName('script')[0]; a.parentNode.insertBefore(b, a);
		  })();
		</script>
		
		<meta name="keywords" content="Colorado, Family, Life, Center, Teens, Teen, Parents, Children, Free, Parenting, Class" />
		
		<meta name="description" content="<?php echo $page_description; ?>">
		
		<link rel="shortcut icon" href="<?php bloginfo( 'template_url' ); ?>/images/favicon.ico" type="image/x-icon">
		
		<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/styles/nivo-slider.css" type="text/css" media="screen" />
	
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
		<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
		
		<?php wp_head(); ?>
	
	</head>

	<body <?php body_class(); ?>><!-- Closed in footer.php -->
	
		<header id="navigation-container">
			
			<div class="wrap clearfix">
			
				<div id="logo">

					<a href="<?php echo home_url(); ?>/">Colorado Family Life Center</a>

				</div><!-- End #logo -->
				
				<div id="logotext">
					
					<a href="<?php echo home_url(); ?>/">Colorado Family Life Center</a>
				
				</div><!-- End #logotext -->

				<div id="navigation-button">
				</div>
				
				<nav id="navigation" class="clearfix">
					
					<li id="gethelp"><a href="/get-help">GET HELP</a></li>
					
					<li id="donate"><a href="/donate">DONATE</a></li>
					
					<li id="events"><a href="/events">EVENTS</a></li>
					
					<li id="getinvolved"><a href="/get-involved">GET INVOLVED</a></li>
					
					<li id="aboutus"><a href="/about-us">ABOUT US</a></li>
					
					<li id="resources"><a href="/resources">RESOURCES</a></li>
					
					<!--<li id="calendar"><a href="/calendar">CALENDAR</a></li>-->
				
				</nav><!-- End #navigation -->
				
			</div><!-- End .wrap -->
		
		</header><!-- End #navigation-container -->
		
		<main class="content"><!-- Closed in footer.php -->
			
			<div class="wrap clearfix"><!-- Closed in footer.php -->