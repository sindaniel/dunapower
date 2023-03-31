<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dunapower
 */

get_header();
?>

	

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


<section class="section">
    <div class="container">
        <div class="row align-items-start">
           
            <div class="col-xl-7 offset-xl-1 col-lg-6 offset-lg-1">
                <h3 class="title"><?php echo  the_title() ?></h3>
                <div class="description">
                <?php echo  get_the_content() ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php

get_footer();