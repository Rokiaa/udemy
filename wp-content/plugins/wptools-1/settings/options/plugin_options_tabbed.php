<?php namespace wptoolsWPSettings;

$mypage = new Page('WP Tools', array('type' => 'menu'));
$settings = array();
require_once (WPTOOLSPATH. "guide/guide.php");

$wpmemory_memory = wptools_check_memory();
$wptools_server_ram = wptools_check_total_ram();

/*

// if(function_exists('ini_get')) {

	// $mem_limit= ini_get('memory_limit');
	$mem_limit = (int) ini_get('memory_limit');

	if ($mem_limit > 9999999)
	    $mem_limit  = ($mem_limit  / 1024) / 1024;	







	$wptools_memory_limit = (int) get_option('wptools_memory_limit', '0');


	if($wptools_memory_limit > $mem_limit)
	  $mem_limit = $wptools_memory_limit;

*/


	$time_limit= wptools_current_time_limit();



	// $upload_limit =	ini_get('upload_max_filesize');
	$upload_limit = wptools_current_upload_max_filesize();

	$upload_limit =  get_option('wptools_max_filesize', '');

	if($upload_limit < 1)
	$upload_limit = @ini_get('upload_max_filesize');
	 

$settings['Startup Guide']['Startup Guide'] = array('info' => $wptools_help );
$fields = array();   
$settings['Startup Guide']['Startup Guide']['fields'] = $fields;
$msg2 = '<big>';

$msg2 .= __('You can increase the memory limit, time limit and max upload filesize without editing any PHP or WordPress files. If your PHP init define a bigger amount, our plugin doesn\'t reduce it. Choose Select to don\'t change it.','wptools');


$msg2 .= '<br />';
$msg2 .= __('Then click SAVE CHANGES.', 'wptools');

$msg2 .= '<hr>';
$msg2 .= '<a href="http://wptoolsplugin.com/">Visit our site to learn more.</a>';
$msg2 .= '</big>'; 






$settings['General Settings'][__('Instructions', 'wptools')] = array('info' => $msg2);
$fields = array();


if(empty($wptools_checkversion)) {


$fields[] = array(
	'type' 	=> 'select',
	'name' 	=> 'wptools_memory_limit',
	'label' => __('Add Max Memory Limit','wptools').'<br />Currently: '.$wpmemory_memory['wp_limit'],
	'id' => 'rate_limiting', // (optional, will default to name)
	'value' => 'red', // (optional, will default to '')


	'select_options' => array(
		array('value'=>'', 'label' => __('Select', "wptools")),
		array('value'=>'128', 'label' => __('128 MB', "wptools")),
		array('value'=>'128', 'label' => __('Go Pro for More', "wptools")),
		)
	);

}
else{

	$fields[] = array(
		'type' 	=> 'select',
		'name' 	=> 'wptools_memory_limit',
		'label' => __('Add Max Memory Limit','wptools').'<br />Currently: '.$wpmemory_memory['wp_limit'],
		'id' => 'rate_limiting', // (optional, will default to name)
		'value' => 'red', // (optional, will default to '')
	
	
		'select_options' => array(
			array('value'=>'', 'label' => __('Select', "wptools")),
			array('value'=>'128', 'label' => __('128 MB', "wptools")),
			array('value'=>'256', 'label' => __('256 MB', "wptools")),
			array('value'=>'512', 'label' => __('512 MB', "wptools")),
			)
		);





}	

if(empty($wptools_checkversion)) {
	$fields[] = array(
		'type' 	=> 'select',
		'name' 	=> 'wptools_time_limit',
		'label' => __('Add Max Execution Time Limit','wptools').'<br />Currently: '.$time_limit,
		'id' => 'rate_limiting', // (optional, will default to name)
		'value' => 'red', // (optional, will default to '')
		'select_options' => array(
			array('value'=>'' ,'selected', 'label' => __('Select', "wptools")),
			array('value'=>'120', 'label' => __('120 Sec', "wptools")),
			array('value'=>'120', 'label' => __('Go Pro For More', "wptools")),
			)			
		);
}
else{
	$fields[] = array(
		'type' 	=> 'select',
		'name' 	=> 'wptools_time_limit',
		'label' => __('Add Max Execution Time Limit','wptools').'<br />Currently: '.$time_limit,
		'id' => 'rate_limiting', // (optional, will default to name)
		'value' => 'red', // (optional, will default to '')
		'select_options' => array(
			array('value'=>'' ,'selected', 'label' => __('Select', "wptools")),
			array('value'=>'120', 'label' => __('120 Sec', "wptools")),
			array('value'=>'180', 'label' => __('180 Sec', "wptools")),
			array('value'=>'240', 'label' => __('240 Sec', "wptools")),
			array('value'=>'300', 'label' => __('300 Sec', "wptools")),
			array('value'=>'360', 'label' => __('360 Sec', "wptools")),
			)			
		);
}

