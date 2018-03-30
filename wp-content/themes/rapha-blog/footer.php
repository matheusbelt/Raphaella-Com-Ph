<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main div element.
 *
 * @package Odin
 * @since 2.2.0
 */
$home = get_page_by_title('home');
?>
<footer class="container-fluid  footer col-xs-12">
	<div class="container">
		<div class="col-sm-4 footer__sobre">
			<a href="<?php site_url('/sobre') ?>" class="footer__sobre">
				<h3 class="footer__titulo">Sobre Raphaella</h3>
			</a>
			<div class="col-sm-5  footer__sobre--img imagem-redonda">
				<img src="<?php echo get_field('footer_img', $home)['sizes']['thumbnail']; ?>" alt="">
			</div>
			<div class="col-sm-7 footer__texto">
				<p><?php the_field('footer_sobre', $home); ?></p>
			</div>
		</div> <!-- sobre -->

		<div class="col-sm-2">
			<h3 class="footer__titulo">Também no site</h3>
			<nav class="footer__menu">
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer',
							'depth'          => 1,
							'container'      => false,
						)
					);
				?>		
			</nav>
		</div>
	<div class="col-sm-6">
		<div class="col-sm-6 footer__redes-sociais--padding">
			<h3 class="footer__titulo">Redes Sociais</h3>
			<p class="footer__redes-sociais">
				<a href="https://www.facebook.com/raphaella.m.f" target="_blank"><i class="fa fa-facebook-square fa-3x" title="Facebook"></i></a>
				<a href="https://www.instagram.com/raphaellacomph/" target="_blank"><i class="fa fa-instagram fa-3x" title="Instagram"></i></a>
				<a href="https://twitter.com/raphaellacomph" target="_blank"><i class="fa fa-twitter-square fa-3x" title="Youtube"></i></a>
				<a href="https://www.youtube.com/channel/UCyCgYqSGoyIOsjv4MpKP2SQ" target="_blank"><i class="fa fa-youtube-play fa-3x" title="Youtube"></i></a>
			</p>

			<h3 class="footer__titulo">Design de Interiores</h3>
			<a href="<?php echo esc_url(site_url('/contato')) ?>" class="btn btn__footer">Peça um Orçamento</a>
		</div>

		<div class="col-sm-6">
			<div class="">
				<h3 class="footer__titulo">Últimos Posts</h3>
			</div>
			<?php $ultimosPosts = new WP_Query(array(
				'post_type' => 'post',
				'posts_per_page' => 2,
				)); 

				while($ultimosPosts->have_posts()) : 
					$ultimosPosts->the_post();
				?>
				<div class="ultimos-posts__single">
					<div class="recent_post_img col-sm-4">
						<a href="<?php the_permalink(); ?>" title="<?php echo get_the_title() ?>">
						<img src="<?php echo the_post_thumbnail_url('FooterThumb'); ?>" class="attachment-50x50 wp-post-image" alt="<?php echo get_the_title(); ?>"/></a>
					</div>
					<div class="recent_post_content col-sm-8">
						<p class="recent_post-date"><?php the_time('j'); echo ' de '; the_time('F, Y'); ?></p>
						<a class="recent_post-title col-xs-12" href="<?php the_permalink() ?>" title="3 Portfolio Styles and 4 Single Page Options">
						<?php the_title(); ?></a>
					</div>
					<div class="row recent_post-margin"></div>
				</div> <!-- col-xs-10 -->
				
			<?php endwhile; ?>
		</div>
	</div> <!-- col-sm-6 -->

	</div> <!-- container -->
</footer><!-- #footer -->
<div class="container-fluid authoring">
	<div class="container">
		<p><small>Raphaella com PH <?php echo date('Y') ?>. Blog desenvolvido por <a href="https://github.com/matheusbelt" target="_blank">Matheus Beltrão</a></small></p>
	</div>
</div>
	<?php wp_footer(); ?>
</body>
</html>
