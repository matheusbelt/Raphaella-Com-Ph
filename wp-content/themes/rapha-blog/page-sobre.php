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
<style>
	.bg__titulo{
		background: url(<?php echo get_theme_file_uri('/assets/images/geometry2-pattern.jpg'); ?>) repeat,
		rgba(146, 41, 41, .6);
		background-blend-mode: multiply;
		background-attachment: fixed, scroll;
	}
</style>
<section class="sobre-inicial container">
	<div class="col-sm-5 imagem-redonda text-right">
		<img src="<?php echo get_field('foto_sobre')['sizes']['fotoSobre'] ?>" alt="Olá, sou Raphaella com Ph">
	</div>
	<div class="col-sm-7">
		<h2 class="home__titulo sobre-inicial__titulo">Um breve resumo</h2>
		<p class="sobre-inicial__texto"><?php the_field('sobre_texto'); ?></p>
	</div>
</section>

<section class="detalhes">
	<div class="container-fluid bg__titulo">
		<hgroup class="home__titulo-subtitulo">
			<h1 class="home__titulo">Raphaella em Detalhes</h1>
			<h2 class="home__subtitulo">Algumas curiosidades sobre quem eu sou no cotidiano</h2>
		</hgroup>
	</div>
<div class="container">
	<div class="col-sm-7 detalhes__repeater">
		<?php 

			if( have_rows('detalhes') ) : while ( have_rows('detalhes') ) : the_row();
		 ?>
			<p class="detalhes__repeater--bg"><?php the_sub_field('titulo'); ?></p>
			<p class="detalhes__repeater--no-bg"><?php the_sub_field('titulo_2'); ?></p>
		<?php endwhile; endif; wp_reset_query(); ?>
	</div> <!-- detalhes repeater -->

	<div class="col-sm-5">
		<img src="<?php echo get_field('foto_curiosidades')['sizes']['medium_large'] ?>" alt="fotenha de rapha">
	</div>
</div> <!-- container -->
</section><!--  detalhes -->

<section class="profissional">
	<div class="container-fluid bg__titulo">
		<hgroup class="home__titulo-subtitulo">
			<h1 class="home__titulo">Eu, Designer de Interiores</h1>
			<h2 class="home__subtitulo">Algumas curiosidades sobre quem eu sou no cotidiano</h2>
		</hgroup>
	</div> <!-- titulo -->
<div class="container">
	<div class="col-sm-4">
		<div class=" profissional__single wow animated bounceInDown">
			<i class="fa fa-cube fa-5x"></i>
			<h3 class="profissional__single--titulo">Maquetes 3D</h3>
			<p class="profissional__single--corpo">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos.</p>
		</div> <!-- profissional single -->
	</div>
	<div class="col-sm-4">
		<div class=" profissional__single wow animated bounceInDown" data-wow-delay=".3s">
			<i class="fa fa-users fa-5x"></i>
			<h3 class="profissional__single--titulo">Fluxo do ambiente</h3>
			<p class="profissional__single--corpo">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos.</p>
		</div> <!-- profissional single -->
	</div>
	<div class="col-sm-4">
		<div class=" profissional__single wow animated bounceInDown" data-wow-delay=".6s">
			<i class="fa fa-book fa-5x"></i>
			<h3 class="profissional__single--titulo">Conceito de Interiores</h3>
			<p class="profissional__single--corpo">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos.</p>
		</div> <!-- profissional single -->
	</div>
	<div class="col-xs-12 btn--margin-top btn--margin-bottom text-center"><a href="" class="btn">Peça um orçamento</a></div>
</div> <!-- container -->
</section> <!-- profissional -->


<section class="numeros">
<div class="container">
	<div class="col-sm-3 numeros__single">
		<div class="col-sm-4 numeros__single--img"><i class="fa fa-file fa-5x" aria-hidden="true"></i></div>
		<div class="col-md-8">
			<h3 class="numeros__single--titulo" id="haha"><?php the_field('numero'); ?></h3>
			<p class="numeros__single--corpo"><?php the_field('frase'); ?></p>
		</div>
	</div>
	<div class="col-sm-3 numeros__single">
		<div class="col-sm-4 numeros__single--img"><i class="fa fa-home fa-5x" aria-hidden="true"></i></div>
		<div class="col-md-8">
			<h3 class="numeros__single--titulo" id="hehe">2100</h3>
			<p class="numeros__single--corpo">Maquetes Feitas</p>
		</div>
	</div>
	<div class="col-sm-3 numeros__single">
		<div class="col-sm-4 numeros__single--img"><i class="fa fa-cutlery fa-5x" aria-hidden="true"></i></div>
		<div class="col-md-8">
			<h3 class="numeros__single--titulo">+1.000</h3>
			<p class="numeros__single--corpo">Brigadeiros Vendidos</p>
		</div>
	</div>
	<div class="col-sm-3 numeros__single">
		<div class="col-sm-4 numeros__single--img"><i class="fa fa-heart fa-5x" aria-hidden="true"></i></div>
		<div class="col-md-8">
			<h3 class="numeros__single--titulo">Muito</h3>
			<p class="numeros__single--corpo">Amor Dado</p>
		</div>
	</div>
</div> <!-- container -->
</section> <!-- numeros -->


<?php 
			$trabalhoArgs = array(
				'posts_per_page' => 3,
				'post_type' => 'trabalhos'
			);
			$trabalhoQuery = new WP_Query($trabalhoArgs);

			if($trabalhoQuery->have_posts() ) : ?> 
<section class="trabalhos">
	<div class="container-fluid bg__titulo">
		<hgroup class="home__titulo-subtitulo">
			<h1 class="home__titulo">Trabalhos Recentes</h1>
			<h2 class="home__subtitulo">Últimos trabalhos feitos por mim e um pouco sobre eles.</h2>
		</hgroup>
	</div> <!-- titulo -->
	<div class="container">
		<?php while( $trabalhoQuery->have_posts() ) : $trabalhoQuery->the_post();
		 ?>
	<div class="col-sm-4">
		<a href="<?php the_permalink(); ?>">
		<div class="post-ini"<?php if( has_post_thumbnail() ) echo 'style="background: url('. $url. ');"' ?> >
			<h1 class="post-ini__titulo"><?php the_title(); ?></h1>
	    </div> <!-- fim do post -->
		</a>
	</div> <!-- col-sm-4 -->
		<?php endwhile; ?>
		<div class="col-xs-12 btn--margin-top btn--margin-bottom text-center"><a href="<?php echo get_post_type_archive_link('trabalhos'); ?>" class="btn">Todos Trabalhos</a></div>
	</div> <!-- container -->
</section>
<?php endif; wp_reset_query(); ?>


<?php
get_footer();
