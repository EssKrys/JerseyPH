<?php
function nasa_wpb_fashion_8() {
    $imgs_1 = elessi_import_upload('/wp-content/uploads/2018/05/h9-banner1.jpg', '3112', array(
        'post_title' => 'h9-banner1',
        'post_name' => 'h9-banner1',
    ));
    
    $imgs_2 = elessi_import_upload('/wp-content/uploads/2018/05/h9-banner2.jpg', '3112', array(
        'post_title' => 'h9-banner2',
        'post_name' => 'h9-banner2',
    ));
    
    $imgs_3 = elessi_import_upload('/wp-content/uploads/2018/05/h8-banner1.jpg', '3113', array(
        'post_title' => 'h8-banner1',
        'post_name' => 'h8-banner1',
    ));
    
    return array(
        'post' => array(
            'post_title' => 'WPB Fashion V8',
            'post_name' => 'wpb-fashion-v8',
            'post_content' => '[vc_row fullwidth="1"][vc_column][nasa_slider bullets="false" navigation="false" column_number="5" autoplay="true"][nasa_pin_products_banner pin_slug="pin-products-home-6-1" bg_icon="#ffffff" txt_color="#333333"][nasa_pin_products_banner pin_slug="pin-products-home-6-1" bg_icon="#ffffff" txt_color="#333333"][nasa_pin_products_banner pin_slug="pin-products-home-6-1" bg_icon="#ffffff" txt_color="#333333"][nasa_pin_products_banner pin_slug="pin-products-home-6-1" bg_icon="#ffffff" txt_color="#333333"][nasa_pin_products_banner pin_slug="pin-products-home-6-1" bg_icon="#ffffff" txt_color="#333333"][/nasa_slider][/vc_column][/vc_row][vc_row el_class="margin-top-30 margin-bottom-50"][vc_column width="1/3" el_class="desktop-padding-right-30"][vc_row_inner css=".vc_custom_1525455373923{margin-bottom: 60px !important;}"][vc_column_inner css=".vc_custom_1525455080075{border-top-width: 1px !important;border-right-width: 1px !important;border-bottom-width: 1px !important;border-left-width: 1px !important;padding-top: 10px !important;padding-right: 30px !important;padding-bottom: 0px !important;padding-left: 30px !important;border-left-color: #efefef !important;border-left-style: solid !important;border-right-color: #efefef !important;border-right-style: solid !important;border-top-color: #efefef !important;border-top-style: solid !important;border-bottom-color: #efefef !important;border-bottom-style: solid !important;}"][nasa_products_special_deal limit="6" columns_number="1" columns_number_small="1" columns_number_tablet="1" arrows="1" auto_slide="false" title="Special Deals"][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner][nasa_title title_text="Best Selling" title_type="h3" font_size="l" el_class="desktop-margin-bottom-30"][nasa_products type="best_selling" style="list_carousel" style_row="3" arrows="0" number="6" columns_number="1" columns_number_small="1" columns_number_tablet="1"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="2/3"][vc_row_inner el_class="margin-top-15"][vc_column_inner][nasa_title title_text="New Arrivals" title_type="h3" font_size="l"][nasa_products style="carousel" shop_url="0" arrows="0" number="5" columns_number="3" columns_number_small="1" columns_number_tablet="2"][/vc_column_inner][/vc_row_inner][vc_row_inner el_class="margin-top-50 margin-bottom-40"][vc_column_inner width="1/2"][nasa_banner height="182px" align="right" valign="middle" text-align="text-right" effect_text="fadeInRight" hover="zoom" data_delay="400ms" img_src="' . $imgs_1 . '"]
    <h5>Sale up to 60%</h5>
    <h6 style="color: #999;">Hot trending</h6>
    [/nasa_banner][/vc_column_inner][vc_column_inner width="1/2"][nasa_banner height="182px" valign="middle" effect_text="fadeInLeft" hover="zoom" data_delay="600ms" img_src="' . $imgs_2 . '"]
    <h5>Mini backpack</h5>
    <h6 style="color: #999;">Accessories</h6>
    [/nasa_banner][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner][nasa_title title_text="Choose for you" title_type="h3" font_size="l"][nasa_products type="deals" style="carousel" shop_url="0" arrows="0" number="5" columns_number="3" columns_number_small="1" columns_number_tablet="2"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row][vc_column][nasa_banner height="148px" valign="middle" text_color="dark" effect_text="fadeInLeft" hover="zoom" data_delay="600ms" img_src="' . $imgs_3 . '"]
    <h2><strong>SALE <span style="color: #ffba00;">25%</span> OFF</strong></h2>
    <h5>Applyng for all product Dresses &amp; Shoes</h5>
    [/nasa_banner][/vc_column][/vc_row][vc_row css=".vc_custom_1509772778240{margin-top: 50px !important;margin-bottom: 50px !important;}"][vc_column][nasa_title title_text="Our products" title_type="h3" title_desc="Top Sale of the weeks" font_size="l" title_align="text-center" el_class="margin-bottom-10"][vc_tta_tabs alignment="center"][vc_tta_section hr="" title="FEATURED" tab_id="1509680382542-1cd79545-bdae"][nasa_products type="featured_product" style="carousel" shop_url="0" arrows="0" number="12" columns_number="4" columns_number_small="1" columns_number_tablet="2"][/vc_tta_section][vc_tta_section hr="" title="BEST SELLING" tab_id="1509680382515-609c6f4d-fd0e"][nasa_products type="best_selling" style="carousel" shop_url="0" arrows="0" auto_slide="true" number="10" columns_number="4" columns_number_small="1" columns_number_tablet="2"][/vc_tta_section][vc_tta_section hr="" title="ON SALE" tab_id="1509771354416-4988be9f-2227"][nasa_products type="on_sale" style="carousel" shop_url="0" arrows="0" auto_slide="true" number="10" columns_number="4" columns_number_small="1" columns_number_tablet="2"][/vc_tta_section][vc_tta_section hr="" title="NEW" tab_id="1509957049380-e38870ed-5797"][nasa_products style="carousel" shop_url="0" arrows="0" number="12" columns_number="4" columns_number_small="1" columns_number_tablet="2"][/vc_tta_section][vc_tta_section hr="" title="TOP RATED" tab_id="1509957137879-8aa83829-3ba3"][nasa_products type="top_rate" style="carousel" shop_url="0" arrows="0" number="12" columns_number="4" columns_number_small="1" columns_number_tablet="2"][/vc_tta_section][/vc_tta_tabs][/vc_column][/vc_row][vc_row css=".vc_custom_1510032866135{padding-top: 60px !important;padding-bottom: 30px !important;background-color: #f9f9f9 !important;border-radius: 1px !important;}"][vc_column][nasa_title title_text="Latest blogs" title_desc="Newsroom of the weeks" title_type="h3" font_size="l" title_align="text-center" el_class="margin-bottom-30"][nasa_post show_type="grid_2" posts="4" columns_number="2" columns_number_small="1" columns_number_tablet="1"][/vc_column][/vc_row][vc_row css=".vc_custom_1518631587911{margin-bottom: 50px !important;padding-top: 50px !important;}"][vc_column][vc_row_inner el_class="margin-bottom-20"][vc_column_inner width="1/3"][nasa_products title_shortcode="Top Rated" type="top_rate" style="list_carousel" style_row="3" arrows="1" number="6" columns_number="1" columns_number_small="1" columns_number_tablet="1"][/vc_column_inner][vc_column_inner width="1/3"][nasa_products title_shortcode="Best Selling" type="best_selling" style="list_carousel" style_row="3" arrows="1" number="6" columns_number="1" columns_number_small="1" columns_number_tablet="1"][/vc_column_inner][vc_column_inner width="1/3"][nasa_products title_shortcode="Featured" type="featured_product" style="list_carousel" style_row="3" arrows="1" number="6" columns_number="1" columns_number_small="1" columns_number_tablet="1"][/vc_column_inner][/vc_row_inner][nasa_brands images="' . elessi_imp_brands_str() . '" columns_number="6" columns_number_tablet="4" columns_number_small="3" custom_links="#,#,#,#,#,#,#"][/vc_column][/vc_row]'
        ),
        'post_meta' => array(
            // '_nasa_custom_header' => '2',
            // '_nasa_fullwidth_main_menu' => '1',
            '_wpb_shortcodes_custom_css' => '.vc_custom_1509772778240{margin-top: 50px !important;margin-bottom: 50px !important;}.vc_custom_1510032866135{padding-top: 60px !important;padding-bottom: 30px !important;background-color: #f9f9f9 !important;border-radius: 1px !important;}.vc_custom_1518631587911{margin-bottom: 50px !important;padding-top: 50px !important;}.vc_custom_1525455373923{margin-bottom: 60px !important;}.vc_custom_1525455080075{border-top-width: 1px !important;border-right-width: 1px !important;border-bottom-width: 1px !important;border-left-width: 1px !important;padding-top: 10px !important;padding-right: 30px !important;padding-bottom: 0px !important;padding-left: 30px !important;border-left-color: #efefef !important;border-left-style: solid !important;border-right-color: #efefef !important;border-right-style: solid !important;border-top-color: #efefef !important;border-top-style: solid !important;border-bottom-color: #efefef !important;border-bottom-style: solid !important;}'
        ),
        
        'globals' => array(
            'header-type' => '2',
            
            'fixed_nav' => '0',
            
            'fullwidth_main_menu' => '1',
            
            'footer_mode' => 'builder',
            'footer-type' => 'footer-light-2',
            'footer-mobile' => 'footer-mobile',
            
            // 'category_sidebar' => 'left',
            
            // 'product_detail_layout' => 'modern-1',
            // 'product_image_layout' => 'single',
            // 'product_image_style' => 'slide',
            'tab_style_info' => 'ver-2',
            
            // 'loop_layout_buttons' => 'hoz-buttons',
            
            // 'animated_products' => 'hover-carousel',
            
            // 'nasa_attr_image_style' => 'square',
            // 'nasa_attr_image_single_style' => 'extends',
            'nasa_attr_color_style' => 'round',
            'nasa_attr_label_style' => 'round',
            
            // 'breadcrumb_row' => 'single',
            // 'breadcrumb_type' => 'default',
            // 'breadcrumb_bg_color' => '#f8f8f8',
        ),
    );
}
