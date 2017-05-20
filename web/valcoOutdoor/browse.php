<?php
	// start session
	session_start();
	echo session_id();
	// $_SESSION['itemName'] = array('knife'=>'Hunting Knife',
	//  							 'sheath'=>'Hunting Knife Sheath',
	//  							 'rrknife'=>'Rail Road Knife',
	//  							 'rrsheath'=> 'Rail Road Knife Sheath',
	//  							 'sknife'=>'Scandi Ground Knife',
	//  							 '45holster'=>'Holster for .45 1911',
	//  							 'glkholster'=>'Holster for GLock');
	// $_SESSION['itemPrice'] = array('knife'=>60,
	//  							 'sheath'=>45,
	//  							 'rrsheath'=>45,
	//  							 'rrknife'=>50,
	//  							 'sknife'=>45,
	//  							 '45holster'=>70,
	//  							 'glkholster'=>70);
	
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
	<title>ValCo Outdoor Goods</title>
</head>
<body>
	<?php
		require_once('banner-Valco.php');
		// connect to the database
		require_once('accessdatabase.php');
	?>
	<div class="list container">
	<h1>Knives and Leatherwork</h1>
		<ul>
			<?php
				// foreach ($_SESSION['itemName'] as $item => $name) {
				// 	echo "<form action='updateCart.php' method='post'><button type='submit' name='add' id='$item' value='$item'>Add</button><li>
				// 		<label for='$item'>$" . $_SESSION['itemPrice'][$item] . "  $name</label>
				// 		</li>
				// 		</form>";
				// }

				foreach($db->query('SELECT * FROM item') as $row){
					echo "<form action='updateCart.php' method='post'>
					<button type='submit' name='add' id='" . $row['item_id'] . "' value='" . $row['item_id'] . "'>Add</button>
					<li>
						<label for='" . $row['item_id'] . "'>" . $row['price'] . " " . $row['item_name'] . "</label>
					</li>
						</form>";

							//$_SESSION[$row['item_id']] = 'rfc';
				}

				print_r($_SESSION);

			?>	
		</ul>

	</div>		
</body>
</html>