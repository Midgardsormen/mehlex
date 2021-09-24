<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header alignwide">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php twenty_twenty_one_post_thumbnail(); ?>
	</header><!-- .entry-header -->

	<div class="entry-content product-page-content">
		<div class="product-page-content__part-one">
			<div class="product-page-content__image">
				<?php
				$productImage = get_field('image_du_produit');
				if( $productImage ): ?>
					<img class="entry-content__right-img" src="<?php echo esc_url( $productImage['url'] ); ?>" alt="<?php echo esc_attr( $productImage['alt'] ); ?>" />
				<?php endif; ?>
			</div>
			<div class="product-page-content__description-right">
				<?php the_field('description_a_droite_du_produit'); ?>
				<div class="product-page-content__description-right--right">
					<?php the_field('description_a_droite_du_produit_paragraphe_2'); ?>
				</div>
			</div>
		</div>
		<div class="product-page-content__description-bottom">
			<?php the_field('informations_additionnelles'); ?>
		</div>
		<div class="product-page-content__characteristics">
			<?php the_field('caracteristiques_du_produit'); ?>
		</div>
		<?php
		the_content();

		wp_link_pages(
			array(
				'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'twentytwentyone' ) . '">',
				'after'    => '</nav>',
				/* translators: %: Page number. */
				'pagelink' => esc_html__( 'Page %', 'twentytwentyone' ),
			)
		);
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer default-max-width">
		<?php twenty_twenty_one_entry_meta_footer(); ?>
	</footer><!-- .entry-footer -->

	<?php if ( ! is_singular( 'attachment' ) ) : ?>
		<?php get_template_part( 'template-parts/post/author-bio' ); ?>
	<?php endif; ?>

</article><!-- #post-<?php the_ID(); ?> -->
