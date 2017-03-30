<?php
/*
 * CUSTOM POST TYPE TEMPLATE
 *
 * This is the custom post type post template. If you edit the post type name, you've got
 * to change the name of this template to reflect that name change.
 *
 * For Example, if your custom post type is "register_post_type( 'bookmarks')",
 * then your single template should be single-bookmarks.php
 *
 * Be aware that you should rename 'product' and 'custom_tag' to the appropiate custom
 * category and taxonomy slugs, or this template will not finish to load properly.
 *
 * For more info: http://codex.wordpress.org/Post_Type_Templates
*/
?>

<?php get_header('anchor'); ?>
				<div class="js-section auto-height">
					<div class="product__moneyshot para" style="background-image: url(<?php the_field('img_01'); ?>)";>
						<div class="center-container text-white">
							<div class="col-md-6 product__title">
								<h1 class=""><?php the_field('project_title'); ?></h1>
								<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
								<?php the_content()?>
								<?php endwhile; ?>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
				<div class="container padding-container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<h1 class="text-center"><?php the_field('project_name'); ?></h1>
							<p class="light">
								<?php the_field('project_description'); ?>
							</p>	
						</div>
					</div>
					<div class="row">
						<div class="col-md-4 col-md-offset-4 text-center">
							<img class="img_fullwidth" src="<?php the_field('img_02');?>">
						</div>
					</div>
				</div>
				<div id="design" class="img_fullwidth">
					<div class="container-fluid design__caption">
						<div class="row">
							<div class="col-md-8 col-md-offset-2">
								<h5>design</h5>
								<?php the_field('design');?>
							</div>
						</div>
					</div>
					<img class="img_fullwidth" src="<?php the_field('img_03');?>">
				</div>
				<div id="features" class="container text-center features__caption padding-container">
					<div class="col-md-8 col-md-offset-2">
						<?php the_field('features');?>
					</div>
				</div>
				
				<?php $design_section = get_field( "design_section" );?>
				<?php if($design_section):?>
					<img class="img_fullwidth" src="<?php the_field('design_section');?>">
				<?php endif; ?>
				<!-- <div id="store" class="container-fluid text-center padding-container store__caption">
					<h5>store</h5>
					<p>experience the <?php the_field('project_title');?></p>
					<a href="<?php the_field('store_url')?>" target="blank">find your store </a>
				</div> -->
				<div id="specifications" class="container padding-container spec__caption">
					<h5 class="text-center">specifications</h5>
					<?php the_field('specifications');?>
					<div class="row">
						<div class="col-md-4 ">
							<a href="<?php the_field('productsheet_url');?>">
								<span><img src="<?php echo get_template_directory_uri(); ?>/library/images/icon_productsheet.svg"></span>
								product sheet
							</a>
						</div>
						<div class="col-md-4 ">
							<a href="<?php the_field('support_url');?>">
								<span><img src="<?php echo get_template_directory_uri(); ?>/library/images/icon_support.svg"></span>
								support
							</a>
						</div>
						<div class="col-md-4">
							<img class="img_fullwidth spec__caption__img" src="<?php the_field('three_view');?>">
						</div>
					</div>
				</div>

<?php get_footer(); ?>
