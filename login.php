<?php

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/style.css">
<title>Login</title>
</head>
<body>
<?php
	require('helpers/db.php');
	session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){

		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);

	//Checking is user existing in the database or not
    $query = "SELECT * FROM `users` WHERE name='$username' and password='".md5($password)."'";
		$result = mysqli_query($con,$query) or die(mysql_error());
		$result1 = mysqli_fetch_array($result) or die(mysql_error());

		$rows = mysqli_num_rows($result);
        if($result->num_rows){
					//var_dump($result1);

					if($result1['role_id']==2){
						$_SESSION['role'] = "admin";
					}
					else{
						$_SESSION['role'] = "user";
					}

			$_SESSION['username'] = $username;
			header("Location: list.php"); // Redirect user to index.php
            }else{
				echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
			}
    }else{
?>
<div class="form">
	<h1>Dejwar Gym</h1>
<h2>Log In</h2>
<form action="" method="post" name="login">
<input type="text" name="username" placeholder="Username" required />
<input type="password" name="password" placeholder="Password" required />
<input name="submit" type="submit" value="Login" />
</form>
<p>Not registered yet? <a href='register.php'>Register Here</a></p>

</div>
<?php } ?>


</body>
</html>
