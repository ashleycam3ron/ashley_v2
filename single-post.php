<?php get_header(); ?>

	<div id="primary" class="content-area">

<?php if (has_post_thumbnail( $post->ID ) ): ?>
	<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
<?php else :
	$image = get_stylesheet_directory_uri() . '/images/header-print.jpg'; ?>
<?php endif; ?>

		<div id="header">
			<div class="bg" style="background-image: url('<?php echo $image[0]; ?>')"></div>
			<span class="overlay"></span>
			<h1 class="title animated fadeInDown delay-5s"><?php the_title(); ?></h1>
			<!-- <p class="animated fadeInUp delay-5s">what's happening?</p> -->
			<p>About a <?php echo post_word_count(); ?> minute read</p>
		</div>

		<div id="content" class="site-content" role="main">
			<?php while ( have_posts() ) : the_post();
					get_template_part( 'content', 'news' );
				endwhile; ?>
		</div><!-- #content -->

	</div><!-- #primary -->



<script type="text/javascript">
$(document).ready(function() {
	$('.entry-content a:has(img)').addClass('fancybox');
	$(".fancybox").attr('rel', 'gallery').fancybox({
		padding : 0,
		keys		: {
			toggle : [70]  // letter "f" - toggle fullscreen
		}
	});
});
</script>

<script>
jQuery(document).ready(function ($) {
	$(window).scroll(function(){
	    var $maxScroll=300;
	    var $maxScale=1.2;
	    var $x=$(window).scrollTop()/180+1;
	    if($(window).scrollTop()>$maxScroll) $x=$maxScale;
	//    $('#first .background').css({transform: 'scale('+$x+','+$x+')'});
	        $('#header .bg').css({transform: 'scale('+$x+','+$x+')'});
	});
});

</script>


<?php get_footer();