<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>

<main id="content" role="main">

<div class="container">
	<h2 class="home__titulo">Desafios Concluídos</h2>

	<section class="desafios__inner">
	<?php 

		$desafioCompleto = new WP_Query(array(
			'post_type' => 'desafio',
			'posts_per_page' => -1,
			'meta_query' => array(
				array(
					'key' => 'desafio_completo',
					'compare' => '==',
					'value' => 1
				)
			)
		));

	while($desafioCompleto->have_posts()) : 
		$desafioCompleto->the_post();
	 ?>
	 	
		<h3>[ <i class="fa fa-check"></i> ] &nbsp;<?php the_title(); ?></h3>
		<?php the_content(); ?>

	<?php endwhile; ?>

	</section> <!-- desafios__inner -->



	<h2 class="home__titulo">Desafios que faltam</h2>

	<section class="desafios__inner">
	<?php 

		$desafioIncompleto = new WP_Query(array(
			'post_type' => 'desafio',
			'posts_per_page' => -1,
			'meta_query' => array(
				array(
					'key' => 'desafio_completo',
					'compare' => '==',
					'value' => 0
				)
			)
		));

	while($desafioIncompleto->have_posts()) : 
		$desafioIncompleto->the_post();
	 ?>
		<h3>[ <div class="check-space"></div> ] &nbsp;<?php the_title(); ?></h3>
		<?php the_content(); ?>
	<?php endwhile; ?>

	</section> <!-- desafios inner -->
</div> <!-- container -->

</main>
<?php
get_footer();
