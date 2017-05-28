<?php
	session_start();

	// the database variable is $db
	require('accessdatabase.php');

	$username = $_POST['username'];
	$password = $_POST['password'];

	$stmt = $db->prepare('SELECT first_name FROM employee as e
							WHERE e.username = :username AND 
								  e.password = :password');

	$stmt->bindValue(':username', $username, PDO::PARAM_STR);
	$stmt->bindValue(':password', $password, PDO::PARAM_STR);
	$stmt->execute();
	$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

	if (empty($rows)){
		echo "invalid login";
	}
	else {
		foreach( $rows as $row){
			$_SESSION['user'] = $row['first_name'];
			header("Location: inventoryUpdate.php");
			die();
			
			
		}
	}
	
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