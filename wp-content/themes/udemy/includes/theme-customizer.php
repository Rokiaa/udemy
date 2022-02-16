<?php 
// $wp_customize --> instance of the WP cutomize manager class
// this class controls how the customizer works and most of its fuctionality will be going over
function ju_customize_register($wp_customize){
   // echo '<pre>';
   // var_dump($wp_customize);
   // echo '</pre>';
   $wp_customize->get_section('title_tagline')->title ='General';

   //panels are ways to group sections
   $wp_customize->add_panel('udemy',[
      'title' => __('Udemy','udemy'),
      'description'  => '<p>Udemy Theme Settings</p>',
      'priority'  => 160,
   ]);
   ju_social_customizer_section($wp_customize);
   ju_misc_customizer_section($wp_customize);


}