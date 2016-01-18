<?php
wp_enqueue_style('animate', get_stylesheet_directory_uri().'/css/animate.css', NULL, true);
 get_header(); ?>

	<section id="primary" class="content-area">
		<h2>Social Media Design, Applications, &amp; Content Strategy | Lincoln, Nebraska</h2>
		<div id="header">
			<h1 class="arrow animated fadeInDown">While your website is your hub,</h1>
			<p class="animated fadeInUp delay-5s">social media is your online butterfly</p>
		</div>
		<div id="content" class="site-content" role="main">

			<?php if ( have_posts() ) : ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<ul id="thumbs" class="thumbs print">
						<?php while ( have_posts() ) : the_post(); ?>
						<li>
			<?php
				if ( has_post_thumbnail() ) {
					$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
					echo '<a class="fancybox" href="' . $large_image_url[0] . '" title="' . the_title_attribute( 'echo=0' ) . '">';
					echo get_the_post_thumbnail(); ?>

					<div><span><h3><?php the_title(); ?></h3></span></div>
					</a>
				<?php } ?>

						</li>
					<?php endwhile; ?>
					</ul>
				</article><!-- #post-## -->
			<?php endif;?>

		</div><!-- #content -->
	</section><!-- #primary -->

<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.hoverdir.js"></script>
<script type="text/javascript">
$(document).ready(function() {

	$(function() {
		$(' #thumbs > li ').each( function() { $(this).hoverdir(); } );
	});

	$(".fancybox").attr('rel', 'gallery').fancybox({
		padding : 0,
		margin      : [20, 60, 20, 60], // Increase left/right
		openEffect	: 'fade',
		closeEffect	: 'none',
		helpers		: {
			title	: { type: 'outside' },
			thumbs	: {
				width	: 100,
				height	: 50
			}
		},
		keys		: {
			toggle : [70]  // letter "f" - toggle fullscreen
		}
	});
});
</script>

<?php get_footer(); ?>