if(empty($wptools_checkversion)) {
		$fields[] = array(
			'type' 	=> 'select',
			'name' 	=> 'wptools_max_filesize',
			'label' => __('Add Max Upload File size Limit','wptools').'<br />Currently: '.$upload_limit,
			'id' => 'rate_limiting', // (optional, will default to name)
			'value' => 'red', // (optional, will default to '')
			'select_options' => array(
				array('value'=>'', 'label' => __('Select', "wptools")),
				array('value'=>'16', 'label' => __('16 MB', "wptools")),
				array('value'=>'16', 'label' => __('Go Pro For More', "wptools")),
				)			
			);
		}
		else{

			$fields[] = array(
				'type' 	=> 'select',
				'name' 	=> 'wptools_max_filesize',
				'label' => __('Add Max Upload File size Limit','wptools').'<br />Currently: '.$upload_limit,
				'id' => 'rate_limiting', // (optional, will default to name)
				'value' => 'red', // (optional, will default to '')
				'select_options' => array(
					array('value'=>'', 'label' => __('Select', "wptools")),
					array('value'=>'16', 'label' => __('16 MB', "wptools")),
					array('value'=>'32', 'label' => __('32 MB', "wptools")),
					array('value'=>'64', 'label' => __('64 MB', "wptools")),
					array('value'=>'128', 'label' => __('128 MB', "wptools")),
					array('value'=>'256', 'label' => __('256 MB', "wptools")),
					array('value'=>'512', 'label' => __('512 MB', "wptools")),
					array('value'=>'1024', 'label' => __('1 GB', "wptools")),
					)			
				);






		}
			

			// Add upload Maximum FileSize


			$fields[] = array(
				'type' 	=> 'radio',
				'name' 	=> 'wptools_disable_sitemap',
				'label' => __("Disable WordPress Native Sitemap Automatic Creation.", "wptools"),
				'radio_options' => array(
					array('value' => 'Yes', 'label' => __('Yes, disable all', "wptools")),
					array('value' => 'users', 'label' => __('Disable Only Users Sitemap', "wptools")),
					array('value' => 'No', 'label' => __('No', "wptools")),
				)
			);

			/*
			$fields[] = array(
				'type' 	=> 'radio',
				'name' 	=> 'wptools_disable_gutenberg',
				'label' => __("Disable Gutenberg Block Editor and restore the Classic Editor.", "wptools"),
				'radio_options' => array(
					array('value' => 'Yes', 'label' => __('Yes, disable', "wptools")),
					array('value' => 'No', 'label' => __('No', "wptools")),
				)
			);
			*/

			$fields[] = array(
				'type' 	=> 'radio',
				'name' 	=> 'wptools_disable_updates_notifications',
				'label' => __("Disables the default notification email sent by a site after an automatic core, theme or plugin update.", "wptools"),
				'radio_options' => array(
					array('value' => 'Yes', 'label' => __('Yes, disable', "wptools")),
					array('value' => 'No', 'label' => __('No', "wptools")),
				)
			);
// ----


// - analytics
// debug
// hide Bar
// Goggle Webmaster verification code in Settings
// - Google Search Central, formerly Google Webmasters,(HTML TAG)
//- <meta name="google-site-verification" content="tE-E7o24phnmiUJuMGWrE_14ZTdAYj0lKQLSAKkP0TQ" />

$fields[] = array(
	'type' 	=> 'textarea',
	'name' 	=> 'wptools_add_google_webmaster',
	'label' => 'Please paste only the value in the contents = "YOUR_UNIQUE_ID" 
	 of the supplied meta tag. For example, '.htmlentities("<").'meta name="google-site-verification" contents="YOUR_UNIQUE_ID" /'
	 .htmlentities(">").'.'

	);


