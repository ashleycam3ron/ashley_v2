<?php get_header();?>
	<div class="container">
		<?php while(have_posts()) : the_post();?>

			<div class="entry col-md-10 col-md-offset-1">
				<h1><?php the_title();?></h1>
				<?php //the_content();?>

			</div>

		<?php endwhile;?>
	</div>
<?php get_footer();?>