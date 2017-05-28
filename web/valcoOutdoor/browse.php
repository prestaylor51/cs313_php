<?php
	// start session
	session_start();

	//get database as $db
	require_once('accessdatabase.php');

?>

<!DOCTYPE html>
<html>
<head>
	<?php
		require_once('valcoHeader.php');
	?>
	<title>ValCo Outdoor Goods</title>
</head>
<body>
	<?php
		require_once('banner-Valco.php');
		// connect to the database as $db
		
	?>
	<div class="list container">
	<h1>Knives and Leatherwork</h1>
		<ul>
			<?php
				
				foreach($_SESSION['cart'] as $key => $value){
					echo " $key => $value";
				}

				foreach($db->query('SELECT * FROM item;') as $row){
					echo "<form action='updateCart.php' method='post'>
					<button type='submit' name='add' id='" . $row['item_id'] . "' value='" . $row['item_id'] . "'>Add</button>
					<li>
						<label for='" . $row['item_id'] . "'>" . $row['item_name'] . "....." . $row['price'] . "</label>
					</li>
						</form>";

				}
			?>	
		</ul>

	</div>		
</body>
</html>