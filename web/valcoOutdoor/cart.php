<?php
	session_start();

	// include the database as $db
	require('accessdatabase.php');
?>

<!DOCTYPE html>
<html>
<head>
	<?php
		require_once('valcoHeader.php');
	?>
	<title>Customer Shopping Cart</title>
</head>
<body>
	<?php
		require('banner-Valco.php');
		
	?>
	<div class="row container-fluid list">
		<h1>Items In Your Cart</h1>
		<ul>
			<?php
				foreach ($_SESSION['cart'] as $item => $status ) {

					if ($status == 'carted'){
						
						// Covert the "_#" key back to index "#"
						//$id = str_replace("_","",$item);

						foreach($db->query("SELECT item_name, price FROM item i WHERE i.item_id = $item;") as $row);
						
						echo "<form method='post' action='updateCart.php'>
							<li> 
							<label>" . $row['item_name'] . "....." . $row['price'] . "</label>  

							<button type='submit' name='remove' value='$item'>Remove</button>
							</li>
						</form>";	
					}
				}
			?>
		</ul>

		<div>
			<form method="post" action="updateCart.php">
				<button type="submit" name="clear" value="clear">Clear Cart</button>
			</form>
		</div>	

	</div>

</body>
</html>