<?php 
get_header();
$postID = get_the_ID();
?>




<section class="promo--style-2">
					
    <div class="promo-slider promo--style-2-slider">
        

    <?php $sliders = get_sliders() ?>
    <?php while( $sliders->have_posts() ):  $sliders->the_post() ?>

       
        <div class="slider-item item--style-1">
            <div class="overlay"></div>
            <div class="bg-holder jarallax">
                <picture>
                <img class="img-bg jarallax-img" src="<?php echo the_post_thumbnail_url() ?>" alt="img"/>
                   
                </picture>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-7 col-md-9">
                        <div class="align-container">
                            <div class="align-item">
                                <div class="promo-slider__wrapper-1">
                                    <h2 class="title"> <?php echo the_title()  ?></h2>
                                </div>
                                <div class="promo-slider__wrapper-2">
                                    <p class="subtitle"><?php echo   wp_strip_all_tags( get_the_content() );?></p>

                                    
                                </div>
                                <!-- <div class="promo-slider__wrapper-3"><a class="button button--filled" href="#" data-hover="Discover"><span>Discover</span></a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    <?php endwhile; ?>

       
    
        
      
        <!-- item end-->
        <!-- item start-->
        <!-- <div class="slider-item item--style-3">
            <div class="overlay"></div>
            <div class="bg-holder jarallax">
                <picture>
                    <source srcset="img/promo-3.jpg" media="(min-width: 992px)"/><img class="img-bg jarallax-img" src="<?php echo  get_template_directory_uri() ?>/img/promo-3.jpeg" alt="img"/>
                </picture>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="align-container">
                            <div class="align-item">
                                <div class="promo-slider__wrapper-1">
                                    <h2 class="title">Solar <span>—</span> Systems</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- item end-->
    </div>
    
    <div class="slider-nav">
        <div class="phones-block"><span class="title"></div>
        <div class="socials-block"><span class="title"></span>
            <!-- socials start-->
            
            <!-- socials end -->
        </div>
        <div class="inner-holder">
            <div class="promo-dots"></div><span class="paging-info"></span>
        </div>
    </div>
     
 </section>
				<!-- promo-style-2-slider end-->
    <!-- about-welcome-style-2 start-->
    <section class="section about-welcome about-welcome--style-2 " style='padding-bottom:50px'>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-4 col-lg-5">
                    <div class="title-block">
                        <h2 class="title"> <?php the_field('nosotros_subtitulo', $postID); ?></h2>
                       
                        
                    </div>
                </div>
                <div class="col-xl-7 offset-xl-1 col-lg-6 offset-lg-1">
                    <div class="description">
                        <h3 class="title"><?php the_field('nosotros_titulo', $postID); ?> </h3>
                        <?php the_field('nosotros_descripcion', $postID); ?>
                        
                       <p>
                       <a class="button button--transparent" href="<?php echo get_home_url() ?>/nosotros" data-hover="Leer más"><span>Leer más</span></a>
                       </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section platform"><img class="img-background" src="<?php echo  get_template_directory_uri() ?>/img/news--style-2-bg.jpg" alt="img">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-5">
                    <div class="heading primary-heading">
                       
                        <h5 class="subtitle"><span> <?php the_field('seccion_1_titulo', $postID); ?></span></h5>
                    </div>
                    <p><?php the_field('seccion_1_descripcion', $postID); ?></p>
                    <a class="button button--transparent" href="<?php echo get_home_url() ?>/nosotros" data-hover="Explorar"><span>Explorar</span></a>
                </div>
            </div>
        </div>
    </section>



    <section class="section news--style-2">
					<div class="container">
						<div class="row align-items-end margin-bottom">
							<div class="col-lg-9 col-md-8">
								<div class="heading primary-heading">
									<h3 class="title">Blog</h3>
									<h5 class="subtitle"><span>Noticias y perspectivas</span></h5>
								</div>
							</div>
							<div class="col-lg-3 col-md-4 d-none d-lg-block">
								<div class="button-holder"><a class="button button--transparent" href="<?php echo get_home_url() ?>/blog" data-hover="Todos los articulos"><span>Todos los articulos</span></a>
								</div>
							</div>
						</div>
					</div>
					<div class="container">
						<div class="row flex-column-reverse flex-lg-row">
							<div class="col-lg-6">
								<!-- item start-->

                                <?php query_posts(['posts_per_page'=>3]); ?>
                                <?php while ( have_posts() ) : the_post(); ?>
                                    
								<div class="news-item--aside">
									<div class="img-holder"><img class="img-bg" src="<?php echo the_post_thumbnail_url() ?>" alt="img"></div>
									<div class="description"><span class="date">October 12, 2019</span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
								</div>
                                <?php endwhile; ?>

							
						
								<!-- item end-->
							</div>
							<div class="col-lg-6">
								<!-- item start-->
								<div class="news-item--style-2"><a class="img-holder">
									<div class="overlay"></div><img class="img-bg" src="<?php echo  get_template_directory_uri() ?>/img/blog-in-6.jpg" alt="img"></a>
									
								</div>
							</div>
						</div>
					</div>
					<div class="container">
						<div class="row">
							<div class="col-12 d-block d-lg-none">
								<div class="button-holder text-center margin-top"><a class="button button--transparent" href="#" data-hover="All Articles"><span>All Articles</span></a>
								</div>
							</div>
						</div>
					</div>
				</section>







<?php get_footer() ?>