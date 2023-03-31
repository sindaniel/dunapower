<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dunapower
 */

?>




</main>

<footer class="footer footer--style-2">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <!-- logo start-->
                    <div class="footer-logo">
                        <a class="logo" href="index.html">
                            <img src="<?php echo  get_template_directory_uri() ?>/img/dunapower2.svg" width="200">
                        </a>
                    </div>
                    <!-- logo end-->
                    <!-- socials start-->
                    <nav class="socials-holder">
                        <ul class="socials-primary">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </nav>
                    <!-- socials end -->
                </div>
                <div class="col-xl-3 col-md-6">
                    <!-- footer contacts start-->
                    <div class="footer-contacts">
                        <h4 class="title">Contacto</h4>
                        
                        <p class="address"><?php the_field('contacto', 2); ?></p>
                    </div>
                    <!-- footer contacts end-->
                </div>
                <div class="col-xl-3 col-md-6">
                    <h4 class="title">Menu</h4>
                    <!-- footer nav start-->
                    <nav class="footer-nav">
                        <ul class="footer-menu">
                            <li><a href="<?php echo get_home_url() ?>">Inicio</a></li>
                            <li><a href="<?php echo get_home_url() ?>/nosotros">Nosotros</a></li>
                            <li><a href="<?php echo get_home_url() ?>/blog">Blog</a></li>
                            <li><a href="<?php echo get_home_url() ?>/contacto">Contacto</a></li>
                        </ul>
                    </nav>
                    <!-- footer nav end-->
                </div>
                
            </div>
        </div>
    </div>
    <div class="container">               
        <div class="row">
            <div class="col-12">
                <div class="footer-lower">
                    <div class="row">
                        <div class="col-md-6">
                            <p class="copyright">© <?php echo date('Y') ?> Duna Power</p>
                        </div>
                        <div class="col-md-6">
                            <!-- privacy start-->
                           
                            <!-- privacy end-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
		<script src="<?php echo  get_template_directory_uri() ?>/js/libs.min.js"></script>
		<!-- scripts-->
		<script src="<?php echo  get_template_directory_uri() ?>/js/common.min.js"></script>


</body>
</html>
