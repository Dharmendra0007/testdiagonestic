<?php


$online_pharmacy_tp_theme_css = '';

//theme color
$online_pharmacy_tp_color_option = get_theme_mod('online_pharmacy_tp_color_option');

if($online_pharmacy_tp_color_option != false){
$online_pharmacy_tp_theme_css .='.woocommerce ul.products li.product .onsale, .woocommerce span.onsale,.error-404 [type="submit"],.wc-block-cart__submit-container a,.wc-block-checkout__actions_row .wc-block-components-checkout-place-order-button,.top-header,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,.site-info,#comments input[type="submit"],#theme-sidebar button[type="submit"], #footer button[type="submit"],button[type="submit"],.prev.page-numbers, .next.page-numbers,.page-numbers,span.meta-nav,.book-tkt-btn a,.more-btn a,#slider .carousel-control-prev-icon:hover, #slider .carousel-control-next-icon:hover,nav.woocommerce-MyAccount-navigation ul li:hover, #theme-sidebar .wp-block-search .wp-block-search__label:before,#theme-sidebar h3:before, #theme-sidebar h1.wp-block-heading:before, #theme-sidebar h2.wp-block-heading:before, #theme-sidebar h3.wp-block-heading:before,#theme-sidebar h4.wp-block-heading:before, #theme-sidebar h5.wp-block-heading:before, #theme-sidebar h6.wp-block-heading:before, .center2 .ring::before, .center1 .ring::before, .product-content, .toggle-nav button{';
$online_pharmacy_tp_theme_css .='background-color: '.esc_attr($online_pharmacy_tp_color_option).';';
$online_pharmacy_tp_theme_css .='}';
}
if($online_pharmacy_tp_color_option != false){
$online_pharmacy_tp_theme_css .='.box-info i, #footer li a:hover, #theme-sidebar .wp-block-search .wp-block-search__label, #theme-sidebar li a:hover, #footer li a:hover #footer h2.wp-block-heading, #footer h3.wp-block-heading,#footer h4.wp-block-heading, #footer h5.wp-block-heading, #footer h6.wp-block-heading ,
#theme-sidebar h3, #theme-sidebar h1.wp-block-heading, #theme-sidebar h2.wp-block-heading, #theme-sidebar h3.wp-block-heading,#theme-sidebar h4.wp-block-heading, #theme-sidebar h5.wp-block-heading, #theme-sidebar h6.wp-block-heading, a,.search-box i,.main-navigation a:hover,.headerbox i,.box-content a, #theme-sidebar .textwidget a, #footer .textwidget a, .comment-body a, .entry-content a, .entry-summary a,a.page-numbers:hover,#theme-sidebar h3,#theme-sidebar a:hover,.main-navigation .current_page_item > a, .main-navigation .current-menu-item > a, .main-navigation .current_page_ancestor > a,.headerbox i:hover, .headerbox i:hover:after,#about h3,#about p i, a.added_to_cart.wc-forward,a,.main-navigation a:hover,.readmore-btn a,#theme-sidebar h3,#theme-sidebar a:hover,#theme-sidebar .textwidget a, #footer .textwidget a, .comment-body a, .entry-content a, .entry-summary a, #footer .tagcloud a:hover,#footer p.wp-block-tag-cloud a:hover, .logo h1 a:hover, .logo p a:hover, #slider .inner_carousel h1 a:hover, #slider .carousel-control-prev-icon, #slider .carousel-control-next-icon{';
$online_pharmacy_tp_theme_css .='color: '.esc_attr($online_pharmacy_tp_color_option).';';
$online_pharmacy_tp_theme_css .='}';
}

