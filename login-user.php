<?php
require 'include/theme.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body class = "bg-info">
	<div class = "containter-fluid">
		<div class = "card col-lg-4 mt-10 mx-auto">
            <div class = "card-body bg-default">
				<div class="card-title" align = "center"> Enter your information</div>
				<hr>
				<div class="input-group mb-2">
 					<div class="input-group-prepend">
    				<span class="input-group-text" id="basic-addon1"><i class = "fas fa-user"></i></span>
  					</div>
  						<input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
				</div>

					<div class="input-group mb-2">
 					<div class="input-group-prepend">
    				<span class="input-group-text" id="basic-addon1"><i class = "fas fa-lock"></i></span>
  					</div>
  						<input type="text" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
					</div>


					<div class="input-group mb-2">
    					<button class = "btn btn-primary btn-block" type = "submit" name = "login-user">Login</button>
					</div>

					<div class = "input-group mb-2">
						<p>Don't have an account? Create one <a href = "register-user.php">here</a>!</p>
					</div>

			</div>
		</div>
	</div>
</body>
</html>	