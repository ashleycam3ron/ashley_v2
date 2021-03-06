<?php get_header(); ?>

	<div id="primary" class="content-area">
		<div id="header">
		</div>
		<div id="content" class="site-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="entry-content">

						<h2 style="display: none;"><?php the_title(); ?></h2>

						<?php /*
while ( have_posts() ) : the_post();
							get_template_part( 'content', 'page' );
						endwhile;
*/ ?>

						<?php if( get_field('portfolio') ): ?>
							<ul class="grid effect-6" id="logos">
							<?php while( has_sub_field('portfolio') ):
$image = get_sub_field('image');
 ?>
								<li><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></li>
							<?php endwhile;?>
							</ul>
							<?php endif;  ?>


						<?php
							//the_content();
							edit_post_link( __( 'Edit', 'twentyfourteen' ), '<span class="edit-link">', '</span>' );
						?>
					</div><!-- .entry-content -->
				</article><!-- #post-## -->

				<?php // Previous/next post navigation.
				//twentyfourteen_post_nav();

				endwhile; ?>
		</div><!-- #content -->
	</div><!-- #primary -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/images/masonry.pkgd.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/images/imagesloaded.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/images/classie.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/images/AnimOnScroll.js"></script>
<script>
			new AnimOnScroll( document.getElementById( 'logos' ), {
				minDuration : 0.4,
				maxDuration : 0.7,
				viewportFactor : 0.2
			} );
		</script>
<?php get_footer();