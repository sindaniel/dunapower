<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dunapower
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
    <link rel="stylesheet" href="<?php echo  get_template_directory_uri() ?>/css/styles.min.css">
    <!-- web-font loader-->
    <script>
        WebFontConfig = {

            google: {

                families: ['Heebo:100,400,500,700,900'],

            }

        }

        function font() {

            var wf = document.createElement('script')

            wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js'
            wf.type = 'text/javascript'
            wf.async = 'true'

            var s = document.getElementsByTagName('script')[0]

            s.parentNode.insertBefore(wf, s)

        }

        font()
    </script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="page-wrapper">
	

    <div class="mobile-nav">
        <div class="nav-inner">
            <div class="nav-item">
                <!-- main menu start-->
                <nav class="menu-holder">
                    <ul class="mobile-menu">
                        <li class="menu-item menu-item--has-child active"><a href="javascript:void(0);"><span>Home</span></a>
                            <!-- sub-menu start-->
                            <ul class="sub-menu">
                                <li><a href="index.html">Home page 1</a></li>
                                <li class="active"><a href="index-2.html">Home page 2</a></li>
                                <li><a href="index-3.html">Home page 3</a></li>
                            </ul>
                            <!-- sub-menu end-->
                        </li>
                        <li class="menu-item menu-item--has-child"><a href="javascript:void(0);"><span>Pages</span> </a>
                            <!-- sub-menu start-->
                            <ul class="sub-menu">
                                <li><a href="about.html">About</a></li>
                                <li><a href="blog-detail.html">Blog Detail</a></li>
                                <li><a href="services.html">Services</a></li>
                                <li><a href="services-details.html">Services Details</a></li>
                                <li><a href="gallery.html">Gallery</a></li>
                                <li><a href="products.html">Products</a></li>
                                <li><a href="product-details.html">Product Details</a></li>
                                <li><a href="cases-details.html">Project Details</a></li>
                                <li><a href="typography.html">Typography</a></li>
                                <li><a href="faq.html">FAQ</a></li>
                                <li><a href="404.html">404 Page</a></li>
                            </ul>
                            <!-- sub-menu end-->
                        </li>
                        <li class="menu-item"><a href="cases.html"><span>Projects</span></a></li>
                        <li class="menu-item"><a href="blog.html"><span>Blog</span></a></li>
                        <li class="menu-item menu-item--has-child"><a href="javascript:void(0);"><span>Shop</span></a>
                            <!-- sub-menu start-->
                            <ul class="sub-menu">
                                <li><a href="catalog-page.html">Catalog page</a></li>
                                <li><a href="shop-product.html">Shop Product</a></li>
                                <li><a href="shopping-cart.html">Cart</a></li>
                                <li><a href="shopping-checkout.html">Checkout</a></li>
                            </ul>
                            <!-- sub-menu end-->
                        </li>
                        <li class="menu-item"><a href="contacts.html"><span>Contacts</span></a></li>
                        <li class="menu-item menu-item--has-child"><a href="javascript:void(0);"><span>Elements</span></a>
                            <!-- sub-menu start-->
                            <ul class="sub-menu">
                                <li><a href="pricing-tables.html">Pricing Tables</a></li>
                                <li><a href="testimonials.html">Testimonials</a></li>
                                <li><a href="icon-list.html">Icon List</a></li>
                                <li><a href="accordions.html">Accordions</a></li>
                                <li><a href="team.html">Team</a></li>
                                <li><a href="logos.html">Logos</a></li>
                                <li><a href="tabs.html">Tabs</a></li>
                                <li><a href="buttons.html">Buttons</a></li>
                                <li><a href="alerts.html">Alerts</a></li>
                                <li><a href="breadcrumbs.html">Bread Crumbs</a></li>
                                <li><a href="charts.html">Charts</a></li>
                                <li><a href="counters.html">Counters</a></li>
                                <li><a href="pagination.html">Pagination</a></li>
                                <li><a href="progress-bars.html">Progress Bars</a></li>
                            </ul>
                            <!-- sub-menu end-->
                            <!-- main menu end-->
                            <div class="button-holder"><a class="button button--filled" href="#" data-hover="Get In Touch"><span>Get In Touch</span></a>
                            </div>
                            <div class="menu-contacts">
                                <p class="address">Elliott Ave, Parkville VIC 3052, Melbourne</p>
                                <p class="phone-number">Phone: <a href="tel:+31859644725">+31 85 964 47 25</a></p>
                                <p class="e-main">Email: <a href="mailto:r_energy@mail.co">r_energy@mail.co</a></p>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!-- mobile-menu end-->
    <!-- header start-->
    <header class="header header--style-2" id="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 column">
                    <!-- logo block start-->
                    <div class="logo-block">
                        <a class="logo" href="<?php echo get_home_url() ?>">
                            <img width="150" src="<?php echo  get_template_directory_uri() ?>/img/dunapower2.svg" alt="">
                        </a>
                    </div>
                    <!-- logo block end-->
                    <!-- menu block start-->
                    <div class="menu-block">
                        <!-- main menu start-->
                        <nav class="menu-holder">
                            <ul class="main-menu">
                                <li class="menu-item"><a href="<?php echo get_home_url() ?>"><span>Inicio</span></a></li>
                                <li class="menu-item"><a href="<?php echo get_home_url() ?>/nosotros"><span>Nosotros</span></a></li>
                                <li class="menu-item"><a href="<?php echo get_home_url() ?>/blog"><span>Blog</span></a></li>
                                <li class="menu-item"><a href="<?php echo get_home_url() ?>/contacto"><span>Contacto</span></a></li>
                              
                               
                            </ul>
                        </nav>
                        <!-- main menu end-->
                    </div>
                    <!-- menu block end-->
                    <!-- lang block start-->
                    <div class="lang-block">
                      
                        <div class="hamburger">
                            <div class="hamburger-box">
                                <div class="hamburger-inner"></div>
                            </div>
                        </div>
                        <!-- menu-trigger end-->
                    </div>
                    <!-- lang block end-->
                </div>
            </div>
        </div>
    </header>
    <main class="main">