<?php get_header(); ?>

<main class="crew__wrapper">

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