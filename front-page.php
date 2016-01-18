<?php get_header(); ?>
<h1 style="display: none;"><?php bloginfo( 'name' ); ?> | Branding, Graphic Design, &amp; Websites in Lincoln, Nebraska </h1>
<section id="services">
  	<ul class="slides">
      <li style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/images/brand-01.jpg) center no-repeat; background-size:cover;">
        <div class="text">
          <h2 class="arrow animated fadeInDown">Brand Consulting</h2>
          <p class="animated fadeInUp delay-05s">simple / unique / memorable</p>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/brand-01.jpg" alt="unique brand consulting" style="visibility:hidden"/>
        </div>
      </li>
      <li style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/images/hero2.jpg) center no-repeat; background-size:cover;">
      	<div class="text">
          <h2 class="arrow ">Graphic Design</h2>
          <p>creative / smart / effective</p>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hero2.jpg" alt="creative graphic design" style="visibility:hidden"/>
        </div>
      </li>
      <li style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/images/hero1.jpg) center no-repeat; background-size:cover;">
      	<div class="text">
          <h2 class="arrow">Website Design &amp; Development</h2>
          <p class="animated fadeInUp delay-5s">fast / responsive / valid</p>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hero1.jpg" alt="responsive website design and development" style="visibility:hidden"/>
      	</div>
      </li>
    </ul>
</section>
<section class="portfolio text-center section-padding" id="portfolio">
  <div class="container">
    <div class="row">
      <div id="portfolioSlider">
        <ul class="slides">
          <li>
            <div class="col-md-4 wp4">
              <div class="overlay-effect effects clearfix">
                <div class="img">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/rbc-black-front.jpg" alt="logo design and business card branding">
                  <div class="overlay">
                    <a href="/portfolio/logos/" class="expand"><i class="fa fa-search"></i><br>View More</a>
                    <a class="close-overlay hidden">x</a>
                  </div>
                </div>
              </div>
              <h2>Identity &amp; Logo Design</h2>
              <h3>Brand Recognition – Discover your brand's personality &amp; learn how to effectively inspire and engage your customers</h3>
            </div>
            <div class="col-md-4 wp4 delay-05s">
              <div class="overlay-effect effects clearfix">
                <div class="img">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/lingerie-print-design-mailer-grand-opening.jpg" alt="lingerie-print-design-mailer-grand-opening">
                  <div class="overlay">
                    <a href="/types/print/" class="expand"><i class="fa fa-search"></i><br>View More</a>
                    <a class="close-overlay hidden">x</a>
                  </div>
                </div>
              </div>
              <h2>Print Design</h2>
              <h3>Graphic &amp; Tactile – In a digital world, inspire your audience with personal and human design elements</h3>
            </div>
            <div class="col-md-4 wp4 delay-1s">
              <div class="overlay-effect effects clearfix">
                <div class="img">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/il-lazzarone-website-design.jpg" alt="il-lazzarone-website-design and development">
                  <div class="overlay">
                    <a href="/types/websites/" class="expand"><i class="fa fa-search"></i><br>View More</a>
                    <a class="close-overlay hidden">x</a>
                  </div>
                </div>
              </div>
              <h2>Website Design &amp; Development</h2>
              <h3>Smart Grid – Let's map a plan and build a tool that achieves your business goals, educates and inspires your clients, and makes your job easy to share information and connect with millions of viewers</h3>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!--
<section id="news">
	<?php if ( have_posts() ) : ?>
		<h1>News</h1>
		<ul>
		<?php while ( have_posts() ) : the_post(); ?>

			<li>
                <?php //the_post_thumbnail('thumbnail'); ?>
                <h2><a class="post" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <span class="date">
            	  <?php the_date('d', '<span class="day">', '</span>'); ?>
            	  <?php the_time('M', '<span class="month">', '</span>'); ?>
            	</span>
              	<div class="txt">
                	<span class="cat"><?php the_category(', ') ?> | <?php the_excerpt(); ?></span>
                </div>
            </li>

		<?php endwhile;
		// Previous/next post navigation.
		//twentyfourteen_paging_nav(); ?>
		</ul>
		<?php endif; ?>

