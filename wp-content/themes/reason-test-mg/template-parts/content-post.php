<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package reason-test-mg
 */

?>

<div class="site__main--single-background" style="background-image:url(<?php the_post_thumbnail_url('full'); ?>)">
</div>

<article <?php post_class('site__main--single-inner'); ?>>

	<div class="site__main--single-content">

		<header class="site__main--single-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="site__main--single-title">', '</h1>' );
		else :
			the_title( '<h2 class="site__main--single-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
		?>
		</header>

		<div class="site__main--single-entry">
			<?php
			the_content(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'reason-test-mg' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				)
			);
			?>
		</div>

		<div class="site__main--single-tasks">
			<?php
			$tag_list = get_the_tag_list( '<ul class="site__main--single-tasks-list"><li>', '</li><li>', '</li></ul>' );
			if ( $tag_list && ! is_wp_error( $tag_list ) ) {
				echo $tag_list;
			}
			?>
		</div>

</article>