$fields[] = array(
	'type' 	=> 'text',
	'name' 	=> 'wptools_add_analitics',
	'label' => __("Add Google Analytics GA Tracking ID.", "wptools").'<br>'.
     __("(format: XX-XXXXXXXX-X)", "wptools").'<br>'.
	 __("(or format: G-XXXXXXXXXX)", "wptools")

	
);


$fields[] = array(
	'type' 	=> 'radio',
	'name' 	=> 'wptools_alert_debug',
	'label' => __("Alert on Top Admin Bar if WordPress Debug is active.", "wptools"),
	'radio_options' => array(
		array('value' => 'yes', 'label' => __('Yes', "wptools")),
		array('value' => 'no', 'label' => __('No', "wptools")),
	)
);


$fields[] = array(
	'type' 	=> 'radio',
	'name' 	=> 'wptools_hide_admin_bar',
	'label' => __("Hide Admin Bar from non Administrators.", "wptools"),
	'radio_options' => array(
		array('value' => 'yes', 'label' => __('Yes', "wptools")),
		array('value' => 'no', 'label' => __('No', "wptools")),
	)
);

$fields[] = array(
	'type' 	=> 'radio',
	'name' 	=> 'wptools_disable_lazy',
	'label' => __("Deactivate Lazy Load functionality (added in WP version 5.5).", "wptools"),
	'radio_options' => array(
		array('value' => 'yes', 'label' => __('Yes', "wptools")),
		array('value' => 'no', 'label' => __('No', "wptools")),
	)
);


$fields[] = array(
	'type' 	=> 'radio',
	'name' 	=> 'wptools_disable_emojis',
	'label' => __("Deactivate Emojis functionality (support for emoji's in older browsers)?", "wptools"),
	'radio_options' => array(
		array('value' => 'yes', 'label' => __('Yes', "wptools")),
		array('value' => 'no', 'label' => __('No', "wptools")),
	)
);


$fields[] = array(
	'type' 	=> 'radio',
	'name' 	=> 'wptools_show_pageload_info',
	'label' => __("Show Page Load Info at footer this page?", "wptools"),
	'radio_options' => array(
		array('value' => 'yes', 'label' => __('Yes', "wptools")),
		array('value' => 'no', 'label' => __('No', "wptools")),
	)
);

$fields[] = array(
	'type' 	=> 'radio',
	'name' 	=> 'wptools_bypass_wpdebug',
	'label' => __("Bypass WordPress debug (if WP_DEBUG = false) and show errors and warnings on screen? (Don't use in production)", "wptools"),
	'radio_options' => array(
		array('value' => 'yes', 'label' => __('Yes', "wptools")),
		array('value' => 'no', 'label' => __('No', "wptools")),
	)
);

$fields[] = array(
	'type' 	=> 'radio',
	'name' 	=> 'wptools_show_adminbar',
	'label' => __('Disables the Admin Bar from the frontend only? (it does not affect the dashboard)', "wptools"),
	'radio_options' => array(
		array('value' => 'yes', 'label' => __('Yes', "wptools")),
		array('value' => 'no', 'label' => __('No', "wptools")),
	)
);



$fields[] = array(
	'type' 	=> 'radio',
	'name' 	=> 'wptools_classic_widget',
	'label' => __('Restores the previous ("classic") WordPress widgets settings screens?', "wptools"),
	'radio_options' => array(
		array('value' => 'yes', 'label' => __('Yes', "wptools")),
		array('value' => 'no', 'label' => __('No', "wptools")),
	)
);

$fields[] = array(
	'type' 	=> 'radio',
	'name' 	=> 'wptools_show_errors',
	'label' => __('Show Errors Button (also Javascript errors) on Admin Toolbar?', "wptools"),
	'radio_options' => array(
		array('value' => 'yes', 'label' => __('Yes', "wptools")),
		array('value' => 'no', 'label' => __('No', "wptools")),
	)
);




$fields[] = array(
	'type' 	=> 'text',
	'name' 	=> 'wptools_logo',
	'label' => __("Replace WordPress logo at login form. Just paste a URL of the new logo.", "wptools")
	
);

$fields[] = array(
	'type' 	=> 'text',
	'name' 	=> 'wptools_logo_width',
	'label' => __("Logo Width in pixels.", "wptools")
	
);

