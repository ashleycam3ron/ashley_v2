<?php get_header(); ?>

<div id="main-content" class="main-content">
		<div id="content" class="site-content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php twentyfourteen_post_thumbnail(); ?>
					<div class="entry-content">
						<?php
						    $category_id = get_cat_ID( 'Category Name' ); // Get the ID of a given category
						    $category_link = get_category_link( $category_id ); // Get the URL of this category
						?>
						<p class="cat"><a href="<?php echo esc_url( $category_link ); ?>" title="Category Name"><?php single_cat_title(); ?></a></p>
						<h2><a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
						<?php the_excerpt(); ?>
						<p><a class="more" href="<?php echo esc_url( get_permalink() ); ?>">⟶</a></p>
					</div><!-- .entry-content -->
				</article><!-- #post-## -->
			<?php endwhile;
				twentyfourteen_paging_nav();
			?>

<?php echo do_shortcode('[instagram-feed]');?>
		</div><!-- #content -->
</div><!-- #main-content -->

<script>
jQuery(document).ready(function ($) {

    var animated_element = $('.animated');

    function image_animation() {
        animated_element.each(function () {
            var get_offset = $(this).offset();
            if ($(window).scrollTop() + $(window).height() > get_offset.top + $(this).height() / 2) {
                $(this).addClass('animation_started');
                setTimeout(function () {
                    $(this).removeClass('animated').removeAttr('style');
                }, 300);
            }
        });
    }

    $(window).scroll(function () {
        image_animation();
    });

    $(window).load(function () {
        setInterval(image_animation, 300);
    });

});

</script>
<?php get_footer();