</section>
-->

<!--
<div id="skills">
	<h2>Skills</h2>
	<ul>
		<li data-dimension="175" data-text="Ai" data-info="Master" data-width="20" data-fontsize="30" data-percent="99.7" data-fgcolor="#ffa624" data-bgcolor="#eee"></li>

		<li data-dimension="175" data-text="Ps" data-info="Expert" data-width="20" data-fontsize="30" data-percent="96" data-fgcolor="#3c3582" data-bgcolor="#eee"></li>

		<li data-dimension="175" data-text="Id" data-info="Expert" data-width="20" data-fontsize="30" data-percent="90" data-fgcolor="#e23996" data-bgcolor="#eee"></li>

		<li data-dimension="175" data-text="Dw" data-info="Expert" data-width="20" data-fontsize="30" data-percent="80" data-fgcolor="#87ed05" data-bgcolor="#eee"></li>

		<li data-dimension="175" data-text="Coda" data-info="Expert" data-width="20" data-fontsize="30" data-percent="80" data-fgcolor="#67c01e" data-bgcolor="#eee"></li>

		<li data-dimension="175" data-text="Flash" data-info="Proficient" data-width="20" data-fontsize="30" data-percent="55" data-fgcolor="#d3170b" data-bgcolor="#eee"></li>

		<li data-dimension="175" data-text="WordPress" data-info="Expert" data-width="20" data-fontsize="20" data-percent="90" data-fgcolor="#bbb" data-bgcolor="#eee"></li>

		<li data-dimension="175" data-text="HTML" data-info="Expert" data-width="20" data-fontsize="30" data-percent="90" data-fgcolor="#f3c50c" data-bgcolor="#eee"></li>

		<li data-dimension="175" data-text="CSS" data-info="Expert" data-width="20" data-fontsize="30" data-percent="93" data-fgcolor="#18d590" data-bgcolor="#eee"></li>

		<li data-dimension="175" data-text="jQuery" data-info="Proficient" data-width="20" data-fontsize="30" data-percent="70" data-fgcolor="#0769AD" data-bgcolor="#eee"></li>

		<li data-dimension="175" data-text="PHP" data-info="Beginner" data-width="20" data-fontsize="30" data-percent="55" data-fgcolor="#9F91E6" data-bgcolor="#eee"></li>
	</ul>
</div>
-->

<section class="intro text-center section-padding" id="intro">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 wp1">
        <h2 class="arrow">A Creative Design &amp; Website Development Studio</h2>
        <p>Ashley Cameron Design is a graphic design, website development, and fine art studio in Lincoln, Nebraska. Ashley has more than six years of advertising agency experience, serving various roles in design and leading the interactive website team. She knows what it takes to make an impact in print and online. All websites she creates are responsive and look great on desktop and mobile devices. <!-- Learn more about the importance of having a responsive website. --> WordPress is her preferred content management system (CMS), which allows you to manage your site on your schedule – without incurring additional costs.</p>

<p>Ashley delivers professional results at affordable rates, compared to agency fees, and within a reasonable timeframe. She will personally listen to your needs and business goals first and put together a customized proposal tailored to fit these needs. Design is not a commodity, meaning that every designer has a different rate. With this said, she will request a rouch idea of what you're willing to invest. Keep in mind, the more you can invest, the more time she can invest in your project.</p>
      </div>
    </div>
  </div>
</section>

<div id="twitter">
  <blockquote>
	<i class="fa-twitter fa"></i>
	<?php dynamic_sidebar('twitter'); ?>
  </blockquote>
	<div class="clear"></div>
</div>

<!--
<div id="about">
	<h2>Where I've Been</h2>
	<img src="<?php echo get_stylesheet_directory_uri().'/images/map.png' ?>" alt="map of where I've been"/>
</div>
-->


<!--
<script>
$( document ).ready(function() {
		$('#skills li').circliful();
    });
</script>
-->
<?php get_footer();