<?php  
session_start();

$username = "";
$email    = "";
$errors = array(); 
$_SESSION['success'] = "";

$db = mysqli_connect('localhost', 'root', '', 'phpcms');

if (isset($_POST['reg_user'])) {
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
	$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

	if (empty($username)) { array_push($errors, "Username is required"); }
	if (empty($email)) { array_push($errors, "Email is required"); }
	if (empty($password_1)) { array_push($errors, "Password is required"); }

	if ($password_1 != $password_2) {
		array_push($errors, "The two passwords do not match");
	}
		if (count($errors) == 0) {
		$password = md5($password_1);
		$query = "INSERT INTO users (name, email, password) 
				  VALUES('$username', '$email', '$password')";
		mysqli_query($db, $query);

		$_SESSION['username'] = $username;
		$_SESSION['success'] = "Congratulations! You are registered now";
		header('location: profile.php');
	}
}
?>