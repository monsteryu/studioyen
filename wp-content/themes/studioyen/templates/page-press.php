<?php
/*
 Template Name: Custom Page Press
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>

<?php get_header('about'); ?>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<div class="press">
							<div class="container">
								<div class="row">
									<div class="col-md-8 col-md-offset-2 press-hero">
									
										<img class="alignnone size-full wp-image-450" src="http://www.studioyen.co/wp-content/uploads/2016/06/about-us_01.jpg" alt="about-us_01" width="860" height="573">
										<h2>Hello there!</h2>
										<p>Studio Yen is thrilled to announce its first product debut at the 30th anniversary of ICFF, featuring the Essential collections, Penn and Horn lamps, and one of the most challenging projects, Storyteller. Storyteller demostrates our design vision through patterning and structural collaboration at Studio Yen; it also provides great opportunities to explore dinamic engineering solutions. With a similar design practice, Penn & Horn lamps represent a clearer geometrical patterning and precise calculations for a better understanding to the transitioning in forms and space. On the contrary, the Essential Collection celebrates the essential beauty of the forms, the function, the craftsmanship and its material characters. These two design fashions have seemingly polarized our design practices, however they also like Ying and Yang, which have coexisted in the world and keeping our life in balance. These parallel themes have run through our core design principles and reflect on who we are at Studio Yen.</p>
										<h4>Let us tell you about our studio.</h4>

										<p>After several years of preparation, Studio Yen was founded in 2014 by Ichao Wang and Changyen Tsai in the era of New industrial revolution, along with tetanic social movements around the world. With a team members included Artist, Architect, Craftsman, Designer, Engineer, Musician, Photographer, Programmer, and Scientist, Studio Yen dedicates its core design principles to both ancient wisdom and cutting edge technologies, keeping the balance between scientific researches and timeless design values to improve the quality of our modern life. </p>
										<h4>The Theme of Patterning, 2018</h4>
										<p>Our design practices are based on fundamental design principles. With structural patterns, Storyteller, Penn and Horn were created. Changyen is constantly searching for a creative connection between</p>


									</div>
								</div>
							</div>
							<div class="press-release container">
								<div class="row">
									<div class="item">
										<a href="#">
											<img src="https://www.studioyen.co/wp-content/uploads/2016/06/EB01.jpg" class="attachment-full size-full wp-post-image" alt="" />
										</a>
										<a href="#">
											Ichao Wang
										</a>
									</div>
									<div class="item">
										<a href="#">
											<img src="https://www.studioyen.co/wp-content/uploads/2016/06/EB01.jpg" class="attachment-full size-full wp-post-image" alt="" />
										</a>
										<a href="#">
											Ichao Wang
										</a>
									</div>
									<div class="item">
										<a href="#">
											<img src="https://www.studioyen.co/wp-content/uploads/2016/06/EB01.jpg" class="attachment-full size-full wp-post-image" alt="" />
										</a>
										<a href="#">
											Ichao Wang
										</a>
									</div>
								</div>
							</div>
						</div>

					<?php comments_template(); ?>

				
				<?php endwhile; else : ?>

						<article id="post-not-found" class="hentry cf">
								<header class="article-header">
									<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
							</header>
								<section class="entry-content">
									<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
							</section>
							<footer class="article-footer">
									<p><?php _e( 'This is the error message in the page-custom.php template.', 'bonestheme' ); ?></p>
							</footer>
						</article>

				<?php endif; ?>


<?php get_footer(); ?>
