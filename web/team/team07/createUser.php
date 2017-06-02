<?php
	// don't really need this for php 5
	//require('password.php');
	session_start();
	// get database as $db
	require('connectDatabase.php');

	$username = $_POST['username'];

	$hash = password_hash($_POST['password'], PASSWORD_DEFAULT);

	$stmt = $db->prepare("INSERT INTO _user
				(username, password)
				VALUES 
				(:username, :hash);");

	$stmt->bindValue(':username', $username, PDO::PARAM_STR);
	$stmt->bindValue(':hash', $hash, PDO::PARAM_STR);
	
	if($stmt->execute()){
		header('Location: userLogin.php');
		die();
	}
	else {

	}

?>