$fields[] = array(
	'type' 	=> 'text',
	'name' 	=> 'wptools_logo_height',
	'label' => __("Logo Height in pixels.", "wptools")
	
);


$fields[] = array(
	'type' 	=> 'radio',
	'name' 	=> 'wptools_erase_readme',
	'label' => __('Erase WP readme and license file of root folder?', "wptools"),
	'radio_options' => array(
		array('value' => 'yes', 'label' => __('Yes', "wptools")),
		array('value' => 'no', 'label' => __('No', "wptools")),
	)
);



$fields[] = array(
	'type' 	=> 'radio',
	'name' 	=> 'wptools_remove_icon',
	'label' => __('Remove WP icon on top left position of admin bar?', "wptools"),
	'radio_options' => array(
		array('value' => 'yes', 'label' => __('Yes', "wptools")),
		array('value' => 'no', 'label' => __('No', "wptools")),
	)
);

$fields[] = array(
	'type' 	=> 'radio',
	'name' 	=> 'wptools_disable_console',
	'label' => __('Disable javascript console log for non administrators.', "wptools"),
	'radio_options' => array(
		array('value' => 'yes', 'label' => __('Yes', "wptools")),
		array('value' => 'no', 'label' => __('No', "wptools")),
	)
);

$fields[] = array(
	'type' 	=> 'radio',
	'name' 	=> 'wptools_disable_self_pingbacks',
	'label' => __('Disable Pingbacks to Your own Site (Self Pingback).', "wptools"),
	'radio_options' => array(
		array('value' => 'yes', 'label' => __('Yes', "wptools")),
		array('value' => 'no', 'label' => __('No', "wptools")),
	)
);


$settings['General Settings']['']['fields'] = $fields; 


  
// It contains three values, first one is the load average for last 15 minutes, second one is for 5 minutes, third one is for last 1 minute.

$msg2 = '<br />'; 

try {
	if (!is_readable('/proc/stat')) {
       $msg2 .= "Plugin requirement: &nbsp; /proc/stat doesn't readable. Talk with your hosting and request to enable it.";
	   $msg2 .= '<br />'; 
	}
}
catch(Exception $e) {
		$msg2 .= "Plugin requirement: &nbsp; /proc/stat doesn't readable. Talk with your hosting and request to enable it.";
		$msg2 .= '<br />'; 
} 



//
$msg2 .= '<br />'; 
$msg2 .= '<b>'.__('Show Server Load Average (CPU Usage) for the last minute at top admin bar.','wptools').'</b>';
$msg2 .= '<br />'; 
$msg2 .= __('Use this option only in Linux Servers.','wptools');
$msg2 .= '<br />'; 
$msg2 .= __('This information is refreshed each 5 seconds.','wptools');
$msg2 .= '<br />'; 
$msg2 .= __('If you can see always 0 (zero) or wait is because we are unable to get this info from your server. Server requirements:','wptools');
$msg2 .= '<br />'; 
$msg2 .= __('shell_exec enabled on your PHP (ask for your hosting to enable it if necessary.','wptools');
$msg2 .= '<br />'; 
$msg2 .= __('Server Files Readable: /proc/cpuinfo and /proc/stat.','wptools');
$msg2 .= '<br />'; 
$msg2 .= '<br />'; 
$msg2 .= __('Lower numbers are better.','wptools').' ';
$msg2 .= __('Higher numbers represent a problem or an overloaded machine.','wptools');
$msg2 .= '<br />';

$msg2 .= '<br />';

$settings['Processor Load'][__('Instructions')] = array('info' => $msg2);


$msg2 = '<b>'.__('Show Disk Usage.','wptools').'</b>';
$msg2 .= '<br />'; 
$msg2 .= __('Use this option only in Linux Servers.','wptools');
$msg2 .= '<br />'; 
$msg2 .= __('We use the PHP function disk_total_space(). Talk with your hosting if doesn\'t work.','wptools');

$msg2 .= '<br />';
$msg2 .= '<br />';

