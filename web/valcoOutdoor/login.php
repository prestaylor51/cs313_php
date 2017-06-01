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
		<ul>
			<li>
			<label for="username">username</label>
			<input type="text" name="username" id="username"></li>
			
			<br>
			<li>
			<label for="password">password</label>
			<input type="password" name="password" id="password"></li>
			
			<br> <br>
			<button type="submit">Login</button>
		</ul>

	</form>
</div>
	
</body>
</html>