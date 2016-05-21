
		<!-- END CONTENT -->
		</div>

	<!-- END CONTAINER -->
	</div>

  <div id="mailchimp-footer">
  <?php	/* Widgetised Area */	if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('MailChimp Footer') ) ?>
  </div>

	<footer id="footer">

		<div class="container">

			<?php if(!get_theme_mod('sp_footer_widgets')) : ?>
			<div class="footer-widgets">

				<div class="footer-widget">
					<?php	/* Widgetised Area */	if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('Footer 1') ) ?>
				</div>

				<div class="footer-widget">
					<?php	/* Widgetised Area */	if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('Footer 2') ) ?>
				</div>

				<div class="footer-widget">
					<?php	/* Widgetised Area */	if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('Footer 3') ) ?>
				</div>

			</div>
			<?php endif; ?>

			<?php if(!get_theme_mod('sp_footer_share')) : ?>
			<div class="footer-social">

				<?php if(get_theme_mod('sp_facebook')) : ?><a href="http://facebook.com/<?php echo esc_html(get_theme_mod('sp_facebook')); ?>" target="_blank"><i class="fa fa-facebook"></i> <span>Facebook</span></a><?php endif; ?>
				<?php if(get_theme_mod('sp_twitter')) : ?><a href="http://twitter.com/<?php echo esc_html(get_theme_mod('sp_twitter')); ?>" target="_blank"><i class="fa fa-twitter"></i> <span>Twitter</span></a><?php endif; ?>
				<?php if(get_theme_mod('sp_instagram')) : ?><a href="http://instagram.com/<?php echo esc_html(get_theme_mod('sp_instagram')); ?>" target="_blank"><i class="fa fa-instagram"></i> <span>Instagram</span></a><?php endif; ?>
				<?php if(get_theme_mod('sp_pinterest')) : ?><a href="http://pinterest.com/<?php echo esc_html(get_theme_mod('sp_pinterest')); ?>" target="_blank"><i class="fa fa-pinterest"></i> <span>Pinterest</span></a><?php endif; ?>
				<?php if(get_theme_mod('sp_bloglovin')) : ?><a href="http://bloglovin.com/<?php echo esc_html(get_theme_mod('sp_bloglovin')); ?>" target="_blank"><i class="fa fa-heart"></i> <span>Bloglovin</span></a><?php endif; ?>
				<?php if(get_theme_mod('sp_google')) : ?><a href="http://plus.google.com/<?php echo esc_html(get_theme_mod('sp_google')); ?>" target="_blank"><i class="fa fa-google-plus"></i> <span>Google +</span></a><?php endif; ?>
				<?php if(get_theme_mod('sp_tumblr')) : ?><a href="http://<?php echo esc_html(get_theme_mod('sp_tumblr')); ?>.tumblr.com/" target="_blank"><i class="fa fa-tumblr"></i> <span>Tumblr</span></a><?php endif; ?>
				<?php if(get_theme_mod('sp_youtube')) : ?><a href="http://youtube.com/<?php echo esc_html(get_theme_mod('sp_youtube')); ?>" target="_blank"><i class="fa fa-youtube-play"></i> <span>Youtube</span></a><?php endif; ?>
				<?php if(get_theme_mod('sp_dribbble')) : ?><a href="http://dribbble.com/<?php echo esc_html(get_theme_mod('sp_dribbble')); ?>" target="_blank"><i class="fa fa-dribbble"></i> <span>Dribbble</span></a><?php endif; ?>
				<?php if(get_theme_mod('sp_soundcloud')) : ?><a href="http://soundcloud.com/<?php echo esc_html(get_theme_mod('sp_soundcloud')); ?>" target="_blank"><i class="fa fa-soundcloud"></i> <span>Soundcloud</span></a><?php endif; ?>
				<?php if(get_theme_mod('sp_vimeo')) : ?><a href="http://vimeo.com/<?php echo esc_html(get_theme_mod('sp_vimeo')); ?>" target="_blank"><i class="fa fa-vimeo-square"></i> <span>Vimeo</span></a><?php endif; ?>
				<?php if(get_theme_mod('sp_linkedin')) : ?><a href="<?php echo esc_html(get_theme_mod('sp_linkedin')); ?>" target="_blank"><i class="fa fa-linkedin"></i> <span>LinkedIn</span></a><?php endif; ?>
				<?php if(get_theme_mod('sp_rss')) : ?><a href="<?php echo esc_url(get_theme_mod('sp_rss')); ?>" target="_blank"><i class="fa fa-rss"></i> <span>RSS</span></a><?php endif; ?>

			</div>
			<?php endif; ?>

		</div>

	</footer>

	<div id="instagram-footer">
	<?php	/* Widgetised Area */	if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('Instagram Footer') ) ?>
	</div>

	<div id="footer-copyright">

		<div class="container">

			<p><?php echo wp_kses_post(get_theme_mod('sp_footer_copyright', '&copy; 2015 - Solo Pine. All Rights Reserved. Designed & Developed by <a href="http://solopine.com">SoloPine.com</a>')); ?></p>
			<?php if(!get_theme_mod('sp_footer_top')) : ?><a href="#" class="back-to-top"><?php _e( 'Back to top', 'solopine' ); ?> <i class="fa fa-angle-up"></i></a><?php endif; ?>

		</div>

	</div>

	<?php wp_footer(); ?>

</body>

</html>
