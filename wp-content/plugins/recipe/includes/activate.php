<?php 
    function r_activate_plugin(){
        // 5.0 --> the minimum version required
        // get_bloginfo('version) ---> current version
        // this will check if the current version is less than the minimum required version
        if(version_compare(get_bloginfo('version'), '5.0', '<')){
            // recipe -> text domin 
            // this make this string translatable
            wp_die(__('You must update wordpress to use this plugin.','recipe'));
        }

        global $wpdb;  //this variable contains an object with the methods and properties of interacting with the database
        // contain a string with our sequel
        $createSQL = "CREATE TABLE `".$wpdb->prefix."recipe_ratings` ( 
            `ID` BIGINT(20) NOT NULL AUTO_INCREMENT , 
            `recipe_id` INT(20) NOT NULL ,
                `rating` FLOAT(3,2) NOT NULL , 
                `user_ip` VARCHAR(50) NOT NULL ,   
                PRIMARY KEY  (`ID`)
                ) 
                ENGINE = InnoDB " .$wpdb->get_charset_collate().";";
        // ABSPATH -->point to the installation of our WP site
        require_once(ABSPATH. "/wp-admin/includes/upgrade.php");
        //executing queries that modify the database and the resource section
        dbDelta($createSQL);
       
        }