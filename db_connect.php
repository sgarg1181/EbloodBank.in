<?php
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "registration";
 
 
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 https://maps.googleapis.com/maps/api/js?key=AIzaSyBgDiofv_AnQ1RewV6MCB0ghmOWVcU0zb4&callback=myMap

 30.3544,76.3626
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }
   
?>