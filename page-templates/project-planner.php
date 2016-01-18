<?php
/*
Template Name: Project Planner
*/

add_action('wp_print_styles', 'stylesheet');
function stylesheet(){ ?>
    <style>
		#page #post-12{width:55%;float:left;padding: 70px 10px 40px 50px;color: #656F7A;}
		#post-12 h1.title{display: none;}
		#post-12 h2{color: #303942;}
		.left{width: 25%;height: 100%;float: left;text-align: right;position: relative;overflow: hidden;}
		#vid {position: absolute; z-index: -1; left: 0; top: 0;min-height: 100%; min-width: 100%; }
		.left .inner{padding: 50px 50px 22px;}
		.left h3{color: #00A99D;margin: 16px 0 5px;}
		.left p{color: #E6E6E6;font-size: .9em;margin-bottom: 11px;}
		.left a {
		    color: #FFF;
		    text-decoration: none;
		    display: block;
		    text-align: left;
		    padding-left: 10px;
		}
		.contact{text-align: left;background: rgba(41, 51, 64, 0.6);padding:20px 32px 25px 25px;}
		.contact p {margin: 0 0 2px;}
		.contact small {
		    color: #96A5BB;
		    line-height: 1.25;
		    display: block;margin-bottom: 11px;
		}
		.right{width: 20%;float:left;margin-top: 140px;background: #fafbfb;color:#88929d;padding: 30px 40px 35px 35px;}
		.right p {line-height: 1.3;}
		.right strong {color: #6b747d;}
		#gform_1 h3.gform_title {
    text-align: center;
    text-transform: uppercase;
    font-size: 1.7em !important;
    color: #394557;
    margin: 32px auto 10px !important;
}
		#gform_1 h2 { text-transform: uppercase; letter-spacing: 2px !important; font-size: 1.2em; }
		#gform_1 input,
		#gform_1 textarea {outline: none; padding: 10px 15px; border-radius: 3px; border: 1px solid #CBD5E2; }
		#gform_1 input:focus,
		#gform_1 textarea:focus {border-color: #60DCD3;}
		#gf_progressbar_wrapper_1 {border: 0; margin: 0; padding: 0; }
		#gform_1 .gf_progressbar {background: #E2E7EA;border: 0;border-radius: 2px;}
		#gform_1 .percentbar_blue {background: #00A99D;}
		#gform_1 .gf_progressbar span {text-shadow: none;font-size: 1.2em;}
		#gform_1 .gfield_label {font-weight: bold !important; color: #1F1F1F; }
		#gform_1 ul.gfield_radio li {background: #E8EBEF; float: left; clear: left; padding: 6px 10px 5px !important; width: 47%; border-radius: 4px; color: #303B49; margin: 0 0 4px 0; }
		#gform_1 ul.gfield_radio li:checked  + label {background: #5B6C84;color: #FFF;}
		.gform_wrapper .gsection {margin-bottom: .5em;}
		#gform_1 .gform_page_footer input {background: #00a99d; color: #FFF; border: 0; text-transform: uppercase; letter-spacing: 1px; font-size: 12px; padding: 10px 25px; }
		textarea#input_1_15 {    height: 196px;}
		#gform_1 .gform_page_footer input#gform_submit_button_1 { background: #435671;}
	</style>
<?php } ?>

<?php get_header(); ?>

<div id="main-content" class="main-content">

	<div id="primary" class="content-area">
		<?php //get_sidebar(); ?>
		<div id="content" class="site-content" role="main">

			<aside class="left">
				<video autoplay poster="<?php echo get_stylesheet_directory_uri(); ?>/images/cant-see-the-forest-for-the-trees.jpg" id="vid">
					<source src="<?php echo get_stylesheet_directory_uri(); ?>/images/cant-see-the-forest-for-the-trees.webm" type="video/webm">
					<source src="<?php echo get_stylesheet_directory_uri(); ?>/images/cant-see-the-forest-for-the-trees-1.mp4" type="video/mp4">
				</video>

				<div class="inner">
					<h3>Life can be hectic.</h3>
					<p>We can lose sight of our place in the expansive universe and forget to slow down in this fast-paced digital realm.</p>
					<p>Find a quiet place to relax, grab a cup of coffee, and share your story and insights about your goals and journey leading to this point in your next project.</p>

					<h3>Your Story + Your Customers</h3>
					<p>It is easy to become consumed with your story, not your customers. Listening to constructive feedback is a valuable part of learning and growth. Deliver quality content and measure your results to direct your reach, level of engagement, and conversions (success no matter how you measure it – loyalty or in dollars). After a few months of collecting data from your website, let us follow up to review the flow of your audience and target sources of interest and places in need of improvement.</p>
				</div>
				<div class="contact">
					<p><strong>I’m only a phone call (or email) away</strong></p>
					<small>You may enjoy talking on the phone more than typing up an email. I understand. It can be difficult to convey emotion through words and quicker to explain in conversation. For this initial consultation, please complete this planner to the best of your ability first, so I have your contact information and details saved.</small>

					<a tel="4023162025">+ 402.316.2025</a>
					<a href="mailto:ashley@ashley-cameron.com">+  ashley@ashley-cameron.com</a>
				</div>
			</aside>

			<?php while ( have_posts() ) : the_post();
					get_template_part( 'content', 'page' );
				endwhile; ?>

			<div class="right">
				<small>
					<strong>Please note:</strong>
					<p>Minimum level of engagement for websites is $500. This usually covers set up and guidance for a basic brochure site using a purchased theme, as opposed to a custom design and development. Domain and hosting services are charged separately, since they are based on terms of use.</p>
				</small>
			</div>

		</div><!-- #content -->

		<!-- <div class="clear"></div> -->
	</div><!-- #primary -->
</div><!-- #main-content -->

<?php get_footer();