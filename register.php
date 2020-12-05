<?php include ("server.php");?>
<DOCTYPE html>
	<html>
		<head>
			<title>User registration system using php and mySql workbench</title>
			<link rel="stylesheet" type="text/css" href="style.css">
		</head>
		<body>
			<div class="header">
				<h2>Register</h2>
			</div>

			<form method="post" action="register.php">
				<!------display validation errors here---->
				<?php include('errors.php');?>
				<div class="input-group">
					<label>Username</label>
					<input type="text" name="username">
				</div>
				<div class="input-group">
					<label>Email</label>
					<input type="text" name="email">
				</div>
				<div class="input-group">
					<label>Password</label>
					<input type="password" name="password_1">
				</div>
				<div class="input-group">
					<label>Confirm Password</label>
					<input type="password" name="passwod_2">
				</div>
				<div class="input-group">
					<button type="submit" name="register" class="btn">Register</button>
				</div>
				<p>
					Already A Member? <a href="login.php">Sign In</a>
				</p>
			</form>
		</body>
	</html>