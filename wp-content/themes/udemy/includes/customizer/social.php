<?php
function ju_social_customizer_section($wp_customize){
    ////////////////////////////////*********setting***///////////////////////// */
    $wp_customize->add_setting('ju_facebook_handle',[
        'default' => ''
    ]);
    $wp_customize->add_setting('ju_twitter_handle',[
        'default' => ''
    ]);
    $wp_customize->add_setting('ju_instagram_handle',[
        'default' => ''
    ]);
    $wp_customize->add_setting('ju_email',[
        'default' => ''
    ]);
    $wp_customize->add_setting('ju_phone_number',[
        'default' => ''
    ]);
    ////////////////////////////////*********section***///////////////////////// */
    $wp_customize->add_section('ju_social_section',[
        'title' => __('Udemy Social Settings', 'udemy'),
        'priority' => 30,
        'panel' => 'udemy'
    ]);
    ////////////////////////////////////****************controller****////////////////////// */
    // this will create an input field and added to a particular section of our choosing
   // ju_social_facebook_input -> id for this controller
   //ju_social_section -> section id
// ju_facebook_handle --> settings id
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'ju_social_facebook_input',
        array(
            'label'  => __('Facebook Handle','udemey'),
            'section'  => 'ju_social_section',
            'settings'  => 'ju_facebook_handle',
            'type'  => 'text',
        )
    ));
    // the setting will create the DB vlaue , the method will not create an input field
    // it will just tell WP about the setting and tell it to create a setting in the DB
    // the control method will not create the DB value instead it will create the input field 
    // the controller will take care of modifying and updating the DBvalue whenever the input field is updated


    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'ju_social_twitter_input',
        array(
            'label'  => __('Twitter Handle','udemey'),
            'section'  => 'ju_social_section',
            'settings'  => 'ju_twitter_handle',
            'type'  => 'text',
        )
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'ju_social_instagram_input',
        array(
            'label'  => __('Instagram Handle','udemey'),
            'section'  => 'ju_social_section',
            'settings'  => 'ju_instagram_handle',
            'type'  => 'text',
        )
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'ju_social_email_input',
        array(
            'label'  => __('Email','udemey'),
            'section'  => 'ju_social_section',
            'settings'  => 'ju_email',
            'type'  => 'text',
        )
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'ju_social_phone_number_input',
        array(
            'label'  => __('Phone Number','udemey'),
            'section'  => 'ju_social_section',
            'settings'  => 'ju_phone_number',
            'type'  => 'text',
        )
    ));
}