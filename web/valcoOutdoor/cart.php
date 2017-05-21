<?php
	session_start();
	echo session_id();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- Style Sheet-->
	<link rel="stylesheet" type="text/css" href="ValCo.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
				print_r($_SESSION);
				foreach ($_SESSION as $item => $status ) {

					echo $item . " " . $status . "<br>";
					if ($status == 'carted'){
						// echo "<form method='post' action='updateCart.php'>
						// 		<li> 
						// 		<label>" . $_SESSION['itemName'][$item] . "</label>  
						// 		<button type='submit' name='remove' value='$item'>Remove</button>
						// 		</li>
						// 	</form>";
						echo $item . " " . $status;
						echo "<form method='post' action='updateCart.php'>
							<li> 
							<label>" . $item . "</label>  
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