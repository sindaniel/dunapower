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


<section class=" blog-detail" style='    padding: 30px 0;'>
   

    <div class="container">
        <div class="row">
            <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                <!-- content block start-->
                <div class="content-block">
                <?php echo get_the_content() ?>
                        
                </div>
                <!-- content block end-->
            </div>
        </div>
    </div>
 
</section>






<?php get_footer() ?>