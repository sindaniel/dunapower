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
	
    <link rel="shortcut icon" href="<?php echo  get_template_directory_uri() ?>/img/dunafavicon.png" />
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
                        <li class="menu-item"><a href="<?php echo get_home_url() ?>"><span>Inicio</span></a></li>
                        <li class="menu-item"><a href="<?php echo get_home_url() ?>/nosotros"><span>Nosotros</span></a></li>
                        <li class="menu-item"><a href="<?php echo get_home_url() ?>/blog"><span>Blog</span></a></li>
                        <li class="menu-item"><a href="<?php echo get_home_url() ?>/contacto"><span>Contacto</span></a></li>
                        
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