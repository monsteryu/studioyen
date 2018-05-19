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
								<div class="col-md-4 col-md-offset-1 pic col-sm-6">
									<?php 
									$image = get_field('img');
									if( !empty($image) ): ?>
										<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
									<?php endif; ?>
									<p><?php the_field('name'); ?></p>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="brief">
										<?php the_field('brief'); ?>
									</div>
									<h4>Experiences:</h4>
									

										<?php if( have_rows('experiences') ): ?>

											<div class="exp">

											<?php while( have_rows('experiences') ): the_row(); 

												// vars
												$year = get_sub_field('year');
												$experience = get_sub_field('experience');
												?>

												<div>
													<?php if( $year ): ?>
														<div class="year"><?php echo $year; ?></div>
													<?php endif; ?>
														<p><?php echo $experience; ?></p>
												</div>

											<?php endwhile; ?>

											</div>

										<?php endif; ?>

									
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
