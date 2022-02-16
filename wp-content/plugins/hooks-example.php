<?php 
/**
 * Plugin Name: Hooks Example
 */

//  function ju_title($title){
//      return 'Hooked' . $title;
//  }

//  function ju_footer_shoutout(){
//      echo 'Hooked Example plugin was here. <br>';
//  }

//  function ju_footer_shoutout_v2(){
//     echo 'Hooked Example plugin was here. Version 2. <br>';
// }
// // tell the WP that you would like to filter particular data
//  add_filter('the_title', 'ju_title');
//  add_action('wp_footer', 'ju_footer_shoutout');
//  add_action('wp_footer', 'ju_footer_shoutout_v2',5); // 5 --> priority to show the order of the functions the defult was 10 and i put 5 so it will execute first
function ju_footer(){
    do_action('ju_custom_footer');

}

function ju_kill_wp(){  // this function will never run unless we call it
    echo 'Hello';
}

add_action('wp_footer', 'ju_footer');
add_action('ju_custom_footer', 'ju_kill_wp');

