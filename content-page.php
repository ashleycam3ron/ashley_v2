<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<h1 class="title"><?php the_title(); ?></h1>
		<?php
			the_content();
			edit_post_link( __( 'Edit', 'twentyfourteen' ), '<span class="edit-link">', '</span>' );
		?>
		<div class="clear"></div>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
