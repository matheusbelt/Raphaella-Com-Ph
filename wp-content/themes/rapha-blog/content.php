<?php
/**
 * The default template for displaying content.
 *
 * Used for both single and index/archive/author/catagory/search/tag.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

<article id="post-<?php the_ID(); ?>" class="post-main post-main--loop col-xs-12">
	<div class="col-sm-5 entry-header--loop">
		<header class="entry-header">
			<a href="<?php the_permalink(); ?>">
				<img src="<?php the_post_thumbnail_url('post'); ?>" alt="<?php the_title(); ?>" class="thumb-wrap" style="z-index: 0;">
			</a>
			<div class="category-try"><?php the_category(); ?></div>
			<div class="row"></div>
		</header><!-- .entry-header -->
	</div>
	<?php if ( is_search() ) : ?>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="col-sm-7">
		<div class="entry-date">
			<div class="entry-date__single">
				<?php the_time('j'); echo ' / '; the_time('m'); ?>
			</div>
		</div>
		<?php the_title( '<h2 class="entry-title entry-title--m-half"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
		<div class="entry-content">
			<?php if(has_excerpt()){
				the_excerpt();
			} 
			else {
				echo wp_trim_words(get_the_content(), 50);
			}
			?>
			<div class="row"></div>
		</div>
	</div>
	<a href="<?php the_permalink(); ?>" class="more-link more-link--animate more-link--loop">Leia Mais<span class="seta-animate">&rarr;</span></a>
	<?php endif ?>


</article><!-- #post-## -->
