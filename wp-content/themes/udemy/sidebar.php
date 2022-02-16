<!-- Sidebar
============================================= -->
<div class="sidebar nobottommargin col_last">
<div class="sidebar-widgets-wrap">
    <?php
        // check if the sidebar is active
        if(is_active_sidebar('ju_sidebar')){ // 'ju_sidebar' -> the id of the sidebar
            dynamic_sidebar('ju_sidebar'); // widgets that are attached to the sidebar will now be displayed
            
        }
     ?>

    
</div>

</div><!-- .sidebar end -->