<?php
session_start();

$username = filter_input(INPUT_POST,"id");
$password = filter_input(INPUT_POST,"password");

if ($password == "5678") {
	$_SESSION["user"] = $username;
	$_SESSION['loggedOn'] = true;
}

echo $username;
echo $_SESSION['user'];

if (isset($_SESSION['user'])) {
	header("Location: home.php");
	die();
}

else {
	header("Location: login.php");
	die();
}
?>