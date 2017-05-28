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