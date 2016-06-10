<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="post-header">

		<?php if(!get_theme_mod('sp_post_comment_link')) : ?>
		<span class="comment-box"><?php comments_popup_link( '0', '1', '%', '', ''); ?></span>
		<?php endif; ?>

		<?php if(!get_theme_mod('sp_post_cat')) : ?>
		<span class="cat"><span class="by"><?php _e( 'In', 'solopine' ); ?></span> <?php the_category('<span>/</span> '); ?></span>
		<?php endif; ?>

		<?php if(is_single()) : ?>
			<h1><?php the_title(); ?></h1>
		<?php else : ?>
			<h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php endif; ?>

	</div>

	<?php if(has_post_format('gallery')) : ?>

		<?php $images = get_post_meta( $post->ID, '_format_gallery_images', true ); ?>

		<?php if($images) : ?>
		<div class="post-img">
		<div class="sideslides">
		<ul class="bxslider">
		<?php foreach($images as $image) : ?>

			<?php $the_image = wp_get_attachment_image_src( $image, 'full-thumb' ); ?>
			<?php $the_caption = get_post_field('post_excerpt', $image); ?>
			<li><img src="<?php echo esc_url($the_image[0]); ?>" <?php if($the_caption) : ?>title="<?php echo $the_caption; ?>"<?php endif; ?> /></li>

		<?php endforeach; ?>
		</ul>
		</div>
		</div>
		<?php endif; ?>

	<?php elseif(has_post_format('video')) : ?>

		<div class="post-img">
			<?php $sp_video = get_post_meta( $post->ID, '_format_video_embed', true ); ?>
			<?php if(wp_oembed_get( $sp_video )) : ?>
				<?php echo wp_oembed_get($sp_video); ?>
			<?php else : ?>
				<?php echo $sp_video; ?>
			<?php endif; ?>
		</div>

	<?php elseif(has_post_format('audio')) : ?>

		<div class="post-img audio">
			<?php $sp_audio = get_post_meta( $post->ID, '_format_audio_embed', true ); ?>
			<?php if(wp_oembed_get( $sp_audio )) : ?>
				<?php echo wp_oembed_get($sp_audio); ?>
			<?php else : ?>
				<?php echo $sp_audio; ?>
			<?php endif; ?>
		</div>

	<?php else : ?>

		<?php if(has_post_thumbnail()) : ?>
		<?php if(!get_theme_mod('sp_post_thumb')) : ?>
		<div class="post-img">
			<?php if(is_single()) : ?>
				<?php the_post_thumbnail('full-thumb', array('class' => 'float-right')); ?>
			<?php else : ?>
				<a href="<?php echo get_permalink() ?>"><?php the_post_thumbnail('full-thumb', array('class' => 'float-right')); ?></a>
			<?php endif; ?>
		</div>
		<?php endif; ?>
		<?php endif; ?>

	<?php endif; ?>

	<div class="post-entry">

		<?php if(is_single()) : ?>

			<?php the_content(); ?>

		<?php else : ?>

			<?php if(get_theme_mod('sp_post_summary') == 'excerpt') : ?>

				<p><?php echo sp_string_limit_words(get_the_excerpt(), 80); ?>&hellip;</p>
				<p><a href="<?php echo get_permalink() ?>" class="more-link"><span class="more-button"><?php _e( 'Continue Reading', 'solopine' ); ?> &rarr;</span></a></p>

			<?php else : ?>

				<?php the_content(__('<span class="more-button">Continue Reading &rarr;</span>', 'solopine')); ?>

			<?php endif; ?>

		<?php endif; ?>

		<?php wp_link_pages(); ?>

		<?php if(!get_theme_mod('sp_post_tags')) : ?>
		<?php if(is_single()) : ?>
		<?php if(has_tag()) : ?>
			<div class="post-tags">
				<?php the_tags("",""); ?>
			</div>
		<?php endif; ?>
		<?php endif; ?>
		<?php endif; ?>

	</div>

	<?php if(get_theme_mod('sp_post_comment_link') && get_theme_mod('sp_post_share') && get_theme_mod('sp_post_share_author')) : else : ?>
	<div class="post-meta">
		<div class="meta-info">
			<?php if(!get_theme_mod('sp_post_date')) : ?><span class="meta-date"><?php the_time( get_option('date_format') ); ?></span><?php endif; ?> <?php if(!get_theme_mod('sp_post_share_author')) : ?><span class="by"><?php _e( 'By', 'solopine' ); ?></span> <?php the_author_posts_link(); ?><?php endif; ?>
		</div>

		<?php if(get_theme_mod('sp_post_comment_link') && get_theme_mod('sp_post_share')) : else : ?>
		<div class="post-share">

			<?php if(!get_theme_mod('sp_post_share')) : ?>

			<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>"><i class="fa fa-facebook"></i> <span><?php _e( 'Share', 'solopine' ); ?></span></a>
			<a target="_blank" href="https://twitter.com/home?status=Check%20out%20this%20article:%20<?php print solopine_social_title( get_the_title() ); ?>%20-%20<?php echo urlencode(the_permalink()); ?>"><i class="fa fa-twitter"></i> <span><?php _e( 'Tweet', 'solopine' ); ?></span></a>
			<?php $pin_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID)); ?>
			<a data-pin-do="skipLink" target="_blank" href="https://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=<?php echo $pin_image; ?>&description=<?php the_title(); ?>"><i class="fa fa-pinterest"></i> <span><?php _e( 'Pin it', 'solopine' ); ?></span></a>
			<a target="_blank" href="https://plus.google.com/share?url=<?php the_permalink(); ?>"><i class="fa fa-google-plus"></i> <span><?php _e( '+1', 'solopine' ); ?></span></a>

			<?php endif; ?>

		</div>
		<?php endif; ?>

	</div>
	<?php endif; ?>

	<?php if(!get_theme_mod('sp_post_author')) : ?>
	<?php if(is_single()) : ?>
		<?php get_template_part('inc/templates/about_author'); ?>
	<?php endif; ?>
	<?php endif; ?>

	<?php if(!get_theme_mod('sp_post_related')) : ?>
	<?php if(is_single()) : ?>
		<?php get_template_part('inc/templates/related_posts'); ?>
	<?php endif; ?>
	<?php endif; ?>

	<?php if(!get_theme_mod('sp_post_pagination')) : ?>
	<?php if(is_single()) : ?>
		<?php get_template_part('inc/templates/post_pagination'); ?>
	<?php endif; ?>
	<?php endif; ?>

	<?php comments_template( '', true );  ?>

</article>