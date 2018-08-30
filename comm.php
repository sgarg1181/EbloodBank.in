<?php  
session_start();

$name ="";
$email1="";
$phone="" ;
$comments="";
		
$db = mysqli_connect('localhost', 'root', '', 'phpcms');
if (isset($_POST['comment'])) {
	$name = mysqli_real_escape_string($db, $_POST['Name']);
	$phone = mysqli_real_escape_string($db, $_POST['PhoneNumber']);
	$email1 = mysqli_real_escape_string($db, $_POST['FromEmailAddress']);
	$comments = mysqli_real_escape_string($db, $_POST['Comments']);

$query = "INSERT INTO contacts (username,name,phone, email, comments) 
				  VALUES('$username','$name','$phone', '$email1', '$comments')";
mysqli_query($db, $query);

}?>