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

<section class="fale-comigo container">
	<div class="col-sm-7">
		<h3 class="home__titulo">Fale comigo</h3>
		<p class="corpo fale-comigo__corpo">Peça seu orçamento de designer de interiores aqui! Só deixar seu nome, email e mensagem abaixo para entrar em contato comigo. <br>
		Ou então se quiser elogiar, comentar algo, deixar alguma crítica ou sugestão também pode mandar abaixo que verei quando checar meu email. <br>
		Obrigada desde já pela sua mensagem, prometo que lerei com carinho!</p>
		<div class="contact-form">
			<?php echo do_shortcode('[contact-form-7 id="35" title="Fale comigo"]'); ?>
		</div>
	</div>
	<div class="col-sm-5 fale-comigo__img"><img src="" alt=""></div>
</section>

</main>
<?php
get_footer();
