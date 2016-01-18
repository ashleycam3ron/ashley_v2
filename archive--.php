<?php get_header(); ?>

<div id="main-content" class="main-content">
		<div id="content" class="site-content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<div class="entry-content">
						<h2 class="title"><?php the_title(); ?></h2>
						<?php the_excerpt(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-## -->
			<?php endwhile; ?>

		</div><!-- #content -->
</div><!-- #main-content -->

<?php get_footer();