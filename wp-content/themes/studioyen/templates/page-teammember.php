<?php
/*
 Template Name: Custom Page Team Member
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
					<div class="team-meb">
						<div class="container">
							<div class="row justify-content-center">
								<div class="col-md-4 col-md-offset-1">
									<img class="img_fullwidth" src="<?php echo get_template_directory_uri(); ?>/library/images/about us_05.jpg">
									<p>Changyen Tsai, Designer</p>
								</div>
								<div class="col-md-6">
									<p class="brief">
										Changyen, born in Taiwan, studied fine arts and graphic design in colledge, and then became a public artist in Taiwan; later on acquired his master degree in industrial design from Pratt Institute. Changyen incorporates his full range of life experiences into his work as philosophical conclusions, and is always looking for the perfect marriage between functionality and aesthetics in his work. Changyen is a core member of Studio Yen; dedicates his life and passion to furniture design.
									</p>
									<h4>Experiences:</h4>
									<div class="exp">
										<div>
											<div class="year">1997-2001, Taiwan</div>
											<p>Bachelor of Art/ National Kaohsiung Normal University</p>
										</div>
										<div>
											<div class="year">1997-2001, Taiwan</div>
											<p>Bachelor of Art/ National Kaohsiung Normal University</p>
										</div>
										<div>
											<div class="year">2000-2006, Taiwan</div>
											<p>Art Director/ HMG Mosaic Art Studio</p>
										</div>
										<div>
											<div class="year">2000-2006, Taiwan</div>
											<p>Art Director/ HMG Mosaic Art Studio</p>
										</div>
										<div>
											<div class="year">2006-2009, NY</div>
											<p>Master of Industrial Design/ Pratt Institute</p>
										</div>
										<div>
											<div class="year">2007-2012, Taiwan</div>
											<p>Columnist/Public Art Newsletter Taiwan</p>
										</div>
										<div>
											<div class="year">2014, NJ</div>
											<p>Founder/ Studio Yen</p>
										</div>
										<div>
											<div class="year">2010-2018, NJ</div>
											<p>Technical Footwear Designer/Capezio Ballet Makers Inc.</p>
										</div>
									</div>
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
