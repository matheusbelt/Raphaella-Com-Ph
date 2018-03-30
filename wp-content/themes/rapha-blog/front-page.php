<?php
/**
 * HOME
 */

get_header(); ?>

<main id="content" role="main">
<style>
	.home.bg--half-screen{
		<?php 
			$home_bg = get_field('home_bg')['url'];
			if($home_bg){
				echo "background: url(". $home_bg . "),";
			}
			else{
				echo "background: url(". get_theme_file_uri('/assets/images/bg-home.jpg') . "),";
			}
		 ?>
		rgba(0,0,0,.4);
		background-blend-mode: multiply;
		background-size: cover;
		background-attachment: fixed;
	}
</style>
<section class="home bg--half-screen">
	<h1 class="home__title">
		<span class="animated fadeIn animation-delay-1">R</span>
		<span class="animated fadeIn animation-delay-2">a</span>
		<span class="animated fadeIn animation-delay-3">p</span>
		<span class="animated fadeIn animation-delay-4">h</span>
		<span class="animated fadeIn animation-delay-5">a</span>
		<span class="animated fadeIn animation-delay-6">e</span>
		<span class="animated fadeIn animation-delay-7">l</span>
		<span class="animated fadeIn animation-delay-8">l</span>
		<span class="animated fadeIn animation-delay-9">a</span>
		<span class="animated fadeIn">&nbsp;</span>
		<span class="animated fadeIn animation-delay-10">C</span>		
		<span class="animated fadeIn animation-delay-11">o</span>		
		<span class="animated fadeIn animation-delay-12">m</span>
		<span class="animated fadeIn">&nbsp;</span>
		<span class="animated fadeIn animation-delay-13">P</span>		
		<span class="animated fadeIn animation-delay-14">h</span>		
	</h1>
	<a href="https://www.youtube.com/channel/UCyCgYqSGoyIOsjv4MpKP2SQ" target="_blank" class="btn btn--big home__btn">Meu Youtube</a>
</section><!--  bg--half-sreen -->

<section class="blog container">
	<hgroup class="home__titulo-subtitulo">
		<h1 class="home__titulo">Últimos Posts</h1>
	</hgroup>
	<?php 
		$destaqueBlog = array(
			'post_type' => 'post',
			'posts_per_page' => 1,
		);
		$postsBlog = array(
			'post_type' => 'post',
			'posts_per_page' => 6,
			'offset' => 1
		);

		$destaqueQuery = new WP_Query($destaqueBlog);

		while ($destaqueQuery->have_posts() ) : $destaqueQuery->the_post();
		$url = wp_get_attachment_url( get_post_thumbnail_id() );
	 ?>	
<div class="col-xs-12">
	<a href="<?php the_permalink(); ?>">
	<div class="post-ini post-ini--destaque" <?php if( has_post_thumbnail() ) echo 'style="background: url('. $url. '), rgba(0,0,0,.4); background-blend-mode: multiply;"' ?> >
	 	<div class="post-ini__categoria"><small></small></div>
		<h1 class="post-ini__titulo post-ini__titulo--big"><?php the_title(); ?></h1>
		<p class="post-ini__corpo-texto"><?php if(has_excerpt()){
              echo get_the_excerpt();
            } else{
               echo wp_trim_words(get_the_content(), 25); } ?></p>
    </div> <!-- fim do post -->
</a>
</div><!--  col-xs-12 -->
	<?php endwhile; wp_reset_query();
	 // FIM DO LOOP DO POST DE DESTAQUE
		$postsQuery = new WP_Query($postsBlog);

		while( $postsQuery->have_posts() ) : $postsQuery->the_post();
		$url = wp_get_attachment_url( get_post_thumbnail_id() );
	 ?>
<div class="col-sm-4">
<a href="<?php the_permalink(); ?>">
	<div class="post-ini"<?php if( has_post_thumbnail() ) echo 'style="background: url('. $url. '), -webkit-linear-gradient(top, rgba(0,0,0,0), rgba(0,0,0,.7)); background: url('. $url. '), -moz-linear-gradient(top, rgba(0,0,0,0), rgba(0,0,0,.7)); background: url('. $url. '), -o-linear-gradient(top, rgba(0,0,0,0), rgba(0,0,0,.7)); background-blend-mode: multiply;"' ?> >
	 	<div class="post-ini__categoria"><small></small></div>
		<h1 class="post-ini__titulo post-ini__titulo--small"><?php the_title(); ?></h1>
    </div> <!-- fim do post -->
   </a>
