<aside class="sidebar col">
	<h2 class="widget-title">Connect</h2>
	<div class="open apps"></div>
	<nav id="social">
		<h2>Social Navigation</h2>
		<?php wp_nav_menu(array('menu' => 'social')); ?>
	</nav>

	<?php if ( ! is_active_sidebar( 'sidebar-2' ) ) {
		return;
	} ?>
	<div id="content-sidebar" class="content-sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-2' ); ?>


	</div><!-- #content-sidebar -->

</aside>
