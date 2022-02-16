<?php
if (!defined('ABSPATH'))
    exit; // Exit if accessed directly
/**
 * @author William Sergio Minozzi
 * @copyright 2021
 */

$wptools_help = '';
$wptools_help .= '<h4>';
$wptools_help .=  __("This plugin has currently more than 35 tools to help you to manage your WordPress site, included the dashboard with CPU/Disk/Memory usage charts and more info.", "wptools"); 


$wptools_help .= '<br>';
$wptools_help .= '<br>';
$wptools_help .=  '1) '.__("Show the PHP errors, limited to 200 last errors (to avoid freeze your browser). Just click Show PHP Erros voice at the menu", "wptools"); 

$wptools_help .= '<br>';
$wptools_help .= '2) '.  __("Increase the memory limit, time limit and max upload file size limit without editing any WordPress or PHP files. Just Click General Settings Tab", "wptools"); 

$wptools_help .= '<br>';
$wptools_help .= '3) '.  __("Show the PHPINFO (PHP info) with a lot of info about your PHP server configuration, also server IP.", "wptools"); 

$wptools_help .= '<br>';
$wptools_help .= '4) '.  __("Show Percentage Server Load (CPU Usage) Average for the last minute at top admin bar.", "wptools"); 

$wptools_help .= '<br>';
$wptools_help .= '5) '.  __("Disable WordPress Native Sitemap Automatic Creation (or only user's sitemap).", "wptools"); 


$wptools_help .= '<br>';
$wptools_help .= '6) '.  __("Disables the default notification email sent by a site after an automatic core, theme or plugin update.", "wptools"); 


$wptools_help .= '<br>';
$wptools_help .= '7) '.  __("Add Google Analytics GA Tracking ID (Univeral Analytics) on footer.", "wptools"); 

$wptools_help .= '<br>';
$wptools_help .= '8) '.  __("Add Google Search Central (formerly Google Webmasters) HTML TAG.","wptools"); 

$wptools_help .= '<br>';
$wptools_help .= '9) '.  __("Alert on Top Admin Bar if WordPress Debug is active.", "wptools"); 

$wptools_help .= '<br>';
$wptools_help .= '10) '.  __("Hide Admin Bar from non Administrators.", "wptools"); 

$wptools_help .= '<br>';
$wptools_help .= '11) '.  __("Deactivate Lazy Load functionality (added in WP version 5.5)", "wptools"); 

$wptools_help .= '<br>';
$wptools_help .= '12) '.  __("Deactivate Emojis functionality (support for emoji's in older browsers)", "wptools"); 


$wptools_help .= '<br>';
$wptools_help .= '13) '.  __("Page Load Info: Number of SQL queries per page and page load time.", "wptools"); 


$wptools_help .= '<br>';
$wptools_help .= '14) '.  __("Record and send emails notifications when PHP notices, warnings and errors happens.", "wptools"); 


$wptools_help .= '<br>';
$wptools_help .= '15) '.  __("Show and edit rebots.txt.", "wptools"); 


$wptools_help .= '<br>';
$wptools_help .= '16) '.  __("Show and test mySQL tables (name, status, size and last update).", "wptools"); 


$wptools_help .= '<br>';
$wptools_help .= '17) '.  __("Bypass WordPress debug (if WP_DEBUG = false) and show errors and warnings on screen. (Don't use in production!)", "wptools");



$wptools_help .= '<br>';
$wptools_help .= '18) '.  __("Show Cron Jobs table.", "wptools");



$wptools_help .= '<br>';
$wptools_help .= '19) '.  __("Show file .htaccess", "wptools");



$wptools_help .= '<br>';
$wptools_help .= '20) '.  __("Show file wp-config.php", "wptools");

$wptools_help .= '<br>';
$wptools_help .= '21) '.  __("Show Cookies", "wptools");

$wptools_help .= '<br>';
$wptools_help .= '22) '.__('Restores the previous ("classic") widgets settings screens and disables the block editor from managing widgets.', 'wptools');

$wptools_help .= '<br>';
$wptools_help .= '23) '.__('Disable the WP Admin Bar / Toolbar on the frontend of sites. (it does not affect the dashboard)', 'wptools');

$wptools_help .= '<br>';
$wptools_help .= '24) '.__('Button to Show Errors on Admin Bar (Also Javascript errors!)', 'wptools');

$wptools_help .= '<br>';
$wptools_help .= '25) '.__('Show File and Folders Permissions', 'wptools');


$wptools_help .= '<br>';
$wptools_help .= '26) '.__('Show JQuery and Migrate Versions (look Javascript and JQuery).', 'wptools');

$wptools_help .= '<br>';
$wptools_help .= '27) '.__('Erase readme.html and licence.txt files at root folder.', 'wptools');

$wptools_help .= '<br>';
$wptools_help .= '28) '.__('Show disk size, disk used, disk free and Top Bigger Folders.', 'wptools');

$wptools_help .= '<br>';
$wptools_help .= '29)'.__('Remove WP icon from admin toolbar (top left).', 'wptools');

$wptools_help .= '<br>';
$wptools_help .= '30) '.__('Replace WordPress logo at Login Page.', 'wptools');

$wptools_help .= '<br>';
$wptools_help .= '31) '.__('Server Benchmark (performance).', 'wptools');

$wptools_help .= '<br>';
$wptools_help .= '32) '.  __("Show the mySQL  (database info) with a lot of info about your mySQL server configuration.", "wptools"); 

$wptools_help .= '<br>';
$wptools_help .= '33) '.  __("Disable javascript console logs for non administrators.", "wptools"); 

$wptools_help .= '<br>';
$wptools_help .= '34) '.  __("Show and check file permissions (included wp-config.php).", "wptools"); 

$wptools_help .= '<br>';
$wptools_help .= '35) '.  __("Show and delete transients.", "wptools"); 

$wptools_help .= '<br>';
$wptools_help .= '36) '.  __("Enables the WordPress database tools to optimize and repair InnoDB and MyISAM database tables.", "wptools"); 

$wptools_help .= '<br>';
$wptools_help .= '37) '.  __("Disable Self PingBack.", "wptools"); 


$wptools_help .= '<br>';
$wptools_help .= '<br>';
$wptools_help .=   __("Go to other TABS and enable that you want.", "wptools"); 

$wptools_help .= '<br>';
$wptools_help .= '<br>';
$wptools_help .=   __("Check also the left menu for more tools (Dashboard => WP Tools).", "wptools"); 


$wptools_help .= '<br>';
$wptools_help .= '<br>';
$wptools_help .=  __("Visit our site for more details.", "wptools"); 
$wptools_help .= ' ';
$wptools_help .= '<a href="http://wptoolsplugin.com">Plugin Site</a>';
$wptools_help .= '<br>';

$wptools_help .= '<br>';

// $wptools_help .=  __("Remember to click Save Changes before to left each tab.", "wptools"); 


$wptools_help .=  __("That is all. Enjoy.", "wptools"); 

$wptools_help .= '<br>';
$wptools_help .= '<br>';

$wptools_help .= '</h4>'; ?>
