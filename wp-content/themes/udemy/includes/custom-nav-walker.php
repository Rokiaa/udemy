<?php
//  walker -> being able to loop through a nested array so you can output HTML
class JU_Custom_Nav_Walker extends Walker_Nav_Menu{
    // start level-> function is called when WP begins looping through a nested array
    public function start_lvl(&$output, $depth = 0, $args = null)
    {
        $output .= '<ul class="special-class">';
    }

    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {
        // item -> the object contains info related to the link itself like the url title
        // id -> contains the id for the menu item itself
        $output .= '<li class="special-class-item">';
        $output .= $args->before;
        $output .= '<a href="'. $item->url .'">'; // the item variable contains info about the specific menu item in the loop
        $output .= $args->link_before . $item->title . $args->link_after;
        $output .= '</a>';
        $output .= $args->after;
        
    }
// end element -> this function purpose is to close the element by closing the list tag
    public function end_el(&$output, $item, $depth = 0, $args = null)
    {
        $output .= "</li>";
    }

    public function end_lvl(&$output, $depth = 0, $args = null) //output contains all the html from the previous functions
    {
        $output .= '</ul>';
    }

}
