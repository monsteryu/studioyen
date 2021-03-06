<?php
/*
 Template Name: Custom Page Our Team
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
					<div class="team">
						<div class="center-container">
							<h2 class="text-center">
								Our Team
							</h2>
						</div>
						<div class="container">
							<?php if( have_rows('team') ): ?>

								<div class="row">

								<?php while( have_rows('team') ): the_row(); 

									// vars
									$image = get_sub_field('img');
									$name = get_sub_field('name');
									$page_link = get_sub_field('page_link');
									?>

									<div class="item">
										<a href="<?php echo $page_link; ?>">
											<img class="pic" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
										</a>
										<a href="<?php echo $page_link; ?>">
											<?php echo $name; ?>
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
