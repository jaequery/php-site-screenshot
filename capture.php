<?php

/**
* install: https://github.com/jaequery/cutycapt-installer-script-on-ubuntu
* usage: http://localhost/capture.php?url=http://www.google.com
*/

// lib path
$xvfb_path = '/usr/bin';
$cutycapt_path = "/home/user/scripts/cutycapt/CutyCapt";

// capture settings
$screen = '1280x1024x24';
$output_path = '/home/user/www/images/capture.png';
$url = $_GET['url']; // set it however you want
//$url = 'http://www.yahoo.com'; // set it manually

// run it
exec($xvfb_path . '/xvfb-run --server-args="-screen 0, '.$resolution.'" '.$cutycapt_path.'/CutyCapt --url="'.$url.'" --out="'.$output_path);

?>

