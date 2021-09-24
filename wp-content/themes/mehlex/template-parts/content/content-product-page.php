<?php
/**
 * Template part for displaying product-page content in product-page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( ! is_front_page() ) : ?>
		<header class="entry-header alignwide">
			<?php get_template_part( 'template-parts/header/entry-header' ); ?>
			<?php twenty_twenty_one_post_thumbnail(); ?>
		</header><!-- .entry-header -->
	<?php elseif ( has_post_thumbnail() ) : ?>
		<header class="entry-header alignwide">
			<?php twenty_twenty_one_post_thumbnail(); ?>
		</header><!-- .entry-header -->
	<?php endif; ?>

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
		
		
		<div class="entry-content__left-side">
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
		</div>
		<?php
		$rightSide = get_field('images_colonne_de_droite');
		if( $rightSide['image_1'] || $rightSide['image_2'] ): ?>
			<aside class="entry-content__right-side">
				<div class="entry-content__img-container entry-content__img-container--small entry-content__img-container--left"><img class="entry-content__right-img" src="<?php echo esc_url( $rightSide['image_1']['url'] ); ?>" alt="<?php echo esc_attr( $rightSide['image_1']['alt'] ); ?>" /></div>
				<div class="entry-content__img-container entry-content__img-container--medium entry-content__img-container--right"><img class="entry-content__right-img" src="<?php echo esc_url( $rightSide['image_2']['url'] ); ?>" alt="<?php echo esc_attr( $rightSide['image_2']['alt'] ); ?>" /></div>
			</aside>
		<?php endif; ?>
	</div><!-- .entry-content -->


	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer default-max-width">
			<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post. Only visible to screen readers. */
					esc_html__( 'Edit %s', 'twentytwentyone' ),
					'<span class="screen-reader-text">' . get_the_title() . '</span>'
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
