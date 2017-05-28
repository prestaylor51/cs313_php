<!DOCTYPE html>
<html>
<head>
	<?php
		require_once('valcoHeader.php');
	?>
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