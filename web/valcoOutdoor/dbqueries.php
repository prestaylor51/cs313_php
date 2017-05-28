<?php
	
	try {
		$user = 'postgres';
		$password = 'postgres';
		$db = new PDO('pgsql:host=127.0.0.1;dbname=valcodb', $user,$password);
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
