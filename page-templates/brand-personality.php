<?php
/*
Template Name: Brand Personality Exercise
*/

get_header(); ?>

<div id="brand" class="main-content">

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
			<div id="header">
				<h1 class="arrow animated fadeInDown">Brand Personality Profile</h1>
				<p class="animated fadeInUp delay-5s">choose the adjectives that convey your brand's personality</p>
			</div>


			<?php while ( have_posts() ) : the_post();
					get_template_part( 'content', 'page' );
				endwhile; ?>


		</div><!-- #content -->

		<!-- <div class="clear"></div> -->
	</div><!-- #primary -->
</div><!-- #main-content -->

<script>
jQuery( ".gfield_checkbox label" ).click(function() {
  jQuery( this ).toggleClass( "active" );
});
</script>
<?php get_footer();