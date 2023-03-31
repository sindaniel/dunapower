<?php get_header() ?>



<section class="promo-primary">
    <div class="overlay"></div>
    <picture>
        <source srcset="<?php echo  get_template_directory_uri() ?>/img/about.jpg" media="(min-width: 992px)"><img class="img-bg" src="<?php echo  get_template_directory_uri() ?>/img/about.jpg" alt="img">
    </picture>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="align-container">
                    <div class="align-item">
                        <h1 class="title">Blog</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="section articles">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-lg-8 col-xl-8">
                <div class="row">


                <?php  while ( have_posts() ): the_post(); ?>

                    <div class="col-12">
                        <div class="article-item">
                         
                            <div class="article-item__details">
                            <img class="" style="width:100%" src="<?php echo the_post_thumbnail_url() ?>" alt="img">
                                <h3 class="article-item__title"> <a class="article-item__link" href="<?php echo get_permalink() ?>"><?php echo  get_the_title() ?></a></h3>
                                <p class="article-item__text">  <?php echo get_the_content(false) ?></p>

                                <p>
                       <a class="button button--transparent" href="<?php echo get_permalink() ?>" data-hover="Leer más"><span>Leer más</span></a>
                       </p>
                            </div>
                        </div>
                    </div>

                
                <?php endwhile; ?>
                   
                    
                </div>
            </div>
         
        </div>
    </div>
</section>








    
    <?php get_footer() ?>