<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>

<style>
	.bg--one-third-screen{
		background: url( <?php echo get_theme_file_uri(); ?> );
		background-size: cover;
		background-attachment: fixed;
	}
</style>
<section class="bg--one-third-screen">
	
	<hgroup class="home__titulo-subtitulo">
		<?php
			echo '<h1 class="home__titulo home__titulo--big"> Todos os Trabalhos </h1>';
			if($subtitulo){
				the_archive_description( '<h2 class="home__subtitulo home__subtitulo--big">', '</h2>' );
			}
		?>
	</hgroup>
</section>

	<main id="content" class="container">
	<div class="col-sm-9">
			<?php
				if ( have_posts() ) :
					// Start the Loop.
					while ( have_posts() ) : the_post();

						/*
						 * Include the post format-specific template for the content. If you want to
						 * use this in a child theme, then include a file called called content-___.php
						 * (where ___ is the post format) and that will be used instead.
						 */
						get_template_part( 'content', get_post_format() );

					endwhile;

					// Post navigation.
					odin_paging_nav();

				else :
					// If no content, include the "No posts found" template.
					get_template_part( 'content', 'none' );

				endif;
			?>
	</div>
	
<div class="col-sm-3">
	<div class="col-xs-12 sidebar--loop sidebar">
<?php
get_sidebar(); ?>
</div>
</div>
</main><!-- #content --><?php
get_footer(); ?>