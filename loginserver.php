<?php  
session_start();

$username = "";
$email    = "";
$errors = array(); 
$_SESSION['success'] = "";

$db = mysqli_connect('localhost', 'root', '', 'phpcms');

if (isset($_POST['login_user'])) {
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$password = mysqli_real_escape_string($db, $_POST['password_1']);

	if (empty($username)) {
		array_push($errors, "Username is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}

	if (count($errors) == 0) {
		$password = md5($password);
		$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
		$results = mysqli_query($db, $query);

		if (count($results) == 1) {
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: feed.php');
		}else {
			array_push($errors, "Wrong username/password combination");
		}
	}
}
?>