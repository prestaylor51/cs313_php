<?php
	session_start();

	$fullName =  htmlspecialchars($_POST['fname'] . " " . $_POST['lname']);
	$fullStreet = htmlspecialchars($_POST['street']);
	$location = htmlspecialchars($_POST['city'] . ", " . $_POST['state'] . " " . $_POST['zip']); 

?>
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
	<title>Confirmation</title>
</head>
<body>
	<?php
		require('banner-ValCo.php');
	?>
<div>
	<h1>Thank you for shopping with us!</h1>
	<div>
		<h3>Order Confirmation</h3>
		<h4>Items</h4>
		<ul>
		<?php 
			foreach ($_SESSION as $item => $status) {
				if ($status == 'carted') {
					echo "<li>" . $_SESSION['itemName'][$item] . "  $" . $_SESSION['itemPrice'][$item] . "</li>";
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