<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
<meta charset="utf-8" />
<meta name="google-site-verification" content="wgIHlAOqqsILysCpU9J-NnagdyceoqSk9dwakItaHVI" />
<!-- Set the viewport width to device width for mobile -->
<meta name="viewport" content="initial-scale=1.0" />
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />

<title><?php wp_title( '|', true, 'right' ); ?></title>
<?php wp_head(); ?>
<script src="/wp-content/themes/cornerstone-child/js/lightbox-2.6.min.js"></script>
<link href="/wp-content/themes/cornerstone-child/css/lightbox.css" rel="stylesheet" />
<link rel="stylesheet" href="/wp-content/themes/cornerstone-child/css/foundation-icons.css" />
</head>

<body <?php body_class(); ?>>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=270997929592089";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="off-canvas-wrap" data-offcanvas>
  <div class="inner-wrap">
<nav class="top-bar show-for-large-up" data-topbar>
	<div id="inner-nav">
		<ul class="title-area">
			<li class="name">
				<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="/wp-content/themes/cornerstone-child/images/logo-v1.png" id="logo"></a>
			</li>
			<!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
		</ul>
		
		<div class="top-bar-section">
		<?php
		  // Left Nav Section
		  if ( has_nav_menu( 'header-menu-left' ) ) {
		      wp_nav_menu( array(
		          'theme_location' => 'header-menu-left',
		          'container' => false,
		          'depth' => 0,
		          'items_wrap' => '<ul class="left show-for-large-up">%3$s</ul>',
		          'fallback_cb' => false,
		          'walker' => new cornerstone_walker( array(
		              'in_top_bar' => true,
		              'item_type' => 'li'
		          ) ),
		      ) );
		    }
		  ?>
		
		<?php
		  //Right Nav Section
		  if ( has_nav_menu( 'header-menu-right' ) ) {
		      wp_nav_menu( array(
		          'theme_location' => 'header-menu-right',
		          'container' => false,
		          'depth' => 0,
		          'items_wrap' => '<ul class="right">%3$s</ul>',
		          'fallback_cb' => false,
		          'walker' => new cornerstone_walker( array(
		              'in_top_bar' => true,
		              'item_type' => 'li'
		          ) ),
		      ) );
		    }
		  ?>
		</div>
	</div>
</nav>
<div class="mobile-nav hide-for-large-up">
					<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><!-- <img src="/wp-content/themes/cornerstone-child/images/mobile-logo.png" id="mobile-logo"> --><h2>Triangle Potters Guild</h2></a><a class="right-off-canvas-toggle" href="#" ><i class="fi-list large" style="width:40px; height:40px; color:#fff;"></i></a>
</div>
    <aside class="right-off-canvas-menu hide-for-large-up">
        <!-- whatever you want goes here -->
		<?php
		  // Left Nav Section
		  if ( has_nav_menu( 'header-menu-left' ) ) {
		      wp_nav_menu( array(
		          'theme_location' => 'header-menu-left',
		          'container' => false,
		          'depth' => 0,
		          'items_wrap' => '<ul class="left">%3$s</ul>',
		          'fallback_cb' => false,
		          'walker' => new cornerstone_walker( array(
		              'in_top_bar' => true,
		              'item_type' => 'li'
		          ) ),
		      ) );
		    }
		  ?>
    </aside>