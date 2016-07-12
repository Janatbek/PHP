<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		*{
			font-family:sans-serif;
		}
		.error{
			color:red;
		}
		.success{
			color:green;
		}
	</style>
</head>
<body>
<?php
	// to insert error message when registration form is not completly filled out
	if(isset($_SESSION['errors']))
	{
		foreach($_SESSION['errors'] as $error)
		{
			echo "<p class='error'>{$error}</p>";
		}

		unset($_SESSION['errors']); // that way if you refresh the page error messages will not be displayed anymore
	}
	if(isset($_SESSION['success_message']))
	{
		echo "<p class='success'>{$_SESSION['success_message']}</p>";
		unset($_SESSION['success_message']);
	}
?>
	<h2>Register</h2>
	<form action='process.php' method='POST'>
		<input type='hidden'name='action'value='register'>
		First name:<input type='text' name='first_name'><br>
		Last name:<input type='text' name='last_name'><br>
		Email address:<input type='text' name='email'><br>
		Password:<input type='password' name='password'><br>
		Confirm Password:<input type='password' name='confirm_password'><br>
		<input type='submit' value='register'>
	</form>
	<h2>Login</h2>
	<form action='process.php' method='POST'>
		<input type='hidden'name='action'value='login'>
		Email address: <input type='text' name='email_login'/><br>
		Password: <input type='password' name='password_login'/><br>
		<input type='submit' value='Login'>
	</form>
</body>
</html>