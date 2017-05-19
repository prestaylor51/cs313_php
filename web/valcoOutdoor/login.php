<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="ValCo.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>Checkout</title>
</head>
<body>
	<?php
		require('banner-Valco.php');
	?>
<div class="narrow">
	<h1>Employee Login</h1>
</div>

<div class="narrow">
	<form method="POST" action="startLoginSession.php">
		<input class="inputPad" type="text" name="username" id="username">
		<label for="username">username</label>
		<br>
		<input type="text" name="password" id="password">
		<label for="password">password</label>
		<br> <br>
		<button type="submit">Login</button>

	</form>
</div>
	
</body>
</html>