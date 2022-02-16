<?php 
function ju_customize_preview_init(){
    wp_enqueue_script(
        'ju_theme_customizer',
        get_theme_file_uri('/assets/js/theme-customize.js'),
        ['jquery', 'customize-preview'],
        false,
        true
    );

    // $read_more_color = get_theme_mod('ju_read_more_color');
    // wp_add_inline_style(
    //     'ju_custom',
    //     'a.more_link{color: ' . $read_more_color . ';border-color:' . $read_more_color. ';}'
    // );
    
}