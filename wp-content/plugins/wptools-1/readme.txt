=== WP Tools (+35) Increase Limits, Repair, Server PHP Info, Javascript errors, Permissions, Transients. ==
Contributors: sminozzi
Tags: increase file size limit, increase max upload limit, Disk Usage, disable emojis, Server Check Load, Server Info, check mySQL tables, WPTOOLS, repair database, javascript errors, jquery migrate, error log, error_log, PHP Info 
Requires at least: 5.2
Tested up to: 5.9
Stable tag: 3.12
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

+35 Tools Swiss Army Knife, Increase PHP memory limit, Max upload file size limit, Max Execution Time no edit files, Show PHP errors, Server Stats, Server Load, PHP Info and more... 

== Description ==
> WP Tools plugin has a dashboard with server stats and more than 35 tools to help you to manage your WordPress. Included Disk Usage and Top Bigger Folders. It is a Swiss army knife.
Catch and alert about Javascript Errors (and also PHP/MYSQL errors). Block notification email, Hide Admin Bar, Disable Lazy Load and a lot more...

The Dashboard Server Stats will show Disk, Memory and Processor usage charts and more information about Operating system, Uptime age, 
Processor, Server Ip and so on.

* Tool 1) Increase the PHP memory limit, Increase Maximum Execution Time limit and Increase maximum upload file size limit without editing any WordPress or PHP files.
* Tool 2) Show the PHP errors (error_log or error reporting), limited to 200 last errors (to avoid freeze your browser).
* Tool 3) Show the PHPINFO (PHP info and PHP Version) with a lot of info about your PHP server configuration, also server IP.
* Tool 4) Disable WordPress Native Sitemap Automatic Creation or only user's sitemap.
* Tool 5) Disables the default notification email sent by a site after an automatic core, theme or plugin update.
* Tool 6) Add Google Search Central (formerly Google Webmasters) HTML TAG.
* Tool 7) Add Google Analytics GA Tracking ID.
* Tool 8) Alert on Top Admin Bar if WordPress Debug is active  (debug info).
* Tool 9) Hide Admin Bar from non Administrators.
* Tool 10) Deactivate (disable) Lazy Load functionality (added in WP version 5.5)
* Tool 11) Deactivate (disable) Emojis functionality (support for emoji's in older browsers).
* Tool 12) Page Load Info: Number of SQL queries per page and page load time.
* Tool 13) Record and send emails notifications when PHP notices, warnings and errors (ALSO JAVASCRIPT ! )happens.
* Tool 14) Show and edit the file rebots.txt.
* Tool 15) Show and check mySQL tables (name, status size and last update) and database and mySQL details (Maria or MySQL version).
* Tool 16) Bypass WordPress debug (if WP_DEBUG = false) and show errors and warnings on screen (optional). 
* Tool 17) Show Cron Jobs table and delete Cron Jobs without functionality (Obsolete Cron Jobs).
* Tool 18) Show file .htaccess
* Tool 19) Show file wp-config.php
* Tool 20) Show Cookies
* Tool 21) Restores the previous classic widgets settings UI screens and disables the gutenberg block editor from managing widgets. In Appearance -> Widgets and the Customizer.
* Tool 22) Disable the WP Admin Bar / Toolbar on the frontend of sites. (it does not affect the dashboard)
* Tool 23) Show Button with Errors (also javascript errors!) on Admin Toolbar
* Tool 24) Show Files and Folders Permissions 
* Tool 25) Show Table only with Javascript errors and Jaquery Version (also Jquery Migrate Version).
* Tool 26) Replace WordPress logo at login screen.
* Tool 27) Remove WordPress icon from the admin bar.
* Tool 28) Erase readme.html and license.txt files at root folder.
* Tool 29) Show disk total space, disk used and disk free. 
* Tool 30) Show Server Benchmark (show server performance).
* Tool 31) Show data base information (software installed, version, Max connections allowed, uptime etc.).
* Tool 32) Disable javascript console log for non administrators.
* Tool 33) Show and check file permissions (included wp-config.php)
* Tool 34) Show Server Load Average percentage for the last minute at top admin bar. (Enable this option only in Linux Servers.)
* Tool 35) Enables the WordPress database tools to optimize and repair InnoDB and MyISAM database tables
* Tool 36) Show and delete Transients. Transient clear.
* Tool 37) Disable Self PingBack.

