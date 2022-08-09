<?php get_header(); ?>

<main class="blog__wrapper">

<h1 class="space-title">
    <span class="space-title--dark">04</span> Let Your Mind Travel
</h1>

<!-- add navigation for post categories here -->

<!-- Selection of blog posts -->

<div class="blog__post-wrapper">
<?php 

    while(have_posts()) {
        the_post(); ?>
    
        <div class="blog__card">
            <img class="blog__card-image" src="<?php the_post_thumbnail(); ?>" alt="<?php the_title(); ?>" >

            <div class="blog__card-body">
                <h3 class="blog__card-heading"><?php the_title(); ?></h3>
                <?php the_excerpt(); ?>

                <a href="<?php the_permalink(); ?>" class="blog__card-link">Read More</a>
            </div>
        </div>

        <?php } ?>
</div>

</main>

<?php get_footer(); ?>