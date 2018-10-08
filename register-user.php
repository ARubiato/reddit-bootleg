<?php
require 'include/theme.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<body class = "bg-info">
	<div class = "container-fluid">
		<div class = "card col-lg-6 mx-auto mt-5">
			<div class = "card-body">
			<form method = "post" action = "functions/user-function.php">
				<div class = "card-title" align="center">Create an account</div>
					<hr>
				<div class = "form-group">
					<input type = "text" class = "form-control" name = "UP_FNAME" placeholder="Firstname">
				</div>
				<div class = "form-group">
					<input type = "text" class = "form-control" name = "UP_LNAME" placeholder="Lastname">
				</div>
				<div class = "form-group">
					<select class = "form-control">
						<option selected = "selected" hidden>--SELECT--</option>
						<option value = "Male">Male</option>
						<option value = "Female">Female</option>
					</select>
				</div>
				<div class = "form-group">
					<input type = "text" class = "form-control" name = "UP_EMAIL" placeholder="Email">
				</div>
				<div class = "form-group">
					<input type = "date" class = "form-control" name = "UP_BDATE">
				</div>
				<div class = "form-group">
					<input type = "text" class = "form-control" name = "UNAME" placeholder="Username">
				</div>
				<div class = "form-group">
					<input type = "password" class = "form-control" name = "PWD" placeholder="Password">
				</div>
				<div class = "form-group">
						<button class = "btn btn-primary btn-block" type = "submit" name = "register-user">Register</button>
				</div>
				<div class = "form-group">
					<p>Already have an account? Login <a href = "login-user.php">here</a>!</p>
				</div>

		</div>
	</form>
	</div>
</body>
</html>