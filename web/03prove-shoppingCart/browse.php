<?php
	// start session
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>ValCo Outdoor Goods</title>
</head>
<body>
	<form method="get" action="updateCart.php">
	<div>
		<ul>
			<li>
				<label for="knife">Hunting Knife</label>
				<input type="checkbox" name="knife" id="knife">
			</li>
				
			<li>
				<label for="sheath">Kife Sheath</label>
				<input type="checkbox" name="sheath" id="ksheath">
			</li>
				
			<li>
				<label for="rrknife">Rail Road Knife</label>
				<input type="checkbox" name="rrknife" id="rrknife">
			</li>	
				
			<li>
				<label for="rrsheath">Rail Road Knife Sheath</label>
				<input type="checkbox" name="rrsheath" id="rrsheath">
			</li>

			<li>
				<label for="sknife">Scandi Ground Kife</label>
				<input type="checkbox" name="sknife" id="sknife">
			</li>	
				
			<li>
				<label for="45holster">Holster for .45 1911</label>
				<input type="checkbox" name="45holster" id="45holster">
			</li>
				
			<li>
				<label for="glkholster">Holster for Glock</label>
				<input type="checkbox" name="glkholster" id="glkholster">
			</li>
		</ul>
			<button type="submit">Add to Cart</button>
	</div>		
		
	</form>
</body>
</html>