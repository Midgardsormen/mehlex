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
<a class="product-list__item-link" href="<?php echo get_permalink(); ?>">
	<?php
	$productImage = get_field('image_du_produit');
	if( $productImage ): ?>
		<div class="img-container img-container--shadow product-list__item-image">
			<img class="product-list__item-img" src="<?php echo esc_url( $productImage['url'] ); ?>" alt="<?php echo esc_attr( $productImage['alt'] ); ?>" />
		</div>
	<?php endif; ?>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title default-max-width">', '</h1>' ); ?>
	</header><!-- .entry-header -->
	</a>

</article><!-- #post-<?php the_ID(); ?> -->