</div> <!-- col-sm-4 -->

	<?php endwhile; wp_reset_query(); ?>
	<div class="col-xs-12 text-center">
		<a href="<?php echo esc_url(site_url('/blog')); ?>" class="btn">Ver todos os Posts</a>
	</div>
</section> <!-- blog -->


<style>
	.bg__picture{
		background: -webkit-linear-gradient(top, rgba(97,144,232,1), rgba(167,191,232,1));
		background: url( <?php echo get_theme_file_uri('/assets/images/rapha.jpg') ?> ) repeat-x, -webkit-linear-gradient(top, rgba(97,144,232,.3), rgba(167,191,232,.3));
		background-blend-mode: multiply;
		background-attachment: fixed;
		height: 50vh;
	}
</style>
<section class="bg__picture"></section>

<style>
	.trabalhos-recentes{
		background: url("<?php echo get_theme_file_uri('/assets/images/bg-flamingo.png') ?>");
		background-size: cover;
		background-attachment: fixed;
	}
</style>
<!-- trabalhos -->
<section class="trabalhos-recentes">
	<div class="container-fluid">
		<hgroup class="home__titulo-subtitulo--bg">
			<h1 class="home__titulo">Trabalhos Recentes</h1>
			<h2 class="home__subtitulo home__subtitulo--center">Sou designer de interiores, e esses são meus últimos trabalhos na área</h2>
		</hgroup>
	</div> <!-- container fluid -->
	<div class="container">
		<?php 
			$trabalhosArgs = array(
				'posts_per_page' => '3',
				'post_type' => 'trabalhos'
			);
			$trabalhosQuery = new WP_Query($trabalhosArgs);

			while ( $trabalhosQuery->have_posts() ) : $trabalhosQuery->the_post();
		 ?>
<div class="col-sm-4">
	<a href="<?php the_permalink(); ?>">
	<div class="post-ini"<?php if( has_post_thumbnail() ) echo 'style="background: url('. $url. ');"' ?> >
		<h1 class="post-ini__titulo"><?php the_title(); ?></h1>
    </div> <!-- fim do post -->
	</a>
</div> <!-- col-sm-4 -->

	 <?php endwhile; wp_reset_query(); ?>

	 <div class="col-xs-12 text-center">
	 	<a href="<?php echo get_post_type_archive_link('trabalhos') ?>" class="btn">Todos Trabalhos</a>
	 </div>
</div><!-- container -->
</section> <!-- trabalhos -->


<style>
	.desafio{
		background: -webkit-linear-gradient(left top, #FFACAC 20%, #CF69A3);
		position: relative;
		padding-top: 60px;
	}
</style>

<!-- 101 em 1001 -->
<section class="desafio">
	<div class="rapha-icon">
		<img src="<?php echo get_theme_file_uri('assets/images/rapha-icon-transparent.png') ?>" alt="">
	</div>
	<div class="container-fluid">
		<hgroup class="home__titulo-subtitulo--bg">
			<h1 class="home__titulo home__titulo">101 coisas em 1001 dias</h1>
			<h2 class="home__subtitulo home__subtitulo--center home__subtitulo">Meu desafio de completar 101 objetivos em 1001 dias</h2>
		</hgroup>
	</div> <!-- container fluid -->
	<div class="container">
		<h2 class="desafios__front-titulo">Último desafio concluído</h2>
		<?php $ultimoDesafio = new WP_Query(array(
			'post_type' => 'desafio',
			'posts_per_page' => 1,
			'meta_query' => array(
				array(
					'key' => 'desafio_completo',
					'compare' => '==',
					'value' => 1
				)
			)
			));

			while($ultimoDesafio->have_posts() ) : 
				$ultimoDesafio->the_post(); 
			 ?>
		<div class="desafios__inner desafios__inner--front-page wow animated fadeIn">
			<h3>[ <i class="fa fa-check wow animated rubberBand" data-wow-delay="1s"></i> ] &nbsp;<?php the_title(); ?></h3>
		</div>
		
		<?php endwhile; wp_reset_query(); ?>
		<div class="col-xs-12 text-center">
			<a href="<?php echo esc_url(site_url('/101-em-1001')) ?>" class="btn">Todos os Desafios</a>
		</div>
	</div>
</section> <!-- 101 em 1001 -->

<section class="insta">
	<hgroup class="home__titulo-subtitulo">
		<h1 class="home__titulo">Meu Instagram</h1>
	</hgroup>
	<p style="font-size: 20px; margin: 0;"><strong>@raphaellacomph</strong></p>
	<?php echo do_shortcode('[instagram-feed]'); ?>
</section>


	
</main><!-- #main -->


<?php
get_footer();
