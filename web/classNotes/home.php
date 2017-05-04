<?php
session_start();

// check the "logon" variable to see if they have \
if (!$_SESSION['loggedOn']) {
	header('Location: login.php');
	die();
}

$user = $_SESSION["user"];
$password = $_POST["password"];

$user = htmlspecialchars($user); // sanitizies the client input

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	echo "<p>Welcome $user, you are now logged in.<p>"
?>

</body>
</html>