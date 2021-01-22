<?php
    if ( !class_exists( 'GT3_Core_Elementor' ) || !class_exists( 'Redux' ) ) {
        return;
    }

    $theme = wp_get_theme();
    $opt_name = 'ewebot';

    $args = array(
        'opt_name'             => $opt_name,
        'display_name'         => $theme->get( 'Name' ),
        'display_version'      => $theme->get( 'Version' ),
        'menu_type'            => 'menu',
        'allow_sub_menu'       => true,
        'menu_title'           => esc_html__('Theme Options', 'ewebot' ),
        'page_title'           => esc_html__('Theme Options', 'ewebot' ),
        'google_api_key'       => '',
        'google_update_weekly' => false,
        'async_typography'     => true,
        'admin_bar'            => true,
        'admin_bar_icon'       => 'dashicons-admin-generic',
        'admin_bar_priority'   => 50,
        'global_variable'      => '',
        'dev_mode'             => false,
        'update_notice'        => true,
        'customizer'           => false,
        'page_priority'        => null,
        'page_parent'          => 'themes.php',
        'page_permissions'     => 'manage_options',
        'menu_icon'            => 'dashicons-admin-generic',
        'last_tab'             => '',
        'page_icon'            => 'icon-themes',
        'page_slug'            => '',
        'save_defaults'        => true,
        'default_show'         => false,
        'default_mark'         => '',
        'show_import_export'   => true,
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        'output_tag'           => true,
        'database'             => '',
        'use_cdn'              => true,
    );


    Redux::setArgs( $opt_name, $args );

    // -> START Basic Fields
    Redux::setSection( $opt_name, array(
        'title'            => esc_html__( 'General', 'ewebot' ),
        'id'               => 'general',
        'customizer_width' => '400px',
        'icon'             => 'el el-home',
        'fields'           => array(
        	array(
                'id'       => 'responsive',
                'type'     => 'switch',
                'title'    => esc_html__( 'Responsive', 'ewebot' ),
                'default'  => true,
            ),
            array(
                'id'       => 'page_comments',
                'type'     => 'switch',
                'title'    => esc_html__( 'Page Comments', 'ewebot' ),
                'default'  => true,
            ),
            array(
                'id'       => 'back_to_top',
                'type'     => 'switch',
                'title'    => esc_html__( 'Back to Top', 'ewebot' ),
                'default'  => true,
            ),
            array(
                'id'       => 'bubbles_block',
                'type'     => 'switch',
                'title'    => esc_html__( 'Bubbles', 'ewebot' ),
                'default'  => false,
            ),
            array(
                'id'    => 'team_slug',
                'type'  => 'text',
                'title' => esc_html__( 'Team Slug', 'ewebot' ),
            ),
            array(
                'id'    => 'portfolio_slug',
                'type'  => 'text',
                'title' => esc_html__( 'Portfolio Slug', 'ewebot' ),
            ),
	        array(
                'id'    => 'portfolio_name',
                'type'  => 'text',
                'title' => esc_html__( 'Portfolio Name', 'ewebot' ),
            ),
            array(
                'id'       => 'page_404_bg',
                'type'     => 'media',
                'title'    => esc_html__( 'Page 404 Background Image', 'ewebot' ),
            ),
            array(
		        'id'       => 'disable_right_click',
		        'type'     => 'switch',
		        'title'    => esc_html__( 'Disable right click', 'ewebot' ),
		        'default'  => false,
	        ),
	        array(
		        'id'       => 'disable_right_click_text',
		        'type'     => 'text',
		        'title'    => esc_html__( 'Right click alert text', 'ewebot' ),
		        'default'  => esc_html__('The right click is disabled. Your content is protected. You can configure this option in the theme.', 'ewebot' ),
		        'required' => array( 'disable_right_click', '=', '1' ),
	        ),
            array(
                'id'       => 'custom_js',
                'type'     => 'ace_editor',
                'title'    => esc_html__( 'Custom JS', 'ewebot' ),
                'subtitle' => esc_html__( 'Paste your JS code here.', 'ewebot' ),
                'mode'     => 'javascript',
                'theme'    => 'chrome',
                'default'  => "jQuery(document).ready(function(){\n\n});"
            ),
            array(
                'id'       => 'header_custom_js',
                'type'     => 'ace_editor',
                'title'    => esc_html__( 'Custom JS', 'ewebot' ),
                'subtitle' => esc_html__( 'Code to be added inside HEAD tag', 'ewebot' ),
                'mode'     => 'html',
                'theme'    => 'chrome',
                'default'  => "<script type='text/javascript'>\njQuery(document).ready(function(){\n\n});\n</script>"
            ),
        ),
    ) );

    Redux::setSection( $opt_name, array(
        'title'             => esc_html__('Preloader', 'ewebot' ),
        'id'                => 'preloader-option',
        'customizer_width'  => '400px',
        'icon'              => 'fa fa-spinner',
        'fields'            => array(
            array(
                'id'            => 'preloader',
                'type'          => 'switch',
                'title'         => esc_html__( 'Preloader', 'ewebot' ),
                'default'       => false,
            ),
            array(
                'id'            => 'preloader_type',
                'type'          => 'button_set',
                'title'         => esc_html__( 'Preloader type', 'ewebot' ),
                'options'       => array(
                    'linear'        => esc_html__( 'Linear', 'ewebot' ),
                    'circle'        => esc_html__( 'Circle', 'ewebot' ),
                    'theme'         => esc_html__( 'Theme', 'ewebot' ),
                ),
                'default'       => 'circle',
                'required'      => array( 'preloader', '=', '1' ),
            ),
            array(
                'id'            => 'preloader_background',
                'type'          => 'color',
                'title'         => esc_html__( 'Preloader Background', 'ewebot' ),
                'subtitle'      => esc_html__( 'Set Preloader Background', 'ewebot' ),
                'default'       => '#191a1c',
                'transparent'   => false,
                'required'      => array( 'preloader', '=', '1' ),
            ),
            array(
                'id'            => 'preloader_item_color',
                'type'          => 'color',
                'title'         => esc_html__( 'Preloader Stroke Background Color', 'ewebot' ),
                'subtitle'      => esc_html__( 'Set Preloader Stroke Background Color', 'ewebot' ),
                'default'       => '#ffffff',
                'transparent'   => false,
                'required'      => array( 'preloader', '=', '1' ),
            ),
            array(
                'id'            => 'preloader_item_color2',
                'type'          => 'color',
                'title'         => esc_html__( 'Preloader Stroke Foreground Color', 'ewebot' ),
                'subtitle'      => esc_html__( 'Set Preloader Stroke Foreground Color', 'ewebot' ),
                'default'       => '#435bb2',
                'transparent'   => false,
                'required'      => array( 'preloader', '=', '1' ),
            ),
            array(
                'id'            => 'preloader_item_width',
                'type'          => 'dimensions',
                'title'         => esc_html__( 'Preloader Circle Width', 'ewebot' ),
                'subtitle'      => esc_html__( 'Set Preloader Circle Width in px (Diameter)', 'ewebot' ),
                'units'         => false,
                'height'        => false,
                'default'       => array(
                    'width'         => '140',
                ),
                'transparent'   => false,
                'required'      => array(
                    array( 'preloader', '=', '1' ),
                    array( 'preloader_type', '=', array('circle','theme') )
                ),
            ),
            array(
                'id'            => 'preloader_item_stroke',
                'type'          => 'dimensions',
                'title'         => esc_html__( 'Preloader Circle Stroke Width', 'ewebot' ),
                'subtitle'      => esc_html__( 'Set Preloader Circle Stroke Width in px', 'ewebot' ),
                'units'         => false,
                'height'        => false,
                'default'       => array(
                    'width'         => '3'
                ),
                'transparent'   => false,
                'required'      => array(
                    array( 'preloader', '=', '1' ),
                    array( 'preloader_type', '=', array('circle','theme') )
                ),
            ),
            array(
                'id'            => 'preloader_item_logo',
                'type'          => 'media',
                'title'         => esc_html__( 'Preloader Logo', 'ewebot' ),
                'required'      => array( 'preloader', '=', '1' ),
            ),
            array(
                'id'            => 'preloader_item_logo_width',
                'type'          => 'dimensions',
                'title'         => esc_html__( 'Preloader Logo Width', 'ewebot' ),
                'subtitle'      => esc_html__( 'Set Preloader Logo Width', 'ewebot' ),
                'units'         => array('px','%'),
                'height'        => false,
                'default'       => array(
                    'width'         => '45',
                    'units'         => 'px',
                ),
                'transparent'   => false,
                'required'      => array(
                    array( 'preloader', '=', '1' ),
	                array( 'preloader_type', '=', array('circle','theme') )
                ),
            ),
            array(
                'id'            => 'preloader_full',
                'type'          => 'switch',
                'title'         => esc_html__( 'Preloader Fullscreen', 'ewebot' ),
                'default'       => true,
                'required'      => array( 'preloader', '=', '1' ),
            ),
        )
    ) );

	// HEADER
    Redux::setSection( $opt_name, array(
        'id'     => 'gt3_header_builder_section',
        'title'  =>  __( 'Header Builder', 'ewebot' ),
        'icon'   => 'el el-tasks',
        'fields' => array()
    ) );

    Redux::setSection( $opt_name, array(
        'title'            => esc_html__( 'Header Builder Editor', 'ewebot' ),
        'id'               => 'header_builder_editor',
        'subsection'       => true,
        'customizer_width' => '450px',
        'fields' => array()
    ) );
    // END HEADER

	Redux::setSection( $opt_name, array(
        'title'            => esc_html__( 'Page Title', 'ewebot' ),
        'id'               => 'page_title',
        'icon'             => 'el el-text-height',
        'customizer_width' => '450px',
        'fields'           => array(
	        array(
		        'id'       => 'page_title_conditional',
		        'type'     => 'switch',
		        'title'    => esc_html__( 'Show Page Title', 'ewebot' ),
		        'default'  => true,
	        ),
	        array(
		        'id'       => 'blog_title_conditional',
		        'type'     => 'switch',
		        'title'    => esc_html__( 'Show Blog Post Title', 'ewebot' ),
		        'default'  => true,
		        'required' => array( 'page_title_conditional', '=', '1' ),
	        ),
	        array(
		        'id'       => 'team_title_conditional',
		        'type'     => 'switch',
		        'title'    => esc_html__( 'Show Team Post Title', 'ewebot' ),
		        'default'  => false,
		        'required' => array( 'page_title_conditional', '=', '1' ),
	        ),
	        array(
		        'id'       => 'portfolio_title_conditional',
		        'type'     => 'switch',
		        'title'    => esc_html__( 'Show Portfolio Post Title', 'ewebot' ),
		        'default'  => true,
		        'required' => array( 'page_title_conditional', '=', '1' ),
	        ),
	        array(
		        'id'       => 'page_title-start',
		        'type'     => 'section',
		        'title'    => esc_html__( 'Page Title Settings', 'ewebot' ),
		        'indent'   => true,
		        'required' => array( 'page_title_conditional', '=', '1' ),
	        ),
	        array(
		        'id'       => 'page_title_breadcrumbs_conditional',
		        'type'     => 'switch',
		        'title'    => esc_html__( 'Show Breadcrumbs', 'ewebot' ),
		        'default'  => true,
	        ),
	        array(
		        'id'       => 'page_title_vert_align',
		        'type'     => 'select',
		        'title'    => esc_html__( 'Vertical Align', 'ewebot' ),
		        'options'  => array(
			        'top'       => esc_html__( 'Top', 'ewebot' ),
			        'middle'    => esc_html__( 'Middle', 'ewebot' ),
			        'bottom'    => esc_html__( 'Bottom', 'ewebot' )
		        ),
		        'default'  => 'middle'
	        ),
	        array(
		        'id'       => 'page_title_horiz_align',
		        'type'     => 'select',
		        'title'    => esc_html__( 'Page Title Text Align?', 'ewebot' ),
		        'options'  => array(
			        'left'      =>  esc_html__( 'Left', 'ewebot' ),
			        'center'    => esc_html__( 'Center', 'ewebot' ),
			        'right'     => esc_html__( 'Right', 'ewebot' )
		        ),
		        'default'  => 'center'
	        ),
	        array(
		        'id'       => 'page_title_font_color',
		        'type'     => 'color',
		        'title'    => esc_html__( 'Page Title Font Color', 'ewebot' ),
		        'default'  => '#ffffff',
		        'transparent' => false
	        ),
	        array(
		        'id'       => 'page_title_bg_color',
		        'type'     => 'color',
		        'title'    => esc_html__( 'Page Title Background Color', 'ewebot' ),
		        'default'  => '#6a27d9',
		        'transparent' => false
	        ),
	        array(
		        'id'       => 'page_title_overlay_color',
		        'type'     => 'color',
		        'title'    => esc_html__( 'Page Title Overlay Color', 'ewebot' ),
		        'default'  => '',
		        'transparent' => false
	        ),
	        array(
		        'id'       => 'page_title_bg_image',
		        'type'     => 'media',
		        'title'    => esc_html__( 'Page Title Background Image', 'ewebot' ),
	        ),
	        array(
		        'id'       => 'page_title_bg_image',
		        'type'     => 'background',
		        'background-color' => false,
		        'preview_media' => true,
		        'preview' => false,
		        'title'    => esc_html__( 'Page Title Background Image', 'ewebot' ),
		        'default'  => array(
			        'background-repeat' => 'no-repeat',
			        'background-size' => 'cover',
			        'background-attachment' => 'scroll',
			        'background-position' => 'center center',
			        'background-color' => '#6a27d9',
		        )
	        ),
	        array(
		        'id'             => 'page_title_height',
		        'type'           => 'dimensions',
		        'units'          => false,
		        'units_extended' => false,
		        'title'          => esc_html__( 'Page Title Height', 'ewebot' ),
		        'height'         => true,
		        'width'          => false,
		        'default'        => array(
			        'height' => 260,
		        )
	        ),
	        array(
		        'id'       => 'page_title_top_border',
		        'type'     => 'switch',
		        'title'    => esc_html__( 'Page Title Top Border', 'ewebot' ),
		        'default'  => false,
	        ),
	        array(
		        'id'       => 'page_title_top_border_color',
		        'type'     => 'color_rgba',
		        'title'    => esc_html__( 'Page Title Top Border Color', 'ewebot' ),
		        'default'  => array(
			        'color' => '#191a1c',
			        'alpha' => '1',
			        'rgba'  => 'rgba(25,26,28,1)'
		        ),
		        'mode'     => 'background',
		        'required' => array(
			        array( 'page_title_top_border', '=', '1' ),
		        ),
	        ),
	        array(
		        'id'            => 'page_title_bottom_border',
		        'type'          => 'switch',
		        'title'         => esc_html__( 'Page Title Bottom Border', 'ewebot' ),
		        'default'       => false,
	        ),
	        array(
		        'id'            => 'page_title_bottom_border_color',
		        'type'          => 'color_rgba',
		        'title'         => esc_html__( 'Page Title Bottom Border Color', 'ewebot' ),
		        'default'       => array(
			        'color'         => '#191a1c',
			        'alpha'         => '1',
			        'rgba'          => 'rgba(25,26,28,1)'
		        ),
		        'mode'          => 'background',
		        'required'      => array(
			        array( 'page_title_bottom_border', '=', '1' ),
		        ),
	        ),
	        array(
		        'id'            => 'page_title_bottom_margin',
		        'type'          => 'spacing',
		        // An array of CSS selectors to apply this font style to
		        'mode'          => 'margin',
		        'all'           => false,
		        'bottom'        => true,
		        'top'           => false,
		        'left'          => false,
		        'right'         => false,
		        'title'         => esc_html__( 'Page Title Bottom Margin', 'ewebot' ),
		        'default'       => array(
			        'margin-bottom' => '80',
		        )
	        ),
	        array(
		        'id'            => 'page_title-end',
		        'type'          => 'section',
		        'indent'        => false,
		        'required'      => array( 'page_title_conditional', '=', '1' ),
	        ),

        )
    ) );

    // -> START Footer Options
    Redux::setSection( $opt_name, array(
        'title'             => esc_html__('Footer', 'ewebot' ),
        'id'                => 'footer-option',
        'customizer_width'  => '400px',
        'icon'              => 'fa fa-copyright',
        'fields'            => array()
    ) );

    Redux::setSection( $opt_name, array(
        'title'            => esc_html__( 'Footer Content', 'ewebot' ),
        'id'               => 'footer_content',
        'subsection'       => true,
        'customizer_width' => '450px',
        'fields'           => array()
    ) );

    Redux::setSection( $opt_name, array(
        'title'            => esc_html__( 'Copyright', 'ewebot' ),
        'id'               => 'copyright',
        'subsection'       => true,
        'customizer_width' => '450px',
        'fields'           => array()
    ));

    Redux::setSection( $opt_name, array(
        'title'            => esc_html__( 'Prefooter Area', 'ewebot' ),
        'id'               => 'pre_footer',
        'subsection'       => true,
        'customizer_width' => '450px',
        'fields'           => array()
    ));

    // -> START Blog Options
    Redux::setSection( $opt_name, array(
        'title'            => esc_html__('Blog', 'ewebot' ),
        'id'               => 'blog-option',
        'customizer_width' => '400px',
        'icon' => 'el-icon-th-list',
        'fields'           => array(
            array(
                'id'       => 'related_posts',
                'type'     => 'switch',
                'title'    => esc_html__( 'Related Posts', 'ewebot' ),
                'default'  => true,
            ),
            array(
                'id'       => 'related_posts_filter',
                'type'     => 'button_set',
                'title'    => esc_html__('Show Related Posts by', 'ewebot'),
                'options' => array(
                    'tag' => esc_html__('Tag', 'ewebot'),
                    'category' => esc_html__('Category', 'ewebot'),
                 ),
                'default' => 'tag',
                'required' => array( 'related_posts', '=', '1' ),
            ),
            array(
                'id'       => 'author_box',
                'type'     => 'switch',
                'title'    => esc_html__( 'Author Box on Single Post', 'ewebot' ),
                'default'  => true,
            ),
            array(
                'id'       => 'post_comments',
                'type'     => 'switch',
                'title'    => esc_html__( 'Post Comments', 'ewebot' ),
                'default'  => true,
            ),
            array(
                'id'       => 'post_pingbacks',
                'type'     => 'switch',
                'title'    => esc_html__( 'Trackbacks and Pingbacks', 'ewebot' ),
                'default'  => true,
            ),
            array(
                'id'       => 'blog_post_likes',
                'type'     => 'switch',
                'title'    => esc_html__( 'Likes on Posts', 'ewebot' ),
                'default'  => false,
            ),
            array(
                'id'       => 'blog_post_share',
                'type'     => 'switch',
                'title'    => esc_html__( 'Share on Posts', 'ewebot' ),
                'default'  => true,
            ),
            array(
                'id'       => 'blog_post_listing_content',
                'type'     => 'switch',
                'title'    => esc_html__( 'Cut Off Text in Blog Listing', 'ewebot' ),
                'default'  => false,
            ),
            array(
                'id'       => 'blog_post_fimage_animation',
                'type'     => 'switch',
                'title'    => esc_html__( 'Add animation to Featured Image in Blog Listing', 'ewebot' ),
                'default'  => false,
            ),
        )
    ) );

    // -> START Gallery Options
	if (class_exists('\ElementorModal\Widgets\GT3_Elementor_Gallery')) {
		Redux::setSection($opt_name, array(
			'title'            => esc_html__('Gallery', 'ewebot'),
			'id'               => 'gallery-option',
			'customizer_width' => '400px',
			'icon'             => 'el el-picture',
			'fields'           => array(
				array(
					'id'      => 'gallery_type',
					'type'    => 'select',
					'title'   => esc_html__('Select default gallery type', 'ewebot'),
					'options' => array(
						'grid'          => esc_html__('Grid Gallery', 'ewebot'),
						'packery'       => esc_html__('Packery Gallery', 'ewebot'),
						'fs_slider'     => esc_html__('FullScreen Slider', 'ewebot'),
						'shift_slider'  => esc_html__('Shift Slider', 'ewebot'),
						'masonry'       => esc_html__('Masonry Gallery', 'ewebot'),
						'kenburn'       => esc_html__('Kenburns', 'ewebot'),
						'ribbon'        => esc_html__('Ribbon Slider', 'ewebot'),
						'flow'          => esc_html__('Flow Slider', 'ewebot'),
					),
					'default' => 'grid'
				),
				// Grid
				array(
					'id'       => 'grid_grid_type',
					'type'     => 'select',
					'title'    => esc_html__('Grid Type', 'ewebot'),
					'options'  => array(
						'vertical'  => esc_html__('Vertical Align', 'ewebot'),
						'square'    => esc_html__('Square', 'ewebot'),
						'rectangle' => esc_html__('Rectangle', 'ewebot'),
					),
					'default'  => 'vertical',
					'required' => array( 'gallery_type', '=', 'grid' ),
				),
				array(
					'id'       => 'grid_cols',
					'type'     => 'select',
					'title'    => esc_html__('Cols', 'ewebot'),
					'options'  => array(
						'1' => '1',
						'2' => '2',
						'3' => '3',
						'4' => '4',
					),
					'default'  => '4',
					'required' => array( 'gallery_type', '=', 'grid' ),
				),
				array(
					'id'       => 'grid_grid_gap',
					'type'     => 'select',
					'title'    => esc_html__('Grid Gap', 'ewebot'),
					'options'  => array(
						'0'    => '0',
						'1px'  => '1px',
						'2px'  => '2px',
						'3px'  => '3px',
						'4px'  => '4px',
						'5px'  => '5px',
						'10px' => '10px',
						'15px' => '15px',
						'20px' => '20px',
						'25px' => '25px',
						'30px' => '30px',
						'35px' => '35px',

						'2%'    => '2%',
						'4.95%' => '5%',
						'8%'    => '8%',
						'10%'   => '10%',
						'12%'   => '12%',
						'15%'   => '15%',
					),
					'default'  => '30px',
					'required' => array( 'gallery_type', '=', 'grid' ),
				),
				array(
					'id'       => 'grid_hover',
					'type'     => 'select',
					'title'    => esc_html__('Hover Effect', 'ewebot'),
					'options'  => array(
						'type1' => esc_html__('Type 1', 'ewebot'),
						'type2' => esc_html__('Type 2', 'ewebot'),
						'type3' => esc_html__('Type 3', 'ewebot'),
						'type4' => esc_html__('Type 4', 'ewebot'),
						'type5' => esc_html__('Type 5', 'ewebot'),
					),
					'default'  => 'type2',
					'required' => array( 'gallery_type', '=', 'grid' ),
				),

				array(
					'id'       => 'grid_lightbox',
					'type'     => 'switch',
					'title'    => esc_html__('Lightbox', 'ewebot'),
					'default'  => true,
					'required' => array( 'gallery_type', '=', 'grid' ),
				),
				array(
					'id'       => 'grid_show_title',
					'type'     => 'switch',
					'title'    => esc_html__('Show Title', 'ewebot'),
					'default'  => true,
					'required' => array( 'gallery_type', '=', 'grid' ),
				),
				array(
					'id'            => 'grid_post_per_load',
					'type'          => 'slider',
					'title'         => esc_html__('Post Per Load', 'ewebot'),
					'default'       => 12,
					'min'           => 1,
					'step'          => 1,
					'max'           => 100,
					'display_value' => 'text',
					'required'      => array( 'gallery_type', '=', 'grid' ),
				),
				array(
					'id'       => 'grid_show_view_all',
					'type'     => 'switch',
					'title'    => esc_html__('Show "See More" Button', 'ewebot'),
					'default'  => true,
					'required' => array( 'gallery_type', '=', 'grid' ),
				),
				array(
					'id'            => 'grid_load_items',
					'type'          => 'slider',
					'title'         => esc_html__('See Items', 'ewebot'),
					'default'       => 4,
					'min'           => 1,
					'step'          => 1,
					'max'           => 100,
					'display_value' => 'text',
					'required'      => array(
						array( 'gallery_type', '=', 'grid' ),
						array( 'grid_show_view_all', '=', '1' ),
					),
				),
				array(
					'id'       => 'grid_button_type',
					'type'     => 'select',
					'title'    => esc_html__('Button Type', 'ewebot'),
					'options'  => array(
						'none'    => esc_html__('None', 'ewebot'),
						'default' => esc_html__('Default', 'ewebot'),
					),
					'default'  => 'default',
					'required' => array(
						array( 'gallery_type', '=', 'grid' ),
						array( 'grid_show_view_all', '=', '1' ),
					),
				),
				array(
					'id'       => 'grid_button_border',
					'type'     => 'switch',
					'title'    => esc_html__('Button Border', 'ewebot'),
					'default'  => true,
					'required' => array(
						array( 'gallery_type', '=', 'grid' ),
						array( 'grid_show_view_all', '=', '1' ),
					),
				),
				array(
					'id'       => 'grid_button_title',
					'type'     => 'text',
					'title'    => esc_html__('Button Title', 'ewebot'),
					'default'  => esc_html__('Load More', 'ewebot'),
					'required' => array(
						array( 'gallery_type', '=', 'grid' ),
						array( 'grid_show_view_all', '=', '1' ),
					),
				),


				// Packery
				array(
					'id'      => 'packery_type',
					'type'    => 'image_select',
					'title'   => esc_html__('Type', 'ewebot'),
					'options' => array(
						'1' => array(
							'alt' => esc_html__('Type 1', 'ewebot'),
							'img' => esc_url(\ElementorModal\Widgets\GT3_Elementor_Gallery::$IMAGE_URL.'type1.png')
						),
						'2' => array(
							'alt' => esc_html__('Type 2', 'ewebot'),
							'img' => esc_url(\ElementorModal\Widgets\GT3_Elementor_Gallery::$IMAGE_URL.'type2.png')
						),
						'3' => array(
							'alt' => esc_html__('Type 3', 'ewebot'),
							'img' => esc_url(\ElementorModal\Widgets\GT3_Elementor_Gallery::$IMAGE_URL.'type3.png')
						),
						'4' => array(
							'alt' => esc_html__('Type 4', 'ewebot'),
							'img' => esc_url(\ElementorModal\Widgets\GT3_Elementor_Gallery::$IMAGE_URL.'type4.png')
						),
					),
					'default' => '2',
					'required' => array( 'gallery_type', '=', 'packery' ),
				),
				array(
					'id'       => 'packery_grid_gap',
					'type'     => 'select',
					'title'    => esc_html__('Packery Gap', 'ewebot'),
					'options'  => array(
						'0'    => '0',
						'1px'  => '1px',
						'2px'  => '2px',
						'3px'  => '3px',
						'4px'  => '4px',
						'5px'  => '5px',
						'10px' => '10px',
						'15px' => '15px',
						'20px' => '20px',
						'25px' => '25px',
						'30px' => '30px',
						'35px' => '35px',

						'2%'    => '2%',
						'4.95%' => '5%',
						'8%'    => '8%',
						'10%'   => '10%',
						'12%'   => '12%',
						'15%'   => '15%',
					),
					'default'  => '30px',
					'required' => array( 'gallery_type', '=', 'packery' ),
				),
				array(
					'id'       => 'packery_hover',
					'type'     => 'select',
					'title'    => esc_html__('Hover Effect', 'ewebot'),
					'options'  => array(
						'type1' => esc_html__('Type 1', 'ewebot'),
						'type2' => esc_html__('Type 2', 'ewebot'),
						'type3' => esc_html__('Type 3', 'ewebot'),
						'type4' => esc_html__('Type 4', 'ewebot'),
						'type5' => esc_html__('Type 5', 'ewebot'),
					),
					'default'  => 'type2',
					'required' => array( 'gallery_type', '=', 'packery' ),
				),
				array(
					'id'       => 'packery_lightbox',
					'type'     => 'switch',
					'title'    => esc_html__('Lightbox', 'ewebot'),
					'default'  => true,
					'required' => array( 'gallery_type', '=', 'packery' ),
				),
				array(
					'id'       => 'packery_show_title',
					'type'     => 'switch',
					'title'    => esc_html__('Show Title', 'ewebot'),
					'default'  => true,
					'required' => array( 'gallery_type', '=', 'packery' ),
				),
				array(
					'id'            => 'packery_post_per_load',
					'type'          => 'slider',
					'title'         => esc_html__('Post Per Load', 'ewebot'),
					'default'       => 12,
					'min'           => 1,
					'step'          => 1,
					'max'           => 100,
					'display_value' => 'text',
					'required'      => array( 'gallery_type', '=', 'packery' ),
				),
				array(
					'id'       => 'packery_show_view_all',
					'type'     => 'switch',
					'title'    => esc_html__('Show "See More" Button', 'ewebot'),
					'default'  => true,
					'required' => array( 'gallery_type', '=', 'packery' ),
				),
				array(
					'id'            => 'packery_load_items',
					'type'          => 'slider',
					'title'         => esc_html__('See Items', 'ewebot'),
					'default'       => 4,
					'min'           => 1,
					'step'          => 1,
					'max'           => 100,
					'display_value' => 'text',
					'required'      => array(
						array( 'gallery_type', '=', 'packery' ),
						array( 'packery_show_view_all', '=', '1' ),
					),
				),
				array(
					'id'       => 'packery_button_type',
					'type'     => 'select',
					'title'    => esc_html__('Button Type', 'ewebot'),
					'options'  => array(
						'none'    => esc_html__('None', 'ewebot'),
						'default' => esc_html__('Default', 'ewebot'),
					),
					'default'  => 'default',
					'required' => array(
						array( 'gallery_type', '=', 'packery' ),
						array( 'packery_show_view_all', '=', '1' ),
					),
				),
				array(
					'id'       => 'packery_button_border',
					'type'     => 'switch',
					'title'    => esc_html__('Button Border', 'ewebot'),
					'default'  => true,
					'required' => array(
						array( 'gallery_type', '=', 'packery' ),
						array( 'packery_show_view_all', '=', '1' ),
					),
				),
				array(
					'id'       => 'packery_button_border',
					'type'     => 'switch',
					'title'    => esc_html__('Button Border', 'ewebot'),
					'default'  => true,
					'required' => array(
						array( 'gallery_type', '=', 'packery' ),
						array( 'packery_show_view_all', '=', '1' ),
					),
				),
				array(
					'id'       => 'packery_button_title',
					'type'     => 'text',
					'title'    => esc_html__('Button Title', 'ewebot'),
					'default'  => esc_html__('Load More', 'ewebot'),
					'required' => array(
						array( 'gallery_type', '=', 'packery' ),
						array( 'packery_show_view_all', '=', '1' ),
					),
				),
				// FS Slider
				array(
					'id'       => 'fs_controls',
					'type'     => 'switch',
					'title'    => esc_html__('Controls', 'ewebot'),
					'default'  => true,
					'required' => array( 'gallery_type', '=', 'fs_slider' ),
				),
				array(
					'id'       => 'fs_autoplay',
					'type'     => 'switch',
					'title'    => esc_html__('Autoplay', 'ewebot'),
					'default'  => true,
					'required' => array( 'gallery_type', '=', 'fs_slider' ),
				),
				array(
					'id'       => 'fs_thumbs',
					'type'     => 'switch',
					'title'    => esc_html__('Thumbnails', 'ewebot'),
					'default'  => true,
					'required' => array( 'gallery_type', '=', 'fs_slider' ),
				),
				array(
					'id'       => 'fs_interval',
					'type'     => 'text',
					'validate' => 'numeric',
					'title'    => esc_html__('Slide Duration', 'ewebot'),
					'default'  => '6000',
					'required' => array( 'gallery_type', '=', 'fs_slider' ),
				),
				array(
					'id'       => 'fs_transition_time',
					'type'     => 'text',
					'validate' => 'numeric',
					'title'    => esc_html__('Transition Interval', 'ewebot'),
					'default'  => '1000',
					'required' => array( 'gallery_type', '=', 'fs_slider' ),
				),
				array(
					'id'        => 'fs_panel_color',
					'type'      => 'color',
					'title'     => esc_html__('Panel Color', 'ewebot' ),
					'transparent' => false,
					'default'   => '#fff',
					'validate'  => 'color',
					'required' => array( 'gallery_type', '=', 'fs_slider' ),
				),
				array(
					'id'       => 'fs_anim_style',
					'type'     => 'select',
					'title'    => esc_html__('Anim style', 'ewebot'),
					'options'  => array(
						'fade'      => esc_html__('Fade', 'ewebot'),
						'slip'      => esc_html__('Slip', 'ewebot'),
						'slip_up'   => esc_html__('Slip Up', 'ewebot'),
						'slip_down' => esc_html__('Slip Down', 'ewebot'),
					),
					'default'  => 'fade',
					'required' => array( 'gallery_type', '=', 'fs_slider' ),
				),
				array(
					'id'       => 'fs_fit_style',
					'type'     => 'select',
					'title'    => esc_html__('Fit Style', 'ewebot'),
					'options'  => array(
						'no_fit'     => __('Cover Slide', 'ewebot'),
						'fit_always' => __('Fit Always', 'ewebot'),
						'fit_width'  => __('Fit Horizontal', 'ewebot'),
						'fit_height' => __('Fit Vertical', 'ewebot'),
					),
					'default'  => 'no_fit',
					'required' => array( 'gallery_type', '=', 'fs_slider' ),
				),
				array(
					'id'       => 'fs_module_height',
					'type'     => 'text',
					'title'    => esc_html__('Module Height', 'ewebot'),
					'description' => esc_html__('Set module height in px (pixels). Enter \'100%\' for full height mode', 'ewebot'),
					'default'  => '100%',
					'required' => array( 'gallery_type', '=', 'fs_slider' ),
				),

				// Shift
				array(
					'id'       => 'shift_controls',
					'type'     => 'switch',
					'title'    => esc_html__('Show Control Buttons', 'ewebot'),
					'description' => esc_html__('Turn ON or OFF control buttons', 'ewebot'),
					'default'  => true,
					'required' => array( 'gallery_type', '=', 'shift_slider' ),
				),
				array(
					'id'       => 'shift_infinity_scroll',
					'type'     => 'switch',
					'title'    => esc_html__('Infinite Scroll', 'ewebot'),
					'default'  => true,
					'required' => array( 'gallery_type', '=', 'shift_slider' ),
					'description' => esc_html__('Turn ON or OFF infinite  scrolling. Autoplay works only when infinite scroll is ON', 'ewebot'),
				),
				array(
					'id'       => 'shift_autoplay',
					'type'     => 'switch',
					'title'    => esc_html__('Autoplay', 'ewebot'),
					'description' => esc_html__('Turn ON or OFF slider autoplay', 'ewebot'),
					'default'  => true,
					'required' => array(
						array( 'gallery_type', '=', 'shift_slider' ),
						array( 'shift_infinity_scroll', '=', '1'),
					),
				),
				array(
					'id'       => 'shift_interval',
					'type'     => 'text',
					'validate' => 'numeric',
					'title'    => esc_html__('Slide Duration', 'ewebot'),
					'description' => esc_html__('Set the timing of single slides in milliseconds', 'ewebot'),
					'default'  => '6000',
					'required' => array(
						array( 'gallery_type', '=', 'shift_slider' ),
						array( 'shift_infinity_scroll', '=', '1'),
						array( 'shift_autoplay', '=', '1'),
					),
				),
				array(
					'id'       => 'shift_transition_time',
					'type'     => 'text',
					'validate' => 'numeric',
					'title'    => esc_html__('Transition Interval', 'ewebot'),
					'description' => esc_html__('Set transition animation time', 'ewebot'),
					'default'  => '600',
					'required' => array( 'gallery_type', '=', 'shift_slider' ),
				),
				array(
					'id'       => 'shift_descr_type',
					'type'     => 'select',
					'title'    => esc_html__('Show Title', 'ewebot'),
					'options'  => array(
						'always'   => esc_html__('Always Show', 'ewebot'),
						'hide'     => esc_html__('Always Hide', 'ewebot'),
						'on_hover' => esc_html__('Show on Hover', 'ewebot'),
						'expanded' => esc_html__('Show when slide is expanded', 'ewebot'),
					),
					'default'  => 'on_hover',
					'required' => array( 'gallery_type', '=', 'shift_slider' ),
				),
				array(
					'id'       => 'shift_expandeble',
					'type'     => 'switch',
					'title'    => esc_html__('Expandable slides', 'ewebot'),
					'description' => esc_html__('Turn ON or OFF expandable slides', 'ewebot'),
					'required' => array( 'gallery_type', '=', 'shift_slider' ),
				),
				array(
					'id'       => 'shift_hover_effect',
					'type'     => 'switch',
					'title'    => esc_html__('Hover Effect', 'ewebot'),
					'default'  => true,
					'required' => array( 'gallery_type', '=', 'shift_slider' ),
					'description' => esc_html__('Turn ON or OFF hover effect', 'ewebot'),
				),
				array(
					'id'       => 'shift_module_height',
					'type'     => 'text',
					'title'    => esc_html__('Module Height', 'ewebot'),
					'description' => esc_html__('Set module height in px (pixels). Enter \'100%\' for full height mode', 'ewebot'),
					'default'  => '100%',
					'required' => array( 'gallery_type', '=', 'shift_slider' ),
				),
				// Masonry
				array(
					'id'       => 'masonry_cols',
					'type'     => 'select',
					'title'    => esc_html__('Cols', 'ewebot'),
					'options'  => array(
						'1' => '1',
						'2' => '2',
						'3' => '3',
						'4' => '4',
					),
					'default'  => '4',
					'required' => array( 'gallery_type', '=', 'masonry' ),
				),
				array(
					'id'       => 'masonry_grid_gap',
					'type'     => 'select',
					'title'    => esc_html__('Grid Gap', 'ewebot'),
					'options'  => array(
						'0'    => '0',
						'1px'  => '1px',
						'2px'  => '2px',
						'3px'  => '3px',
						'4px'  => '4px',
						'5px'  => '5px',
						'10px' => '10px',
						'15px' => '15px',
						'20px' => '20px',
						'25px' => '25px',
						'30px' => '30px',
						'35px' => '35px',

						'2%'    => '2%',
						'4.95%' => '5%',
						'8%'    => '8%',
						'10%'   => '10%',
						'12%'   => '12%',
						'15%'   => '15%',
					),
					'default'  => '30px',
					'required' => array( 'gallery_type', '=', 'masonry' ),
				),
				array(
					'id'       => 'masonry_hover',
					'type'     => 'select',
					'title'    => esc_html__('Hover Effect', 'ewebot'),
					'options'  => array(
						'type1' => esc_html__('Type 1', 'ewebot'),
						'type2' => esc_html__('Type 2', 'ewebot'),
						'type3' => esc_html__('Type 3', 'ewebot'),
						'type4' => esc_html__('Type 4', 'ewebot'),
						'type5' => esc_html__('Type 5', 'ewebot'),
					),
					'default'  => 'type2',
					'required' => array( 'gallery_type', '=', 'masonry' ),
				),

				array(
					'id'       => 'masonry_lightbox',
					'type'     => 'switch',
					'title'    => esc_html__('Lightbox', 'ewebot'),
					'default'  => true,
					'required' => array( 'gallery_type', '=', 'masonry' ),
				),
				array(
					'id'       => 'masonry_show_title',
					'type'     => 'switch',
					'title'    => esc_html__('Show Title', 'ewebot'),
					'default'  => true,
					'required' => array( 'gallery_type', '=', 'masonry' ),
				),
				array(
					'id'            => 'masonry_post_per_load',
					'type'          => 'slider',
					'title'         => esc_html__('Post Per Load', 'ewebot'),
					'default'       => 12,
					'min'           => 1,
					'step'          => 1,
					'max'           => 100,
					'display_value' => 'text',
					'required'      => array( 'gallery_type', '=', 'masonry' ),
				),
				array(
					'id'       => 'masonry_show_view_all',
					'type'     => 'switch',
					'title'    => esc_html__('Show "See More" Button', 'ewebot'),
					'default'  => true,
					'required' => array( 'gallery_type', '=', 'masonry' ),
				),
				array(
					'id'            => 'masonry_load_items',
					'type'          => 'slider',
					'title'         => esc_html__('See Items', 'ewebot'),
					'default'       => 4,
					'min'           => 1,
					'step'          => 1,
					'max'           => 100,
					'display_value' => 'text',
					'required'      => array(
						array( 'gallery_type', '=', 'masonry' ),
						array( 'masonry_show_view_all', '=', '1' ),
					),
				),
				array(
					'id'       => 'masonry_button_type',
					'type'     => 'select',
					'title'    => esc_html__('Button Type', 'ewebot'),
					'options'  => array(
						'none'    => esc_html__('None', 'ewebot'),
						'default' => esc_html__('Default', 'ewebot'),
					),
					'default'  => 'default',
					'required' => array(
						array( 'gallery_type', '=', 'masonry' ),
						array( 'masonry_show_view_all', '=', '1' ),
					),
				),
				array(
					'id'       => 'masonry_button_border',
					'type'     => 'switch',
					'title'    => esc_html__('Button Border', 'ewebot'),
					'default'  => true,
					'required' => array(
						array( 'gallery_type', '=', 'masonry' ),
						array( 'masonry_show_view_all', '=', '1' ),
					),
				),
				array(
					'id'       => 'masonry_button_title',
					'type'     => 'text',
					'title'    => esc_html__('Button Title', 'ewebot'),
					'default'  => esc_html__('Load More', 'ewebot'),
					'required' => array(
						array( 'gallery_type', '=', 'masonry' ),
						array( 'masonry_show_view_all', '=', '1' ),
					),
				),
				// Kenburns
				array(
					'id'       => 'kenburn_interval',
					'type'     => 'text',
					'validate' => 'numeric',
					'title'    => esc_html__('Slide Duration', 'ewebot'),
					'description' => esc_html__('Set the timing of single slides in milliseconds', 'ewebot'),
					'default'  => '6000',
					'required' => array(
						array( 'gallery_type', '=', 'kenburn' ),
					),
				),
				array(
					'id'       => 'kenburn_transition_time',
					'type'     => 'text',
					'validate' => 'numeric',
					'title'    => esc_html__('Transition Interval', 'ewebot'),
					'description' => esc_html__('Set transition animation time', 'ewebot'),
					'default'  => '600',
					'required' => array( 'gallery_type', '=', 'kenburn' ),
				),
				array(
					'id'       => 'kenburn_overlay_state',
					'type'     => 'switch',
					'title'    => esc_html__('Overlay', 'ewebot'),
					'description' => esc_html__('Turn ON or OFF slides color overlay.', 'ewebot'),
					'required' => array( 'gallery_type', '=', 'kenburn' ),
				),
				array(
					'id'        => 'kenburn_overlay_bg',
					'type'      => 'color',
					'title'     => esc_html__('Panel Color', 'ewebot' ),
					'transparent' => false,
					'default'   => '#fff',
					'validate'  => 'color',
					'required' => array(
						array( 'gallery_type', '=', 'kenburn' ),
						array( 'kenburn_overlay_state', '=', '1'),
					),
				),
				array(
					'id'       => 'kenburn_module_height',
					'type'     => 'text',
					'title'    => esc_html__('Module Height', 'ewebot'),
					'description' => esc_html__('Set module height in px (pixels). Enter \'100%\' for full height mode', 'ewebot'),
					'default'  => '100%',
					'required' => array( 'gallery_type', '=', 'kenburn' ),
				),
				// Ribbon
				array(
					'id'       => 'ribbon_show_title',
					'type'     => 'switch',
					'title'    => esc_html__('Show Title', 'ewebot'),
					'description' => esc_html__('Turn ON or OFF titles and captions', 'ewebot'),
					'default'  => true,
					'required' => array( 'gallery_type', '=', 'ribbon' ),
				),
				array(
					'id'       => 'ribbon_descr',
					'type'     => 'switch',
					'title'    => esc_html__('Show Caption', 'ewebot'),
					'description' => esc_html__('Turn ON or OFF captions', 'ewebot'),
					'default'  => false,
					'required' => array( 'gallery_type', '=', 'ribbon' ),
				),

				array(
					'id'            => 'ribbon_items_padding',
					'type'          => 'slider',
					'title'         => esc_html__('Paddings around the images', 'ewebot'),
					'description' => esc_html__('Please use this option to add paddings around the images. Recommended size in pixels 0-50. (Ex.: 15px)', 'ewebot'),
					'default'       => 0,
					'min'           => 0,
					'step'          => 1,
					'max'           => 100,
					'display_value' => 'text',
					'required'      => array( 'gallery_type', '=', 'ribbon' ),
				),
				array(
					'id'       => 'ribbon_controls',
					'type'     => 'switch',
					'title'    => esc_html__('Controls', 'ewebot'),
					'default'  => false,
					'required' => array( 'gallery_type', '=', 'ribbon' ),
				),
				array(
					'id'       => 'ribbon_autoplay',
					'type'     => 'switch',
					'title'    => esc_html__('Autoplay', 'ewebot'),
					'default'  => false,
					'required' => array( 'gallery_type', '=', 'ribbon' ),
				),
				array(
					'id'       => 'ribbon_interval',
					'type'     => 'text',
					'validate' => 'numeric',
					'title'    => esc_html__('Slide Duration', 'ewebot'),
					'description' => esc_html__('Set the timing of single slides in milliseconds', 'ewebot'),
					'default'  => '6000',
					'required' => array(
						array( 'gallery_type', '=', 'ribbon' ),
						array( 'ribbon_autoplay', '=', '1'),
					),
				),
				array(
					'id'       => 'ribbon_transition_time',
					'type'     => 'text',
					'validate' => 'numeric',
					'title'    => esc_html__('Transition Interval', 'ewebot'),
					'description' => esc_html__('Set transition animation time', 'ewebot'),
					'default'  => '600',
					'required' => array(
						array( 'gallery_type', '=', 'ribbon' ),
						array( 'ribbon_autoplay', '=', '1'),
					),
				),
				array(
					'id'       => 'ribbon_module_height',
					'type'     => 'text',
					'title'    => esc_html__('Module Height', 'ewebot'),
					'description' => esc_html__('Set module height in px (pixels). Enter \'100%\' for full height mode', 'ewebot'),
					'default'  => '100%',
					'required' => array( 'gallery_type', '=', 'ribbon' ),
				),
				// Flow
				array(
					'id'            => 'flow_img_width',
					'type'          => 'slider',
					'title'         => esc_html__('Image Width in px (pixels)', 'ewebot'),
					'default'       => 1168,
					'min'           => 640,
					'step'          => 2,
					'max'           => 2560,
					'display_value' => 'text',
					'required'      => array( 'gallery_type', '=', 'flow' ),
				),
				array(
					'id'            => 'flow_img_height',
					'type'          => 'slider',
					'title'         => esc_html__('Image Height in px (pixels)', 'ewebot'),
					'default'       => 820,
					'min'           => 480,
					'step'          => 2,
					'max'           => 1600,
					'display_value' => 'text',
					'required'      => array( 'gallery_type', '=', 'flow' ),
				),
				array(
					'id'       => 'flow_title_state',
					'type'     => 'switch',
					'title'    => esc_html__('Show Title', 'ewebot'),
					'description' => esc_html__('Turn ON or OFF titles on slide', 'ewebot'),
					'default'  => false,
					'required' => array( 'gallery_type', '=', 'flow' ),
				),
				array(
					'id'       => 'flow_autoplay',
					'type'     => 'switch',
					'title'    => esc_html__('Autoplay', 'ewebot'),
					'default'  => false,
					'required' => array( 'gallery_type', '=', 'flow' ),
				),
				array(
					'id'       => 'flow_interval',
					'type'     => 'text',
					'validate' => 'numeric',
					'title'    => esc_html__('Slide Duration', 'ewebot'),
					'description' => esc_html__('Set the timing of single slides in milliseconds', 'ewebot'),
					'default'  => '6000',
					'required' => array(
						array( 'gallery_type', '=', 'flow' ),
						array( 'flow_autoplay', '=', '1'),
					),
				),
				array(
					'id'       => 'flow_transition_time',
					'type'     => 'text',
					'validate' => 'numeric',
					'title'    => esc_html__('Transition Interval', 'ewebot'),
					'description' => esc_html__('Set transition animation time', 'ewebot'),
					'default'  => '600',
					'required' => array(
						array( 'gallery_type', '=', 'flow' ),
						array( 'flow_autoplay', '=', '1'),
					),
				),
				array(
					'id'       => 'flow_module_height',
					'type'     => 'text',
					'title'    => esc_html__('Module Height', 'ewebot'),
					'description' => esc_html__('Set module height in px (pixels). Enter \'100%\' for full height mode', 'ewebot'),
					'default'  => '100%',
					'required' => array( 'gallery_type', '=', 'flow' ),
				),
			)
		));
	}

    // -> START Layout Options
    Redux::setSection( $opt_name, array(
        'title'            => esc_html__('Sidebars', 'ewebot' ),
        'id'               => 'layout_options',
        'customizer_width' => '400px',
        'icon' => 'el el-website',
        'fields'           => array(
            array(
                'id'       => 'page_sidebar_layout',
                'type'     => 'image_select',
                'title'    => esc_html__( 'Page Sidebar Layout', 'ewebot' ),
                'options'  => array(
                    'none' => array(
                        'alt' => esc_html__('None', 'ewebot' ),
                        'img' => esc_url(ReduxFramework::$_url) . 'assets/img/1col.png'
                    ),
                    'left' => array(
                        'alt' => esc_html__('Left', 'ewebot' ),
                        'img' => esc_url(ReduxFramework::$_url) . 'assets/img/2cl.png'
                    ),
                    'right' => array(
                        'alt' => esc_html__('Right', 'ewebot' ),
                        'img' => esc_url(ReduxFramework::$_url) . 'assets/img/2cr.png'
                    )
                ),
                'default'  => 'right'
            ),
            array(
                'id'       => 'page_sidebar_def',
                'type'     => 'select',
                'title'    => esc_html__( 'Page Sidebar', 'ewebot' ),
                'data'     => 'sidebars',
                'required' => array( 'page_sidebar_layout', '!=', 'none' ),
                'default'  => 'sidebar_main-sidebar'
            ),
            array(
                'id'       => 'blog_single_sidebar_layout',
                'type'     => 'image_select',
                'title'    => esc_html__( 'Blog Single Sidebar Layout', 'ewebot' ),
                'options'  => array(
                    'none' => array(
                        'alt' => esc_html__('None', 'ewebot' ),
                        'img' => esc_url(ReduxFramework::$_url) . 'assets/img/1col.png'
                    ),
                    'left' => array(
                        'alt' => esc_html__('Left', 'ewebot' ),
                        'img' => esc_url(ReduxFramework::$_url) . 'assets/img/2cl.png'
                    ),
                    'right' => array(
                        'alt' => esc_html__('Right', 'ewebot' ),
                        'img' => esc_url(ReduxFramework::$_url) . 'assets/img/2cr.png'
                    )
                ),
                'default'  => 'right'
            ),
            array(
                'id'       => 'blog_single_sidebar_def',
                'type'     => 'select',
                'title'    => esc_html__( 'Blog Single Sidebar', 'ewebot' ),
                'data'     => 'sidebars',
                'required' => array( 'blog_single_sidebar_layout', '!=', 'none' ),
                'default'  => 'sidebar_main-sidebar'
            ),
            array(
                'id'       => 'portfolio_single_sidebar_layout',
                'type'     => 'image_select',
                'title'    => esc_html__( 'Portfolio Single Sidebar Layout', 'ewebot' ),
                'options'  => array(
                    'none' => array(
                        'alt' => esc_html__('None', 'ewebot' ),
                        'img' => esc_url(ReduxFramework::$_url) . 'assets/img/1col.png'
                    ),
                    'left' => array(
                        'alt' => esc_html__('Left', 'ewebot' ),
                        'img' => esc_url(ReduxFramework::$_url) . 'assets/img/2cl.png'
                    ),
                    'right' => array(
                        'alt' => esc_html__('Right', 'ewebot' ),
                        'img' => esc_url(ReduxFramework::$_url) . 'assets/img/2cr.png'
                    )
                ),
                'default'  => 'none'
            ),
            array(
                'id'       => 'portfolio_single_sidebar_def',
                'type'     => 'select',
                'title'    => esc_html__( 'Portfolio Single Sidebar', 'ewebot' ),
                'data'     => 'sidebars',
                'required' => array( 'portfolio_single_sidebar_layout', '!=', 'none' ),
            ),
            array(
                'id'       => 'team_single_sidebar_layout',
                'type'     => 'image_select',
                'title'    => esc_html__( 'Team Single Sidebar Layout', 'ewebot' ),
                'options'  => array(
                    'none' => array(
                        'alt' => esc_html__('None', 'ewebot' ),
                        'img' => esc_url(ReduxFramework::$_url) . 'assets/img/1col.png'
                    ),
                    'left' => array(
                        'alt' => esc_html__('Left', 'ewebot' ),
                        'img' => esc_url(ReduxFramework::$_url) . 'assets/img/2cl.png'
                    ),
                    'right' => array(
                        'alt' => esc_html__('Right', 'ewebot' ),
                        'img' => esc_url(ReduxFramework::$_url) . 'assets/img/2cr.png'
                    )
                ),
                'default'  => 'none'
            ),
            array(
                'id'       => 'team_single_sidebar_def',
                'type'     => 'select',
                'title'    => esc_html__( 'Team Single Sidebar', 'ewebot' ),
                'data'     => 'sidebars',
                'required' => array( 'team_single_sidebar_layout', '!=', 'none' ),
            ),
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'            => esc_html__('Sidebar Generator', 'ewebot' ),
        'id'               => 'sidebars_generator_section',
        'subsection'       => true,
        'customizer_width' => '450px',
        'fields'           => array(
            array(
                'id'        =>'sidebars',
                'type'      => 'multi_text',
                'validate'  => 'no_html',
                'add_text'  => esc_html__('Add Sidebar', 'ewebot' ),
                'title'     => esc_html__('Sidebar Generator', 'ewebot' ),
                'default'   => array("Main Sidebar","Shop Sidebar","Header Sidebar"),
            ),
        )
    ) );


    // -> START Styling Options
    Redux::setSection( $opt_name, array(
        'title'            => esc_html__('Color Options', 'ewebot' ),
        'id'               => 'color_options',
        'customizer_width' => '400px',
        'icon'             => 'el-icon-brush'
    ) );

    Redux::setSection( $opt_name, array(
        'title'            => esc_html__('Colors', 'ewebot' ),
        'id'               => 'color_options_color',
        'subsection'       => true,
        'customizer_width' => '450px',
        'fields'           => array(
            array(
                'id'        => 'theme-custom-color',
                'type'      => 'color',
                'title'     => esc_html__('Theme Color', 'ewebot' ),
                'transparent' => false,
                'default'   => '#6254e7',
                'validate'  => 'color',
            ),
            array(
                'id'        => 'theme-custom-color-start',
                'type'      => 'color',
                'title'     => esc_html__('Theme Color Gradient Start', 'ewebot' ),
                'transparent' => false,
                'default'   => '#9289f1',
                'validate'  => 'color',
            ),
            array(
                'id'        => 'theme-custom-color2',
                'type'      => 'color',
                'title'     => esc_html__('Theme Color2', 'ewebot' ),
                'transparent' => false,
                'default'   => '#ff7426',
                'validate'  => 'color',
            ),
            array(
                'id'        => 'theme-custom-color2-start',
                'type'      => 'color',
                'title'     => esc_html__('Theme Color2 Gradient Start', 'ewebot' ),
                'transparent' => false,
                'default'   => '#f0ac0e',
                'validate'  => 'color',
            ),
            array(
                'id'        => 'body-background-color',
                'type'      => 'color',
                'title'     => esc_html__('Body Background Color', 'ewebot' ),
                'transparent' => false,
                'default'   => '#ffffff',
                'validate'  => 'color',
            ),
        )
    ));

    Redux::setSection( $opt_name, array(
        'title'            => esc_html__('Typography', 'ewebot' ),
        'id'               => 'typography_options',
        'customizer_width' => '400px',
        'icon' => 'el-icon-font',
        'fields'           => array(
            array(
                'id'            => 'menu-font',
                'type'          => 'typography',
                'title'         => esc_html__( 'Menu Font', 'ewebot' ),
                'google'        => true,
                'font-style'    => true,
                'color'         => false,
                'line-height'   => true,
                'font-size'     => true,
                'font-backup'   => false,
                'text-align'    => false,
                'letter-spacing' => true,
                'text-transform' => true,
                'default'       => array(
                    'font-family'   => 'Rubik',
                    'google'        => true,
                    'font-size'     => '16px',
                    'line-height'   => '22px',
                    'font-weight'   => '400',
                    'text-transform' => 'none',
                ),
            ),

            array(
                'id' => 'main-font',
                'type' => 'typography',
                'title' => esc_html__('Main Font', 'ewebot' ),
                'google' => true,
                'font-backup' => false,
                'font-size' => true,
                'line-height' => true,
                'color' => true,
                'word-spacing' => false,
                'letter-spacing' => false,
                'text-align' => false,
                'all_styles' => true,
                'default' => array(
                    'font-size' => '18px',
                    'line-height' => '27px',
                    'color' => '#696687',
                    'google' => true,
                    'font-family' => 'Rubik',
                    'font-weight' => '400',
                    'font-all-weight' => '400,500',
                ),
            ),
            array(
                'id' => 'secondary-font',
                'type' => 'typography',
                'title' => esc_html__('Secondary Font', 'ewebot' ),
                'google' => true,
                'font-backup' => false,
                'font-size' => true,
                'line-height' => true,
                'color' => true,
                'word-spacing' => false,
                'letter-spacing' => false,
                'text-align' => false,
                'default' => array(
                    'font-size' => '18px',
                    'line-height' => '27px',
                    'color' => '#696687',
                    'google' => true,
                    'font-family' => 'Nunito',
                    'font-weight' => '400',
                ),
            ),
            array(
                'id' => 'header-font',
                'type' => 'typography',
                'title' => esc_html__('Headers Font', 'ewebot' ),
                'google' => true,
                'font-backup' => false,
                'font-size' => false,
                'line-height' => false,
                'color' => true,
                'word-spacing' => false,
                'letter-spacing' => false,
                'text-align' => false,
                'text-transform' => false,
                'default' => array(
                    'color' => '#3b3663',
                    'google' => true,
                    'font-family' => 'Nunito',
                    'font-weight' => '800',
                ),
            ),
            array(
                'id' => 'h1-font',
                'type' => 'typography',
                'title' => esc_html__('H1', 'ewebot' ),
                'google' => true,
                'font-backup' => false,
                'font-size' => true,
                'line-height' => true,
                'color' => false,
                'word-spacing' => false,
                'letter-spacing' => false,
                'text-align' => false,
                'text-transform' => false,
                'default' => array(
                    'font-size' => '40px',
                    'line-height' => '43px',
                    'google' => true,
                    'font-weight' => '800',
                    'font-family' => 'Nunito',
                ),
            ),
            array(
                'id' => 'h2-font',
                'type' => 'typography',
                'title' => esc_html__('H2', 'ewebot' ),
                'google' => true,
                'font-backup' => false,
                'font-size' => true,
                'line-height' => true,
                'color' => false,
                'word-spacing' => false,
                'letter-spacing' => false,
                'text-align' => false,
                'text-transform' => false,
                'default' => array(
                    'font-size' => '30px',
                    'line-height' => '40px',
                    'google' => true,
                    'font-weight' => '800',
                    'font-family' => 'Nunito',
                ),
            ),
            array(
                'id' => 'h3-font',
                'type' => 'typography',
                'title' => esc_html__('H3', 'ewebot' ),
                'google' => true,
                'font-backup' => false,
                'font-size' => true,
                'line-height' => true,
                'color' => false,
                'word-spacing' => false,
                'letter-spacing' => false,
                'text-align' => false,
                'text-transform' => false,
                'default' => array(
                    'font-size' => '24px',
                    'line-height' => '30px',
                    'google' => true,
                    'font-weight' => '800',
                    'font-family' => 'Nunito',
                ),
            ),
            array(
                'id' => 'h4-font',
                'type' => 'typography',
                'title' => esc_html__('H4', 'ewebot' ),
                'google' => true,
                'font-backup' => false,
                'font-size' => true,
                'line-height' => true,
                'color' => false,
                'word-spacing' => false,
                'letter-spacing' => false,
                'text-align' => false,
                'text-transform' => false,
                'default' => array(
                    'font-size' => '20px',
                    'line-height' => '33px',
                    'google' => true,
                    'font-weight' => '800',
                    'font-family' => 'Nunito',
                ),
            ),
            array(
                'id' => 'h5-font',
                'type' => 'typography',
                'title' => esc_html__('H5', 'ewebot' ),
                'google' => true,
                'font-backup' => false,
                'font-size' => true,
                'line-height' => true,
                'color' => false,
                'word-spacing' => false,
                'letter-spacing' => false,
                'text-align' => false,
                'text-transform' => false,
                'default' => array(
                    'font-size' => '18px',
                    'line-height' => '30px',
                    'google' => true,
                    'font-weight' => '700',
                    'font-family' => 'Nunito',
                ),
            ),
            array(
                'id'            => 'h6-font',
                'type'          => 'typography',
                'title'         => esc_html__('H6', 'ewebot' ),
                'google'        => true,
                'font-backup'   => false,
                'font-size'     => true,
                'line-height'   => true,
                'color'         => false,
                'word-spacing'  => false,
                'letter-spacing' => false,
                'text-align'    => false,
                'text-transform' => false,
                'default'       => array(
                    'font-size'     => '16px',
                    'line-height'   => '24px',
                    'google'        => true,
                    'font-weight' => '600',
                    'font-family' => 'Nunito',
                ),
            ),
	        array(
		        'type' => 'custom_font',
		        'id' => 'custom_font',
		        'validate'=>'font_load',
		        'title' => esc_html__('Font-face list:', 'ewebot'),
		        'subtitle' => esc_html__('Upload .zip archive with font-face files.', 'ewebot').'<br>(<a target="_blank" href="http://www.fontsquirrel.com/tools/webfont-generator">'.esc_html__('Create your font-face package','ewebot').'</a>)',
		        'desc' => '<span style="color:#F09191">'.esc_html__('Note','ewebot').':</span> '.esc_html__('You have to download the font-face.zip archive.','ewebot').' <br>'.__('Pay your attention, that the archive has to contain the font-face files itself, and not the subfolders','ewebot').'<br> ('.esc_html__('E.g.: font-face.zip/your-font-face.ttf, font-face.zip/your-font-face.eot, font-face.zip/your-font-face.woff etc','ewebot').' ).<br> '.esc_html__('They\'ll be extracted and assigned automatically.', 'ewebot').' ).<br> '.esc_html__('Please check the instruction how to create', 'ewebot').' '.'.',
		        'placeholder' => array (
			        'title' => esc_html__('This is a title', 'ewebot'),
			        'description' => esc_html__('Description Here', 'ewebot'),
			        'url' => esc_html__('Give us a link!', 'ewebot'),
		        ),
	        ),
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'            => esc_html__( 'Google Map', 'ewebot' ),
        'id'               => 'google_map',
        'customizer_width' => '400px',
        'icon'             => 'el el-map-marker',
        'fields'           => array(
            array(
                'id'       => 'google_map_api_key',
                'type'     => 'text',
                'title'    => esc_html__( 'Google Map API Key', 'ewebot' ),
                'desc' => esc_html__( 'Create own API key', 'ewebot' )
                          .' <a href="https://developers.google.com/maps/documentation/javascript/get-api-key#--api" target="_blank">'
                          .esc_html__('here', 'ewebot')
                          .'</a>',
                'default'  => '',
            ),
            array(
                'id'       => 'google_map_latitude',
                'type'     => 'text',
                'title'    => esc_html__( 'Map Latitude Coordinate', 'ewebot' ),
                'default'  => '-37.8172507',
            ),
            array(
                'id'       => 'google_map_longitude',
                'type'     => 'text',
                'title'    => esc_html__( 'Map Longitude Coordinate', 'ewebot' ),
                'default'  => '144.9535833',
            ),
            array(
                'id'       => 'zoom_map',
                'type'     => 'select',
                'title'    => esc_html__( 'Default Zoom Map', 'ewebot' ),
                'desc'  => esc_html__( 'Select the number of zoom map.', 'ewebot' ),
                'options'  => array(
                    '10' => esc_html__( '10', 'ewebot' ),
                    '11' => esc_html__( '11', 'ewebot' ),
                    '12' => esc_html__( '12', 'ewebot' ),
                    '13' => esc_html__( '13', 'ewebot' ),
                    '14' => esc_html__( '14', 'ewebot' ),
                    '15' => esc_html__( '15', 'ewebot' ),
                    '16' => esc_html__( '16', 'ewebot' ),
                    '17' => esc_html__( '17', 'ewebot' ),
                    '18' => esc_html__( '18', 'ewebot' ),
                ),
                'default'  => '14'
            ),
            array(
                'id'       => 'map_marker_info',
                'type'     => 'switch',
                'title'    => esc_html__( 'Map Marker Info', 'ewebot' ),
                'default'  => true,
            ),
            array(
                'id'       => 'custom_map_marker',
                'type'     => 'text',
                'title'    => esc_html__( 'Custom Map Marker URl', 'ewebot' ),
                'default'  => '',
                'subtitle' => esc_html__( 'Visible only on mobile or if "Map Marker Info" option is off.', 'ewebot'),
            ),
            array(
                'id'       => 'map_marker_info_street_number',
                'type'     => 'text',
                'title'    => esc_html__( 'Street Number', 'ewebot' ),
                'default'  => '',
                'required'  => array( 'map_marker_info', '=', '1' ),
            ),
            array(
                'id'       => 'map_marker_info_street',
                'type'     => 'text',
                'title'    => esc_html__( 'Street', 'ewebot' ),
                'default'  => '',
                'required'  => array( 'map_marker_info', '=', '1' ),
            ),
            array(
                'id'=>'map_marker_info_descr',
                'type' => 'textarea',
                'title' => esc_html__('Short Description', 'ewebot'),
                'default' => '',
                'required'  => array( 'map_marker_info', '=', '1' ),
                'allowed_html' => array(
                    'a' => array(
                        'href' => array(),
                        'title' => array()
                    ),
                    'br' => array(),
                    'em' => array(),
                    'strong' => array()
                ),
                'description' => esc_html__('The optimal number of characters is 35', 'ewebot'),
            ),
            array(
                'id'            => 'map_marker_info_background',
                'type'          => 'color',
                'title'         => esc_html__( 'Map Marker Info Background', 'ewebot' ),
                'subtitle'      => esc_html__( 'Set Map Marker Info Background', 'ewebot' ),
                'default'       => '#0a0b0b',
                'transparent'   => false,
                'required'  => array( 'map_marker_info', '=', '1' ),
            ),
            array(
                'id' => 'map-marker-font',
                'type' => 'typography',
                'title' => esc_html__('Map Marker Font', 'ewebot' ),
                'google' => true,
                'font-backup' => false,
                'font-size' => false,
                'line-height' => false,
                'color' => false,
                'word-spacing' => false,
                'letter-spacing' => false,
                'text-align' => false,
                'default' => array(),
            ),
            array(
                'id'            => 'map_marker_info_color',
                'type'          => 'color',
                'title'         => esc_html__( 'Map Marker Description Text Color', 'ewebot' ),
                'subtitle'      => esc_html__( 'Set Map Marker Description Text Color', 'ewebot' ),
                'default'       => '#ffffff',
                'transparent'   => false,
                'required'  => array( 'map_marker_info', '=', '1' ),
            ),
            array(
                'id'       => 'custom_map_style',
                'type'     => 'switch',
                'title'    => esc_html__( 'Custom Map Style', 'ewebot' ),
                'default'  => false,
            ),
            array(
                'id'       => 'custom_map_code',
                'type'     => 'ace_editor',
                'title'    => esc_html__( 'JavaScript Style Array', 'ewebot' ),
                'desc' => esc_html__( 'To change the style of the map, you must insert the JavaScript Style Array code from ', 'ewebot' ) .' <a href="https://snazzymaps.com/" target="_blank">'.esc_html__('Snazzy Maps', 'ewebot')
                    .'</a>',
                'mode'     => 'javascript',
                'theme'    => 'chrome',
                'default'  => "",
                'required'  => array( 'custom_map_style', '=', '1' ),
            ),
        ),
    ));


    if (class_exists('WooCommerce')) {
        // -> START Layout Options
        Redux::setSection( $opt_name, array(
            'title'            => esc_html__('Shop', 'ewebot' ),
            'id'               => 'woocommerce_layout_options',
            'customizer_width' => '400px',
            'icon' => 'el el-shopping-cart',
            'fields'           => array(

            )
        ) );
        Redux::setSection( $opt_name, array(
            'title'            => esc_html__('Products Page', 'ewebot' ),
            'id'               => 'products_page_settings',
            'subsection'       => true,
            'customizer_width' => '450px',
            'fields'           => array(
                array(
                    'id'       => 'products_layout',
                    'type'     => 'select',
                    'title'    => esc_html__( 'Products Layout', 'ewebot' ),
                    'options'  => array(
                        'container' => esc_html__( 'Container', 'ewebot' ),
                        'full_width' => esc_html__( 'Full Width', 'ewebot' ),
                    ),
                    'default'  => 'container'
                ),
                array(
                    'id'       => 'products_sidebar_layout',
                    'type'     => 'image_select',
                    'title'    => esc_html__( 'Products Page Sidebar Layout', 'ewebot' ),
                    'options'  => array(
                        'none' => array(
                            'alt' => esc_html__('None', 'ewebot' ),
                            'img' => esc_url(ReduxFramework::$_url) . 'assets/img/1col.png'
                        ),
                        'left' => array(
                            'alt' => esc_html__('Left', 'ewebot' ),
                            'img' => esc_url(ReduxFramework::$_url) . 'assets/img/2cl.png'
                        ),
                        'right' => array(
                            'alt' => esc_html__('Right', 'ewebot' ),
                            'img' => esc_url(ReduxFramework::$_url) . 'assets/img/2cr.png'
                        )
                    ),
                    'default'  => 'left'
                ),
                array(
                    'id'       => 'products_sidebar_def',
                    'type'     => 'select',
                    'title'    => esc_html__( 'Products Page Sidebar', 'ewebot' ),
                    'data'     => 'sidebars',
                    'required' => array( 'products_sidebar_layout', '!=', 'none' ),
	                'default' => 'sidebar_shop-sidebar',
                ),
	            array(
		            'id'        => 'products_per_page_frontend',
		            'type'      => 'switch',
		            'title'     => esc_html__( 'Show dropdown on the frontend to change Number of products displayed per page', 'ewebot' ),
	            ),
	            array(
		            'id'        => 'products_sorting_frontend',
		            'type'      => 'switch',
		            'title'     => esc_html__( 'Show dropdown on the frontend to change Sorting of products displayed per page', 'ewebot' ),
	            ),
	            array(
		            'id'      => 'products_infinite_scroll',
		            'type'    => 'select',
		            'title'   => esc_html__( 'Infinite Scroll', 'ewebot' ),
		            'desc'    => esc_html__( 'Select Infinite Scroll options', 'ewebot' ),
		            'options' => array(
			            'none'     => esc_html__( 'None', 'ewebot' ),
			            'view_all' => esc_html__( 'Activate after clicking on "View All"', 'ewebot' ),
			            'always'   => esc_html__( 'Always', 'ewebot' ),
		            ),
		            'default' => 'none',
	            ),
	            array(
		            'id'        => 'woocommerce_pagination',
		            'type'      => 'select',
		            'title'     => esc_html__( 'Pagination', 'ewebot' ),
		            'desc'      => esc_html__( 'Select the position of pagination.', 'ewebot' ),
		            'options'   => array(
			            'top'       => esc_html__( 'Top', 'ewebot' ),
			            'bottom'    => esc_html__( 'Bottom', 'ewebot' ),
			            'top_bottom'=> esc_html__( 'Top and Bottom', 'ewebot' ),
			            'off'       => esc_html__( 'Off', 'ewebot' ),
		            ),
		            'default'   => 'top_bottom',
		            'required' => array( 'products_infinite_scroll', '!=', 'always' ),
	            ),
	            array(
		            'id'        => 'woocommerce_grid_list',
		            'type'      => 'select',
		            'title'     => esc_html__( 'Grid/List Option', 'ewebot' ),
		            'desc'      => esc_html__( 'Display products in grid or list view by default', 'ewebot' ),
		            'options'   => array(
			            'grid'      => esc_html__( 'Grid', 'ewebot' ),
			            'list'      => esc_html__( 'List', 'ewebot' ),
			            'off'       => esc_html__( 'Off', 'ewebot' ),
		            ),
		            'default'   => 'off',
	            ),
                array(
                    'id'        => 'section-label_color-start',
                    'type'      => 'section',
                    'title'     => esc_html__('"Sale", "Hot" and "New" labels color', 'ewebot'),
                    'indent'    => true,
                ),
                array(
                    'id'        => 'label_color_sale',
                    'type'      => 'color_rgba',
                    'title'     => esc_html__( 'Color for "Sale" label', 'ewebot' ),
                    'subtitle'  => esc_html__( 'Select the Background Color for "Sale" label.', 'ewebot' ),
                    'default'   => array(
                        'color'     => '#dc1c52',
                        'alpha'     => '1',
                        'rgba'      => 'rgba(230,55,100,1)'
                    ),
                ),
                array(
                    'id'        => 'label_color_hot',
                    'type'      => 'color_rgba',
                    'title'     => esc_html__( 'Color for "Hot" label', 'ewebot' ),
                    'subtitle'  => esc_html__( 'Select the Background Color for "Hot" label.', 'ewebot' ),
                    'default'   => array(
                        'color'     => '#71d080',
                        'alpha'     => '1',
                        'rgba'      => 'rgba(113,208,128,1)'
                    ),
                ),
                array(
                    'id'        => 'label_color_new',
                    'type'      => 'color_rgba',
                    'title'     => esc_html__( 'Color for "New" label', 'ewebot' ),
                    'subtitle'  => esc_html__( 'Select the Background Color for "New" label.', 'ewebot' ),
                    'default'   => array(
                        'color'     => '#435bb2',
                        'alpha'     => '1',
                        'rgba'      => 'rgba(106,209,228,1)'
                    ),
                ),
                array(
                    'id'        => 'section-label_color-end',
                    'type'      => 'section',
                    'indent'    => false,
                ),
            )
        ) );
        Redux::setSection( $opt_name, array(
            'title'             => esc_html__('Single Product Page', 'ewebot' ),
            'id'                => 'product_page_settings',
            'subsection'        => true,
            'customizer_width'  => '450px',
            'fields'            => array(
                array(
                    'id'        => 'product_layout',
                    'type'      => 'select',
                    'title'     => esc_html__( 'Thumbnails Layout', 'ewebot' ),
                    'options'   => array(
                        'horizontal'    => esc_html__( 'Thumbnails Bottom', 'ewebot' ),
                        'vertical'      => esc_html__( 'Thumbnails Left', 'ewebot' ),
                        'thumb_grid'    => esc_html__( 'Thumbnails Grid', 'ewebot' ),
                        'thumb_vertical'=> esc_html__( 'Thumbnails Vertical Grid', 'ewebot' ),
                    ),
                    'default'   => 'horizontal'
                ),
                array(
                    'id'        => 'activate_carousel_thumb',
                    'type'      => 'switch',
                    'title'     => esc_html__( 'Activate Carousel for Vertical Thumbnail', 'ewebot' ),
                    'default'   => false,
                ),
                array(
                    'id'        => 'product_container',
                    'type'      => 'select',
                    'title'     => esc_html__( 'Product Page Layout', 'ewebot' ),
                    'options'   => array(
                        'container'     => esc_html__( 'Container', 'ewebot' ),
                        'full_width'    => esc_html__( 'Full Width', 'ewebot' ),
                    ),
                    'default'   => 'container'
                ),
                array(
                    'id'        => 'sticky_thumb',
                    'type'      => 'switch',
                    'title'     => esc_html__( 'Sticky Thumbnails', 'ewebot' ),
                    'default'   => false,
                    'required'  => array( 'product_layout', '!=', 'thumb_vertical' ),
                ),
                array(
                    'id'        => 'product_sidebar_layout',
                    'type'      => 'image_select',
                    'title'     => esc_html__( 'Single Product Page Sidebar Layout', 'ewebot' ),
                    'options'   => array(
                        'none'  => array(
                            'alt'       => esc_html__('None', 'ewebot' ),
                            'img'       => esc_url(ReduxFramework::$_url) . 'assets/img/1col.png'
                        ),
                        'left'  => array(
                            'alt'       => esc_html__('Left', 'ewebot' ),
                            'img'       => esc_url(ReduxFramework::$_url) . 'assets/img/2cl.png'
                        ),
                        'right' => array(
                            'alt'       => esc_html__('Right', 'ewebot' ),
                            'img'       => esc_url(ReduxFramework::$_url) . 'assets/img/2cr.png'
                        )
                    ),
                    'default'   => 'none'
                ),
                array(
                    'id'        => 'product_sidebar_def',
                    'type'      => 'select',
                    'title'     => esc_html__( 'Single Product Page Sidebar', 'ewebot' ),
                    'data'      => 'sidebars',
                    'required'  => array( 'product_sidebar_layout', '!=', 'none' ),
                ),
                array(
                    'id'        => 'shop_size_guide',
                    'type'      => 'switch',
                    'title'     => esc_html__( 'Show Size Guide', 'ewebot' ),
                    'default'   => false,
                ),
                array(
                    'id'        => 'size_guide',
                    'type'      => 'media',
                    'title'     => esc_html__( 'Size guide Popup Image', 'ewebot' ),
                    'required'  => array( 'shop_size_guide', '=', true ),
                ),
                array(
                    'id'        => 'next_prev_product',
                    'type'      => 'switch',
                    'title'     => esc_html__( 'Show Next and Previous products', 'ewebot' ),
                    'default'   => true,
                ),
            )
        ) );
	    Redux::setSection( $opt_name, array(
		    'title'             => esc_html__('Page Title', 'ewebot' ),
		    'id'                => 'product_page_title_settings',
		    'subsection'        => true,
		    'customizer_width'  => '450px',
		    'fields'            => array(
			    array(
				    'id'       => 'shop_cat_title_conditional',
				    'type'     => 'switch',
				    'title'    => esc_html__( 'Show Title for Shop Category, Tags and Taxonomies', 'ewebot' ),
				    'default'  => true,
				    'required' => array( 'page_title_conditional', '=', '1' ),
			    ),
			    array(
				    'id'       => 'product_title_conditional',
				    'type'     => 'switch',
				    'title'    => esc_html__( 'Show Single Product Page Title', 'ewebot' ),
				    'default'  => false,
				    'required' => array( 'page_title_conditional', '=', '1' ),
			    ),
			    array(
				    'id'       => 'customize_shop_title',
				    'type'     => 'switch',
				    'title'    => esc_html__( 'Customize Shop Title', 'ewebot' ),
				    'default'  => false,
			    ),
			    array(
				    'id'       => 'shop_title-start',
				    'type'     => 'section',
				    'title'    => esc_html__( 'Title Settings', 'ewebot' ),
				    'indent'   => true,
				    'required' => array( 'customize_shop_title', '=', '1' )
			    ),
			    array(
				    'id'       => 'shop_title_vert_align',
				    'type'     => 'select',
				    'title'    => esc_html__( 'Vertical Align', 'ewebot' ),
				    'options'  => array(
					    'top'       => esc_html__( 'Top', 'ewebot' ),
					    'middle'    => esc_html__( 'Middle', 'ewebot' ),
					    'bottom'    => esc_html__( 'Bottom', 'ewebot' )
				    ),
				    'default'  => 'middle',
				    'required' => array( 'customize_shop_title', '=', '1' )
			    ),
			    array(
				    'id'       => 'shop_title_horiz_align',
				    'type'     => 'select',
				    'title'    => esc_html__( 'Shop Title Text Align?', 'ewebot' ),
				    'options'  => array(
					    'left'      =>  esc_html__( 'Left', 'ewebot' ),
					    'center'    => esc_html__( 'Center', 'ewebot' ),
					    'right'     => esc_html__( 'Right', 'ewebot' )
				    ),
				    'default'  => 'left',
				    'required' => array( 'customize_shop_title', '=', '1' )
			    ),
			    array(
				    'id'       => 'shop_title_font_color',
				    'type'     => 'color',
				    'title'    => esc_html__( 'Shop Title Font Color', 'ewebot' ),
				    'default'  => '#ffffff',
				    'transparent' => false,
				    'required' => array( 'customize_shop_title', '=', '1' )
			    ),
			    array(
				    'id'       => 'shop_title_bg_color',
				    'type'     => 'color',
				    'title'    => esc_html__( 'Shop Title Background Color', 'ewebot' ),
				    'default'  => '#0a0b0b',
				    'transparent' => false,
				    'required' => array( 'customize_shop_title', '=', '1' )
			    ),
			    array(
				    'id'       => 'shop_title_overlay_color',
				    'type'     => 'color',
				    'title'    => esc_html__( 'Shop Title Overlay Color', 'ewebot' ),
				    'default'  => '',
				    'transparent' => false,
				    'required' => array( 'customize_shop_title', '=', '1' )
			    ),
			    array(
				    'id'       => 'shop_title_bg_image',
				    'type'     => 'media',
				    'title'    => esc_html__( 'Shop Title Background Image', 'ewebot' ),
				    'required' => array( 'customize_shop_title', '=', '1' )
			    ),
			    array(
				    'id'       => 'shop_title_bg_image',
				    'type'     => 'background',
				    'background-color' => false,
				    'preview_media' => true,
				    'preview' => false,
				    'title'    => esc_html__( 'Shop Title Background Image', 'ewebot' ),
				    'default'  => array(
					    'background-repeat' => 'no-repeat',
					    'background-size' => 'cover',
					    'background-attachment' => 'scroll',
					    'background-position' => 'center center',
					    'background-color' => '#0a0b0b',
				    ),
				    'required' => array( 'customize_shop_title', '=', '1' )
			    ),
			    array(
				    'id'             => 'shop_title_height',
				    'type'           => 'dimensions',
				    'units'          => false,
				    'units_extended' => false,
				    'title'          => esc_html__( 'Shop Title Height', 'ewebot' ),
				    'height'         => true,
				    'width'          => false,
				    'default'        => array(
					    'height' => 300,
				    ),
				    'required' => array( 'customize_shop_title', '=', '1' )
			    ),
			    array(
				    'id'       => 'shop_title_top_border',
				    'type'     => 'switch',
				    'title'    => esc_html__( 'Shop Title Top Border', 'ewebot' ),
				    'default'  => false,
				    'required' => array( 'customize_shop_title', '=', '1' )
			    ),
			    array(
				    'id'       => 'shop_title_top_border_color',
				    'type'     => 'color_rgba',
				    'title'    => esc_html__( 'Shop Title Top Border Color', 'ewebot' ),
				    'default'  => array(
					    'color' => '#0a0b0b',
					    'alpha' => '1',
					    'rgba'  => 'rgba(10,11,11,1)'
				    ),
				    'mode'     => 'background',
				    'required' => array(
					    array( 'shop_title_top_border', '=', '1' ),
					    array( 'customize_shop_title', '=', '1' )
				    ),
			    ),
			    array(
				    'id'            => 'shop_title_bottom_border',
				    'type'          => 'switch',
				    'title'         => esc_html__( 'Shop Title Bottom Border', 'ewebot' ),
				    'default'       => false,
				    'required' => array( 'customize_shop_title', '=', '1' )
			    ),
			    array(
				    'id'            => 'shop_title_bottom_border_color',
				    'type'          => 'color_rgba',
				    'title'         => esc_html__( 'Shop Title Bottom Border Color', 'ewebot' ),
				    'default'       => array(
					    'color'         => '#0a0b0b',
					    'alpha'         => '1',
					    'rgba'          => 'rgba(10,11,11,1)'
				    ),
				    'mode'          => 'background',
				    'required'      => array(
					    array( 'shop_title_bottom_border', '=', '1' ),
					    array( 'customize_shop_title', '=', '1' )
				    ),
			    ),
			    array(
				    'id'            => 'shop_title_bottom_margin',
				    'type'          => 'spacing',
				    'mode'          => 'margin',
				    'all'           => false,
				    'bottom'        => true,
				    'top'           => false,
				    'left'          => false,
				    'right'         => false,
				    'title'         => esc_html__( 'Shop Title Bottom Margin', 'ewebot' ),
				    'default'       => array(
					    'margin-bottom' => '60',
				    ),
				    'required' => array( 'customize_shop_title', '=', '1' )
			    ),

			    array(
				    'id'       => 'shop_title-end',
				    'type'     => 'section',
				    'indent'   => false,
				    'required' => array( 'customize_shop_title', '=', '1' )
			    ),
		    ),
	    ));

        Redux::setSection( $opt_name, array(
            'title'             => esc_html__('Shop Header', 'ewebot' ),
            'id'                => 'product_page_header_settings',
            'subsection'        => true,
            'customizer_width'  => '450px',
            'fields'            => array(),
        ));
    }


Redux::hideSection( $opt_name, 'gt3_header_builder_section');
Redux::hideSection( $opt_name, 'header_builder_editor');
Redux::hideSection( $opt_name, 'footer-option');
Redux::hideSection( $opt_name, 'footer_content');
Redux::hideSection( $opt_name, 'copyright');
Redux::hideSection( $opt_name, 'pre_footer');
Redux::hideSection( $opt_name, 'product_page_header_settings');
