<div class="push clear"></div>

<div id="contact1">Contact</div>
<div id="hello">
	<h5>Say, “Hello”!</h5>
	<p>Tell me about your project. If you’d like to submit a more in-depth<br/>
	overview of your project or website, check out the <a href="/project-planner">Project Planner</a>.</p>
</div>
<footer id="colophon" class="site-footer" role="contentinfo">
	<div id="contact">
		<?php echo do_shortcode( '[gravityform id="2" name="Contact" title="false" description="false"]' ) ?>
	</div>
	<div id="info"></div>
	<div class="clear"></div>
	<div class="site-info">
		 &copy; <?php echo date('Y'); ?> All Rights Reserved. Ashley Cameron Design, Inc.
		 <span class="wp"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/wordpress.png" alt="WordPress logo"/>Proudly powered by Wordpress</span>
		 <a class="login" href="<?php echo wp_login_url( get_permalink() ); ?>" title="Login">Login</a>
	</div><!-- .site-info -->
</footer><!-- #colophon -->

</div><!-- #main -->
</div><!-- #page -->

<?php get_sidebar(); ?>

<?php if (is_single()){ ?>
<script type="text/javascript">
jQuery(document).ready(function() {

	jQuery(".gallery a").addClass('fancybox');
	jQuery(".fancybox").attr('rel', 'gallery').fancybox({
		padding : 0,
		margin      : [20, 60, 20, 60], // Increase left/right
		openEffect	: 'fade',
		closeEffect	: 'none',
/*
		helpers		: {
			title	: { type: 'outside' },
			thumbs	: {
				width	: 100,
				height	: 50
			}
		},
*/
		keys		: {
			toggle : [70]  // letter "f" - toggle fullscreen
		}
	});
});
</script>
<?php } ?>

<!-- Hotjar Tracking Code for ashley-cameron.com -->
<script>
    (function(f,b){
        var c;
        f.hj=f.hj||function(){(f.hj.q=f.hj.q||[]).push(arguments)};
        f._hjSettings={hjid:25051, hjsv:3};
        c=b.createElement("script");c.async=1;
        c.src="//static.hotjar.com/c/hotjar-25051.js?sv=3";
        b.getElementsByTagName("head")[0].appendChild(c);
    })(window,document);
</script>
<?php wp_footer(); ?>

</body>
</html>