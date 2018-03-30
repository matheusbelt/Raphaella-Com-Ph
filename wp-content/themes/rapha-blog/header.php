<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till #main div
 *
 * @package Odin
 * @since 2.2.0
 */
?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php if ( ! get_option( 'site_icon' ) ) : ?>
		<link href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" rel="shortcut icon" />
	<?php endif; ?>
	<script src="http://mynameismatthieu.com/WOW/dist/wow.min.js"></script> <!-- wow animation -->
	<script>
	  new WOW().init();
	</script>
	<link href="https://fonts.googleapis.com/css?family=Lato|Playfair+Display" rel="stylesheet">
	<style>
		@font-face{
		font-family: Better Together;
		src: url(<?php echo get_theme_file_uri('/assets/fonts/bt.ttf') ?>);
		}
		@font-face{
		font-family: paper;
		src: url(<?php echo get_theme_file_uri('/assets/fonts/PaperGirl.ttf') ?>);
		}
	</style>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<a id="skippy" class="sr-only sr-only-focusable" href="#content">
		<div class="container">
			<span class="skiplink-text"><?php _e( 'Skip to content', 'odin' ); ?></span>
		</div>
	</a>
	
	<div class="bg-white">
	<header id="header" role="banner" class="container">
		<div class="header">
			<div class="hidden-xs">
					<h1 class="site-title">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
							<?php bloginfo( 'name' ); ?>
						</a>
					</h1>
			</div><!-- .page-header-->

			<div id="main-navigation" class="navbar navbar-default">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-navigation">
					<span class="sr-only"><?php _e( 'Toggle navigation', 'odin' ); ?></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand visible-xs-block" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						<?php bloginfo( 'name' ); ?>
					</a>
				</div>

				<nav class="collapse navbar-collapse navbar-main-navigation header__menu" role="navigation">
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'main-menu',
								'depth'          => 2,
								'container'      => false,
								'menu_class'     => 'nav navbar-nav',
								'fallback_cb'    => 'Odin_Bootstrap_Nav_Walker::fallback',
								'walker'         => new Odin_Bootstrap_Nav_Walker()
							)
						);
					?>
				</nav><!-- .navbar-collapse -->
			</div><!-- #main-navigation-->

		</div><!-- .container-->
	</header><!-- #header -->
	</div> <!-- bg-white -->

	<?php if(is_page() AND !is_page('Home') ) : 
		$titulo = get_the_title(get_the_ID()); 
		$subtitulo = get_field('page_subtitle');
		$postSubtitulo = get_field('post_subtitle');
		$page_bg = get_field('page_bg')['url']; 
	?>
		<style>
			.bg--one-third-screen{
				background: url( <?php if(is_single() ){ 
					the_post_thumbnail_url();
					} 
					else {
						if($page_bg){
							echo $page_bg;
						}
						else{
							echo "background: url(". get_theme_file_uri('/assets/images/bg-home.jpg') . "),";
						}
					}
						?> 
					),
					rgba(0,0,0,.4);
				background-blend-mode: multiply;
				background-size: cover;
				background-attachment: fixed;
			}
		</style>
		<section class="bg--one-third-screen <?php if(is_single()) echo 'bg__single--one-third-screen' ?>">
			
			<h1 class="home__titulo home__titulo--big"><?php echo $titulo; ?></h1>
			<?php if($subtitulo OR $postSubtitulo) : ?>
				<h2 class="home__subtitulo home__subtitulo--big"><i><?php echo $subtitulo; echo $postSubtitulo; ?></i></h2>
			<?php endif; ?>
		
		</section>
	<?php endif; ?>