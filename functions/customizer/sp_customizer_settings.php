<?php

//////////////////////////////////////////////////////////////////
// Customizer - Add Custom Styling
//////////////////////////////////////////////////////////////////
function solopine_customizer_style()
{
	wp_enqueue_style('customizer-css', get_stylesheet_directory_uri() . '/functions/customizer/css/customizer.css');
}
add_action('customize_controls_print_styles', 'solopine_customizer_style');

//////////////////////////////////////////////////////////////////
// Customizer - Add Settings
//////////////////////////////////////////////////////////////////
function solopine_register_theme_customizer( $wp_customize ) {

	// Add Sections/Panels
	$wp_customize->add_section( 'solopine_new_section_custom_css' , array(
   		'title'      => 'Custom CSS',
   		'description'=> 'Add your custom CSS which will overwrite the theme CSS',
   		'priority'   => 105,
	) );

	$wp_customize->add_section( 'solopine_new_section_newsletter' , array(
   		'title'      => 'Newsletter Layout',
   		'description'=> '',
   		'priority'   => 102,
	) );

	$wp_customize->add_section( 'solopine_new_section_shop' , array(
   		'title'      => 'Shop Settings',
   		'description'=> '',
   		'priority'   => 101,
	) );

	$wp_customize->add_panel( 'panel_color', array(
		'priority'       => 100,
		'capability'     => 'edit_theme_options',
		'title'          => 'Color Settings',
	) );

		$wp_customize->add_section( 'solopine_new_section_color_accent' , array(
			'title'      => 'Colors: Misc',
			'description'=> '',
			'priority'   => 8,
			'panel'  => 'panel_color',
		) );

		$wp_customize->add_section( 'solopine_new_section_color_post_color' , array(
			'title'      => 'Colors: Posts',
			'description'=> '',
			'priority'   => 7,
			'panel'  => 'panel_color',
		) );

		$wp_customize->add_section( 'solopine_new_section_color_footer' , array(
			'title'      => 'Colors: Footer',
			'description'=> '',
			'priority'   => 6,
			'panel'  => 'panel_color',
		) );

		$wp_customize->add_section( 'solopine_new_section_color_sidebar' , array(
			'title'      => 'Colors: Sidebar',
			'description'=> '',
			'priority'   => 5,
			'panel'  => 'panel_color',
		) );

		$wp_customize->add_section( 'solopine_new_section_color_mobile_menu' , array(
			'title'      => 'Colors: Mobile Menu',
			'description'=> '',
			'priority'   => 4,
			'panel'  => 'panel_color',
		) );

		$wp_customize->add_section( 'solopine_new_section_color_menu' , array(
			'title'      => 'Colors: Menu',
			'description'=> '',
			'priority'   => 3,
			'panel'  => 'panel_color',
		) );

		$wp_customize->add_section( 'solopine_new_section_color_header' , array(
			'title'      => 'Colors: Header',
			'description'=> '',
			'priority'   => 2,
			'panel'  => 'panel_color',
		) );

		$wp_customize->add_section( 'solopine_new_section_color_topbar' , array(
			'title'      => 'Colors: Top Bar',
			'description'=> '',
			'priority'   => 1,
			'panel'  => 'panel_color',
		) );

	$wp_customize->add_section( 'solopine_new_section_footer' , array(
   		'title'      => 'Footer Settings',
   		'description'=> '',
   		'priority'   => 99,
	) );

	$wp_customize->add_section( 'solopine_new_section_social' , array(
   		'title'      => 'Social Media Settings',
   		'description'=> 'Enter your social media usernames. Icons will not show if left blank.',
   		'priority'   => 98,
	) );

	$wp_customize->add_section( 'solopine_new_section_page' , array(
   		'title'      => 'Page Settings',
   		'description'=> '',
   		'priority'   => 97,
	) );

	$wp_customize->add_section( 'solopine_new_section_post' , array(
   		'title'      => 'Post Settings',
   		'description'=> '',
   		'priority'   => 96,
	) );

	$wp_customize->add_section( 'solopine_new_section_promo' , array(
		'title'      => 'Promo Box Settings',
		'description'=> '',
		'priority'   => 95,
	) );

	$wp_customize->add_section( 'solopine_new_section_featured' , array(
		'title'      => 'Featured Area Settings',
		'description'=> '',
		'priority'   => 94,
	) );

	$wp_customize->add_section( 'solopine_new_section_topbar' , array(
		'title'      => 'Top Bar Settings',
		'description'=> '',
		'priority'   => 92,
	) );

	$wp_customize->add_section( 'solopine_new_section_logo_header' , array(
   		'title'      => 'Logo and Header Settings',
   		'description'=> '',
   		'priority'   => 91,
	) );

	$wp_customize->add_section( 'solopine_new_section_general' , array(
   		'title'      => 'General Settings',
   		'description'=> '',
   		'priority'   => 90,
	) );



	// Add Setting

		// General
		$wp_customize->add_setting(
			'sp_favicon'
		);

		$wp_customize->add_setting(
			'sp_responsive'
		);

		$wp_customize->add_setting(
	        'sp_home_layout',
	        array(
	            'default'     => 'full'
	        )
	    );

		$wp_customize->add_setting(
	        'sp_archive_layout',
	        array(
	            'default'     => 'full'
	        )
	    );

		$wp_customize->add_setting(
	        'sp_sidebar_homepage',
	        array(
	            'default'     => false
	        )
	    );

		$wp_customize->add_setting(
	        'sp_sidebar_archive',
	        array(
	            'default'     => false
	        )
	    );

		$wp_customize->add_setting(
	        'sp_post_summary',
	        array(
	            'default'     => 'full'
	        )
	    );

		// Header & Logo
		$wp_customize->add_setting(
	        'sp_logo'
	    );
		$wp_customize->add_setting(
	        'sp_header_padding_top',
	        array(
	            'default'     => '42'
	        )
	    );
		$wp_customize->add_setting(
	        'sp_header_padding_bottom',
	        array(
	            'default'     => '42'
	        )
	    );

		// Top Bar
		$wp_customize->add_setting(
	        'sp_topbar_check',
	        array(
	            'default'     => false
	        )
	    );
		$wp_customize->add_setting(
	        'sp_topbar_social_check',
	        array(
	            'default'     => false
	        )
	    );
		$wp_customize->add_setting(
	        'sp_topbar_search_check',
	        array(
	            'default'     => false
	        )
	    );

		// Featured area
		$wp_customize->add_setting(
	        'sp_featured_slider',
	        array(
	            'default'     => false
	        )
	    );
		$wp_customize->add_setting(
	        'sp_featured_cat'
	    );
		$wp_customize->add_setting(
	        'sp_featured_id',
	        array(
	            'default'     => ''
	        )
	    );
		$wp_customize->add_setting(
	        'sp_featured_slider_slides',
	        array(
	            'default'     => '5'
	        )
	    );

		// Promo Boxes
		$wp_customize->add_setting(
	        'sp_promo',
	        array(
	            'default'     => false
	        )
	    );
		$wp_customize->add_setting(
	        'sp_promo1_title',
	        array(
	            'default'     => ''
	        )
	    );
		$wp_customize->add_setting(
	        'sp_promo1_subtitle',
	        array(
	            'default'     => ''
	        )
	    );
		$wp_customize->add_setting(
	        'sp_promo1_image'
	    );
		$wp_customize->add_setting(
	        'sp_promo1_url',
	        array(
	            'default'     => ''
	        )
	    );
		$wp_customize->add_setting(
	        'sp_promo2_title',
	        array(
	            'default'     => ''
	        )
	    );
		$wp_customize->add_setting(
	        'sp_promo2_subtitle',
	        array(
	            'default'     => ''
	        )
	    );
		$wp_customize->add_setting(
	        'sp_promo2_image'
	    );
		$wp_customize->add_setting(
	        'sp_promo2_url',
	        array(
	            'default'     => ''
	        )
	    );
		$wp_customize->add_setting(
	        'sp_promo3_title',
	        array(
	            'default'     => ''
	        )
	    );
		$wp_customize->add_setting(
	        'sp_promo3_subtitle',
	        array(
	            'default'     => ''
	        )
	    );
		$wp_customize->add_setting(
	        'sp_promo3_image'
	    );
		$wp_customize->add_setting(
	        'sp_promo3_url',
	        array(
	            'default'     => ''
	        )
	    );

		// Post Settings
		$wp_customize->add_setting(
	        'sp_post_tags',
	        array(
	            'default'     => false
	        )
	    );
		$wp_customize->add_setting(
	        'sp_post_author',
	        array(
	            'default'     => false
	        )
	    );
		$wp_customize->add_setting(
	        'sp_post_related',
	        array(
	            'default'     => false
	        )
	    );
		$wp_customize->add_setting(
	        'sp_post_share',
	        array(
	            'default'     => false
	        )
	    );
		$wp_customize->add_setting(
	        'sp_post_share_author',
	        array(
	            'default'     => false
	        )
	    );
		$wp_customize->add_setting(
	        'sp_post_comment_link',
	        array(
	            'default'     => false
	        )
	    );
		$wp_customize->add_setting(
	        'sp_post_thumb',
	        array(
	            'default'     => false
	        )
	    );
		$wp_customize->add_setting(
	        'sp_post_date',
	        array(
	            'default'     => false
	        )
	    );
		$wp_customize->add_setting(
	        'sp_post_cat',
	        array(
	            'default'     => false
	        )
	    );
		$wp_customize->add_setting(
	        'sp_post_pagination',
	        array(
	            'default'     => false
	        )
	    );

		// Page
		$wp_customize->add_setting(
	        'sp_page_title',
	        array(
	            'default'     => false
	        )
	    );
		$wp_customize->add_setting(
	        'sp_page_share',
	        array(
	            'default'     => false
	        )
	    );

		// Social Media
		$wp_customize->add_setting(
	        'sp_facebook',
	        array(
	            'default'     => ''
	        )
	    );
		$wp_customize->add_setting(
	        'sp_twitter',
	        array(
	            'default'     => ''
	        )
	    );
		$wp_customize->add_setting(
	        'sp_instagram',
	        array(
	            'default'     => ''
	        )
	    );
		$wp_customize->add_setting(
	        'sp_pinterest',
	        array(
	            'default'     => ''
	        )
	    );
		$wp_customize->add_setting(
	        'sp_tumblr',
	        array(
	            'default'     => ''
	        )
	    );
		$wp_customize->add_setting(
	        'sp_bloglovin',
	        array(
	            'default'     => ''
	        )
	    );
		$wp_customize->add_setting(
	        'sp_tumblr',
	        array(
	            'default'     => ''
	        )
	    );
		$wp_customize->add_setting(
	        'sp_google',
	        array(
	            'default'     => ''
	        )
	    );
		$wp_customize->add_setting(
	        'sp_youtube',
	        array(
	            'default'     => ''
	        )
	    );
	    $wp_customize->add_setting(
	        'sp_dribbble',
	        array(
	            'default'     => ''
	        )
	    );
	    $wp_customize->add_setting(
	        'sp_soundcloud',
	        array(
	            'default'     => ''
	        )
	    );
	    $wp_customize->add_setting(
	        'sp_vimeo',
	        array(
	            'default'     => ''
	        )
	    );
		$wp_customize->add_setting(
	        'sp_linkedin',
	        array(
	            'default'     => ''
	        )
	    );
		$wp_customize->add_setting(
	        'sp_rss',
	        array(
	            'default'     => ''
	        )
	    );

		// Footer
		$wp_customize->add_setting(
	        'sp_footer_widgets',
	        array(
	            'default'     => false
	        )
	    );
		$wp_customize->add_setting(
	        'sp_footer_copyright',
	        array(
	            'default'     => '&copy; 2015 - Solo Pine. All Rights Reserved. Designed & Developed by <a href="http://solopine.com">SoloPine.com</a>'
	        )
	    );
		$wp_customize->add_setting(
	        'sp_footer_share',
	        array(
	            'default'     => false
	        )
	    );
		$wp_customize->add_setting(
	        'sp_footer_top',
	        array(
	            'default'     => false
	        )
	    );

		// Colors: top bar
		$wp_customize->add_setting(
			'sp_topbar_bg',
			array(
				'default'     => '#ffffff'
			)
		);
		$wp_customize->add_setting(
			'sp_topbar_border',
			array(
				'default'     => '#e5e5e5'
			)
		);
		$wp_customize->add_setting(
			'sp_topbar_social_color',
			array(
				'default'     => '#000000'
			)
		);
		$wp_customize->add_setting(
			'sp_topbar_social_color_hover',
			array(
				'default'     => '#999999'
			)
		);
		$wp_customize->add_setting(
			'sp_topbar_search_icon_color',
			array(
				'default'     => '#000000'
			)
		);
		$wp_customize->add_setting(
			'sp_topbar_search_text_color',
			array(
				'default'     => '#aaaaaa'
			)
		);
		$wp_customize->add_setting(
			'sp_topbar_shop_icon_color',
			array(
				'default'     => '#000000'
			)
		);
		$wp_customize->add_setting(
			'sp_topbar_shop_count_bg',
			array(
				'default'     => '#efa7a1'
			)
		);
		$wp_customize->add_setting(
			'sp_topbar_shop_count_color',
			array(
				'default'     => '#ffffff'
			)
		);
		$wp_customize->add_setting(
			'sp_topbar_shop_border',
			array(
				'default'     => '#e5e5e5'
			)
		);

		// Colors: Header
		$wp_customize->add_setting(
			'sp_header_bg_color',
			array(
				'default'     => '#ffffff'
			)
		);
		$wp_customize->add_setting(
	        'sp_header_bg_image'
	    );

		$wp_customize->add_setting(
	        'sp_header_bg_repeat',
	        array(
	            'default'     => 'repeat'
	        )
	    );

		$wp_customize->add_setting(
	        'sp_header_bg_size',
	        array(
	            'default'     => 'auto'
	        )
	    );

		$wp_customize->add_setting(
	        'sp_header_bg_position',
	        array(
	            'default'     => 'center center'
	        )
	    );

		// Colors: Menu
		$wp_customize->add_setting(
			'sp_menu_bg',
			array(
				'default'     => '#ffffff'
			)
		);
		$wp_customize->add_setting(
			'sp_menu_border',
			array(
				'default'     => '#e5e5e5'
			)
		);
		$wp_customize->add_setting(
			'sp_menu_text_color',
			array(
				'default'     => '#333333'
			)
		);
		$wp_customize->add_setting(
			'sp_menu_text_active',
			array(
				'default'     => '#000000'
			)
		);
		$wp_customize->add_setting(
			'sp_menu_drop_arrow',
			array(
				'default'     => '#efa7a1'
			)
		);
		$wp_customize->add_setting(
			'sp_drop_bg',
			array(
				'default'     => '#ffffff'
			)
		);
		$wp_customize->add_setting(
			'sp_drop_border',
			array(
				'default'     => '#e5e5e5'
			)
		);
		$wp_customize->add_setting(
			'sp_drop_text_color',
			array(
				'default'     => '#999999'
			)
		);
		$wp_customize->add_setting(
			'sp_drop_text_hover_bg',
			array(
				'default'     => '#f7f7f7'
			)
		);
		$wp_customize->add_setting(
			'sp_drop_text_hover_color',
			array(
				'default'     => '#999999'
			)
		);

		// Colors: Mobile Menu
		$wp_customize->add_setting(
			'sp_mobile_burger',
			array(
				'default'     => '#000000'
			)
		);
		$wp_customize->add_setting(
			'sp_mobile_dropdown_bg',
			array(
				'default'     => '#ffffff'
			)
		);
		$wp_customize->add_setting(
			'sp_mobile_dropdown_border',
			array(
				'default'     => '#e5e5e5'
			)
		);
		$wp_customize->add_setting(
			'sp_mobile_dropdown_text',
			array(
				'default'     => '#313131'
			)
		);
		$wp_customize->add_setting(
			'sp_mobile_dropdown_text_hover',
			array(
				'default'     => '#313131'
			)
		);
		$wp_customize->add_setting(
			'sp_mobile_dropdown_text_bg_hover',
			array(
				'default'     => '#eeeeee'
			)
		);

		$wp_customize->add_setting(
			'sp_mobile_social_color',
			array(
				'default'     => '#000000'
			)
		);
		$wp_customize->add_setting(
			'sp_mobile_social_color_hover',
			array(
				'default'     => '#999999'
			)
		);

		// Sidebar
		$wp_customize->add_setting(
			'sp_sidebar_widget_border',
			array(
				'default'     => '#e5e5e5'
			)
		);
		$wp_customize->add_setting(
			'sp_sidebar_title_color',
			array(
				'default'     => '#111111'
			)
		);
		$wp_customize->add_setting(
			'sp_sidebar_title_line_color2',
			array(
				'default'     => '#d9d9d9'
			)
		);
		$wp_customize->add_setting(
			'sp_sidebar_social_icon',
			array(
				'default'     => '#000000'
			)
		);
		$wp_customize->add_setting(
			'sp_sidebar_social_icon_hover',
			array(
				'default'     => '#999999'
			)
		);

		// Colors: Footer
		$wp_customize->add_setting(
			'sp_footer_bg',
			array(
				'default'     => '#f7f7f7'
			)
		);

		$wp_customize->add_setting(
			'sp_footer_title_color',
			array(
				'default'     => '#000000'
			)
		);
		$wp_customize->add_setting(
			'sp_footer_title_line_color',
			array(
				'default'     => '#e5e5e5'
			)
		);
		$wp_customize->add_setting(
			'sp_footer_text_color',
			array(
				'default'     => '#000000'
			)
		);
		$wp_customize->add_setting(
			'sp_footer_link_color',
			array(
				'default'     => '#000000'
			)
		);
		$wp_customize->add_setting(
			'sp_footer_social_icon',
			array(
				'default'     => '#777777'
			)
		);
		$wp_customize->add_setting(
			'sp_footer_social_icon_hover',
			array(
				'default'     => '#000000'
			)
		);
		$wp_customize->add_setting(
			'sp_footer_social_border',
			array(
				'default'     => '#e5e5e5'
			)
		);
		$wp_customize->add_setting(
			'sp_footer_copyright_text_color',
			array(
				'default'     => '#888888'
			)
		);
		$wp_customize->add_setting(
			'sp_footer_back_color',
			array(
				'default'     => '#888888'
			)
		);

		// Colors: Posts
		$wp_customize->add_setting(
			'sp_post_title',
			array(
				'default'     => '#000000'
			)
		);
		$wp_customize->add_setting(
			'sp_post_category_color',
			array(
				'default'     => '#efa7a1'
			)
		);
		$wp_customize->add_setting(
			'sp_post_text',
			array(
				'default'     => '#000000'
			)
		);
		$wp_customize->add_setting(
			'sp_post_h',
			array(
				'default'     => '#000000'
			)
		);
		$wp_customize->add_setting(
			'sp_post_more_bg',
			array(
				'default'     => '#ffffff'
			)
		);
		$wp_customize->add_setting(
			'sp_post_more_border',
			array(
				'default'     => '#e8e8e8'
			)
		);
		$wp_customize->add_setting(
			'sp_post_more_text',
			array(
				'default'     => '#888888'
			)
		);
		$wp_customize->add_setting(
			'sp_post_more_bg_hover',
			array(
				'default'     => '#000000'
			)
		);
		$wp_customize->add_setting(
			'sp_post_more_border_hover',
			array(
				'default'     => '#000000'
			)
		);
		$wp_customize->add_setting(
			'sp_post_more_text_hover',
			array(
				'default'     => '#ffffff'
			)
		);
		$wp_customize->add_setting(
			'sp_post_share_color',
			array(
				'default'     => '#aaaaaa'
			)
		);
		$wp_customize->add_setting(
			'sp_post_share_color_hover',
			array(
				'default'     => '#000000'
			)
		);

		// Colors: Misc
		$wp_customize->add_setting(
			'sp_color_accent',
			array(
				'default'     => '#efa7a1'
			)
		);

		// Shop settings
		$wp_customize->add_setting(
	        'sp_shop_header_cart',
	        array(
	            'default'     => false
	        )
	    );

		$wp_customize->add_setting(
	        'sp_shop_layout',
	        array(
	            'default'     => 'sidebar'
	        )
	    );

		$wp_customize->add_setting(
	        'sp_shop_products_per_page',
	        array(
	            'default'     => 9
	        )
	    );

		// Newsletter
		$wp_customize->add_setting(
			'sp_newsletter_bg_color',
			array(
				'default'     => '#ffffff'
			)
		);

		$wp_customize->add_setting(
			'sp_newsletter_border',
			array(
				'default'     => '#e5e5e5'
			)
		);
		$wp_customize->add_setting(
			'sp_newsletter_title_color',
			array(
				'default'     => '#111111'
			)
		);

		$wp_customize->add_setting(
			'sp_newsletter_divider_color',
			array(
				'default'     => '#d9d9d9'
			)
		);
		$wp_customize->add_setting(
			'sp_newsletter_form_bg',
			array(
				'default'     => '#ffffff'
			)
		);
		$wp_customize->add_setting(
			'sp_newsletter_form_border',
			array(
				'default'     => '#e5e5e5'
			)
		);
		$wp_customize->add_setting(
			'sp_newsletter_button_bg',
			array(
				'default'     => '#000000'
			)
		);
		$wp_customize->add_setting(
			'sp_newsletter_button_text',
			array(
				'default'     => '#ffffff'
			)
		);
		$wp_customize->add_setting(
			'sp_newsletter_button_bg_hover',
			array(
				'default'     => '#333333'
			)
		);
		$wp_customize->add_setting(
			'sp_newsletter_button_text_hover',
			array(
				'default'     => '#ffffff'
			)
		);

		// Custom CSS
		$wp_customize->add_setting(
			'sp_custom_css'
		);

	// Add Control

		// General
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'upload_favicon',
				array(
					'label'      => 'Upload Favicon',
					'section'    => 'solopine_new_section_general',
					'settings'   => 'sp_favicon',
					'priority'	 => 1
				)
			)
		);

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'responsive',
				array(
					'label'      => 'Disable Responsive',
					'section'    => 'solopine_new_section_general',
					'settings'   => 'sp_responsive',
					'type'		 => 'checkbox',
					'priority'	 => 2
				)
			)
		);

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'home_layout',
				array(
					'label'          => 'Homepage Layout',
					'section'        => 'solopine_new_section_general',
					'settings'       => 'sp_home_layout',
					'type'           => 'radio',
					'priority'	 => 3,
					'choices'        => array(
						'full'   => 'Full Post Layout',
						'grid'  => 'Grid Post Layout',
						'full_grid'  => '1 Full Post then Grid Layout',
						'list'  => 'List Post Layout',
						'full_list'  => '1 Full Post then List Layout',
						'no_posts' => 'Display no posts on home page'
					)
				)
			)
		);

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'archive_layout',
				array(
					'label'          => 'Archive Layout',
					'section'        => 'solopine_new_section_general',
					'settings'       => 'sp_archive_layout',
					'type'           => 'radio',
					'priority'	 => 3,
					'choices'        => array(
						'full'   => 'Full Post Layout',
						'grid'  => 'Grid Post Layout',
						'full_grid'  => '1 Full Post then Grid Layout',
						'list'  => 'List Post Layout',
						'full_list'  => '1 Full Post then List Layout',
					)
				)
			)
		);

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'sidebar_homepage',
				array(
					'label'      => 'Disable Sidebar on Homepage',
					'section'    => 'solopine_new_section_general',
					'settings'   => 'sp_sidebar_homepage',
					'type'		 => 'checkbox',
					'priority'	 => 4
				)
			)
		);

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'sidebar_archive',
				array(
					'label'      => 'Disable Sidebar on Archives',
					'section'    => 'solopine_new_section_general',
					'settings'   => 'sp_sidebar_archive',
					'type'		 => 'checkbox',
					'priority'	 => 6
				)
			)
		);

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'post_summary',
				array(
					'label'          => 'Homepage/Archive Post Summary Type',
					'section'        => 'solopine_new_section_general',
					'settings'       => 'sp_post_summary',
					'type'           => 'radio',
					'priority'	 => 8,
					'choices'        => array(
						'full'   => 'Use Read More Tag',
						'excerpt'  => 'Use Excerpt',
					)
				)
			)
		);

		// Header and Logo
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'upload_logo',
				array(
					'label'      => 'Upload Logo',
					'section'    => 'solopine_new_section_logo_header',
					'settings'   => 'sp_logo',
					'priority'	 => 20
				)
			)
		);

		$wp_customize->add_control(
			new Customize_Number_Control(
				$wp_customize,
				'header_padding_top',
				array(
					'label'      => 'Top Header Padding',
					'section'    => 'solopine_new_section_logo_header',
					'settings'   => 'sp_header_padding_top',
					'type'		 => 'number',
					'priority'	 => 22
				)
			)
		);
		$wp_customize->add_control(
			new Customize_Number_Control(
				$wp_customize,
				'header_padding_bottom',
				array(
					'label'      => 'Bottom Header Padding',
					'section'    => 'solopine_new_section_logo_header',
					'settings'   => 'sp_header_padding_bottom',
					'type'		 => 'number',
					'priority'	 => 23
				)
			)
		);

		// Top Bar
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'topbar_check',
				array(
					'label'      => 'Disable Top Bar',
					'section'    => 'solopine_new_section_topbar',
					'settings'   => 'sp_topbar_check',
					'type'		 => 'checkbox',
					'priority'	 => 2
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'topbar_social_check',
				array(
					'label'      => 'Disable Top Bar Social Icons',
					'section'    => 'solopine_new_section_topbar',
					'settings'   => 'sp_topbar_social_check',
					'type'		 => 'checkbox',
					'priority'	 => 3
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'topbar_search_check',
				array(
					'label'      => 'Disable Top Bar Search',
					'section'    => 'solopine_new_section_topbar',
					'settings'   => 'sp_topbar_search_check',
					'type'		 => 'checkbox',
					'priority'	 => 4
				)
			)
		);

		// Featured area
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'featured_slider',
				array(
					'label'      => 'Enable Featured Slider',
					'section'    => 'solopine_new_section_featured',
					'settings'   => 'sp_featured_slider',
					'type'		 => 'checkbox',
					'priority'	 => 2
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Category_Control(
				$wp_customize,
				'featured_cat',
				array(
					'label'    => 'Select Featured Category',
					'settings' => 'sp_featured_cat',
					'section'  => 'solopine_new_section_featured',
					'priority'	 => 3
				)
			)
		);

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'featured_id',
				array(
					'label'      => 'Select featured post/page IDs',
					'section'    => 'solopine_new_section_featured',
					'settings'   => 'sp_featured_id',
					'type'		 => 'text',
					'priority'	 => 4
				)
			)
		);

		$wp_customize->add_control(
			new Customize_Number_Control(
				$wp_customize,
				'featured_slider_slides',
				array(
					'label'      => 'Amount of Slides',
					'section'    => 'solopine_new_section_featured',
					'settings'   => 'sp_featured_slider_slides',
					'type'		 => 'number',
					'priority'	 => 5
				)
			)
		);

		// Promo Boxes
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'promo',
				array(
					'label'      => 'Enable Promo Boxes',
					'section'    => 'solopine_new_section_promo',
					'settings'   => 'sp_promo',
					'type'		 => 'checkbox',
					'priority'	 => 1
				)
			)
		);

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'promo1_title',
				array(
					'label'      => 'Promo Box #1 Title',
					'section'    => 'solopine_new_section_promo',
					'settings'   => 'sp_promo1_title',
					'type'		 => 'text',
					'priority'	 => 3
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'promo1_subtitle',
				array(
					'label'      => 'Promo Box #1 Sub Title',
					'section'    => 'solopine_new_section_promo',
					'settings'   => 'sp_promo1_subtitle',
					'type'		 => 'text',
					'priority'	 => 4
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'promo1_image',
				array(
					'label'      => 'Promo Box #1 Image',
					'section'    => 'solopine_new_section_promo',
					'settings'   => 'sp_promo1_image',
					'priority'	 => 5
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'promo1_url',
				array(
					'label'      => 'Promo Box #1 URL',
					'section'    => 'solopine_new_section_promo',
					'settings'   => 'sp_promo1_url',
					'type'		 => 'text',
					'priority'	 => 6
				)
			)
		);

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'promo2_title',
				array(
					'label'      => 'Promo Box #2 Title',
					'section'    => 'solopine_new_section_promo',
					'settings'   => 'sp_promo2_title',
					'type'		 => 'text',
					'priority'	 => 7
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'promo2_subtitle',
				array(
					'label'      => 'Promo Box #2 Sub Title',
					'section'    => 'solopine_new_section_promo',
					'settings'   => 'sp_promo2_subtitle',
					'type'		 => 'text',
					'priority'	 => 8
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'promo2_image',
				array(
					'label'      => 'Promo Box #2 Image',
					'section'    => 'solopine_new_section_promo',
					'settings'   => 'sp_promo2_image',
					'priority'	 => 9
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'promo2_url',
				array(
					'label'      => 'Promo Box #2 URL',
					'section'    => 'solopine_new_section_promo',
					'settings'   => 'sp_promo2_url',
					'type'		 => 'text',
					'priority'	 => 10
				)
			)
		);

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'promo3_title',
				array(
					'label'      => 'Promo Box #3 Title',
					'section'    => 'solopine_new_section_promo',
					'settings'   => 'sp_promo3_title',
					'type'		 => 'text',
					'priority'	 => 11
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'promo3_subtitle',
				array(
					'label'      => 'Promo Box #3 Sub Title',
					'section'    => 'solopine_new_section_promo',
					'settings'   => 'sp_promo3_subtitle',
					'type'		 => 'text',
					'priority'	 => 12
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'promo3_image',
				array(
					'label'      => 'Promo Box #3 Image',
					'section'    => 'solopine_new_section_promo',
					'settings'   => 'sp_promo3_image',
					'priority'	 => 13
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'promo3_url',
				array(
					'label'      => 'Promo Box #3 URL',
					'section'    => 'solopine_new_section_promo',
					'settings'   => 'sp_promo3_url',
					'type'		 => 'text',
					'priority'	 => 14
				)
			)
		);

		// Post Settings
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'post_thumb',
				array(
					'label'      => 'Hide Featured Image from top of Post',
					'section'    => 'solopine_new_section_post',
					'settings'   => 'sp_post_thumb',
					'type'		 => 'checkbox',
					'priority'	 => 1
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'post_cat',
				array(
					'label'      => 'Hide Category',
					'section'    => 'solopine_new_section_post',
					'settings'   => 'sp_post_cat',
					'type'		 => 'checkbox',
					'priority'	 => 2
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'post_tags',
				array(
					'label'      => 'Hide Tags',
					'section'    => 'solopine_new_section_post',
					'settings'   => 'sp_post_tags',
					'type'		 => 'checkbox',
					'priority'	 => 3
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'post_date',
				array(
					'label'      => 'Hide Date',
					'section'    => 'solopine_new_section_post',
					'settings'   => 'sp_post_date',
					'type'		 => 'checkbox',
					'priority'	 => 4
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'post_share_author',
				array(
					'label'      => 'Hide Author Name',
					'section'    => 'solopine_new_section_post',
					'settings'   => 'sp_post_share_author',
					'type'		 => 'checkbox',
					'priority'	 => 5
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'post_share',
				array(
					'label'      => 'Hide Share Buttons',
					'section'    => 'solopine_new_section_post',
					'settings'   => 'sp_post_share',
					'type'		 => 'checkbox',
					'priority'	 => 6
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'post_comment_link',
				array(
					'label'      => 'Hide Comment Link',
					'section'    => 'solopine_new_section_post',
					'settings'   => 'sp_post_comment_link',
					'type'		 => 'checkbox',
					'priority'	 => 7
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'post_author',
				array(
					'label'      => 'Hide Author Box',
					'section'    => 'solopine_new_section_post',
					'settings'   => 'sp_post_author',
					'type'		 => 'checkbox',
					'priority'	 => 8
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'post_related',
				array(
					'label'      => 'Hide Related Posts Box',
					'section'    => 'solopine_new_section_post',
					'settings'   => 'sp_post_related',
					'type'		 => 'checkbox',
					'priority'	 => 9
				)
			)
		);

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'post_pagination',
				array(
					'label'      => 'Hide Next/Previous Post Links',
					'section'    => 'solopine_new_section_post',
					'settings'   => 'sp_post_pagination',
					'type'		 => 'checkbox',
					'priority'	 => 10
				)
			)
		);

		// Page
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'page_title',
				array(
					'label'      => 'Hide Page Title',
					'section'    => 'solopine_new_section_page',
					'settings'   => 'sp_page_title',
					'type'		 => 'checkbox',
					'priority'	 => 1
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'page_share',
				array(
					'label'      => 'Hide Share Buttons',
					'section'    => 'solopine_new_section_page',
					'settings'   => 'sp_page_share',
					'type'		 => 'checkbox',
					'priority'	 => 2
				)
			)
		);

		// Social Media
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'facebook',
				array(
					'label'      => 'Facebook',
					'section'    => 'solopine_new_section_social',
					'settings'   => 'sp_facebook',
					'type'		 => 'text',
					'priority'	 => 1
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'twitter',
				array(
					'label'      => 'Twitter',
					'section'    => 'solopine_new_section_social',
					'settings'   => 'sp_twitter',
					'type'		 => 'text',
					'priority'	 => 2
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'instagram',
				array(
					'label'      => 'Instagram',
					'section'    => 'solopine_new_section_social',
					'settings'   => 'sp_instagram',
					'type'		 => 'text',
					'priority'	 => 3
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'pinterest',
				array(
					'label'      => 'Pinterest',
					'section'    => 'solopine_new_section_social',
					'settings'   => 'sp_pinterest',
					'type'		 => 'text',
					'priority'	 => 4
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'bloglovin',
				array(
					'label'      => 'Bloglovin',
					'section'    => 'solopine_new_section_social',
					'settings'   => 'sp_bloglovin',
					'type'		 => 'text',
					'priority'	 => 5
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'google',
				array(
					'label'      => 'Google Plus',
					'section'    => 'solopine_new_section_social',
					'settings'   => 'sp_google',
					'type'		 => 'text',
					'priority'	 => 6
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'tumblr',
				array(
					'label'      => 'Tumblr',
					'section'    => 'solopine_new_section_social',
					'settings'   => 'sp_tumblr',
					'type'		 => 'text',
					'priority'	 => 7
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'youtube',
				array(
					'label'      => 'Youtube',
					'section'    => 'solopine_new_section_social',
					'settings'   => 'sp_youtube',
					'type'		 => 'text',
					'priority'	 => 8
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'dribbble',
				array(
					'label'      => 'Dribbble',
					'section'    => 'solopine_new_section_social',
					'settings'   => 'sp_dribbble',
					'type'		 => 'text',
					'priority'	 => 9
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'soundcloud',
				array(
					'label'      => 'Soundcloud',
					'section'    => 'solopine_new_section_social',
					'settings'   => 'sp_soundcloud',
					'type'		 => 'text',
					'priority'	 => 10
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'vimeo',
				array(
					'label'      => 'Vimeo',
					'section'    => 'solopine_new_section_social',
					'settings'   => 'sp_vimeo',
					'type'		 => 'text',
					'priority'	 => 11
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'linkedin',
				array(
					'label'      => 'Linkedin (Use full URL to your Linkedin profile)',
					'section'    => 'solopine_new_section_social',
					'settings'   => 'sp_linkedin',
					'type'		 => 'text',
					'priority'	 => 12
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'rss',
				array(
					'label'      => 'RSS Link',
					'section'    => 'solopine_new_section_social',
					'settings'   => 'sp_rss',
					'type'		 => 'text',
					'priority'	 => 13
				)
			)
		);

		// Footer
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'footer_widgets',
				array(
					'label'      => 'Hide Footer Widget Area',
					'section'    => 'solopine_new_section_footer',
					'settings'   => 'sp_footer_widgets',
					'type'		 => 'checkbox',
					'priority'	 => 1
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'footer_copyright',
				array(
					'label'      => 'Footer Copyright Text',
					'section'    => 'solopine_new_section_footer',
					'settings'   => 'sp_footer_copyright',
					'type'		 => 'text',
					'priority'	 => 2
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'footer_share',
				array(
					'label'      => 'Hide Footer Share Links',
					'section'    => 'solopine_new_section_footer',
					'settings'   => 'sp_footer_share',
					'type'		 => 'checkbox',
					'priority'	 => 3
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'footer_top',
				array(
					'label'      => 'Hide Back to Top',
					'section'    => 'solopine_new_section_footer',
					'settings'   => 'sp_footer_top',
					'type'		 => 'checkbox',
					'priority'	 => 4
				)
			)
		);

		// Top bar Colors
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'topbar_bg',
				array(
					'label'      => 'Top Bar BG',
					'section'    => 'solopine_new_section_color_topbar',
					'settings'   => 'sp_topbar_bg',
					'priority'	 => 1
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'topbar_border',
				array(
					'label'      => 'Top Bar Border',
					'section'    => 'solopine_new_section_color_topbar',
					'settings'   => 'sp_topbar_border',
					'priority'	 => 2
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'topbar_social_color',
				array(
					'label'      => 'Top Bar Social Icon Color',
					'section'    => 'solopine_new_section_color_topbar',
					'settings'   => 'sp_topbar_social_color',
					'priority'	 => 3
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'topbar_social_color_hover',
				array(
					'label'      => 'Top Bar Social Icon Hover Color',
					'section'    => 'solopine_new_section_color_topbar',
					'settings'   => 'sp_topbar_social_color_hover',
					'priority'	 => 4
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'topbar_search_icon_color',
				array(
					'label'      => 'Top Bar Search Icon Color',
					'section'    => 'solopine_new_section_color_topbar',
					'settings'   => 'sp_topbar_search_icon_color',
					'priority'	 => 5
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'topbar_search_text_color',
				array(
					'label'      => 'Top Bar Search Text Color',
					'section'    => 'solopine_new_section_color_topbar',
					'settings'   => 'sp_topbar_search_text_color',
					'priority'	 => 6
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'topbar_shop_icon_color',
				array(
					'label'      => 'Top Bar Shop Cart Icon Color',
					'section'    => 'solopine_new_section_color_topbar',
					'settings'   => 'sp_topbar_shop_icon_color',
					'priority'	 => 6
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'topbar_shop_count_bg',
				array(
					'label'      => 'Top Bar Shop Cart Counter BG',
					'section'    => 'solopine_new_section_color_topbar',
					'settings'   => 'sp_topbar_shop_count_bg',
					'priority'	 => 7
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'topbar_shop_count_color',
				array(
					'label'      => 'Top Bar Shop Cart Counter Text Color',
					'section'    => 'solopine_new_section_color_topbar',
					'settings'   => 'sp_topbar_shop_count_color',
					'priority'	 => 8
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'topbar_shop_border',
				array(
					'label'      => 'Top Bar Shop Cart Left Border',
					'section'    => 'solopine_new_section_color_topbar',
					'settings'   => 'sp_topbar_shop_border',
					'priority'	 => 9
				)
			)
		);

		// Colors: Header
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'header_bg_color',
				array(
					'label'      => 'Header BG Color',
					'section'    => 'solopine_new_section_color_header',
					'settings'   => 'sp_header_bg_color',
					'priority'	 => 1
				)
			)
		);
		$wp_customize->add_control(
				new WP_Customize_Image_Control(
					$wp_customize,
					'header_bg_image',
					array(
						'label'      => 'Header BG Image',
						'section'    => 'solopine_new_section_color_header',
						'settings'   => 'sp_header_bg_image',
						'priority'	 => 2
					)
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Control(
					$wp_customize,
					'header_bg_repeat',
					array(
						'label'          => 'Header BG Repeat',
						'section'        => 'solopine_new_section_color_header',
						'settings'       => 'sp_header_bg_repeat',
						'type'           => 'select',
						'priority'	 => 3,
						'choices'        => array(
							'repeat'   => 'Repeat',
							'no-repeat'  => 'No Repeat',
							'repeat-y'  => 'Repeat Y',
							'repeat-x'  => 'Repeat X',
						)
					)
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Control(
					$wp_customize,
					'header_bg_repeat',
					array(
						'label'          => 'Header BG Repeat',
						'section'        => 'solopine_new_section_color_header',
						'settings'       => 'sp_header_bg_repeat',
						'type'           => 'select',
						'priority'	 => 4,
						'choices'        => array(
							'repeat'   => 'Repeat',
							'no-repeat'  => 'No Repeat',
							'repeat-y'  => 'Repeat Y',
							'repeat-x'  => 'Repeat X',
						)
					)
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Control(
					$wp_customize,
					'header_bg_size',
					array(
						'label'          => 'Header BG Size',
						'section'        => 'solopine_new_section_color_header',
						'settings'       => 'sp_header_bg_size',
						'type'           => 'select',
						'priority'	 => 5,
						'choices'        => array(
							'auto'   => 'Auto',
							'cover'  => 'Cover',
							'contain'  => 'Contain',
						)
					)
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Control(
					$wp_customize,
					'header_bg_position',
					array(
						'label'          => 'Header BG Position',
						'section'        => 'solopine_new_section_color_header',
						'settings'       => 'sp_header_bg_position',
						'type'           => 'select',
						'priority'	 => 6,
						'choices'        => array(
							'center center'   => 'Center Center',
							'center top'  => 'Center Top',
							'center bottom'  => 'Center Bottom',
							'right center'  => 'Right Center',
							'right top'  => 'Right Top',
							'right bottom'  => 'Right Bottom',
							'left center'  => 'Left Center',
							'left top'  => 'Left Top',
							'left bottom'  => 'Left Bottom',
						)
					)
				)
			);

		// Colors: Menu
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'menu_bg',
				array(
					'label'      => 'Menu BG Color',
					'section'    => 'solopine_new_section_color_menu',
					'settings'   => 'sp_menu_bg',
					'priority'	 => 1
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'menu_border',
				array(
					'label'      => 'Menu Border Color',
					'section'    => 'solopine_new_section_color_menu',
					'settings'   => 'sp_menu_border',
					'priority'	 => 2
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'menu_text_color',
				array(
					'label'      => 'Menu Text Color',
					'section'    => 'solopine_new_section_color_menu',
					'settings'   => 'sp_menu_text_color',
					'priority'	 => 3
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'menu_text_active',
				array(
					'label'      => 'Menu Text Active/Hover Color',
					'section'    => 'solopine_new_section_color_menu',
					'settings'   => 'sp_menu_text_active',
					'priority'	 => 4
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'menu_drop_arrow',
				array(
					'label'      => 'Menu Dropdown Arrow Color',
					'section'    => 'solopine_new_section_color_menu',
					'settings'   => 'sp_menu_drop_arrow',
					'priority'	 => 5
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'menu_drop_bg',
				array(
					'label'      => 'Dropdown BG Color',
					'section'    => 'solopine_new_section_color_menu',
					'settings'   => 'sp_drop_bg',
					'priority'	 => 6
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'menu_drop_border',
				array(
					'label'      => 'Dropdown Border Color',
					'section'    => 'solopine_new_section_color_menu',
					'settings'   => 'sp_drop_border',
					'priority'	 => 7
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'drop_text_color',
				array(
					'label'      => 'Dropdown Text Color',
					'section'    => 'solopine_new_section_color_menu',
					'settings'   => 'sp_drop_text_color',
					'priority'	 => 8
				)
			)
		);
		$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'drop_text_hover_bg',
					array(
						'label'      => 'Dropdown Text Hover BG',
						'section'    => 'solopine_new_section_color_menu',
						'settings'   => 'sp_drop_text_hover_bg',
						'priority'	 => 9
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'drop_text_hover_color',
					array(
						'label'      => 'Dropdown Text Hover Color',
						'section'    => 'solopine_new_section_color_menu',
						'settings'   => 'sp_drop_text_hover_color',
						'priority'	 => 10
					)
				)
			);

			// Colors: Mobile Menu
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'mobile_burger',
					array(
						'label'      => 'Mobile Menu Toggle Color',
						'section'    => 'solopine_new_section_color_mobile_menu',
						'settings'   => 'sp_mobile_burger',
						'priority'	 => 1
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'mobile_dropdown_bg',
					array(
						'label'      => 'Mobile Menu Dropdown BG Color',
						'section'    => 'solopine_new_section_color_mobile_menu',
						'settings'   => 'sp_mobile_dropdown_bg',
						'priority'	 => 2
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'mobile_dropdown_border',
					array(
						'label'      => 'Mobile Menu Dropdown Border Color',
						'section'    => 'solopine_new_section_color_mobile_menu',
						'settings'   => 'sp_mobile_dropdown_border',
						'priority'	 => 3
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'mobile_dropdown_text',
					array(
						'label'      => 'Mobile Menu Dropdown Text Color',
						'section'    => 'solopine_new_section_color_mobile_menu',
						'settings'   => 'sp_mobile_dropdown_text',
						'priority'	 => 4
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'mobile_dropdown_text_hover',
					array(
						'label'      => 'Mobile Menu Dropdown Text Hover Color',
						'section'    => 'solopine_new_section_color_mobile_menu',
						'settings'   => 'sp_mobile_dropdown_text_hover',
						'priority'	 => 5
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'mobile_dropdown_text_bg_hover',
					array(
						'label'      => 'Mobile Menu Dropdown Text BG Hover Color',
						'section'    => 'solopine_new_section_color_mobile_menu',
						'settings'   => 'sp_mobile_dropdown_text_bg_hover',
						'priority'	 => 6
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'mobile_social_color',
					array(
						'label'      => 'Mobile Menu Social Icon Color',
						'section'    => 'solopine_new_section_color_mobile_menu',
						'settings'   => 'sp_mobile_social_color',
						'priority'	 => 7
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'mobile_social_color_hover',
					array(
						'label'      => 'Mobile Menu Social Icon Hover Color',
						'section'    => 'solopine_new_section_color_mobile_menu',
						'settings'   => 'sp_mobile_social_color_hover',
						'priority'	 => 8
					)
				)
			);

			// Colors: Sidebar
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'sidebar_widget_border',
					array(
						'label'      => 'Widget Border Color',
						'section'    => 'solopine_new_section_color_sidebar',
						'settings'   => 'sp_sidebar_widget_border',
						'priority'	 => 1
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'sidebar_title_color',
					array(
						'label'      => 'Widget Title Color',
						'section'    => 'solopine_new_section_color_sidebar',
						'settings'   => 'sp_sidebar_title_color',
						'priority'	 => 1
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'sidebar_title_line_color2',
					array(
						'label'      => 'Widget Title Line Color',
						'section'    => 'solopine_new_section_color_sidebar',
						'settings'   => 'sp_sidebar_title_line_color2',
						'priority'	 => 2
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'sidebar_social_icon',
					array(
						'label'      => 'Sidebar Social Icon Color',
						'section'    => 'solopine_new_section_color_sidebar',
						'settings'   => 'sp_sidebar_social_icon',
						'priority'	 => 3
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'sidebar_social_icon_hover',
					array(
						'label'      => 'Sidebar Social Icon Hover Color',
						'section'    => 'solopine_new_section_color_sidebar',
						'settings'   => 'sp_sidebar_social_icon_hover',
						'priority'	 => 4
					)
				)
			);

			// Colors: Footer
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'footer_bg',
					array(
						'label'      => 'Footer BG Color',
						'section'    => 'solopine_new_section_color_footer',
						'settings'   => 'sp_footer_bg',
						'priority'	 => 1
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'footer_title_color',
					array(
						'label'      => 'Footer Widget Title Color',
						'section'    => 'solopine_new_section_color_footer',
						'settings'   => 'sp_footer_title_color',
						'priority'	 => 2
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'sidebar_title_line_color',
					array(
						'label'      => 'Footer Widget Title Line Color',
						'section'    => 'solopine_new_section_color_footer',
						'settings'   => 'sp_footer_title_line_color',
						'priority'	 => 3
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'footer_text_color',
					array(
						'label'      => 'Footer Widget Text Color',
						'section'    => 'solopine_new_section_color_footer',
						'settings'   => 'sp_footer_text_color',
						'priority'	 => 4
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'footer_link_color',
					array(
						'label'      => 'Footer Widget Link Color',
						'section'    => 'solopine_new_section_color_footer',
						'settings'   => 'sp_footer_link_color',
						'priority'	 => 5
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'footer_social_icon',
					array(
						'label'      => 'Footer Social Icon Color',
						'section'    => 'solopine_new_section_color_footer',
						'settings'   => 'sp_footer_social_icon',
						'priority'	 => 6
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'footer_social_icon_hover',
					array(
						'label'      => 'Footer Social Icon Hover Color',
						'section'    => 'solopine_new_section_color_footer',
						'settings'   => 'sp_footer_social_icon_hover',
						'priority'	 => 7
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'footer_social_border',
					array(
						'label'      => 'Footer Social Top Border Color',
						'section'    => 'solopine_new_section_color_footer',
						'settings'   => 'sp_footer_social_border',
						'priority'	 => 8
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'footer_copyright_text_color',
					array(
						'label'      => 'Footer Copyright Text Color',
						'section'    => 'solopine_new_section_color_footer',
						'settings'   => 'sp_footer_copyright_text_color',
						'priority'	 => 9
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'footer_back_color',
					array(
						'label'      => 'Footer Back To Top Color',
						'section'    => 'solopine_new_section_color_footer',
						'settings'   => 'sp_footer_back_color',
						'priority'	 => 10
					)
				)
			);

			// Colors: Posts
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'post_title',
					array(
						'label'      => 'Post Title Color',
						'section'    => 'solopine_new_section_color_post_color',
						'settings'   => 'sp_post_title',
						'priority'	 => 1
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'post_category_color',
					array(
						'label'      => 'Post Category Color',
						'section'    => 'solopine_new_section_color_post_color',
						'settings'   => 'sp_post_category_color',
						'priority'	 => 1
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'post_text',
					array(
						'label'      => 'Post Text Color',
						'section'    => 'solopine_new_section_color_post_color',
						'settings'   => 'sp_post_text',
						'priority'	 => 3
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'post_h',
					array(
						'label'      => 'Post H1-H6 Color',
						'section'    => 'solopine_new_section_color_post_color',
						'settings'   => 'sp_post_h',
						'priority'	 => 4
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'post_more_bg',
					array(
						'label'      => 'Continue Reading BG Color',
						'section'    => 'solopine_new_section_color_post_color',
						'settings'   => 'sp_post_more_bg',
						'priority'	 => 5
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'post_more_border',
					array(
						'label'      => 'Continue Reading Border Color',
						'section'    => 'solopine_new_section_color_post_color',
						'settings'   => 'sp_post_more_border',
						'priority'	 => 6
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'post_more_text',
					array(
						'label'      => 'Continue Reading Text Color',
						'section'    => 'solopine_new_section_color_post_color',
						'settings'   => 'sp_post_more_text',
						'priority'	 => 7
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'post_more_bg_hover',
					array(
						'label'      => 'Continue Reading BG Hover Color',
						'section'    => 'solopine_new_section_color_post_color',
						'settings'   => 'sp_post_more_bg_hover',
						'priority'	 => 8
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'post_more_border_hover',
					array(
						'label'      => 'Continue Reading Border Hover Color',
						'section'    => 'solopine_new_section_color_post_color',
						'settings'   => 'sp_post_more_border_hover',
						'priority'	 => 9
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'post_more_text_hover',
					array(
						'label'      => 'Continue Reading Text Hover Color',
						'section'    => 'solopine_new_section_color_post_color',
						'settings'   => 'sp_post_more_text_hover',
						'priority'	 => 10
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'post_share_color',
					array(
						'label'      => 'Post Share Link Color',
						'section'    => 'solopine_new_section_color_post_color',
						'settings'   => 'sp_post_share_color',
						'priority'	 => 11
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'post_share_color_hover',
					array(
						'label'      => 'Post Share Link Hover Color',
						'section'    => 'solopine_new_section_color_post_color',
						'settings'   => 'sp_post_share_color_hover',
						'priority'	 => 12
					)
				)
			);

			// Color Accent
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'color_accent',
					array(
						'label'      => 'Link Color',
						'section'    => 'solopine_new_section_color_accent',
						'settings'   => 'sp_color_accent',
						'priority'	 => 1
					)
				)
			);

			// Shop
			$wp_customize->add_control(
				new WP_Customize_Control(
					$wp_customize,
					'shop_header_cart',
					array(
						'label'      => 'Hide Cart Icon in Header',
						'section'    => 'solopine_new_section_shop',
						'settings'   => 'sp_shop_header_cart',
						'type'		 => 'checkbox',
						'priority'	 => 1
					)
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Control(
					$wp_customize,
					'shop_layout',
					array(
						'label'          => 'Shop Layout',
						'section'        => 'solopine_new_section_shop',
						'settings'       => 'sp_shop_layout',
						'type'           => 'radio',
						'priority'	 => 2,
						'choices'        => array(
							'sidebar'   => 'Shop w/ Sidebar',
							'full'  => 'Full Width Shop',
						)
					)
				)
			);

			$wp_customize->add_control(
				new Customize_Number_Control(
					$wp_customize,
					'shop_products_per_page',
					array(
						'label'      => 'Products Per Page',
						'section'    => 'solopine_new_section_shop',
						'settings'   => 'sp_shop_products_per_page',
						'type'		 => 'number',
						'priority'	 => 3
					)
				)
			);

			// Newsletter
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'newsletter_bg_color',
					array(
						'label'      => 'Newsletter BG Color',
						'section'    => 'solopine_new_section_newsletter',
						'settings'   => 'sp_newsletter_bg_color',
						'priority'	 => 1
					)
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'newsletter_border',
					array(
						'label'      => 'Newsletter Box Border Color',
						'section'    => 'solopine_new_section_newsletter',
						'settings'   => 'sp_newsletter_border',
						'priority'	 => 8
					)
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'newsletter_title_color',
					array(
						'label'      => 'Newsletter Title Color',
						'section'    => 'solopine_new_section_newsletter',
						'settings'   => 'sp_newsletter_title_color',
						'priority'	 => 9
					)
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'newsletter_divider_color',
					array(
						'label'      => 'Newsletter Divider Color',
						'section'    => 'solopine_new_section_newsletter',
						'settings'   => 'sp_newsletter_divider_color',
						'priority'	 => 11
					)
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'newsletter_form_bg',
					array(
						'label'      => 'Newsletter Form BG Color',
						'section'    => 'solopine_new_section_newsletter',
						'settings'   => 'sp_newsletter_form_bg',
						'priority'	 => 12
					)
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'newsletter_form_border',
					array(
						'label'      => 'Newsletter Form Border Color',
						'section'    => 'solopine_new_section_newsletter',
						'settings'   => 'sp_newsletter_form_border',
						'priority'	 => 13
					)
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'newsletter_button_bg',
					array(
						'label'      => 'Newsletter Submit Button BG Color',
						'section'    => 'solopine_new_section_newsletter',
						'settings'   => 'sp_newsletter_button_bg',
						'priority'	 => 14
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'newsletter_button_text',
					array(
						'label'      => 'Newsletter Submit Button Text Color',
						'section'    => 'solopine_new_section_newsletter',
						'settings'   => 'sp_newsletter_button_text',
						'priority'	 => 15
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'newsletter_button_bg_hover',
					array(
						'label'      => 'Newsletter Submit Button BG Hover Color',
						'section'    => 'solopine_new_section_newsletter',
						'settings'   => 'sp_newsletter_button_bg_hover',
						'priority'	 => 16
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'newsletter_button_text_hover',
					array(
						'label'      => 'Newsletter Submit Button Text Hover Color',
						'section'    => 'solopine_new_section_newsletter',
						'settings'   => 'sp_newsletter_button_text_hover',
						'priority'	 => 17
					)
				)
			);

			// Custom CSS
			$wp_customize->add_control(
				new Customize_CustomCss_Control(
					$wp_customize,
					'custom_css',
					array(
						'label'      => 'Custom CSS',
						'section'    => 'solopine_new_section_custom_css',
						'settings'   => 'sp_custom_css',
						'type'		 => 'custom_css',
						'priority'	 => 1
					)
				)
			);

	// Remove Sections
	$wp_customize->remove_section( 'title_tagline');
	$wp_customize->remove_section( 'nav');
	$wp_customize->remove_section( 'static_front_page');
	$wp_customize->remove_section( 'colors');
	$wp_customize->remove_section( 'background_image');


}
add_action( 'customize_register', 'solopine_register_theme_customizer' );
?>