if (function_exists('disk_total_space' ) and  function_exists('disk_free_space' ) ){

	global $wptools_request_url;
	

	$pos = stripos($wptools_request_url, 'tab=disk_usage');
    if($pos !== false) {


		try {

			$disk_total = round(((disk_total_space('/')/1024)/1024)/1024 ,1); //convert bytes to GB with 1 decimal place.
			$disk_free  = round(((disk_free_space ('/')/1024)/1024)/1024 ,1);
			$disk_used = round($disk_total-$disk_free, 1);

			$msg2 .= __('Disk Total: ','wptools').$disk_total.'G';
			$msg2 .= '<br />';
			$msg2 .= __('Disk Used: ','wptools').$disk_used.'G';
			$msg2 .= '<br />';
			$msg2 .= __('Disk Free: ','wptools').$disk_free.'G';

			


		}
		catch(Exception $e) {
		   $msg2 = $e->getMessage();
		  } 
	}
}
else{
	$msg2 = '<b>'. __('We need to use the PHP functions disk_total_space() and disk_free_space(). Talk with your hosting to enable them.','wptools').'</b>';
}

$path = ABSPATH;

function getDirectorySize($path) {
    try {
			$objects = new \DirectoryIterator($path);
			$size = 0;
			foreach ( $objects as $object ) {
				if ( $object->isFile() ) {
					$size += $object->getSize();
				}
			}
		}
	catch(Exception $e) {
			     $size = 0;
	}
	return $size;
}

$objects = new \RecursiveIteratorIterator(
	new \RecursiveDirectoryIterator($path, \RecursiveDirectoryIterator::SKIP_DOTS),
	\RecursiveIteratorIterator::SELF_FIRST,
	\RecursiveIteratorIterator::CATCH_GET_CHILD
);

$dirlist = [];
foreach ( $objects as $name => $object ) {
	if ( $object->isDir() ) {
		$dirlist[$object->getPathName()] = getDirectorySize($object->getPathName());
	}
}

arsort($dirlist);
ob_start();
if(!empty($wptools_checkversion))
$wptools_top = 100;
else
 $wptools_top = 5;
?>
<h3>Top <?php echo esc_attr($wptools_top);?> Bigger Folders</h3>
<?php
if(empty($wptools_checkversion))
 echo '<h2>(100 Folders in Premium Version)</h2>';
?>

<table class="wptools_admin_table">
<thead>
<tr>
  <td>Path</td>
  <td class="text-right">Size</td>
</tr>
</thead>
  <?php 
  $ctd = 0;

  foreach ( $dirlist as $dir => $size ) { 
	  $ctd++;
	  if($ctd > $wptools_top)
          break;
?>
	<tr>
	  <td class="text-monospace"><?php echo esc_attr($dir) ?></td>
	  <td class="text-right small text-nowrap"><?php echo esc_attr(number_format($size / 1024, 0, ',', '.')); ?> KB</td>
	</tr>
  <?php } ?>
</table>

<?php
$msg2 .= ob_get_contents();
ob_end_clean();

$settings['Disk Usage'][__('Instructions')] = array('info' => $msg2);




$fields = array();

$fields[] = array(
	'type' 	=> 'radio',
	'name' 	=> 'wptools_radio_server_load',
	'label' => __('Enable to show Server Percentage Load at Top Admin Bar?','wptools'),
	'radio_options' => array(
		array('value'=>'yes', 'label' => __('yes', "wptools")),
		array('value'=>'no', 'label' => __('no', "wptools"))
		)			
);

$settings['Processor Load']['']['fields'] = $fields;


//  Total Php Server Memory: 2147483648MB

// $wpmemory_memory = wptools_check_memory();

ob_start();

try{

	$mb = ' MB';
	echo '<hr>';
	echo '<b>';
	echo 'WordPress Memory Limit (*): ' . esc_attr($wpmemory_memory['wp_limit']) . esc_attr($mb) .
		'&nbsp;&nbsp;&nbsp;  |&nbsp;&nbsp;&nbsp;';
	$perc = $wpmemory_memory['usage'] / $wpmemory_memory['wp_limit'];
	if ($perc > .7)
		echo '<span style="color:' . esc_attr($wpmemory_memory['color']) . ';">';
	echo 'Your usage now: ' . esc_attr($wpmemory_memory['usage']) .
		' MB &nbsp;&nbsp;&nbsp;';
	if ($perc > .7)
		echo '</span>';
	echo '|&nbsp;&nbsp;&nbsp;   Total Php Server Memory: ' . esc_attr($wpmemory_memory['limit']) .
		' MB&nbsp;&nbsp;&nbsp;';

	if($wptools_server_ram > 0) {
	echo '|&nbsp;&nbsp;&nbsp;Total Hardware Memory: ';
	echo esc_attr(wptools_format_filesize_kB($wptools_server_ram));
	}

	// echo $wptools_server_ram;
	echo '</b>';
	echo '</center>';
	echo '<hr>';
	echo '<br />';
	echo '(*) You can use our free plugin ';
	echo '<a href="https://wordpress.org/plugins/wp-memory/">wp-memory</a>';
	echo ' to increase and fix it if necessary. ';
	echo '<a href="http://wpmemory.com/php-memory-limit/">Click here to learn more.</a>';

}
catch(Exception $e) {
	// echo 'Message: ' .$e->getMessage();
}


