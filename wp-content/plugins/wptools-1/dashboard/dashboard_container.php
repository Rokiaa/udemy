<?php
/**
 * @ Author: Bill Minozzi
 * @ Copyright: 2020 www.BillMinozzi.com
 * @ Modified time: 2021-03-02 12:38:04
 */
global $wptools_checkversion;
global $wptools_tab;
$active_tab = $wptools_tab;
if (!defined('ABSPATH')) {
  die('We\'re sorry, but you can not directly access this file.');
}
?>
<h2 class="nav-tab-wrapper">
  <a href="admin.php?page=wptools_options31&tab=dashboard" class="nav-tab">Dashboard</a>
  <a href="admin.php?page=wptools_options31&tab=requirements" class="nav-tab">Server Check & Requirements</a>
  <a href="admin.php?page=wptools_options31&tab=debug" class="nav-tab">Debug Info</a>
  <a href="admin.php?page=wptools_options31&tab=tools" class="nav-tab">More Tools</a>

  <?php
  if(empty($wptools_checkversion))
   echo '<a href="https://wptoolsplugin.com/premium/" class="nav-tab">Go Pro</a>';
   ?>
   
</h2>
<?php

  echo '<div id="wptools-dashboard-left">'; 

if($wptools_tab == 'dashboard')
   require_once(WPTOOLSPATH . 'dashboard/dashboard.php');
elseif($wptools_tab == 'tools')
   require_once(WPTOOLSPATH . 'dashboard/freebies.php');
elseif($wptools_tab == 'debug')
   require_once(WPTOOLSPATH . 'dashboard/tools.php');
elseif($wptools_tab == 'system_info'){
    require_once(WPTOOLSPATH . 'dashboard/tools.php'); 
    edd_tools_sysinfo_download();
}
else
   require_once(WPTOOLSPATH . 'dashboard/requirements.php');

?>

   </div> <!-- "wptools-dashboard-left"> -->

   <div id="wptools-dashboard-right">
   <div id="wptools-containerright-dashboard">
       <?php require_once(WPTOOLSPATH . "dashboard/mybanners.php"); ?>
   </div>
   </div> <!-- "wptools-dashboard-right"> -->

<?php
return;

function edd_tools_sysinfo_download22() {

	if( ! current_user_can( 'manage_shop_settings' ) ) {
		// return;
	}

	nocache_headers();

	header( 'Content-Type: text/plain' );
	header( 'Content-Disposition: attachment; filename="edd-system-info.txt"' );

	echo wp_strip_all_tags( $_POST['edd-sysinfo'] );
	// edd_die();
}

?>