if($online_pharmacy_tp_color_option != false){
$online_pharmacy_tp_theme_css .='.readmore-btn a,#theme-sidebar .tagcloud a:hover,#theme-sidebar .widget_tag_cloud a:hover,.post_tag a:hover,p.wp-block-tag-cloud a:hover, #footer .tagcloud a:hover,#footer p.wp-block-tag-cloud a:hover{';
    $online_pharmacy_tp_theme_css .='border-color: '.esc_attr($online_pharmacy_tp_color_option).';';
$online_pharmacy_tp_theme_css .='}';
}
if($online_pharmacy_tp_color_option != false){
$online_pharmacy_tp_theme_css .='.page-box,#theme-sidebar section, .center1, .center2{';
    $online_pharmacy_tp_theme_css .='border-left-color: '.esc_attr($online_pharmacy_tp_color_option).';';
$online_pharmacy_tp_theme_css .='}';
}
if($online_pharmacy_tp_color_option != false){
$online_pharmacy_tp_theme_css .='.center1, .center2{';
    $online_pharmacy_tp_theme_css .='border-top-color: '.esc_attr($online_pharmacy_tp_color_option).';';
$online_pharmacy_tp_theme_css .='}';
}
if($online_pharmacy_tp_color_option != false){
$online_pharmacy_tp_theme_css .='.page-box,#theme-sidebar section, #abt-product h2:before, #abt-product h2:after{';
    $online_pharmacy_tp_theme_css .='border-bottom-color: '.esc_attr($online_pharmacy_tp_color_option).';';
$online_pharmacy_tp_theme_css .='}';
}

//======================= slider Content layout ===================== //

$laboratory_pharmacy_store_slider_content_layout = get_theme_mod('laboratory_pharmacy_store_slider_content_layout', 'RIGHT-ALIGN'); 
$online_pharmacy_tp_theme_css .= '#slider .carousel-caption{';
switch ($laboratory_pharmacy_store_slider_content_layout) {
    case 'LEFT-ALIGN':
        $online_pharmacy_tp_theme_css .= 'text-align:left; right: 45%; left: 15%';
        break;
    case 'CENTER-ALIGN':
        $online_pharmacy_tp_theme_css .= 'text-align:center; left: 15%; right: 15%';
        break;
    case 'RIGHT-ALIGN':
        $online_pharmacy_tp_theme_css .= 'text-align:right; left: 45%; right: 15%';
        break;
    default:
        $online_pharmacy_tp_theme_css .= 'text-align:left; right: 45%; left: 15%';
        break;
}
$online_pharmacy_tp_theme_css .= '}';


//Font Weight
$online_pharmacy_menu_font_weight = get_theme_mod( 'online_pharmacy_menu_font_weight','600');
if($online_pharmacy_menu_font_weight == '100'){
$online_pharmacy_tp_theme_css .='.main-navigation a{';
    $online_pharmacy_tp_theme_css .='font-weight: 100;';
$online_pharmacy_tp_theme_css .='}';
}else if($online_pharmacy_menu_font_weight == '200'){
$online_pharmacy_tp_theme_css .='.main-navigation a{';
    $online_pharmacy_tp_theme_css .='font-weight: 200;';
$online_pharmacy_tp_theme_css .='}';
}else if($online_pharmacy_menu_font_weight == '300'){
$online_pharmacy_tp_theme_css .='.main-navigation a{';
    $online_pharmacy_tp_theme_css .='font-weight: 300;';
$online_pharmacy_tp_theme_css .='}';
}else if($online_pharmacy_menu_font_weight == '400'){
$online_pharmacy_tp_theme_css .='.main-navigation a{';
    $online_pharmacy_tp_theme_css .='font-weight: 400;';
$online_pharmacy_tp_theme_css .='}';
}else if($online_pharmacy_menu_font_weight == '500'){
$online_pharmacy_tp_theme_css .='.main-navigation a{';
    $online_pharmacy_tp_theme_css .='font-weight: 500;';
$online_pharmacy_tp_theme_css .='}';
}else if($online_pharmacy_menu_font_weight == '600'){
$online_pharmacy_tp_theme_css .='.main-navigation a{';
    $online_pharmacy_tp_theme_css .='font-weight: 600;';
$online_pharmacy_tp_theme_css .='}';
}else if($online_pharmacy_menu_font_weight == '700'){
$online_pharmacy_tp_theme_css .='.main-navigation a{';
    $online_pharmacy_tp_theme_css .='font-weight: 700;';
$online_pharmacy_tp_theme_css .='}';
}else if($online_pharmacy_menu_font_weight == '800'){
$online_pharmacy_tp_theme_css .='.main-navigation a{';
    $online_pharmacy_tp_theme_css .='font-weight: 800;';
$online_pharmacy_tp_theme_css .='}';
}else if($online_pharmacy_menu_font_weight == '900'){
$online_pharmacy_tp_theme_css .='.main-navigation a{';
    $online_pharmacy_tp_theme_css .='font-weight: 900;';
$online_pharmacy_tp_theme_css .='}';
}

