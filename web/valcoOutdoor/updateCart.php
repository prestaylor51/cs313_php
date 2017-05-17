
<?php
	session_start();
	if (isset($_POST['clear'])) {
		session_unset();
		header("Location: cart.php");
		die();
	}

	if (isset($_POST['remove'])) {
		$toBeRemoved = $_POST['remove'];

		$_SESSION[$toBeRemoved] = "rfc";

		header("Location: cart.php");
		die();
	}

	if (isset($_POST['add'])) {
		$toAdd = $_POST['add'];

		$_SESSION[$toAdd] = "carted";

		header("Location: browse.php");
		die();
	}

	foreach ($_GET as $key => $item) {
		if ($item == "on") {
			$_SESSION[$key] = "carted";		
		}	
	}

	header("Location: browse.php");

?>

