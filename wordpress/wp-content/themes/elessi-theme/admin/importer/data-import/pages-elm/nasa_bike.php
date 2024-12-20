<?php
function nasa_elm_bike() {
    $imgs_1 = elessi_import_upload('/wp-content/uploads/2018/12/bike-banner-1.jpg', '3094', array(
        'post_title' => 'bike-banner-1',
        'post_name' => 'bike-banner-1',
    ));
    
    $imgs_2 = elessi_import_upload('/wp-content/uploads/2018/12/bike-banner-2.jpg', '3117', array(
        'post_title' => 'bike-banner-2',
        'post_name' => 'bike-banner-2',
    ));
    
    $imgs_3 = elessi_import_upload('/wp-content/uploads/2018/12/bike-banner-3.jpg', '3117', array(
        'post_title' => 'bike-banner-3',
        'post_name' => 'bike-banner-3',
    ));
    
    $brand_1 = elessi_import_upload('/wp-content/uploads/2017/09/brand-1.jpg', '3074', array(
        'post_title' => 'Brand IMG 1',
        'post_name' => 'brand-1',
    ));
    $brand_2 = elessi_import_upload('/wp-content/uploads/2017/09/brand-2.jpg', '3074', array(
        'post_title' => 'Brand IMG 2',
        'post_name' => 'brand-2',
    ));
    $brand_3 = elessi_import_upload('/wp-content/uploads/2017/09/brand-3.jpg', '3074', array(
        'post_title' => 'Brand IMG 3',
        'post_name' => 'brand-3',
    ));
    $brand_4 = elessi_import_upload('/wp-content/uploads/2017/09/brand-4.jpg', '3074', array(
        'post_title' => 'Brand IMG 4',
        'post_name' => 'brand-4',
    ));
    $brand_5 = elessi_import_upload('/wp-content/uploads/2017/09/brand-5.jpg', '3074', array(
        'post_title' => 'Brand IMG 5',
        'post_name' => 'brand-5',
    ));
    $brand_6 = elessi_import_upload('/wp-content/uploads/2017/09/brand-6.jpg', '3074', array(
        'post_title' => 'Brand IMG 6',
        'post_name' => 'brand-6',
    ));
    
    return array(
        'post' => array(
            'post_title' => 'ELM Bike',
            'post_name' => 'elm-bike'
        ),
        
        'post_meta' => array(
            '_elementor_data' => '[{"id":"2da4b88a","elType":"section","settings":{"layout":"full_width","gap":"no"},"elements":[{"id":"7a17a432","elType":"column","settings":{"_column_size":100,"_inline_size":null,"css_classes":"nasa-crazy-box"},"elements":[{"id":"998ffb8","elType":"widget","settings":{"revslidertitle":"Slider Bike","shortcode":"[rev_slider alias=\"slider-bike\" slidertitle=\"Slider Bike\"][\/rev_slider]"},"elements":[],"widgetType":"slider_revolution"}],"isInner":false}],"isInner":false},{"id":"53f8aac3","elType":"section","settings":{"structure":"20"},"elements":[{"id":"42ddfe3d","elType":"column","settings":{"_column_size":50,"_inline_size":null},"elements":[{"id":"7b77721d","elType":"widget","settings":{"wp":{"img_src":"' . $imgs_1 . '","height":"531px","width":"","link":"","content-width":"","align":"right","move_x":"","valign":"top","text-align":"text-right","banner_responsive":"yes","content":"<h4 class=\"primary-color\">The narrowest bike<\/h4>\r\n<b style=\"font-size: 160%;line-height: 1.6;color: #aaa\">Sale Off 50%<\/b>","effect_text":"fadeInLeft","data_delay":"","hover":"zoom","border_inner":"no","border_outner":"no","el_class":""}},"elements":[],"widgetType":"wp-widget-nasa_banner_sc"}],"isInner":false},{"id":"19c672b9","elType":"column","settings":{"_column_size":50,"_inline_size":null,"padding":{"unit":"px","top":"10","right":"10","bottom":"0","left":"0","isLinked":false},"padding_mobile":{"unit":"px","top":"0","right":"10","bottom":"0","left":"10","isLinked":false}},"elements":[{"id":"460e15fa","elType":"widget","settings":{"wp":{"img_src":"' . $imgs_2 . '","height":"264","width":"590","link":"#","content-width":"","align":"left","move_x":"","valign":"top","text-align":"text-right","banner_responsive":"yes","content":"<h4>Composants<\/h4>\r\n<b style=\"font-size: 150%;line-height: 1.6;color: #aaa\">Sale Off 30%<\/b>","effect_text":"fadeInDown","data_delay":"","hover":"zoom","border_inner":"no","border_outner":"no","el_class":""},"_padding":{"unit":"px","top":"0","right":"0","bottom":"0","left":"0","isLinked":false}},"elements":[],"widgetType":"wp-widget-nasa_banner_sc"},{"id":"53bd6189","elType":"widget","settings":{"wp":{"img_src":"' . $imgs_3 . '","height":"256px","width":"590","link":"","content-width":"","align":"right","move_x":"","valign":"middle","text-align":"text-right","banner_responsive":"yes","content":"<h4 class=\"primary-color\">The narrowest bike<\/h4>\r\n<b style=\"font-size: 160%;line-height: 1.6;color: #aaa\">Sale Off 50%<\/b>","effect_text":"fadeInLeft","data_delay":"","hover":"zoom","border_inner":"no","border_outner":"no","el_class":""},"_margin":{"unit":"px","top":"-10","right":"0","bottom":"0","left":"0","isLinked":false},"_padding":{"unit":"px","top":"0","right":"0","bottom":"0","left":"0","isLinked":false}},"elements":[],"widgetType":"wp-widget-nasa_banner_sc"}],"isInner":false}],"isInner":false},{"id":"4aa4465c","elType":"section","settings":{"css_classes":"margin-top-50"},"elements":[{"id":"5a4fa031","elType":"column","settings":{"_column_size":100,"_inline_size":null},"elements":[{"id":"36be17c8","elType":"widget","settings":{"title":"Our Products","size":"large","align":"center","title_color":"#333333","typography_typography":"custom","typography_font_family":"Jost","typography_font_weight":"800","text_shadow_text_shadow_type":"yes","text_shadow_text_shadow":{"horizontal":0,"vertical":0,"blur":0,"color":"rgba(0,0,0,0.3)"},"header_size":"h3"},"elements":[],"widgetType":"heading"},{"id":"6958663e","elType":"widget","settings":{"wp":{"title":"","desc":"","alignment":"center","style":"2d-no-border","tabs":{"1603386304507":{"tab_title":"NEW ARRIVALS","type":"recent_product","style":"grid","style_viewmore":"1","style_row":"2","pos_nav":"top","title_align":"left","shop_url":"1","arrows":"1","dots":"false","auto_slide":"false","number":"8","auto_delay_time":"6","columns_number":"4","columns_number_small":"2","columns_number_small_slider":"2","columns_number_tablet":"3","cat":"","not_in":"","el_class":""},"1603386427250":{"tab_title":"FEATURED","type":"recent_product","style":"grid","style_viewmore":"1","style_row":"2","pos_nav":"top","title_align":"left","shop_url":"0","arrows":"0","dots":"false","auto_slide":"false","number":"8","auto_delay_time":"6","columns_number":"4","columns_number_small":"2","columns_number_small_slider":"2","columns_number_tablet":"3","cat":"","not_in":"","el_class":""},"1603386467942":{"tab_title":"BEST SELLER","type":"recent_product","style":"grid","style_viewmore":"1","style_row":"2","pos_nav":"top","title_align":"left","shop_url":"1","arrows":"0","dots":"false","auto_slide":"false","number":"8","auto_delay_time":"6","columns_number":"4","columns_number_small":"2","columns_number_small_slider":"2","columns_number_tablet":"3","cat":"","not_in":"","el_class":""},"1603386510457":{"tab_title":"ON SALE","type":"recent_product","style":"grid","style_viewmore":"1","style_row":"2","pos_nav":"top","title_align":"left","shop_url":"1","arrows":"0","dots":"false","auto_slide":"false","number":"8","auto_delay_time":"6","columns_number":"4","columns_number_small":"2","columns_number_small_slider":"2","columns_number_tablet":"3","cat":"","not_in":"","el_class":""}},"el_class":""}},"elements":[],"widgetType":"wp-widget-nasa_products_tabs_sc"}],"isInner":false}],"isInner":false},{"id":"4908b9c","elType":"section","settings":{"gap":"no","css_classes":"desktop-margin-top-30","layout":"full_width","margin_mobile":{"unit":"px","top":"0","right":0,"bottom":"50","left":0,"isLinked":false}},"elements":[{"id":"393d918e","elType":"column","settings":{"_column_size":100,"_inline_size":null},"elements":[{"id":"52b62182","elType":"widget","settings":{"wp":{"title_shortcode":"Titanium Bikes","type":"recent_product","style":"slide_slick","style_viewmore":"1","style_row":"1","pos_nav":"top","title_align":"left","shop_url":"0","arrows":"1","dots":"false","auto_slide":"false","number":"5","auto_delay_time":"6","columns_number":"1","columns_number_small":"2","columns_number_small_slider":"1","columns_number_tablet":"1","cat":"","not_in":"","el_class":""}},"elements":[],"widgetType":"wp-widget-nasa_products_sc"}],"isInner":false}],"isInner":false},{"id":"56054483","elType":"section","settings":{"css_classes":"desktop-margin-top-80","margin":{"unit":"px","top":"0","right":0,"bottom":"20","left":0,"isLinked":false}},"elements":[{"id":"228ea875","elType":"column","settings":{"_column_size":100,"_inline_size":null},"elements":[{"id":"265c264a","elType":"widget","settings":{"title":"Trendy item","size":"large","align":"center","title_color":"#333333","typography_typography":"custom","typography_font_family":"Jost","typography_font_weight":"800","text_shadow_text_shadow_type":"yes","text_shadow_text_shadow":{"horizontal":0,"vertical":0,"blur":0,"color":"rgba(0,0,0,0.3)"}},"elements":[],"widgetType":"heading"},{"id":"e1567e6","elType":"widget","settings":{"wp":{"title_shortcode":"Our Equiment","type":"recent_product","style":"carousel","style_viewmore":"1","style_row":"1","pos_nav":"left","title_align":"left","shop_url":"0","arrows":"1","dots":"false","auto_slide":"false","number":"8","auto_delay_time":"6","columns_number":"3","columns_number_small":"2","columns_number_small_slider":"2","columns_number_tablet":"3","cat":"","not_in":"","el_class":""}},"elements":[],"widgetType":"wp-widget-nasa_products_sc"}],"isInner":false}],"isInner":false},{"id":"6b2a06","elType":"section","settings":[],"elements":[{"id":"2fb4e76a","elType":"column","settings":{"_column_size":100,"_inline_size":null},"elements":[{"id":"56e8862","elType":"widget","settings":{"title":"Latest blog","size":"large","header_size":"h3","align":"center","title_color":"#000000","typography_typography":"custom","typography_font_family":"Jost","typography_font_weight":"800","_margin":{"unit":"px","top":"0","right":"0","bottom":"0","left":"0","isLinked":false},"_css_classes":"margin-bottom-10"},"elements":[],"widgetType":"heading"},{"id":"425b234","elType":"widget","settings":{"editor":"<p class=\"nasa-title-desc text-center margin-bottom-0\">The freshest and most exciting news<\/p>"},"elements":[],"widgetType":"text-editor"},{"id":"47ee0507","elType":"widget","settings":{"wp":{"title":"","show_type":"slide","auto_slide":"false","arrows":"1","dots":"false","posts":"4","columns_number":"3","columns_number_small":"1","columns_number_small_slider":"1","columns_number_tablet":"3","category":"","cats_enable":"yes","date_enable":"yes","author_enable":"yes","readmore":"yes","date_author":"bot","des_enable":"no","page_blogs":"no","info_align":"left","el_class":""}},"elements":[],"widgetType":"wp-widget-nasa_post_sc"}],"isInner":false}],"isInner":false},{"id":"6775df9","elType":"section","settings":{"css_classes":"margin-top-30 margin-bottom-50"},"elements":[{"id":"b3151df","elType":"column","settings":{"_column_size":100,"_inline_size":null},"elements":[{"id":"7a689d5","elType":"widget","settings":{"wp":{"title":"","align":"center","sliders":{"1605886645649":{"img_src":"' . $brand_1 . '","height":"","width":"","link":"","content-width":"","align":"left","move_x":"","valign":"top","text-align":"text-left","banner_responsive":"yes","content":"","effect_text":"none","data_delay":"","hover":"","border_inner":"no","border_outner":"no","el_class":""},"1605886663901":{"img_src":"' . $brand_2 . '","height":"","width":"","link":"","content-width":"","align":"left","move_x":"","valign":"top","text-align":"text-left","banner_responsive":"yes","content":"","effect_text":"none","data_delay":"","hover":"","border_inner":"no","border_outner":"no","el_class":""},"1605886673562":{"img_src":"' . $brand_3 . '","height":"","width":"","link":"","content-width":"","align":"left","move_x":"","valign":"top","text-align":"text-left","banner_responsive":"yes","content":"","effect_text":"none","data_delay":"","hover":"","border_inner":"no","border_outner":"no","el_class":""},"1605886691185":{"img_src":"' . $brand_4 . '","height":"","width":"","link":"","content-width":"","align":"left","move_x":"","valign":"top","text-align":"text-left","banner_responsive":"yes","content":"","effect_text":"none","data_delay":"","hover":"","border_inner":"no","border_outner":"no","el_class":""},"1605886702478":{"img_src":"' . $brand_5 . '","height":"","width":"","link":"","content-width":"","align":"left","move_x":"","valign":"top","text-align":"text-left","banner_responsive":"yes","content":"","effect_text":"none","data_delay":"","hover":"","border_inner":"no","border_outner":"no","el_class":""},"1605886713208":{"img_src":"' . $brand_6 . '","height":"","width":"","link":"","content-width":"","align":"left","move_x":"","valign":"top","text-align":"text-left","banner_responsive":"yes","content":"","effect_text":"none","data_delay":"","hover":"","border_inner":"no","border_outner":"no","el_class":""}},"bullets":"false","bullets_pos":"","bullets_align":"center","navigation":"true","column_number":"6","column_number_small":"3","column_number_tablet":"4","padding_item":"","padding_item_small":"","padding_item_medium":"","autoplay":"false","paginationspeed":"300","el_class":""}},"elements":[],"widgetType":"wp-widget-nasa_sliders_sc"}],"isInner":false}],"isInner":false}]',
            '_elementor_controls_usage' => 'a:10:{s:27:"wp-widget-rev-slider-widget";a:3:{s:5:"count";i:1;s:15:"control_percent";i:0;s:8:"controls";a:0:{}}s:6:"column";a:3:{s:5:"count";i:8;s:15:"control_percent";i:0;s:8:"controls";a:2:{s:6:"layout";a:1:{s:6:"layout";a:1:{s:12:"_inline_size";i:8;}}s:8:"advanced";a:1:{s:16:"section_advanced";a:2:{s:7:"padding";i:1;s:14:"padding_mobile";i:1;}}}}s:7:"section";a:3:{s:5:"count";i:7;s:15:"control_percent";i:0;s:8:"controls";a:2:{s:6:"layout";a:2:{s:14:"section_layout";a:2:{s:6:"layout";i:2;s:3:"gap";i:2;}s:17:"section_structure";a:1:{s:9:"structure";i:1;}}s:8:"advanced";a:1:{s:16:"section_advanced";a:3:{s:11:"css_classes";i:4;s:13:"margin_mobile";i:1;s:6:"margin";i:1;}}}}s:24:"wp-widget-nasa_banner_sc";a:3:{s:5:"count";i:3;s:15:"control_percent";i:1;s:8:"controls";a:1:{s:8:"advanced";a:1:{s:14:"_section_style";a:2:{s:8:"_padding";i:2;s:7:"_margin";i:1;}}}}s:7:"heading";a:3:{s:5:"count";i:3;s:15:"control_percent";i:5;s:8:"controls";a:3:{s:7:"content";a:1:{s:13:"section_title";a:4:{s:5:"title";i:3;s:4:"size";i:3;s:5:"align";i:3;s:11:"header_size";i:2;}}s:5:"style";a:1:{s:19:"section_title_style";a:6:{s:11:"title_color";i:3;s:21:"typography_typography";i:3;s:22:"typography_font_family";i:3;s:22:"typography_font_weight";i:3;s:28:"text_shadow_text_shadow_type";i:2;s:23:"text_shadow_text_shadow";i:2;}}s:8:"advanced";a:1:{s:14:"_section_style";a:2:{s:7:"_margin";i:1;s:12:"_css_classes";i:1;}}}}s:31:"wp-widget-nasa_products_tabs_sc";a:3:{s:5:"count";i:1;s:15:"control_percent";i:0;s:8:"controls";a:0:{}}s:26:"wp-widget-nasa_products_sc";a:3:{s:5:"count";i:2;s:15:"control_percent";i:0;s:8:"controls";a:0:{}}s:11:"text-editor";a:3:{s:5:"count";i:1;s:15:"control_percent";i:0;s:8:"controls";a:1:{s:7:"content";a:1:{s:14:"section_editor";a:1:{s:6:"editor";i:1;}}}}s:22:"wp-widget-nasa_post_sc";a:3:{s:5:"count";i:1;s:15:"control_percent";i:0;s:8:"controls";a:0:{}}s:25:"wp-widget-nasa_sliders_sc";a:3:{s:5:"count";i:1;s:15:"control_percent";i:0;s:8:"controls";a:0:{}}}',
            '_elementor_css' => 'a:6:{s:4:"time";i:1639648474;s:5:"fonts";a:1:{i:0;s:4:"Jost";}s:5:"icons";a:0:{}s:20:"dynamic_elements_ids";a:0:{}s:6:"status";s:4:"file";i:0;s:0:"";}',
            // '_nasa_pri_color_flag' => 'on',
            // '_nasa_pri_color' => '#83b828'
        ),
        
        'globals' => array(
            'header-type' => '1',
            
            // 'plus_wide_width' => '100',
            'color_primary' => '#83b828',
            
            // 'fullwidth_main_menu' => '1',
            
            // 'bg_color_main_menu' => '#e4272c',
            // 'text_color_main_menu' => '#ffffff',
            
            // 'bg_color_v_menu' => '#000000',
            // 'text_color_v_menu' => '#ffffff',
            
            'footer_mode' => 'builder-e',
            'footer_elm' => elessi_elm_fid_by_slug('hfe-footer-light-2'),
            'footer_elm_mobile' => elessi_elm_fid_by_slug('hfe-footer-mobile'),
            
            // 'category_sidebar' => 'top-2',
            
            'product_detail_layout' => 'new-2',
            // 'product_image_layout' => 'single',
            'tab_style_info' => 'ver-2',
            
            'loop_layout_buttons' => 'modern-1',
            
            'animated_products' => 'hover-carousel',
            
            // 'nasa_attr_image_style' => 'square'
            
            'breadcrumb_row' => 'single',
            'breadcrumb_type' => 'default',
            'breadcrumb_bg_color' => '#f8f8f8',
            'breadcrumb_align' => 'text-left',
            'breadcrumb_height' => '60',
        ),

        'css' => '.elementor-[inserted_id] .elementor-element.elementor-element-19c672b9 > .elementor-element-populated{padding:10px 10px 0px 0px;}.elementor-[inserted_id] .elementor-element.elementor-element-460e15fa > .elementor-widget-container{padding:0px 0px 0px 0px;}.elementor-[inserted_id] .elementor-element.elementor-element-53bd6189 > .elementor-widget-container{margin:-10px 0px 0px 0px;padding:0px 0px 0px 0px;}.elementor-[inserted_id] .elementor-element.elementor-element-36be17c8{text-align:center;}.elementor-[inserted_id] .elementor-element.elementor-element-36be17c8 .elementor-heading-title{color:#333333;font-family:"Jost", Sans-serif;font-weight:800;text-shadow:0px 0px 0px rgba(0,0,0,0.3);}.elementor-[inserted_id] .elementor-element.elementor-element-56054483{margin-top:0px;margin-bottom:20px;}.elementor-[inserted_id] .elementor-element.elementor-element-265c264a{text-align:center;}.elementor-[inserted_id] .elementor-element.elementor-element-265c264a .elementor-heading-title{color:#333333;font-family:"Jost", Sans-serif;font-weight:800;text-shadow:0px 0px 0px rgba(0,0,0,0.3);}.elementor-[inserted_id] .elementor-element.elementor-element-56e8862{text-align:center;}.elementor-[inserted_id] .elementor-element.elementor-element-56e8862 .elementor-heading-title{color:#000000;font-family:"Jost", Sans-serif;font-weight:800;}.elementor-[inserted_id] .elementor-element.elementor-element-56e8862 > .elementor-widget-container{margin:0px 0px 0px 0px;}@media(max-width:767px){.elementor-[inserted_id] .elementor-element.elementor-element-19c672b9 > .elementor-element-populated{padding:0px 10px 0px 10px;}.elementor-[inserted_id] .elementor-element.elementor-element-4908b9c{margin-top:0px;margin-bottom:50px;}}'
    );
}
