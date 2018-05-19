

		</div>
		<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">
			<div class="text-center">
				<a class="footer__logo" href="<?php echo site_url();?>">
					<img class="logo" src="<?php echo get_template_directory_uri(); ?>/library/images/logo_studioyen_black.png">
				</a>
			</div>
			<div class="footer__bottom text-right">	
				<span class="footer__bottom__copy">© Studio Yen 2018</span>
				<?php footer_menu('footer-links') ?>
			</div>
		</footer>
		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->
