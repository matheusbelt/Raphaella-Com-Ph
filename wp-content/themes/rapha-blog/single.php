<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); 
$postSubtitulo = get_field('post_subtitle');
?>

<main id="content" class="single" tabindex="-1" role="main">
	<?php
		// Start the Loop.
		while ( have_posts() ) : the_post(); ?>
		<div class="container">
			<section class="col-sm-9 single__content single--bg">
				<header>
					<h1 class="home__titulo home__titulo--single"><?php echo get_the_title(); ?></h1>
					<?php if($subtitulo OR $postSubtitulo) : ?>
						<h2 class="home__subtitulo home__subtitulo--big home__subtitulo--single"><i><?php echo $subtitulo; echo $postSubtitulo; ?></i></h2>
					<?php else : ?>
						<style>
							.home__titulo--single{
								margin-bottom: 60px; 
								/* codigo que faz com que a margin bottom esteja igual mesmo sem o subtitulo*/
							}
						</style>	
					<?php endif; ?>
				</header>

				<p class="postado-em"><small>Postado em: <?php the_time('j'); echo ' de '; the_time('F, Y'); ?>. &nbsp; &nbsp;Na categoria:</small>
				<?php //$count = count(get_the_category());
				 //if(get_the_category()['slug'] != 'sem-categoria') : CODIGO AINDA NÃO FUNCIONAL ?>
				<span class="single__categorias btn"><?php the_category(', ') ?></span></p>
				<?php// endif; ?>
				<img class="post-img" src="<?php the_post_thumbnail_url() ?>" alt="<?php echo get_the_title() ?>">
				<div class="single__corpo">
					<?php the_content(); ?>
				</div>

			<?php	// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif; ?>
			
			</section>	

			<div class="col-sm-3">
				<div class="col-xs-12 sidebar--loop sidebar single--bg">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div> <!-- container -->
<?php endwhile; ?>
</main><!-- #main -->
<?php
get_footer();
