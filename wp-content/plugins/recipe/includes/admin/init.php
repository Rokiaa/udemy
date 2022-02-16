<?php
function recipe_admin_init(){
    include('columns.php');
    // this filter hook will give us an array of columns already set by WP
    add_filter('manage_recipe_posts_columns', 'r_add_new_recipe_columns');
    // 10 ->priority and 2 --> accepted argument
    add_action('manage_recipe_posts_custom_column', 'r_manage_recipe_columns',10, 2);
}