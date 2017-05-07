<?php
	session_start();
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
	<title>Customer Shiooing Cart</title>
</head>
<body>
	<?php
		include('banner-ValCo.php');
	?>
	<div class="row container-fluid list">
		<h1>Items In Your Cart</h1>
		<ul>
			<?php
				foreach ($_SESSION as $item => $status ) {
					if ($status == 'carted'){
						echo "<form method='post' action='updateCart.php'>
								<li> 
								<label>" . $_SESSION['itemName'][$item] . "</label>  
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