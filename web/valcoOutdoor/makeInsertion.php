<?php
	session_start();
	// get the database as $db
	require_once('accessdatabase.php');

	$_SESSION['insertSuccess'] = 'f';
	print_r($_POST);

	$itemname = $_POST['itemname'];
	$department = $_POST['department'];
	$quantity = $_POST['quantity'];
	$price = $_POST['price'];

	//echo $department;


	$stmt = $db->prepare("INSERT INTO item 
						(item_name, department, quantity, price)
						VALUES 
						(:itemname, :department, :quantity, :price)");

	$stmt->bindValue(':itemname', $itemname, PDO::PARAM_STR);
	$stmt->bindValue(':department', $department, PDO::PARAM_INT);
	$stmt->bindValue(':quantity', $quantity, PDO::PARAM_INT);
	$stmt->bindValue(':price', $price, PDO::PARAM_STR);
	$stmt->execute();
	$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

	if (!empty($rows)) {
		print_r($rows);
		$_SESSION['insertSuccess'] = 't';
		header('Location: inventoryUpdate.php');

		die();
	}
	else {
		echo "no rows returned";
	}

?>