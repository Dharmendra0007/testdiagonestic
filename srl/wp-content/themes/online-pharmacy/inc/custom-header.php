<?php
/**
 * Custom header implementation
 *
 * @link https://codex.wordpress.org/Custom_Headers
 *
 * @package Online Pharmacy
 * @subpackage online_pharmacy
 */

function online_pharmacy_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'online_pharmacy_custom_header_args', array(
		'default-text-color'     => 'fff',
		'header-text' 			 =>	false,
		'width'                  => 1600,
		'height'                 => 400,
		'flex-width'    		 => true,
		'flex-height'    		 => true,
		'wp-head-callback'       => 'online_pharmacy_header_style',
		'default-image'          => get_parent_theme_file_uri( '/assets/images/header_img.png' ),
	) ) );

	register_default_headers( array(
		'default-image' => array(
			'url'           => '%s/assets/images/header_img.png',
			'thumbnail_url' => '%s/assets/images/header_img.png',
			'description'   => __( 'Default Header Image', 'online-pharmacy' ),
		),
	) );
}
add_action( 'after_setup_theme', 'online_pharmacy_custom_header_setup' );

if ( ! function_exists( 'online_pharmacy_header_style' ) ) :
add_action( 'wp_enqueue_scripts', 'online_pharmacy_header_style' );
function online_pharmacy_header_style() {
    if ( get_header_image() ) :
    $online_pharmacy_custom_css = "
        .header-img {
            background-image: url('".esc_url(get_header_image())."') !important;
            background-position: center top !important;
            height: 350px;
            background-size: cover !important;
            display: block;
        }
        .single-page-img {
            background-image: url('".esc_url(get_header_image())."') !important;
            background-position: center top !important;
            background-size: cover !important;
            height: 350px;
            object-fit: cover;
        }
        @media (max-width: 1000px) {
            .header-img,
            .single-page-img, .external-div .box-image img, .external-div {
                height: 200px;
            }
        }";
        wp_add_inline_style( 'online-pharmacy-style', $online_pharmacy_custom_css );
    endif;
}
endif;
