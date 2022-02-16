<?php
/**
 * @author William Sergio Minozzi
 * @copyright 2017
 */
if (!defined('ABSPATH'))
    exit; // Exit if accessed directly

// define('WPTOOLSADMURL', admin_url());


$site = WPTOOLSADMURL . "admin.php?page=wp-tools";
$site = WPTOOLSADMURL . "admin.php?page=wp-tools&tab=memory_usage";

?>
<style>
    #bkg_cpu_history {
        width: 45px;
        min-width: 45px;
        background-image: url("<?php echo esc_url(WPTOOLSURL) . 'images/pct.png'; ?>");
        height: 200px;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        border: 0px;
    }
</style>
<div id="wptools-steps3">
    <div class="wptools-block-title">
        WP Tools Dashboard
    </div>
    <div class="wptools-help-container1">
        <div style="max-width: 25% !important;" class="wptools-help-column wptools-help-column-1">
            <div class="bill-dashboard-titles2">Memory Usage</div>
            <br /> <br />
            <?php
            /*
            $ds = 256;
            $du = 60;
            */
            $wptools_memory = wptools_check_memory();
            if ($wptools_memory['msg_type'] == 'notok') {
                echo 'Unable to get your Memory Info';
            } else {
                $ds = $wptools_memory['wp_limit'];
                $du = $wptools_memory['usage'];
                if ($ds > 0)
                    $perc = number_format(100 * $du / $ds, 0);
                else
                    $perc = 0;
                if ($perc > 100)
                    $perc = 100;
                //die($perc);
                $color = '#e87d7d';
                $color = '#029E26';
                if ($perc > 50)
                    $color = '#e8cf7d';
                if ($perc > 70)
                    $color = '#ace97c';
                if ($perc > 50)
                    $color = '#F7D301';
                if ($perc > 70)
                    $color = '#ff0000';
                $initValue = $perc;
                require_once "circle_memory.php";
            ?>
                <br /> <br />
                For details, 
                <a href="<?php echo esc_url($site); ?>" >
                click
                </a>
                the Settings => Memory Usage Tab.

            <?php } ?>
        </div>
        <!-- "Column1">  -->
        <div style="max-width: 45% !important; text-align:center; margin-right: 30px;" class="wptools-help-column wptools-help-column-2">
           
            <div class="bill-dashboard-titles2">CPU Usage</div>
            Load average: <span id="load_1"></span> &nbsp;<span id="load_5"></span>&nbsp; <span id="load_15"></span><br>
            Number Cores: <span id="cores"></span><br><br>
            <table border="1" width="100%" style="text-align:left; border: 1px solid gray; border-collapse: collapse;">
                <tr>
                    <td colspan="2" style="padding-right: 2px; border:0px;">
                        <img src="<?php echo plugins_url('../images/pixel.png', __FILE__); ?>" width="5px">
                        <canvas id="chart_cpuhistory" width="330" height="150" style="height:150px;width:100%;" ></canvas><br>
                    </td>
                    <td id="bkg_cpu_history">
                    </td>
                </tr>
                <tr>
                </tr>
            </table>
        </div>
        <!-- "Column 3">  -->
        <div style="max-width: 25% !important;" class="wptools-help-column wptools-help-column-2">
            <div class="bill-dashboard-titles2">Disk Usage</div>
            <br /> <br />
            <?php 


           try{
            if (function_exists("disk_free_space") and function_exists("disk_total_space") ) 
                require_once "circle_disc.php"; 
           }
           catch (Exception $e) {
           }
            
            
            ?>
            <br /> <br />
                For details, 
                <?php $site = WPTOOLSADMURL . "admin.php?page=wp-tools&tab=disk_usage";?>
                <a href="<?php echo esc_url($site); ?>" >
                click
                </a>
                the Settings =>Disk Usage Tab.
        </div> <!-- "Column 3 end " -->
    </div> <!-- "Container 1 " -->
