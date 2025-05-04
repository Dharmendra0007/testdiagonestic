<?php
/**
 * Template part for displaying slider section
 *
 * @package Laboratory Pharmacy Store
 * @subpackage laboratory_pharmacy_store
 */

?>
<?php $laboratory_pharmacy_store_static_image = get_stylesheet_directory_uri() . '/assets/images/sliderimage.png'; ?>
<?php if ( get_theme_mod( 'online_pharmacy_slider_arrows') != '' ) : ?>

<div class="container">
  <div id="slider" class="mt-5">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <?php 
        $online_pharmacy_slide_pages = array();
        for ( $count = 1; $count <= 4; $count++ ) {
          $laboratory_pharmacy_store_mod = intval( get_theme_mod( 'online_pharmacy_slider_page' . $count ));
          if ( 'page-none-selected' != $laboratory_pharmacy_store_mod ) {
            $online_pharmacy_slide_pages[] = $laboratory_pharmacy_store_mod;
          }
        }
        if ( !empty($online_pharmacy_slide_pages) ) :
          $laboratory_pharmacy_store_args = array(
            'post_type' => 'page',
            'post__in' => $online_pharmacy_slide_pages,
            'orderby' => 'post__in'
          );
          $laboratory_pharmacy_store_query = new WP_Query( $laboratory_pharmacy_store_args );
          if ( $laboratory_pharmacy_store_query->have_posts() ) :
            $i = 1;
      ?>
      <div class="carousel-inner" role="listbox">
        <?php while ( $laboratory_pharmacy_store_query->have_posts() ) : $laboratory_pharmacy_store_query->the_post(); ?>
          <div class="carousel-item <?php if($i == 1) { echo 'active'; } ?>">
            <?php if ( has_post_thumbnail() ) { ?>
              <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>"/>
            <?php } else { ?>
              <img src="<?php echo esc_url($laboratory_pharmacy_store_static_image); ?>" alt="<?php esc_attr_e('Default Image', 'laboratory-pharmacy-store'); ?>"/>
            <?php } ?>
            <div class="carousel-caption">
              <div class="inner_carousel">
                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                <p class="mb-0"><?php echo esc_html( wp_trim_words( get_the_content(), 20 ) ); ?></p>
                <div class="more-btn mt-4">
                  <a href="<?php the_permalink(); ?>"><?php esc_html_e('SHOP NOW', 'laboratory-pharmacy-store'); ?></a>
                </div>
              </div>
            </div>
          </div>
        <?php $i++; endwhile; wp_reset_postdata(); ?>
      </div>
      <?php else : ?>
        <div class="no-postfound"><?php esc_html_e('No posts found', 'laboratory-pharmacy-store'); ?></div>
      <?php endif; endif; ?>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <i class="fas fa-angle-left" aria-hidden="true"></i>
        <span class="screen-reader-text"><?php echo esc_html('Previous', 'laboratory-pharmacy-store'); ?></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <i class="fas fa-angle-right" aria-hidden="true"></i>
        <span class="screen-reader-text"><?php echo esc_html('Next', 'laboratory-pharmacy-store'); ?></span>
      </button>
    </div>
    <div class="clearfix"></div>
  </div>
</div>

<?php endif; ?>