$msg2 = ob_get_contents();
ob_end_clean ( );

$settings['Memory Usage'][__('Information')] = array('info' => $msg2);

$ip_server = $_SERVER['SERVER_ADDR'];

if (filter_var($ip_server, FILTER_VALIDATE_IP)) {

	$msg2 = '<br />'; 
	$msg2 .= '<b>'.__('Your Server IP Address:').'&nbsp;&nbsp;'.$ip_server.'</b>';
	$msg2 .= '<br />';
} else {
	$msg2 = '<br />'; 
	$msg2 .= '<b>'.__('Unable to get your server Ip. Probably blocked by your hosting company.').'</b>';
	$msg2 .= '<br />';
}

/*
$settings['Server IP'][__('Information')] = array('info' => $msg2);

$ip_server = $_SERVER['SERVER_ADDR'];

if (filter_var($ip_server, FILTER_VALIDATE_IP)) {

	$msg2 = '<br />'; 
	$msg2 .= '<b>'.__('Your Server IP Address:').'&nbsp;&nbsp;'.$ip_server.'</b>';
	$msg2 .= '<br />';

} else {
	$msg2 = '<br />'; 
	$msg2 .= '<b>'.__('Unable to get your server Ip. Probably blocked by your hosting company.').'</b>';
	$msg2 .= '<br />';
}
$settings['Server IP'][__('Information')] = array('info' => $msg2);
*/
$msg2 = '<br />'; 
$msg2 .= '<b>'.__('WordPress will send email only when errors happens.','wptools').'</b>';
$msg2 .= '<br />'; 
$msg2 .= '<b>'.__('Do you want receive email alerts when notices/warnings and errors happens? ','wptools').'</b>';

$msg2 .= '<br />'; 
$msg2 .= '<b>'.__('Left Blank to use your default Wordpress email.Then, click save changes.','wptools');
$msg2 .= '<br />';

$msg2 .= '<br />';

$settings['Notifications'][__('Instructions', 'wptools')] = array('info' => $msg2);

$fields = array();
$fields[] = array(
	'type' 	=> 'text',
	'name' 	=> 'wptools_email_to',
	'label' => 'email'
);

$fields[] = array(
	'type' 	=> 'radio',
	'name' 	=> 'wptools_radio_email_error_notification',
	'label' => __('Send email notification when notices/warnings or erros occurs?','wptools'),
	'radio_options' => array(
		array('value'=>'yes', 'label' => __('yes', "wptools")),
		array('value'=>'no', 'label' => __('no', "wptools"))
		)			
);

$settings['Notifications']['']['fields'] = $fields;

$fields = array();

if(is_multisite()){

	$url = esc_url(WPTOOLSHOMEURL)."plugin-install.php?s=sminozzi&tab=search&type=author";

	$msg = '<script>';
	$msg .= 'window.location.replace("'.$url.'");';
	$msg .= '</script>';
}
else {
	$msg =  '<script>';

	$msg .= 'window.location.replace("'.esc_url(WPTOOLSHOMEURL).'/admin.php?page=wptools_options39");';
	// $msg .= 'window.location.replace("'.esc_url(STOPBADBOTSHOMEURL).'plugin-install.php?s=sminozzi&tab=search&type=author");';
	$msg .= '</script>';
}



$settings['More Useful Tools'][__('More Useful Tools','wptools')] = array('info' => $msg);





	/*
$settings['Stop Bad Bots Tools']['Stop Bad Bots Tools'] = array('info' => $msg );
$fields = array();
$settings['Stop Bad Bots Tools']['Stop Bad Bots Tools']['fields'] = $fields;
*/


