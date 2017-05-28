<?php
	session_start();

	$fullName =  htmlspecialchars($_POST['fname'] . " " . $_POST['lname']);
	$fullStreet = htmlspecialchars($_POST['street']);
	$location = htmlspecialchars($_POST['city'] . ", " . $_POST['state'] . " " . $_POST['zip']); 

	require_once("accessdatabase.php");

?>
<!DOCTYPE html>
<html>
<head>
	<?php
		require_once('valcoHeader.php');
	?>
	<title>Confirmation</title>
</head>
<body>
	<?php
		require('banner-Valco.php');
	?>
<div>
	<h1>Thank you for shopping with us!</h1>
	<div>
		<h3>Order Confirmation</h3>
		<h4>Items</h4>
		<ul>
		<?php 

			foreach ($_SESSION['cart'] as $item => $status) {

				foreach($db->query("SELECT item_name, price FROM item i WHERE i.item_id = $item;") as $row);

				if ($status == 'carted') {
					echo "<li>" . $row['item_name'] . "  " . $row['price'] . "</li>";
				}
			}
		?>
		</ul>
		<h4>Shipping Address</h4>
		<?php
			echo "<p>$fullName</p> <p>$fullStreet</p> <p>$location</p>";
		?>


	</div>
</div>
</body>
</html>