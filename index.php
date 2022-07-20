<?php get_header(); ?>

<main class="home__wrapper">

            <!-- Navbar -->
        <header class="navbar__wrapper">

            <img src="<?php echo get_theme_file_uri('/assets/shared/logo.svg') ?>" alt="Space Tourism logo" class="navbar__logo">
    
            <img src="<?php echo get_theme_file_uri('/assets/shared/icon-hamburger.svg') ?>" alt="Mobile menu toggle button" class="navbar__toggle">
            
            <div class="navbar__spacer"></div>
    
            <ul class="navbar navbar--blur hidden">
                <img src="<?php echo get_theme_file_uri('/assets/shared/icon-close.svg') ?>" alt="Close mobile menu icon" class="navbar__close-icon">
                <li class="navbar__item"><a href="" class="navbar__link"><span class="navbar__link--bold">00</span>Home</a></li>
                <li class="navbar__item"><a href="" class="navbar__link"><span class="navbar__link--bold">01</span>Destination</a></li>
                <li class="navbar__item"><a href="" class="navbar__link"><span class="navbar__link--bold">02</span>Crew</a></li>
                <li class="navbar__item"><a href="" class="navbar__link"><span class="navbar__link--bold">03</span>Technology</a></li>
            </ul>
    
        </header>
<!-- End Navbar -->

            <div class="home__content-wrapper">
                <div class="home__content">
                    <h5 class="home__subheading">So, you want to travel to</h5>
                    <h1 class="home__heading">SPACE</h1>
                    <p class="home__text">Let's face it; if you want to go to space, you might as well genuinely go to outer space and not hover kind of on the edge of it. Well sit back, and relax because we'll give you a truly out of this world experience!</p>
                </div>
    
                <div class="home__button--hover hidden">
                    <button class="home__button visible">
                        <p>EXPLORE</p>
                    </button>
                </div>
            </div>

        </main>

<?php get_footer(); ?>