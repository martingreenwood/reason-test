<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package reason-test-mg
 */

?>

<article <?php post_class("site__main--article"); ?>>

	<a class="site__main--article-thumbnail" href="<?php the_permalink(); ?>">
		<?php the_post_thumbnail("thumbnail"); ?>
	</a>

	<header class="site__main--article-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="site__main--article-title">', '</h1>' );
		else :
			the_title( '<h2 class="site__main--article-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
		?>
		<?php the_category( " | " ) ?>
	</header>

</article>
