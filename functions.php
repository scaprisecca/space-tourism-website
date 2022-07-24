<?php 

    function space_tourism_files() {
        wp_enqueue_style('font-api', 'https://fonts.googleapis.com');
        wp_enqueue_style('font-crossorigin', 'https://fonts.gstatic.com');
        wp_enqueue_style('google_fonts', 'https://fonts.googleapis.com/css2?family=Barlow&family=Barlow+Condensed&family=Bellefair&display=swap');
        wp_enqueue_style('space_main_files', get_stylesheet_uri());
        wp_enqueue_style('normalize', get_theme_file_uri('/css/normalize.css'));
        wp_enqueue_style('space_navbar', get_theme_file_uri('/css/navbar.css'));
        wp_enqueue_style('space_home', get_theme_file_uri('/css/home.css'));
        wp_enqueue_style('space_technology', get_theme_file_uri('/css/technology.css'));
        wp_enqueue_style('space_crew', get_theme_file_uri('/css/crew.css'));
        wp_enqueue_style('space_destination', get_theme_file_uri('/css/destination.css'));

        wp_enqueue_script('main_js', get_theme_file_uri('script.js'), null, '1.0', true);
        
    }

    add_action('wp_enqueue_scripts', 'space_tourism_files');

    
?>
