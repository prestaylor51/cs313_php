<?php
	session_start();

	//the database variable is $db
	require('accessdatabase.php');

	$username = $_POST['username'];

	$stmt = $db->prepare('SELECT password, first_name FROM employee 
							WHERE username = :username;');

	$stmt->bindValue(':username', $username, PDO::PARAM_STR);
	
	$stmt->execute();
	$row = $stmt->fetchAll(PDO::FETCH_ASSOC);

	// Check the hash against the database
	if (password_verify($_POST['password'],$row[0]['password'])) {
		$_SESSION['user'] = $row[0]['first_name'];
		header('Location: inventoryUpdate.php');
		die();
	}
	else{
		echo "You have provided invalid login info.";
	}
	
		// $hash = password_hash('holyschmit!',PASSWORD_DEFAULT);
		// echo $hash;	

	// foreach ($db->query('SELECT * FROM purchase AS p 
	// JOIN customer as c 
	// on p.customer = 1 and c.customer_id = 1 ') AS $row) {

	// 	echo '<br>';
	// 	echo $row['first_name'] . " ";
	// 	echo $row['last_name'];
	// 	echo '<br>';
	// 	echo $row['email'];
	//}
?>