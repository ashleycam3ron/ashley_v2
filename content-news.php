<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<?php
			the_content();
			edit_post_link( __( 'Edit', 'ashleycameron' ), '<span class="edit-link">', '</span>' );
			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'ashleycameron' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
			) ); ?>
		<div class="clear"></div>

		<?php if (is_single(1919)){ comments_template(); } ?>
		<?php
			previous_post_link('<span class="prev-link">%link</span>','&larr;',true);
			next_post_link('<span class="next-link">%link</span>','&rarr;',false);
		?>

<!--BEGIN .author-bio-->
	<div class="author">

<?php //if ( is_user_logged_in() ) {?>


		<?php echo get_avatar( get_the_author_meta('email'), '90' ); ?>
		<div class="author-info">
			<h3 class="author-title">Written by <?php the_author_link(); ?></h3>
			<p class="author-description"><?php the_author_meta('description'); ?></p>
			<!-- <p>Website: <a href="<?php the_author_meta('user_url');?>"><?php the_author_meta('user_url');?></a></p> -->
			<ul class="icons">
				<?php
					$rss_url = get_the_author_meta( 'rss_url' );
					if ( $rss_url && $rss_url != '' ) {
						echo '<li class="rss"><a href="' . esc_url($rss_url) . '"></a></li>';
					}

					$twitter_profile = get_the_author_meta( 'twitter' );
					if ( $twitter_profile && $twitter_profile != '' ) {
						echo '<li class="twitter"><a href="' . esc_url($twitter_profile) . '">Twitter</a></li>';
					}

					$facebook_profile = get_the_author_meta( 'facebook' );
					if ( $facebook_profile && $facebook_profile != '' ) {
						echo '<li class="facebook"><a href="' . esc_url($facebook_profile) . '">Facebook</a></li>';
					}

					$google_profile = get_the_author_meta( 'googleplus' );
					if ( $google_profile && $google_profile != '' ) {
						echo '<li class="google"><a href="' . esc_url($google_profile) . '" rel="author">Google+</a></li>';
					}

				?>
			</ul>
		</div>
	</div><!--END .author-bio-->
<?php //} ?>

</div><!-- .entry-content -->

</article><!-- #post-## -->
