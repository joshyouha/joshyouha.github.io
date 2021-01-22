<?php
function gt3_get_default_option(){
    $option = get_option( 'ewebot_default_options' );
    if (true || empty($option)) {
        $option = '{
    "responsive": "1",
    "page_comments": "1",
    "back_to_top": "1",
    "bubbles_block": "1",    
    "team_slug": "",
    "portfolio_slug": "",
    "portfolio_name": "",
    "page_404_bg": {
        "url": "https://livewp.site/wp/md/ewebot/wp-content/uploads/sites/64/2019/09/404.png",
        "id": "1935",
        "height": "1261",
        "width": "1920",
        "thumbnail": "https://livewp.site/wp/md/ewebot/wp-content/uploads/sites/64/2019/09/404-150x150.png",
        "title": "404",
        "caption": "",
        "alt": "",
        "description": ""
    },
    "disable_right_click": "",
    ",custom_js": "",
    "header_custom_js": "",
    "preloader": "",
    "preloader_type": "circle",
    "preloader_background": "#191a1c",
    "preloader_item_color": "#ffffff",
    "preloader_item_color2": "#435bb2",
    "preloader_item_width": {
        "width": "140"
    },
    "preloader_item_stroke": {
        "width": "3"
    },
    "preloader_item_logo": {
        "url": "",
        "id": "",
        "height": "",
        "width": "",
        "thumbnail": "",
        "title": "",
        "caption": "",
        "alt": "",
        "description": ""
    },
    "preloader_item_logo_width": {
        "width": "45px",
        "units": "px"
    },
    "preloader_full": "1",        
    "page_title_conditional": "1",
    "blog_title_conditional": "1",
    "team_title_conditional": "",
    "portfolio_title_conditional": "1",
    "page_title_breadcrumbs_conditional": "1",
    "page_title_vert_align": "middle",
    "page_title_horiz_align": "center",
    "page_title_font_color": "#ffffff",
    "page_title_bg_color": "#ffffff",
    "page_title_overlay_color": "",
    "page_title_bg_image": {
        "background-repeat": "no-repeat",
        "background-size": "cover",
        "background-attachment": "scroll",
        "background-position": "center center",
        "background-image": "https://livewp.site/wp/md/ewebot/wp-content/uploads/sites/64/2019/09/pic_paralax_2.jpg",
        "media": {
            "id": "2651",
            "height": "1000",
            "width": "3000",
            "thumbnail": "https://livewp.site/wp/md/ewebot/wp-content/uploads/sites/64/2019/09/pic_paralax_2-150x150.jpg"
        }
    },
    "page_title_height": {
        "height": "260"
    },
    "page_title_top_border": "",
    "page_title_top_border_color": {
        "color": "#191a1c",
        "alpha": "1",
        "rgba": "rgba(25,26,28,1)"
    },
    "page_title_bottom_border": "",
    "page_title_bottom_border_color": {
        "color": "#191a1c",
        "alpha": "1",
        "rgba": "rgba(25,26,28,1)"
    },
    "page_title_bottom_margin": {
        "margin-bottom": "80"
    },    
    "related_posts": "",
    "related_posts_filter": "tag",
    "author_box": "1",
    "post_comments": "1",
    "post_pingbacks": "1",
    "blog_post_likes": "",
    "blog_post_share": "",
    "blog_post_listing_content": "",
    "blog_post_fimage_animation": "",
    "page_sidebar_layout": "right",
    "page_sidebar_def": "sidebar_main-sidebar",
    "blog_single_sidebar_layout": "right",
    "blog_single_sidebar_def": "sidebar_main-sidebar",
    "portfolio_single_sidebar_layout": "none",
    "portfolio_single_sidebar_def": "",
    "team_single_sidebar_layout": "none",
    "team_single_sidebar_def": "",
    "sidebars": [
        "Main Sidebar",
        "Shop Sidebar",
        "Header Sidebar"
    ],
    "theme-custom-color": "#6254e7",
    "theme-custom-color-start": "#9289f1",
    "theme-custom-color2": "#ff7426",
    "theme-custom-color2-start": "#f0ac0e",
    "body-background-color": "#ffffff",
    "menu-font": {
        "font-family": "Rubik",
        "font-options": "",
        "google": "1",
        "font-weight": "400",
        "font-style": "",
        "subsets": "",
        "text-transform": "none",
        "font-size": "16px",
        "line-height": "22px",
        "letter-spacing": ""
    },
    "main-font": {
        "font-family": "Rubik",
        "font-options": "",
        "google": "1",
        "font-weight": "400",
        "font-style": "",
        "font-all-weight": "400,500",
        "subsets": "",
        "font-size": "18px",
        "line-height": "27px",
        "color": "#696687"
    },
    "secondary-font": {
        "font-family": "Nunito",
        "font-options": "",
        "google": "1",
        "font-weight": "400",
        "font-style": "",
        "subsets": "",
        "font-size": "18px",
        "line-height": "27px",
        "color": "#696687"
    },
    "header-font": {
        "font-family": "Nunito",
        "font-options": "",
        "google": "1",
        "font-weight": "800",
        "font-style": "",
        "subsets": "",
        "color": "#3b3663"
    },
    "h1-font": {
        "font-family": "Nunito",
        "font-options": "",
        "google": "1",
        "font-weight": "800",
        "font-style": "",
        "subsets": "",
        "font-size": "40px",
        "line-height": "43px"
    },
    "h2-font": {
        "font-family": "Nunito",
        "font-options": "",
        "google": "1",
        "font-weight": "800",
        "font-style": "",
        "subsets": "",
        "font-size": "30px",
        "line-height": "40px"
    },
    "h3-font": {
        "font-family": "Nunito",
        "font-options": "",
        "google": "1",
        "font-weight": "800",
        "font-style": "",
        "subsets": "",
        "font-size": "24px",
        "line-height": "30px"
    },
    "h4-font": {
        "font-family": "Nunito",
        "font-options": "",
        "google": "1",
        "font-weight": "800",
        "font-style": "",
        "subsets": "",
        "font-size": "20px",
        "line-height": "33px"
    },
    "h5-font": {
        "font-family": "Nunito",
        "font-options": "",
        "google": "1",
        "font-weight": "700",
        "font-style": "",
        "subsets": "",
        "font-size": "18px",
        "line-height": "30px"
    },
    "h6-font": {
        "font-family": "Nunito",
        "font-options": "",
        "google": "1",
        "font-weight": "600",
        "font-style": "",
        "subsets": "",
        "font-size": "16px",
        "line-height": "24px"
    },
    "google_map_api_key": "",
    "google_map_latitude": "-37.8172507",
    "google_map_longitude": "144.9535833",
    "zoom_map": "14",
    "map_marker_info": "1",
    "custom_map_marker": "https://livewp.site/assets/img/ewebot.png",
    "map_marker_info_street_number": "",
    "map_marker_info_street": "",
    "map_marker_info_descr": "",
    "map_marker_info_background": "#0a0b0b",
    "map-marker-font": {
        "font-family": "",
        "font-options": "",
        "google": "1",
        "font-weight": "",
        "font-style": "",
        "subsets": ""
    },
    "map_marker_info_color": "#ffffff",
    "custom_map_style": "",
    "custom_map_code": "",
    "products_layout": "container",
    "products_sidebar_layout": "left",
    "products_sidebar_def": "sidebar_shop-sidebar",
    "products_per_page_frontend": "",
    "products_sorting_frontend": "",
    "products_infinite_scroll": "none",
    "woocommerce_pagination": "top_bottom",
    "woocommerce_grid_list": "off",
    "label_color_sale": {
        "color": "#dc1c52",
        "alpha": "1",
        "rgba": "rgba(230,55,100,1)"
    },
    "label_color_hot": {
        "color": "#71d080",
        "alpha": "1",
        "rgba": "rgba(113,208,128,1)"
    },
    "label_color_new": {
        "color": "#435bb2",
        "alpha": "1",
        "rgba": "rgba(106,209,228,1)"
    },
    "product_layout": "horizontal",
    "activate_carousel_thumb": "",
    "product_container": "container",
    "sticky_thumb": "",
    "product_sidebar_layout": "none",
    "product_sidebar_def": "",
    "shop_size_guide": "",
    "size_guide": {
        "url": "",
        "id": "",
        "height": "",
        "width": "",
        "thumbnail": "",
        "title": "",
        "caption": "",
        "alt": "",
        "description": ""
    },
    "next_prev_product": "1",
    "shop_cat_title_conditional": "1",
    "product_title_conditional": "",
    "customize_shop_title": "",
    "shop_title_vert_align": "middle",
    "shop_title_horiz_align": "left",
    "shop_title_font_color": "#ffffff",
    "shop_title_bg_color": "#0a0b0b",
    "shop_title_overlay_color": "",
    "shop_title_bg_image": {
        "background-repeat": "no-repeat",
        "background-size": "cover",
        "background-attachment": "scroll",
        "background-position": "center center",
        "background-image": "",
        "media": {
            "id": "",
            "height": "",
            "width": "",
            "thumbnail": ""
        }
    },
    "shop_title_height": {
        "height": "300"
    },
    "shop_title_top_border": "",
    "shop_title_top_border_color": {
        "color": "#0a0b0b",
        "alpha": "1",
        "rgba": "rgba(10,11,11,1)"
    },
    "shop_title_bottom_border": "",
    "shop_title_bottom_border_color": {
        "color": "#0a0b0b",
        "alpha": "1",
        "rgba": "rgba(10,11,11,1)"
    },
    "shop_title_bottom_margin": {
        "margin-bottom": "60"
    },
    "import_link": "",    
    "redux-backup": 1
}';

        $option = json_decode($option,true);
        update_option( 'ewebot_default_options', $option );
    }
    //update_option( 'ewebot_default_options', '' );
}
gt3_get_default_option();
if (!function_exists('gt3_default_fonts')) {
	function gt3_default_fonts(){
	    $link = 'https://fonts.googleapis.com/css?family=Rubik%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CNunito%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic';
	    wp_enqueue_style('gt3-default-font',$link);
	}
}

if ( !class_exists( 'GT3_Core_Elementor' ) ) {
    add_action('wp_enqueue_scripts', 'gt3_default_fonts');
}
add_action('admin_enqueue_scripts', 'gt3_default_fonts');

/** Default wpda-builder-settings  */
$header_footer_defaults = get_option('wpda-builder-settings', false);
if (false === $header_footer_defaults) {
	$header_footer_defaults = array(
		'header_area'    => '.gt3_header_builder',
		'footer_area'    => '.main_footer',
	);
	update_option('wpda-builder-settings', json_encode($header_footer_defaults));
}
/**  */
