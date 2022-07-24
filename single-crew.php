<?php get_header(); ?>

<main class="crew__wrapper">

<!-- Navbar -->
        <header class="navbar__wrapper">

            <img src="assets/shared/logo.svg" alt="Space Tourism logo" class="navbar__logo">
    
            <img src="assets/shared/icon-hamburger.svg" alt="Mobile menu toggle button" class="navbar__toggle">
            
            <div class="navbar__spacer"></div>
    
            <ul class="navbar navbar--blur hidden">
                <img src="./assets/shared/icon-close.svg" alt="Close mobile menu icon" class="navbar__close-icon">
                <li class="navbar__item"><a href="" class="navbar__link"><span class="navbar__link--bold">00</span>Home</a></li>
                <li class="navbar__item"><a href="" class="navbar__link"><span class="navbar__link--bold">01</span>Destination</a></li>
                <li class="navbar__item"><a href="" class="navbar__link"><span class="navbar__link--bold">02</span>Crew</a></li>
                <li class="navbar__item"><a href="" class="navbar__link"><span class="navbar__link--bold">03</span>Technology</a></li>
            </ul>
    
        </header>
<!-- End Navbar -->

        <h1 class="space-title"><span class="space-title--dark">02</span>Meet Your Crew</h1>

        <div class="crew__content-wrapper">

            <div class="crew__image-wrapper">
                <img src="<?php the_field('crew_pic'); ?>" alt="<?php echo the_title(); ?>" class="crew__image">
            </div>

            <div class="crew__content">

                <!-- <h1 class="space-title crew-space-title"><span class="space-title--dark">02</span>Meet Your Crew</h1> -->

                <div class="crew__slider-wrapper">
                    <div class="crew__slider-icon crew__slider-icon--active"></div>
                    <div class="crew__slider-icon"></div>
                    <div class="crew__slider-icon"></div>
                    <div class="crew__slider-icon"></div>
                </div>

                <p class="crew__subheading"><?php the_field('title'); ?></p>
                <h2 class="crew__heading"><?php the_title(); ?></h2>

                <span class="crew__text"><?php the_content(); ?></span>
            </div>

        </div>
    </main>

<?php get_footer(); ?>