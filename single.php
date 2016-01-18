<?php get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
			<?php while ( have_posts() ) : the_post();
					get_template_part( 'content', 'page' );
				endwhile;
			?>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer();