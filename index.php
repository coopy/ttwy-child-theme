<?php get_header(); ?>

    <?php if(get_theme_mod( 'sp_featured_slider' ) == true) : ?>
        <?php get_template_part('inc/featured/featured'); ?>
    <?php endif; ?>

    <?php if(get_theme_mod( 'sp_promo' ) == true) : ?>
        <?php get_template_part('inc/promo/promo'); ?>
    <?php endif; ?>

    <div class="container">

        <div id="content">

            <div id="main" <?php if(get_theme_mod('sp_sidebar_homepage') == true) : ?>class="fullwidth"<?php endif; ?>>

		<?php /* TODO Actual fix - add "no_posts" "home_layout"  option via https://codex.wordpress.org/Class_Reference/WP_Customize_Manager/add_setting */ ?>

            </div>

<?php if(get_theme_mod('sp_sidebar_homepage')) : else : ?><?php get_sidebar(); ?><?php endif; ?>
<?php get_footer(); ?>
