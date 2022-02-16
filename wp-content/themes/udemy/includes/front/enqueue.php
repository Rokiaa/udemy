<?php

function ju_enqueue(){
    // register tell wordpress about a stylesheet and make it avalilable to be called

    $uri = get_theme_file_uri();
   
    $ver = JU_DEV_MODE ? time() : false; // WP allow to specify a version for a file to force the browser to load the latest version


    wp_register_style('ju_google_fonts','https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i', [], $ver);
    wp_register_style('ju_bootstrap', $uri.'/assets/css/bootstrap.css',[], $ver );
    wp_register_style('ju_style', $uri.'/assets/css/style.css', [], $ver);
    wp_register_style('ju_dark', $uri. '/assets/css/dark.css',[], $ver);
    wp_register_style('ju_font_icons', $uri.'/assets/css/font-icons.css', [], $ver);
    wp_register_style('ju_animate', $uri.'/assets/css/animate.css', [], $ver);
    wp_register_style('ju_magnific_popup', $uri.'/assets/css/magnific-popup.css', [], $ver);
    wp_register_style('ju_responsive', $uri.'/assets/css/responsive.css', [], $ver);
    wp_register_style('ju_custom', $uri.'/assets/css/custom.css', [], $ver);

// enqueue --> instruct WP to load our stylesheet onto the page right now
    wp_enqueue_style('ju_google_fonts');
    wp_enqueue_style('ju_bootstrap');
    wp_enqueue_style('ju_style');
    wp_enqueue_style('ju_dark');
    wp_enqueue_style('ju_font_icons');
    wp_enqueue_style('ju_animate');
    wp_enqueue_style('ju_magnific_popup');
    wp_enqueue_style('ju_responsive');
    wp_enqueue_style('ju_custom');


// register scripts
 wp_register_script('ju_plugins', $uri . '/assets/js/plugins.js', [], $ver,true); // false for the version to not worry about it and true for making it loaded at footer
 wp_register_script('ju_functions', $uri . '/assets/js/functions.js' , [], $ver, true);
 
 wp_enqueue_script('ju_jquery');
 wp_enqueue_script('ju_plugins');
 wp_enqueue_script('ju_functions');




}



?>