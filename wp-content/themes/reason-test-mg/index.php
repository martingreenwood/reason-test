<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package reason-test-mg
 */

get_header();
?>

	<section class="site__intro">

		<article class="site__intro--content">
			<?php $page_for_posts_id = get_option('page_for_posts'); ?>
			<h2 class='site__intro--heading'><?php echo get_post_field( 'post_title', $page_for_posts_id ); ?></h2>
			<div class='site__intro--text'><?php echo get_post_field( 'post_content', $page_for_posts_id ); ?></div>
		</article>

		<aside class="site__intro--categories">
			<ul class="site__intro--categories-list">
			<?php wp_list_categories(array(
				'current_category' 		=> true,
				'title_li'          	=> "",
				'use_desc_for_title'  	=> false,
				'hide_empty'  	        => 1,
			)); ?>
			</ul>
		</aside>

	</section>

	<main class="site__main">


	<?php
	if ( have_posts() ) :

		/* Start the Loop */
		while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/content', '' );
		endwhile;

	else :

		get_template_part( 'template-parts/content', 'none' );

	endif;
	?>

	</main>

<?php
get_footer();
