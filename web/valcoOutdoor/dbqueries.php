<?php
	
	try {
		$user = 'user';
		$password = 'password';
		$db = new PDO('', $user,$password);
	}
	catch (PDOExeption $ex){
		echo 'Error: ' . $ex->getMessage();
		die();
	}
	echo 'connection made!';

	
	foreach ($db->query('SELECT * FROM purchase AS p 
	JOIN customer as c 
	on p.customer = 1 ') AS $row) {

		echo '<br>';
		echo $row['first_name'] . " ";
		echo $row['last_name'];
		echo '<br>';
		echo $row['email'];
	}
?>