</div> <!-- "wptools-steps3"> -->
<!-- raw 2 -->
<div id="wptools-services3">
    <!--
     <div class="wptools-block-title">
      Help, Demo, Support, Troubleshooting:
    </div>
    -->
    <div class="wptools-help-container1">
        <div class="wptools-help-column wptools-help-column-1">
            <br />
            <b>OS type & version</b>
            <br /><br />
            <?php
            $os = wptools_OSName();
            if ($os) {
                echo trim(esc_attr($os));
            } else {
                echo 'Check tab "Server Check & Requirements"';
            }
            ?>
            <br />
            <br />
        </div> <!-- "Column1">  -->
        <div class="wptools-help-column wptools-help-column-2">
            <br />
            <b>Server Uptime (since reboot)</b>
            <br /><br />
            <?php

            try{
                if (function_exists("shell_exec"))
                    $result = shell_exec('uptime -p');
                else
                    $result = false;

            }
            catch (Exception $e) {
                $result = false;
            }



            if ($result) {
                echo esc_attr($result);
            } else {
                echo 'Check tab "Server Check & Requirements"';
            }
            ?>
        </div> <!-- "columns 2">  -->
        <div class="wptools-help-column wptools-help-column-3">
            <br />
            <b>Server CPU cores and architecture</b>
            <br />
            <br />
            <?php

            try{
                if (@is_readable('/proc/cpuinfo')) {
                    $cpuinfo = file_get_contents('/proc/cpuinfo');
                    preg_match_all('/^processor/m', $cpuinfo, $matches);
                    $file = file('/proc/cpuinfo');
                    $proc_details = $file[4];
                    echo count($matches[0]) . ' x ' . esc_attr(substr($proc_details, 13));
                } else {
                    echo "-";
                }

            }
            catch (Exception $e) {
                echo "-";
            }



            ?>
        </div> <!-- "Column 3">  -->
    </div> <!-- "Container1 ">  -->
    <!--
     <div class="wptools-block-title">
      Help, Demo, Support, Troubleshooting:
    </div>
    -->
    <div class="wptools-help-container1">
        <div class="wptools-help-column wptools-help-column-1">
        <b>Hostname</b>
            <br />
            <br />
            <?php
            echo gethostname()
            ?>
            <br />
            <br />
        </div> <!-- "Column1">  -->
        <div class="wptools-help-column wptools-help-column-2">
        <b>Server IP</b>
            <br />
            <br />
            <?php
            $ip_server = $_SERVER['SERVER_ADDR'];
            if (filter_var($ip_server, FILTER_VALIDATE_IP)) {
                echo $ip_server;
            } else {
                echo __('Unable to get your server Ip. Probably blocked by your hosting company.');
            }
            ?>
        </div> <!-- "columns 2">  -->
        <div class="wptools-help-column wptools-help-column-3">
        <b>Web Server Soft</b>
            <br />
            <br />
            <?php
            echo esc_attr($_SERVER['SERVER_SOFTWARE']);
            ?>
        </div> <!-- "Column 3">  -->
    </div> <!-- "Container1 ">  -->
</div> <!-- "services"> -->
<!-- raw 4 -->
<div id="wptools-services3">
    <div class="wptools-help-container1">
        <div class="wptools-help-column wptools-help-column-1">
            <img alt="aux" src="<?php echo esc_url(WPTOOLSURL) ?>images/service_configuration.png" />
            <div class="bill-dashboard-titles">Start Up Guide and Settings</div>
            <br /><br />
            Just click Settings in the left menu (WP Tools).
            <br />
            Dashboard => WP Tools => Settings
            <br />
            <?php $site = esc_url(WPTOOLSADMURL) . "admin.php?page=wp-tools";?>
            <a href="<?php echo esc_url($site); ?>" class="button button-primary">Go</a>
            <br /><br />
        </div> <!-- "Column1">  -->
        <div class="wptools-help-column wptools-help-column-2">
            <img alt="aux" src="<?php echo esc_url(WPTOOLSURL) ?>images/support.png" />
            <div class="bill-dashboard-titles">Blog, Support...</div>
            <br /><br />
            You will find our Blog with tips about this tool, link to support and more in our site.
            <br />
            <?php $site = 'http://wptoolsplugin.com'; ?>
            <a href="<?php echo esc_url($site); ?>" class="button button-primary">Go</a>
        </div> <!-- "columns 2">  -->
        <div class="wptools-help-column wptools-help-column-3">
            <img alt="aux" src="<?php echo esc_url(WPTOOLSURL) ?>images/system_health.png" />
            <div class="bill-dashboard-titles">Troubleshooting Guide</div>
            <br /><br />
            Use old WP version, Low memory, some plugin with Javascript error are some possible problems.
            <br />
            <a href="http://siterightaway.net/troubleshooting/" class="button button-primary">Troubleshooting Page</a>
        </div> <!-- "Column 3">  -->
    </div> <!-- "Container1 ">  -->
</div> <!-- "services"> -->
<?php
/*
function wptools_OSName()
{
    try {
      if (false == function_exists("shell_exec") || false == @is_readable("/etc/os-release")) {
        return false;
      }
      $os = shell_exec('cat /etc/os-release | grep "PRETTY_NAME"');
      return explode("=", $os)[1];
    }
    catch (Exception $e) {
      // echo 'Message: ' .$e->getMessage();
      return false;
    }
}
*/
?>