
<?php
	session_start();

	// Clear whole cart
	if (isset($_POST['clear'])) {
		session_unset();
		header("Location: cart.php");
		die();
	}

	// Remove an item from cart
	if (isset($_POST['remove'])) {
		$toBeRemoved = $_POST['remove'];

		$_SESSION['cart'][$toBeRemoved] = "rfc";

		header("Location: cart.php");
		die();
	}

	// Add an item to the cart
	if (isset($_POST['add'])) {
		$toAdd = $_POST['add'];
		echo $_POST['add'] . "<br>";
		$_SESSION["_" . $toAdd] = "carted";
		$_SESSION['cart'][$toAdd] = "carted";

		header("Location: browse.php");
		die();
	}

	header("Location: browse.php");
	die();

?>

