<?php
/*
 Template Name: Custom Page Landing
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

<?php get_header(); ?>
			<div id="fullpage">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<?php
							$images = get_field('landing_slideshow');
						 ?>
						<div class="section" id="section0">
							<?php foreach( $images as $image ): ?>
								<?php $src = $image['url']; ?>
								<div class="slide" style="background-image: url(<?php echo $src ?>)";></div>
							<?php endforeach; ?>	
						</div>
						<?php
							$bg_url = get_field('bg_contact');
						 ?>
						<div class="section contact" style="background-image: url(<?php echo $bg_url ?>)" id="section1">
							<div class="container">
								<div class="row">
									<div class="col-md-6">
										<?php the_content();?>
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

			</div>
			<footer class="footer fix-bottom" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">
				<div class="footer__bottom text-right">	
					<span class="footer__bottom__copy">© Studio Yen 2016</span>
					<?php footer_menu('footer-links') ?>
				</div>
			</footer>



<?php get_footer(); ?>
