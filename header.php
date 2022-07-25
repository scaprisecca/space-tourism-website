<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Space Tourism</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <?php wp_head(); ?>

    </head>
 
    <body>

        <!-- Navbar -->
        <header class="navbar__wrapper">

            <img src="<?php echo get_theme_file_uri('/assets/shared/logo.svg'); ?>" alt="Space Tourism logo" class="navbar__logo">
    
            <img src="<?php echo get_theme_file_uri('/assets/shared/icon-hamburger.svg'); ?>" alt="Mobile menu toggle button" class="navbar__toggle">
            
            <div class="navbar__spacer"></div>
    
            <ul class="navbar navbar--blur hidden">
                <img src="<?php echo get_theme_file_uri('//assets/shared/icon-close.svg'); ?>" alt="Close mobile menu icon" class="navbar__close-icon">
                <li class="navbar__item">
                    <a href="" class="navbar__link"><span class="navbar__link--bold">00</span>Home</a>
                </li>

                <li class="navbar__item">
                    <a href="" class="navbar__link"><span class="navbar__link--bold">01</span>Destination</a>
                    <ul class="navbar__dropdown">
                        <li class="navbar__dropdown-item">
                            <a href="<?php echo the_permalink(27); ?>" class="navbar__dropdown-link">Moon</a>
                        </li>
                        <li class="navbar__dropdown-item">
                            <a href="<?php echo the_permalink(36); ?>" class="navbar__dropdown-link">Mars</a>
                        </li>
                        <li class="navbar__dropdown-item">
                            <a href="<?php echo the_permalink(29); ?>" class="navbar__dropdown-link">Europa</a>
                        </li>
                        <li class="navbar__dropdown-item">
                            <a href="<?php echo the_permalink(28); ?>" class="navbar__dropdown-link">Titan</a>
                        </li>
                    </ul>
                </li>

                <li class="navbar__item">
                    <a href="" class="navbar__link"><span class="navbar__link--bold">02</span>Crew</a>
                    <ul class="navbar__dropdown">
                        <li class="navbar__dropdown-item">
                            <a href="<?php echo the_permalink(23); ?>" class="navbar__dropdown-link">Douglas Hurley</a>
                        </li>
                        <li class="navbar__dropdown-item">
                            <a href="<?php echo the_permalink(26); ?>" class="navbar__dropdown-link">Mark Shuttleworth</a>
                        </li>
                        <li class="navbar__dropdown-item">
                            <a href="<?php echo the_permalink(25); ?>" class="navbar__dropdown-link">Victor Glover</a>
                        </li>
                        <li class="navbar__dropdown-item">
                            <a href="<?php echo the_permalink(24); ?>" class="navbar__dropdown-link">Anousheh Ansari</a>
                        </li>
                    </ul>
                </li>

                <li class="navbar__item">
                    <a href="" class="navbar__link"><span class="navbar__link--bold">03</span>Technology</a>
                    <ul class="navbar__dropdown">
                        <li class="navbar__dropdown-item">
                            <a href="<?php echo the_permalink(21); ?>" class="navbar__dropdown-link">Launch Vehicle</a>
                        </li>
                        <li class="navbar__dropdown-item">
                            <a href="<?php echo the_permalink(20); ?>" class="navbar__dropdown-link">Spaceport</a>
                        </li>
                        <li class="navbar__dropdown-item">
                            <a href="<?php echo the_permalink(19); ?>" class="navbar__dropdown-link">Space Capsule</a>
                        </li>
                    </ul>
                </li>

            </ul>
    
        </header>
<!-- End Navbar -->