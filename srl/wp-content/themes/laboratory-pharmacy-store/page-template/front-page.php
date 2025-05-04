<?php
/**
 * Template Name: Custom Home Page
 *
 * @package Laboratory Pharmacy Store
 * @subpackage laboratory_pharmacy_store
 */

get_header(); ?>

<main id="tp_content" role="main">
	<?php get_template_part( 'template-parts/home/slider' ); ?>
	<?php get_template_part( 'template-parts/home/about_products' ); ?>
	<?php //get_template_part( 'template-parts/home/home-content' ); ?>
	
	<div id="product-category" class="py-5" style="display:none;">
		<div class="container  text-center">
			<h3>Our Popular Products</h3>
			<div class="innerWrapper pt-md-4">
			<div class="product py-5 px-3" id="product-cat">
					<div class="row">
						<div class="col-lg-8 col-md-8 col-8">
							<h6>Super Sale</h6>
							<h4>Lab Face Mask</h4>
							<p>Lorem Ipsum is simply dummy text of the printing</p>
							<div class="mt-4">
							<a href="#" class="button animate__animated animate__pulse">Shop Now</a>
						    </div>
						</div>
						<div class="col-lg-4 col-md-4 col-4">
							<img style="width: 100%;" src="http://healthdiagnostics.fit/wp-content/uploads/2024/12/WhatsApp-Image-2024-12-07-at-4.58.39-PM.jpeg">
						</div>
					</div>
				</div>
			<div class="product py-5 px-3" id="product-cat">
					<div class="row">
						<div class="col-lg-8 col-md-8 col-8">
							<h6>Super Sale</h6>
							<h4>Temperature Check Machine</h4>
							<p>Lorem Ipsum is simply dummy</p>
							<div class="mt-4">
							<a href="#" class="button animate__animated animate__pulse">Shop Now</a>
						  </div>
						</div>
						<div class="col-lg-4 col-md-4 col-4">
							<img style="width: 100%;" src="http://healthdiagnostics.fit/wp-content/uploads/2024/12/WhatsApp-Image-2024-12-07-at-4.41.26-PM.jpeg">
						</div>
					</div>
				</div>
			<div class="product py-5 px-3" id="product-cat">
					<div class="row">
						<div class="col-lg-8 col-md-8 col-8">
							<h6>Super Sale</h6>
							<h4>Sanitizer Max</h4>
							<p>Lorem Ipsum is simply dummy text of the printing</p>
							<div class="mt-4"><a href="#" class="button animate__animated animate__pulse">Shop Now</a>
						</div>
						</div>
						<div class="col-lg-4 col-md-4 col-4">
							<img style="width: 100%;" src="https://healthdiagnostics.fit/wp-content/uploads/2024/11/hand.png">
						</div>
					</div>
				</div>
			</div>
		</div>	
	</div>
	
	<div class="topSpecialistWrapper" id="specialist">
		<div class="container text-center">
		<h3>Our Top Specialist</h3>
		<p class="mt-4">Keep up your health with us - check up with our top specialist</p>
		<div class="innerWrapper pt-md-5 pt-3">
			<div class="text-center items align-self-center">
			<img src="http://healthdiagnostics.fit/wp-content/uploads/2024/12/WhatsApp-Image-2024-12-07-at-4.58.38-PM.jpeg"/>	
			<div class="team-icon">
				<h5>Sushma</h5>
				<div class="icon-box">
                   <span class="">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                  </span>
                   
                  <span class="">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                  </span>
                  
         		</div>
			</div>
			</div>
			<div class="text-center items align-self-center">
			<img src="http://healthdiagnostics.fit/wp-content/uploads/2024/12/WhatsApp-Image-2024-12-07-at-4.41.26-PM.jpeg"/>	
			<div class="team-icon">
				<h5>Umesh Kumar</h5>
				<div class="icon-box">
                   <span class="">
                    <a target="_blank" href="https://www.facebook.com/rakesh.kumardh?mibextid=ZbWKwL"><i class="fab fa-facebook-f"></i></a>
                  </span>
                   
                  <span class="">
                    <a target="_blank" href="https://www.instagram.com/rakesh.kumardh/profilecard/?igsh=MTBiYmRsZmp2amY1Ng=="><i class="fab fa-instagram"></i></a>
                  </span>
                  
         		</div>
			</div>
			</div>
			<div class="text-center items align-self-center">
			<img src="https://healthdiagnostics.fit/wp-content/uploads/2024/11/dpctor.png"/>	
			<div class="team-icon">
				<h5>Parul Gupta</h5>
				<div class="icon-box">
                   <span class="">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                  </span>
                   
                  <span class="">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                  </span>
                  
         		</div>
			</div>
			</div>
		</div>
		</div>
	</div>
	
	<div id="latest-news" class="mt-md-0 mt-5">
    <div class="container-fluid text-center pr-lg-5">
      <div class="row">
        <div class="col-lg-5 latest-image px-0">
          <img src="https://healthdiagnostics.fit/wp-content/uploads/2024/11/news.jpg">
        </div>
        <div class="col-lg-7 pt-5 pl-4">
          <h3>Latest News</h3>
          <p class="latest-cont">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the</p>
          <div class="InnerWrapper">  
			  <?php
			  $args = array(
				  'post_type'   => 'post',
				  'showposts'   => 5,
				  'orderby'     => 'date',
				  'post_status' => 'publish',
				  'show_date' => true,
				  'category_name'=> 'news'
			  );
			  $result = new WP_Query( $args );
			  if ( $result-> have_posts() ) : ?>
			  <?php while ( $result->have_posts() ) : $result->the_post(); ?>

       <div class="text-left post-item latest-content mb-3 p-3">
              <div class="post-date text-left my-2 ">
                  <i class="far fa-calendar-alt mr-2"></i><span class="date-day">14</span> <span class="date-month">May</span> <span class="date-year">2024</span>                  <i class="far fa-user ml-3 mr-2"></i>
                  <span class="admin"><a href="<?php echo get_permalink( $result->post->ID ) ?>"><?php echo get_the_author() ?></a></span>
              </div>
              <div class="post-content entry-content">
                <h6 class="post-title "><a href="<?php echo get_permalink( $result->post->ID ) ?>"><?php the_title(); ?></a></h6>
                <p style="margin-bottom: 0;">
					<?php 
					$length = 70;
					$content = get_the_excerpt(); 

					if (strlen($content) > $length) {
						echo mb_strimwidth(strip_tags($content), 0, $length, '...');
					} else {
						echo $content;
					}
					?></p>
              </div>
            </div>
			  <?php endwhile; ?>
			  <?php endif; wp_reset_postdata(); ?>   
        </div>
        </div>
       
      </div>
    </div>
</div>
</main>

<?php get_footer();