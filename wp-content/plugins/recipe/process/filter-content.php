<?php 
function r_filter_recipe_content($content){
    //this function will check if this a single  post
    if(! is_singular('recipe')){
        return $content;
    }
    global $post, $wpdb ; // now has access to all posts properities
    $recipe_data =  get_post_meta($post->ID, 'recipe_data', true);  // grab metadata
    $recipe_html    = file_get_contents('recipe-template.php',true);
    $recipe_html  = str_replace('RATE_I18N',__('Rating', 'recipe'), $recipe_html); // this function to replace the text with the template the first parameter the string you want to replace and the third which you want to replace with
    $recipe_html = str_replace('RECIPE_ID', $post->ID, $recipe_html);
    $recipe_html = str_replace('RECIPE_RATING', $recipe_data['rating'], $recipe_html);

    $user_IP  = $_SERVER['REMOTE_ADDR'];
 // this method will return a single value  from the sequal query
   $rating_count=  $wpdb->get_var(
       "SELECT COUNT(*) FROM '". $wpdb->prefix. "recipe_ratings' WHERE recipe_id='". $post->ID. "' AND user_ip='". $user_IP."'"
   );
    
   //if the user already rated the recipe then change the readonly placeholder to the  data dash rated dash read only
   if($rating_count >0){
       $recipe_html = str_replace(
           'READONLY_PLACEHOLDER', 'data-rateit-READONLY="true"',$recipe_html
       );
   } else{
       $recipe_html  = str_replace('READONLY_PLACEHOLDER','', $recipe_html);
   }
    return $recipe_html .$content;
}