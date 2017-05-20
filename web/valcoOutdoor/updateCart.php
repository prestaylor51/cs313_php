
<?php
	session_start();
	echo session_id();

	// Clear whole cart
	if (isset($_POST['clear'])) {
		session_unset();
		header("Location: cart.php");
		die();
	}

	// Remove an item from cart
	if (isset($_POST['remove'])) {
		$toBeRemoved = $_POST['remove'];

		$_SESSION[$toBeRemoved] = "rfc";

		header("Location: cart.php");
		die();
	}

	// Add an item to the cart
	if (isset($_POST['add'])) {
		$toAdd = $_POST['add'];

		$_SESSION[$toAdd] = "carted";

		print_r($_SESSION);
		// header("Location: browse.php");
		// die();
	}

	// foreach ($_GET as $key => $item) {
	// 	if ($item == "on") {
	// 		$_SESSION[$key] = "carted";		
	// 	}	
	// }

	//header("Location: browse.php");

?>

