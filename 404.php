<?php
/**
 * @package WordPress
 * @subpackage Toolbox
 */
?>

<?php get_header(); ?>

	<div id="container">
		<div id="content">

			<div id="post-0" class="post error404 not-found">
				<h1 class="entry-title"><?php _e( 'This is somewhat embarrassing, isn&rsquo;t it?', 'theme' ); ?></h1>
				<div class="entry-content">
					<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching, or one of the links below, can help.', 'theme' ); ?></p>

					<?php get_search_form(); ?>

					<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

					<div class="widget">
						<h2 class="widgettitle"><?php _e( 'Most Used Categories', 'theme' ); ?></h2>
						<ul>
						<?php wp_list_categories( 'orderby=count&order=DESC&show_count=TRUE&title_li=&number=10' ); ?>
						</ul>
					</div>

					<?php
					$archive_content = '<p>' . __( 'Try looking in the monthly archives :).', 'theme' ) . '</p>';
					the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );
					?>

					<?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>

				</div><!-- .entry-content -->
			</div><!-- #post-0 -->

		</div><!-- #content -->
	</div><!-- #container -->
	<script type="text/javascript">
		/* <![CDATA[ */
		// focus on search field after it has loaded
		document.getElementById('s') && document.getElementById('s').focus();
		/* ]]> */
	</script>

<?php get_footer(); ?>