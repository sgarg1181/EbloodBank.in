<?php 
date_default_timezone_set("Asia/Kolkata");
$currenttime=time();
$datetime=strftime("%Y-%m-%d %H:%M:%S",$currenttime);
echo $datetime;
?>