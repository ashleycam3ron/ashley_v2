<?php
function enqueue(){
	wp_deregister_script('jquery');
	wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js');

	/*
wp_register_style('normalize', get_stylesheet_directory_uri().'/css/normalize.css', NULL, '2.0.1');
	wp_register_style('bootstrap', get_stylesheet_directory_uri().'/css/bootstrap.css', NULL, '2.1.1');
	wp_register_style('media', get_stylesheet_directory_uri().'/css/media.css', NULL, '1.0');
	wp_register_style('font', get_stylesheet_directory_uri().'/css/font.css', NULL, '1.0');
	wp_enqueue_style('theme', get_stylesheet_uri(), array('normalize','bootstrap','media','font'), '1.0.5');
*/
	wp_register_script('modernizr', get_stylesheet_directory_uri().'/js/modernizr.js', NULL, '2.7.1');
	wp_register_script('functions', get_stylesheet_directory_uri().'/js/functions.js');
	wp_register_script('cycle2', get_stylesheet_directory_uri().'/js/jquery.cycle2.min.js', array('jquery'), '1.01');
	wp_register_script('circliful', get_stylesheet_directory_uri().'/js/jquery.circliful.min.js');

	//menu
	wp_register_script('menu', get_stylesheet_directory_uri().'/js/menu/classie.js');
	wp_register_script('gnmenu', get_stylesheet_directory_uri().'/js/menu/gnmenu.js');

	//animate in images / logos
	wp_register_script('masonry', get_stylesheet_directory_uri().'/js/images/masonry.pkgd.min.js');
	wp_register_script('imagesloaded', get_stylesheet_directory_uri().'/js/images/imagesloaded.js');
	wp_register_script('classie', get_stylesheet_directory_uri().'/js/images/classie.js');
	wp_register_script('AnimOnScroll', get_stylesheet_directory_uri().'/js/images/AnimOnScroll.js');

	//direction aware hover effect
	wp_register_script('hoverdir', get_stylesheet_directory_uri().'/js/jquery.hoverdir.js');

	//fancybox
	wp_register_script('fancybox2', get_stylesheet_directory_uri().'/js/source/jquery.fancybox.js', NULL, '2.1.4');
	//fancybox helpers
	wp_register_script('fancybox-buttons', get_stylesheet_directory_uri().'/js/source/helpers/jquery.fancybox-buttons.js', NULL, '1.0.5');
	wp_register_script('fancybox-media', get_stylesheet_directory_uri().'/js/source/helpers/jquery.fancybox-media.js', NULL, '1.0.6');
	wp_register_script('fancybox-thumbs', get_stylesheet_directory_uri().'/js/source/helpers/jquery.fancybox-thumbs.js', NULL, '1.0.7');

	//styles
	wp_register_style('fancybox2', get_stylesheet_directory_uri().'/js/source/jquery.fancybox.css', NULL, '2.1.4');
	wp_register_style('fancybox-buttons', get_stylesheet_directory_uri().'/js/source/helpers/jquery.fancybox-buttons.css', NULL, '1.0.5');
	wp_register_style('fancybox-thumbs', get_stylesheet_directory_uri().'/js/source/helpers/jquery.fancybox-thumbs.css', NULL, '1.0.7');


	//wp_register_style('font-awesome', '//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css');

	//css3 animations
	wp_register_style('animate', get_stylesheet_directory_uri().'/css/animate.css', NULL, true);

	wp_enqueue_script(array('jquery','functions','modernizr','menu','gnmenu','circliful'));
	wp_enqueue_style(array('font-awesome','animate'));


	if (is_tax() || is_single()){
		wp_enqueue_script(array('fancybox2','fancybox-buttons','fancybox-thumbs'));
		wp_enqueue_style(array('fancybox2','fancybox-buttons','fancybox-thumbs'));
	}

	/*
if (is_page_template('page-templates/skills.php')){
		wp_enqueue_script('circliful');
	}
*/
	/*
if(is_singular( 'portfolio' ) ){
		wp_enqueue_script(array('masonry','imagesloaded','classie','AnimOnScroll'));
	}
*/
}
add_action('wp_enqueue_scripts', 'enqueue');
?>