With the tool 34, now you can monitor your server load (CPU Usage), in real time, from your wordpress admin panel.

**Requirements for use (Tool 34) Show Server Load Tool and Dashboard**

* Linux Server (not Windows server)
* shell_exec enabled on your PHP (ask for your hosting to enable it if necessary)
* Server Files Readable: /proc/cpuinfo and /proc/stat
* php functions enabled: sys_getloadavg(), disk_total_space(), disk_free_space()


If your site is behaving slowly, or pages fail to load, you get random white screens of death or 500 internal server error you may need more memory. Several things consume memory, such as WordPress itself, the plugins installed, the theme you're using and the site content. 

After you increase the PHP memory limit, you can increase also the WordPress memory limit, add this info to your file wp-config.php (located at root folder of your server):
(just copy and paste)
define('WP_MEMORY_LIMIT', '128M'); 

(You can replace also 128M with 256M, if necessary)
Our free plugin wp-memory (link below) can do it for you just with your mouse.

<a href="http://wptoolsplugin.com">Learn more at Plugin Site</a>

<a href="http://billminozzi.com/dove/">Support Site</a>

== Screenshots ==
1. Dashboard
2. Show Error Log
3. Settings and Info

== PHP INFO DETAILS ==

On PHP INFO page, you can get, for example:

* PHP Version
* Operating System details
* PHP.INI path (Configuration File (php.ini) Path )
* Log Errors on or off
* FTP (FTP Support)   
* GD 
* MySql and MySqli version
* Session 
* Soap 
* XML 
* ZIP 
* ZLIB 
* Timezone
* Cookies
* Modules
* PHP Variables 
* Post Max Size (Post Max Size, Post Maximum Size)
* max_execution_time (max execution time, (maximum execution time exceeded))
* max_file_uploads	(max file uploads, maximum file uploads)
* max_input_nesting_level (max input nesting level) 	
* max_input_time (max input time, maximum input time)	
* max_input_vars (max input vars, maximum input vars)	
* memory_limit (Memory Limit)
* smtp_port (smtp port)
* A lot more ...

== mySQL info ==
On database details page, you can get, for example:

* MySQL (or Maria Database) version
* Database size (Database Usage)
* Index size (Index Disk Usage)
* max_allowed_packet (max allowed packet, maximum allowed packet)
* default_storage_engine (default storage engine)
* max_connections (max_connections, maximum connections)
* max_user_connections (max user connections, maximum user connections)
* thread_cache_size (thread cache size)
* query_cache_type (query cache type)
* query_cache_size (query cache size)
* sort_buffer_size (sort buffer size)
* read_buffer_size (read buffer size)
* port (mysql Port)
* tmp_table_size  (tmp table size)
* read_rnd_buffer_size (read rnd buffer size)
* join_buffer_size (join buffer size)
* table_definition_cache (table definition cache)
* table_open_cache (table open cache)
* character_set_system (character set system)
* default_storage_engine (default storage engine)
* A lot more ...


Free plugins from the same author:
<ul>
<li><a href="https://wordpress.org/plugins/wp-memory/" target="_self">WordPress Memory Management</a></li>
<li><a href="https://wordpress.org/plugins/antihacker/">Anti Hacker and Security</a> </li>
<li><a href="https://wordpress.org/plugins/stopbadbots/">Stop Bad Bots</a>  </li>
</ul> 


