
<?php
	session_start();
	echo session_id();
	print_r($_POST);

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
		echo $_POST['add'] . "<br>";
		$_SESSION[$toAdd] = "carted";

		print_r($_SESSION);
		// header("Location: browse.php");
		// die();
	}

	
	//header("Location: browse.php");

?>

