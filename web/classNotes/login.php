<?php
	session_start();
	session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Session Login Test</title>
</head>
<body>
	<h1>Welcome to the login Page.</h1>

	<form action="auth.php" method="post">
		<label for="userId">Username</label>
		<input type="text" name="id" id="userId"> <br><br>

		<label for="pass">Password</label>
		<input type="password" name="password" id="pass"></ins><br><br>

		<button type="submit" value="Login">Login</button>


	</form>

</body>
</html>