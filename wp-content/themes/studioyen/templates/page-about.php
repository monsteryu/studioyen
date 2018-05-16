<?php
/*
 Template Name: Custom Page About
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
						<div class="full_background para" style="background-image: url(<?php the_field('hero_img'); ?>)";>
							<div class="center-container">
								<h2 class="v-center">
									<?php the_field('title'); ?>
								</h2>
							</div>
						</div>
						<div class="content">
							<?php the_field('content'); ?>
						</div>
						<div class="center-container">
							<h3>
								PURSUE  OUR  CALLING
							</h3>
							
						</div>
						<div class="container">
							<div class="row">
								<div class="col-md-4 col-md-offset-4 ">
									<img class="img_fullwidth" src="<?php echo get_template_directory_uri(); ?>/library/images/about us_05.jpg">
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
