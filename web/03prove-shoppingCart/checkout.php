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
		require('banner-ValCo.php');
	?>
<div class="narrow">
<h1>Checkout</h1>

	<form method="post" action="confirm.php">
		<ul>
			<li><label for="fname">First</label><input type="text" name="fname" id="fname"></li>
			<li><label for="lname">Last</label><input type="text" name="lname" id="lname"></li>
			<li><label for="city">City</label><input type="text" name="city" id="city"></li>
			<li><label for="state">State</label><input type="text" name="state" id="state"></li>
			<li><label for="street">Street</label><input type="text" name="street" id="street"></li>
			<li><label for="zip">Zip</label><input type="text" name="zip" id="zip"></li>

			<li><button type="submit" >Submit Order</button></li>
		</ul>
	</form>
</div>
	
</body>
</html>