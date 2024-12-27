<?php
define("MR_TDU", get_template_directory_uri());


function marketstore_setup()
{
    add_theme_support('title-tag');
}
    add_action('after_setup_theme', 'marketstore_setup');


    function mr_theme_scripts() {
        // اضافه کردن استایل‌ها
        wp_enqueue_style('mr-style', MR_TDU . '/style.css');
        wp_enqueue_style('mr-fonts', MR_TDU . '/css/fonts.css');
    
        // اضافه کردن اسکریپت‌ها
        wp_enqueue_script('mr-jquery', MR_TDU . '/js/jquery.js', array(), null, true);
        wp_enqueue_script('mr-owl-carousel', MR_TDU . '/js/owl.carousel.js', array('jquery'), null, true);
        wp_enqueue_script('mr-java', MR_TDU . '/js/java.js', array('jquery'), null, true);
        wp_enqueue_script('mr-parsinumber', MR_TDU . '/js/parsinumber.min.js', array('jquery'), null, true);
    }
    
    add_action('wp_enqueue_scripts', 'mr_theme_scripts');
    function remove_parsinumber_script() {
        wp_dequeue_script('mr-parsinumber');
    }
    add_action('wp_enqueue_scripts', 'remove_parsinumber_script', 20);
    

    