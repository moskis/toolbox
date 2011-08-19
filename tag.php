<?php
/**
 * The template used to display Tag Archive pages
 *
 * @package WordPress
 * @subpackage Toolbox
 * @since Toolbox 0.1
 */

get_header(); ?>

		<section id="primary">
			<div id="content" role="main">

				<?php the_post(); ?>

				<header class="page-header">
					<h1 class="page-title"><?php
						printf( __( 'Tag Archives: %s', 'toolbox' ), '<span>' . single_tag_title( '', false ) . '</span>' );
					?></h1>
				</header>

				<?php rewind_posts(); ?>

				<?php toolbox_content_nav( 'nav-above' ); ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php
						/* Include the Post-Format-specific template for the content.
						 * If you want to overload this in a child theme then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'content', get_post_format() );
					?>

				<?php endwhile; ?>

				<?php toolbox_content_nav( 'nav-below' ); ?>

			</div><!-- #content -->
		</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>