$fields = array();   
//$settings['Memory Checkup'][__('Memory Checkup')]['fields'] = $fields;
//
$gopro = '<span style="font-size: 24pt; color: #CC3300;">Premium Features</span>';
$gopro .= '<span style="font-size: 14pt; color: #000000;">';
$gopro .= '<br />';
$gopro .= '<font size="14pt">';

$gopro .= __('Visit our Premium Page for more details.', 'wptools');
$gopro .= '<br />';
$gopro .= '<a href="http://wptoolsplugin.com/premium" class="button button-primary">'.__("Premium Page","wptools").'</a>';
$gopro .= '<br />';
$gopro .= '<br />';
$gopro .=  __('Paste below the Item Purchase Code received by email from us when you bought the premium version.', 'wptools');
$gopro .= '<br />';
$gopro .=  __("You don't need reinstall the plugin.", "wptools");
$gopro .=  '  '.__("After that, click SAVE CHANGES Button.", "wptools");
// Form
$settings['Go Pro']['Go Pro'] = array('info' => $gopro );

// $fields = array();
$fields[] = array(
	'type' 	=> 'text',
	'name' 	=> 'wptools_checkversion',
	'label' => 'Purchase Code:',
	);   
$settings['Go Pro']['Go Pro']['fields'] = $fields;



new OptionPageBuilderTabbed($mypage, $settings);
function wptools_findip2()
{
    $wptools_ip = '';
		$headers = array(
            'HTTP_CLIENT_IP',        // Bill
            'HTTP_X_REAL_IP',        // Bill
            'HTTP_X_FORWARDED',      // Bill
            'HTTP_FORWARDED_FOR',    // Bill 
            'HTTP_FORWARDED',        // Bill
            'HTTP_X_CLUSTER_CLIENT_IP', //Bill
			'HTTP_CF_CONNECTING_IP', // CloudFlare
			'HTTP_X_FORWARDED_FOR',  // Squid and most other forward and reverse proxies
			'REMOTE_ADDR',           // Default source of remote IP
		);
		for ( $x = 0; $x < 8; $x++ ) {
			foreach ( $headers as $header ) {
               if( !isset($_SERVER[$header]))
                   continue;
				$ip = trim( sanitize_text_field($_SERVER[$header]) );
				if ( empty( $ip ) ) {
					continue;
				}
				if ( false !== ( $comma_index = strpos( $_SERVER[$header], ',' ) ) ) {
					$ip = substr( $ip, 0, $comma_index );
				}
    			// First run through. Only accept an IP not in the reserved or private range.
				if($ip == '127.0.0.1')
                       {
                        $ip='';
                         continue;
                       }
				if ( 0 === $x ) {
					$ip = filter_var( $ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_RES_RANGE | FILTER_FLAG_NO_PRIV_RANGE );
				} else {
					$ip = filter_var( $ip, FILTER_VALIDATE_IP );
				}
				if ( ! empty( $ip ) ) {
					break;
				}
			}
			if ( ! empty( $ip ) ) {
				break;
			}
		}
    if (!empty($ip))
        return $ip;
    else
        return 'unknow';
}
function wptools_validate_ip2($wptools_ip)
{
    if (filter_var($wptools_ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4 | FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) === false) {
        return false;
    }
    return true;
}

 function wptools_check_total_ram()
{
	try {
		if (wptools_isShellEnabled()) {
			$total_ram = shell_exec("grep -w 'MemTotal' /proc/meminfo | grep -o -E '[0-9]+'");
		} else {
			$total_ram = '0';
		}

    	return trim($total_ram);

    }
	catch(Exception $e) {
		// echo 'Message: ' .$e->getMessage();
		return '0';
	}
}

function wptools_isShellEnabled()
{
	try {
		if (function_exists('shell_exec') && !in_array('shell_exec', array_map('trim', explode(', ', ini_get('disable_functions'))))) {
			$returnVal = shell_exec('cat /proc/cpuinfo');
			if (!empty($returnVal)) {
				return true;
			} else {
				return false;
			}
		} else {
			return false;
		}
    }
	catch(Exception $e) {
		// echo 'Message: ' .$e->getMessage();
		return false;
	}

}