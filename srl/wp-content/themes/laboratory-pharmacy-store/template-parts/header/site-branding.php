<?php
/*
* Display Logo and contact details
*/
?>
<?php
$online_pharmacy_sticky = get_theme_mod('online_pharmacy_sticky');
    $laboratory_pharmacy_store_data_sticky = "false";
    if ($online_pharmacy_sticky) {
    $laboratory_pharmacy_store_data_sticky = "true";
    }
    global $wp_customize;
?>

<div class="headerbox py-3 <?php if( is_user_logged_in() && !isset( $wp_customize ) ){ echo "login-user";} ?>" data-sticky="<?php echo esc_attr($laboratory_pharmacy_store_data_sticky); ?>">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-4 col-9 align-self-center">
        <?php $online_pharmacy_logo_settings = get_theme_mod( 'online_pharmacy_logo_settings','Different Line');
        if($online_pharmacy_logo_settings == 'Different Line'){ ?>
          <div class="logo mb-md-0">
            <?php if( has_custom_logo() ) online_pharmacy_the_custom_logo(); ?>
            <?php if(get_theme_mod('online_pharmacy_site_title_text',true) == 1){ ?>
              <?php if (is_front_page() && is_home()) : ?>
                <h1 class="text-capitalize">
                    <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
                </h1> 
              <?php else : ?>
                  <p class="text-capitalize site-title">
                      <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
                  </p>
              <?php endif; ?>
            <?php }?>
            <?php $online_pharmacy_description = get_bloginfo( 'description', 'display' );
            if ( $online_pharmacy_description || is_customize_preview() ) : ?>
              <?php if(get_theme_mod('online_pharmacy_site_tagline_text',false)){ ?>
                <p class="site-description mb-0"><?php echo esc_html($online_pharmacy_description); ?></p>
              <?php }?>
            <?php endif; ?>
          </div>
        <?php }else if($online_pharmacy_logo_settings == 'Same Line'){ ?>
          <div class="logo logo-same-line mb-md-0">
            <div class="row">
              <div class="col-lg-5 col-md-5 align-self-md-center">
                <?php if( has_custom_logo() ) online_pharmacy_the_custom_logo(); ?>
              </div>
              <div class="col-lg-7 col-md-7 align-self-md-center">
                <?php if(get_theme_mod('online_pharmacy_site_title_text',true) == 1){ ?>
                  <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                <?php }?>
                <?php $online_pharmacy_description = get_bloginfo( 'description', 'display' );
                if ( $online_pharmacy_description || is_customize_preview() ) : ?>
                  <?php if(get_theme_mod('online_pharmacy_site_tagline_text',false)){ ?>
                    <p class="site-description mb-0"><?php echo esc_html($online_pharmacy_description); ?></p>
                  <?php }?>
                <?php endif; ?>
              </div>
            </div>
          </div>
        <?php }?>
      </div>
      <div class="col-lg-7 col-md-4 col-3 align-self-center">
        <?php get_template_part( 'template-parts/navigation/site', 'nav' ); ?>
      </div>
      <div class="col-lg-2 col-md-4 align-self-center">
		  <div class="headerActions">
			   <?php 
			   	$current_user = wp_get_current_user();
				//echo "<pre>"; print_r($current_user);
				$usermail = $current_user->user_email;
				$display_name = $current_user->display_name;
				$pic_customer =  get_avatar( $current_user->ID, 64 );
			   ?>
                         <?php if (!is_user_logged_in()) {?>
                            <a href="javascript:void(0);" class="primaryBtn xoo-el-login-tgr registerNowLink">Register / Login</a>
                        <?php } ?>
                        <?php if (is_user_logged_in()) {?>
                        <div class="myaccount">
                            <a href="javascript:void(0);" class="myaccount_mainlink" aria-label="myaccount"><?php echo $pic_customer?><?php //echo $display_name?></a>
                                <div class="accountdd">
                                    <div class="accountddarrow"></div>
                                    <div class="accountddcontainer">
                                        <h3>Hi, <?php echo $usermail; ?></h3>
                                        <ul>
                                          <li><a href="/my-account">My Account</a></li>
                                          <li class="logout"><a href="<?php echo  wp_logout_url( home_url()); ?>">LOGOUT</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
			  <?php if( get_theme_mod( 'online_pharmacy_shopping_bag',true) != ''){ ?>
          <?php if(class_exists('woocommerce')){ ?>
            <span class="cart_no infotext">
              <?php global $woocommerce; ?>
              <a href="<?php if(function_exists('wc_get_cart_url')){ echo esc_url(wc_get_cart_url()); } ?>" title="<?php esc_attr_e( 'shopping cart','laboratory-pharmacy-store' ); ?>"><i class="fas fa-shopping-bag"></i></a>
              <span class="cart-value simplep"> <?php echo esc_html(wp_kses_data( WC()->cart->get_cart_contents_count()));?></span>
            </span>
          <?php }?>
        <?php }?>
                    </div>
        <div class="book-tkt-btn my-4 my-md-0 text-center" style="display:none;">
          <?php if( get_theme_mod( 'online_pharmacy_book_ticket_link' ) != '' || get_theme_mod( 'online_pharmacy_book_ticket_button' ) != '') { ?>
            <a href="<?php echo esc_url( get_theme_mod( 'online_pharmacy_book_ticket_link','' ) ); ?>" class="register-btn"><?php echo esc_html( get_theme_mod( 'online_pharmacy_book_ticket_button','' ) ); ?></a>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</div>
