<?php get_header(); ?>

 <main class="technology__wrapper">
    
    <h1 class="space-title"><span class="space-title--dark">03</span> Space Launch 101</h1>


    <div class="technology__content-wrapper">

        <div class="technology__slider-num-wrapper">
            <div class="technology__slider-num technology__slider-num--active">1</div>
            <div class="technology__slider-num">2</div>
            <div class="technology__slider-num">3</div>
        </div>

        <div class="technology__content">
            <h3 class="technology__subheading">The Terminology...</h3>
            <h2 class="technology__heading"><?php the_title(); ?></h2>

            <?php the_content(); ?>
        </div>

        <img src="<?php the_field('tech_pic_portrait'); ?>" alt="space launch" class="technology__hero-img">

        <img src="<?php the_field('tech_pic_landscape'); ?>" alt="space launch" class="technology__desktop-hero-img">
    </div>

</main>

<?php get_footer(); ?>