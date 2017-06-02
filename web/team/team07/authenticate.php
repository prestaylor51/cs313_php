<?php
	session_start();

	require('connectDatabase.php');

	$username = $_POST['username'];

	$stmt = $db->prepare("SELECT password FROM _user
				WHERE username = :username ;");

	$stmt->bindValue(':username', $username, PDO::PARAM_STR);
	$stmt->execute();

	$row = $stmt->fetchAll(PDO::FETCH_ASSOC);

	print_r($row);
	echo $row[0]['password'];

	if(password_verify($_POST['password'],$row[0]['password'])){
		header('Location: home.php');
		die();
	}


?>