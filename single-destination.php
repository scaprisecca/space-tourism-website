<?php get_header(); ?>

<main class="destination__wrapper">

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