== Important info about restore classic widgets tool ==
If you start using the new block-based widgets system, you will lose all of your widget blocks upon activating this feature on our plugin. 
There is no going back, so be sure this is what you want. The former blocks will not reappear if you change your mind and deactivate our feature on this plugin.

== Multisite ==
This plugin was not tested with Multisite. 

== Installation ==


1) Install via wordpress.org

2) Activate the plugin through the 'Plugins' menu in WordPress

or

Extract the zip file and just drop the contents in the wp-content/plugins/ directory of your WordPress installation and then activate the Plugin from Plugins page.


== Frequently Asked Questions ==

How to Install?

1) Install via wordpress.org

2) Activate the plugin through the 'Plugins' menu in WordPress

or

Extract the zip file and just drop the contents in the wp-content/plugins/ directory of your WordPress installation and then activate the Plugin from Plugins page.


== TAGS ==
* Catch and alert about Javascript Errors (and also PHP/MYSQL errors).
* Increase the PHP memory limit
* Increase the time limit (Can Fix Fatal Error: Maximum Execution Time Exceeded in WordPress)
* Increase Max Execution Time
* Increase the max upload file size limit 
* Without editing any WordPress or PHP files
* Show the PHP errors (error_log)
* Show the PHPINFO (PHP info) and PHP Version
* Info about your PHP server configuration
* Disable WordPress Native Sitemap Automatic Creation
* Disables the default notification email
* Automatic core, theme or plugin update.
* Add Google Search Central (formerly Google Webmasters) HTML TAG
* Add Google Analytics GA Tracking ID
* Alert if WordPress Debug is active
* Hide Admin Bar from non Administrators
* Show Server Load Average percentage
* Disable Lazy Load functionality (added in WP version 5.5)
* Disable Emojis functionality (support for emoji's in older browsers)
* Page Load Info: Number of SQL queries per page and page load time.
* Receive email notifications about warning and notices, usually not sent by WordPress.
* Record and receive email alerts when PHP notices, warnings and errors happens. 
* rebots.txt editor.
* Show and check mySQL tables (name, status, size and last update).
* Bypass WordPress debug (if WP_DEBUG = false) and show errors and warnings on screen (optional). 
* Show Cron Jobs table and remove Cron Jobs without functionality (Obsolete Cron Jobs). Clean Cron Jobs. Cron Job Cleaner.
* Show file .htaccess
* Show file wp-config.php
* Show all Cookies
* Restores the previous WordPress widgets settings screens and disables the block editor from managing widgets
* Disables the block editor from managing widgets in the Gutenberg plugin
* Classic widgets screen
* Old widgets screen
* Remove Gutenberg from the Widgets screen
* Removes block support from the default post types 
* Classic UI Widgets
* How activate old widgets customizer instead of Gutenberg  widget 
* Disable the WP Admin Bar / Toolbar on the frontpage of sites
* Show Files and Folders Permissions 
* Server Stats
* jQuery Migrate remotion
* Logo customization: Replace WordPress logo at login screen
* Clean the admin bar: Remove WordPress icon from the admin bar
* Erase readme.html and license.txt files at root folder
* Disk utiization: Show disk total space, disk used and disk free
* Check Server Benchmark (check server performance).
* Check Hosting Benchmark (check hosting performance).
* Dashboard Server Stats 
* Disk, Memory and Processor usage charts 
* Operating system, Uptime age, Server Processor, Server Ip and more...
* Shows the database software installed on your site e.g. MySQL, MariaDB, Oracle etc.
* Shows the database version number
* Shows maximum number of connections allowed to your database
* Shows maximum packet size of your database
* Shows database disk usage
* Shows database index disk usage
* Show Server Load Average percentage for the last minute at top admin bar. (Enable this option only in Linux Servers.)
* Show and check file permissions (included wp-config.php)
* Show and delete transients from WordPress wp_options table. 
* Optimize database tables and repair database tables (fix database tables)
* Database tables Optimize and database tables repair (fix database tables)
* Database check, tables check, database analyse, table analyse
* php max input vars
* php max input vars wordpress
* max_input_vars wordpress
* increase the wordpress php max input vars
* max input vars php ini
* max input vars
* php max input vars htaccess
* classic widget plugin
* php value max input vars
* php max input vars:
* max input vars htaccess
* php max post size
* increasing max input vars limit
* max input vars php
* wp limit memory
* free cron jobs
* free cron job
* wordpress memory limit plugin
* wordpress max_input_vars
* remove wordpress logo from admin bar
* php max post vars
* php max input vars wp-config
* max input vars wordpress
* benchmark wordpress
* console log php wordpress
* max input vars php.ini
* php max_input_vars wordpress
* wordpress server load
* max_input_vars php
* how to increase max_input_vars
* how to increase max_input_vars in wordpress
* wordpress 5.8 old widgets
* log block plugin
* classic widget wordpress
* block logging plugin
* php max variable size
* max_input_vars default
* php max input variables wordpress
* wordpress classic widget
* increase max input vars wordpress
* wordpress php max input vars
* php max_post_size
* max_input_vars max value
* php set max_input_vars
* max input vars:
* old widget wordpress
* increasing max input vars limit.
* max post size php
* php change max_input_vars
* change php max input vars
* increase php memory limit wordpress plugin
* max post size
* max_input_vars increase
* inurl:wp-config.php
* Javascript
* Javacript Errors
* Jquery
* Jquery Migrate

== Posts From Our Blog ==

<a href="https://wptoolsplugin.com/blog/">Visit Blog</a>

Benchmark server tool
Catch Errors (Also Javascript errors)
Check Tables
Console Log Block
Cron Jobs
Deactivate Emojis functionality to make WordPress faster
Deactivate Lazy Load
Disk size, disk used and disk free.
Emails notifications about notices, warnings and errors
Erase readme.html and licence.txt files at root folder
How add Add Google Search Central (formerly Google Webmasters) HTML TAG to your site?
How Increase the PHP Max Post Size
How to Add Google Analytics GA Tracking ID on your WordPress site?
How to disable WordPress Native Sitemap Automatic Creation.
How to disables the default notification email after WordPress updates.
How to hide Admin Bar from non Administrators?
How to hide the debug information from your WordPress site?
How to increase maximum PHP POST Max Input Vars
How to see the PHP errors in WordPress site
How to see the PHP info about your site
Javascript Errors, jQuery Version and jQuery Migrate
Optimize and repair InnoDB and MyISAM database tables
Page Load Info (queries and load time)
Remove WP icon from admin toolbar
Replace WordPress logo at Login Page.
The WordPress wp-config.php
What is .htaccess ?
What is Robots.txt
WordPress 5.8 Kill the classic Widget Screen
WordPress File Permissions


== Changelog ==
3.12 2022-01-20 -  Improved Google Analytics.
3.11 2022-01-19 -  Fix small bug error when Virtual Dir is found.
3.10 2022-01-13 -  Add Tab Debug Info.
3.09 2022-01-09 -  Enable to close our banner with esc key.
3.08 2022-01-07 -  Minor Improvements.
3.07 2022-01-07 -  Minor Improvements.
3.06 2022-01-05 -  Minor Improvements.
3.05 2022-01-05 -  Minor Improvements.
3.04 2022-01-02 -  Add Button X at Window with video.
3.03 2022-01-01 -  Minor Improvements.
3.02 2021-12-30 -  Minor Improvements.
3.01 2021-12-29 -  Minor Improvements.
3.0  2021-12-28 -  Launched Premium Version.
2.56 2021-12-16 -  Hosting requirements improved.
2.55 2021-12-10 -  Title Improved.
2.54 2021-12-05 -  Small Improvements.
2.53 2021-12-03 -  Small Improvements.
2.52 2021-11-18 -  Small Improvements.
2.51 2021-11-16 -  Small Improvements.
2.50 2021-11-08 -  Minor Bug fixed.
2.49 2021-11-08 -  Small Improvements.
2.48 2021-10-29 -  Help Improved.
2.47 2021-10-18 -  Minor Bug Fixed.
2.46 2021-10-18 -  Improved Help.
2.45 2021-10-11 -  Info about Jquery version (also migrate) and table exclusive with Javascript errors.
2.44 2021-09-30 -  Protection against bad hostings.
2.43 2021-09-29 -  Add Link when find table errors to help to fix them
2.42 2021-09-29 -  Minor bug fixed
2.41 2021-09-29 -  Add Tool to repair and optimize database tables
2.40 2021-09-27 -  Minor Improvements
2.39 2021-09-22 -  Show and delete transients, check wp-config.php permissions and more.
2.38 2021-09-13 -  Added Database page info.
2.37 2021-09-12 -  Minor charts bug fixed.
2.36 2021-09-12 -  Added Dashboard with charts and more info.
2.35 2021-09-04 -  Minor Improvements.
2.34 2021-09-03 -  Added alert when PHP function disk_total_space is not installed.
2.33 2021-09-02 -  Added Server Benchmark (performance).
2.32 2021-08-31 -  Small Bug Fixed.
2.31 2021-08-31 -  Added 5 more tools.
2.30 2021-08-18 -  Small Improvements
2.29 2021-08-11 -  Show Files and Folders Permissions 
2.28 2021-08-06 -  Minor error fixed.
2.27 2021-08-06 -  Minor error fixed.
2.26 2021-08-06 -  Catch and alert about Javascript Errors.
2.25 2021-08-02 -  Minor Improvements.
2.24 2021-07-28 -  Disable the WP Admin Bar / Toolbar on the frontend of sites.
2.23 2021-07-20 -  Added Disable user's site map automatic creation.
2.22 2021-07-14 -  Added Restores the Classic Widgets Screen.
2.21 2021-07-07 -  Added Show Cookies
2.20 2021-06-21 -  Added 3 more tools.
2.19 2021-06-18 -  Minor Improvements.
2.18 2021-06-18 -  Added Robots.txt editor, WordPress Debug Bypass, Show Tables.
2.17 2021-06-14 -  Added alerts from PHP Notices, Warnings and errors.
2.16 2021-05-25 -  Minor bug fixed.
2.15 2021-05-25 -  Added 3 more tools.
2.14 2021-05-19 -  Added info about Server IP and Memory Usage.
2.13 2021-05-18 -  Minor Bug Fixed with google webmaster verification.
2.12 2021-05-18 -  Minor Bug Fixed.
2.11 2021-05-18 -  Improved Block WP emails.
2.10 2021-05-17 -  Removed Gutenberg tool
2.09 2021-05-17 -  Added more 4 tools.
2.08 2021-05-15 -  Fixed file missing last upload (.js)
2.07 2021-05-15 -  Fixed conflict with other plugins.
2.06 2021-05-15 -  Added 3 more tools.
2.05 2021-05-14 -  Improved Server Load info, now in percentage.
2.04 2021-05-10 -  Fixed problem to Upload to WordPress
2.03 2021-05-10 -  Improved Link to pag settings
2.02 2021-05-08 -  Fixed Link at Admin Toolbar
2.01 2021-05-08 -  Improved find location of error_log
2.00 2021-05-08 -  Improved find location of error_log
1.07 to 1.09 2021-05-07 -  Fixed problem to Upload to WordPress
1.06 2021-05-07 -  Added Server Load (CPU Usage)
1.05 2021-05-07 -  Fixed Small Bug
1.04 2021-05-07 -  Added PHP INFO
1.03 2021-03-08 -  Fixed Error on settings system
1.02 2021-01-30 -  Fixed Error on settings system
1.01 2021-01-29 -  Added increase limits features
1.00 2020-02-21 -  Initial Release
