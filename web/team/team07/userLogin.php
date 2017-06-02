<!DOCTYPE html>
<html>
<head>
	<title>User Login</title>
</head>
<body>
<h1>Welcome to the Sign in Page</h1>
	<form method="post" action="authenticate.php">
		<label for="username">Username</label>
		<input type="text" name="username" id="username">
		
		<label for="password">Password</label>
		<input type="password" name="password" id="password">

		<button type="submit">Login</button>
	</form>
</body>
</html>