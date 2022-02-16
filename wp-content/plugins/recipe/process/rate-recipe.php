<?php 
function r_rate_recipe(){
   // print_r($_POST);
   global $wpdb;

   $output  = ['status' => 1];
   $post_ID = absint($_POST['rid']);
   $rating  = round($_POST['rating'], 1);
   $user_IP  = $_SERVER['REMOTE_ADDR'];
 // this method will return a single value  from the sequal query
   $rating_count=  $wpdb->get_var(
       "SELECT COUNT(*) FROM '". $wpdb->prefix. "recipe_ratings' WHERE recipe_id='". $post_ID. "' AND user_ip='". $user_IP."'"
   );

   if($rating_count >0){
       wp_send_json($output);
   }
// Insert  Rating into Database
   $wpdb->insert(
       // the first parameter  the name of the table we want to insert data into
       $wpdb->prefix . 'recipe_ratings',
       [
           'recipe_id'  => $post_ID,
           'rating'  => $rating,
           'user_ip'  => $user_IP,
       ],
       ['%d', '%f', '%s'], //s--> string, d--> integer , f--> float
   );
// Update Recipe Metadata
   $recipe_data = get_post_meta($post_ID, 'recipe_data', true);
   $recipe_data['rating_count']++;
   $recipe_data['rating']= round($wpdb->get_var(
    "SELECT AVG('rating') FROM '". $wpdb->prefix. "recipe_ratings' WHERE recipe_id='". $post_ID. "'"
), 1);
update_post_meta($post_ID, 'recipe_data', $recipe_data);


   $output['status']= 2; //1--> if the insert was a failure , two will mean it success
   wp_send_json($output);// encode the array and then kill the script 


}