<?php get_header(); ?>

<main class="destination__wrapper">

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
<p class="space-title">
    <span class="space-title--dark">01</span> Pick Your Destination
</p>


<div class="destination__content-wrapper">

<img class="destination__image" alt="<?php the_title(); ?>" src="<?php  the_field('destination_pic'); ?>"/>


<div class="destination__content">
     <ul class="destination__nav">
     <li><a href="<?php echo the_permalink(27); ?>" class="destination__nav-item">Moon</a></li>
        <li><a href="<?php echo the_permalink(36); ?>" class="destination__nav-item">Mars</a></li>
        <li><a href="<?php echo the_permalink(29); ?>" class="destination__nav-item">Europa</a></li>
        <li><a href="<?php echo the_permalink(28); ?>" class="destination__nav-item">Titan</a></li>
    </ul>

    <h2 class="destination__heading"><?php the_title(); ?></h2>
    
    <?php the_content(); ?>

    <div class="divider"></div>

    <div class="destination__stats">

        <div>
            <p class="destination__stat-label">
            Avg. Distance
            </p>
            <p class="destination__stat"><?php the_field('average_distance'); ?></p>
        </div>

        <div>
            <p class="destination__stat-label">
            EST. Travel Time
            </p>
            <p class="destination__stat">
            <?php the_field('travel_time'); ?>
            </p>
        </div>


    </div>
</div>

</div>
</main>

<?php get_footer(); ?>