<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta <?php bloginfo('charset'); ?>>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="format-detection" content="telephone=no"/>
    <meta name="theme-color" content="#433633">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header id="navigation" class="inview">
        <div class="container">
            <div class="row">
                <div class="menu__box">
                    <div class="logo">
                        <a href="<?php echo esc_url_raw(home_url()); ?>">
                            <img loading=lazy src="<?php echo get_template_directory_uri() . '/assets/image/logo_white.svg';?>" alt="logo">
                        </a>
                    </div>                
                    <!--pannello menu widget-->
                    <div class="menu__list">
                        <nav>
                            <?php wp_nav_menu(array(
                                'theme_location'    =>  'primary',
                                'container'         =>  false,
                            )); ?>
                        </nav>
                    </div>
                </div>
                <div class="menu__cta">
                    <!--icona hamburger-->
                    <div class="header__hamburger">
                        <button class="hamburger hamburger--spin" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div> 
                    <div class="cta">
                        <a href="https://booking.passepartout.cloud/booking?oidPortale=18485&lingua=it" target="_blank">
                            <button>Prenota ora</button>
                        </a>                    
                    </div>
                </div>
            </div>
            <!--pannello menu widget-->
            <div class="menu__mobile">
                <nav>
                    <?php wp_nav_menu(array(
                        'theme_location'    =>  'primary',
                        'container'         =>  false,
                    )); ?>
                </nav>
                <div class="cta__mobile">
                    <a href="https://lavilla.comodohotel.it/" target="_blank">
                        <button>Chiedi un preventivo</button>
                    </a> 
                    <a href="https://booking.passepartout.cloud/booking?oidPortale=18485&lingua=it" target="_blank">
                        <button>Prenota ora</button>
                    </a>                     
                </div>
            </div>
        </div>
    </header>