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
									
										<?php 

										$image = get_field('hero_image');

										if( !empty($image) ): ?>

											<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

										<?php endif; ?>
										<h2><?php the_field('press_title'); ?></h2>
										<?php the_field('press_content'); ?>

									</div>
								</div>
							</div>
							<div class="press-release container">
							<h2 class="text-center">
								Press Release
							</h2>
								<?php if( have_rows('press_release') ): ?>

									<div class="row">

									<?php while( have_rows('press_release') ): the_row(); 

										// vars
										$image = get_sub_field('img');
										$title = get_sub_field('title');
										$file = get_sub_field('file');
										?>

										<div class="item">
											<a target="_blank" href="<?php echo $file['url']; ?>">
												<img class="pic" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
											</a>
											<a target="_blank" href="<?php echo $file['url']; ?>">
												<?php echo $title; ?>
											</a>
											</div>

									<?php endwhile; ?>

									</div>

								<?php endif; ?>
								
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
