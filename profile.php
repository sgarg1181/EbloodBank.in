<?php 		
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['success'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>profile page</title>
</head>
<body>
<div class="header"><h2>Profile Page</h2></div>
<div>
	<?php if(isset($_SESSION['success'])) ?>
		<div>
			<h3>
				<?php 
				echo $_SESSION['success'];
				unset($_SESSION['success']);
				 ?>
			</h3>
		</div>
	<?php if (isset($_SESSION['username']))?>
	<p>Welcome</p><strong><?php echo $_SESSION['username'] ?></strong>
	<h4>Enter your details here</h4>	
	<form method="post" action="register.php">
        <div class="input-group">
            <label>Name</label>
            <input type="text" name="name">
        </div>
        <div class="input-group">
            <label>Phone-No</label>
            <input type="number" name="">
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password_1">
        </div>
        <div class="input-group">
            <label>Confirm password</label>
            <input type="password" name="password_2">
        </div>
        <div class="input-group">
            <a href="feed.php"><button type="submit" class="btn" name="profile">Register</button></a>
        </div>
    </form>	

</div>
</body>
</html>