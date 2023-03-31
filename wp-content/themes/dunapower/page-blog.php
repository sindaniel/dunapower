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
                        <h1 class="title"><?php echo the_title() ?></h1>
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
                                <h3 class="article-item__title"> <a class="article-item__link" href="#"><?php echo  get_the_title() ?></a></h3>
                                <p class="article-item__text">  <?php echo get_the_content() ?></p>
                            </div>
                        </div>
                    </div>

                
                <?php endwhile; ?>
                   
                    





                    <div class="col-12 text-center">
                        <!-- pagination start-->
                        <ul class="pagination pagination--primary">
                            <li class="back"><a href="#">Back</a></li>
                            <li class="number current"><a href="#">1</a></li>
                            <li class="number"><a href="#">2</a></li>
                            <li class="number"><a href="#">3</a></li>
                            <li class="number"><a href="#">4</a></li>
                            <li class="number"><a href="#">5</a></li>
                            <li class="next"><a href="#">Next</a></li>
                        </ul>
                        <!-- pagination end-->
                    </div>
                </div>
            </div>
         
        </div>
    </div>
</section>








    
    <?php get_footer() ?>