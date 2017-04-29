<h1>Steve's Car Repair</h1>
<h3>We repair cars!</h3>

<?php

$url = $_SERVER['REQUEST_URI'];

switch ($url) {
	case "/cs313-php/web/team/about-us.php":
		echo "<a href=\"home.php\">Home</a>";
		echo "<a href=\"login.php\">Log In</a>";
		echo "<a style=\"color: green\" href=\"about-us.php\">About Us</a>";
		break;

	case "/cs313-php/web/team/home.php":
		echo "<a style=\"color: green\" href=\"home.php\">Home</a>";
		echo "<a href=\"login.php\">Log In</a>";
		echo "<a href=\"about-us.php\">About Us</a>";
		break;
		
	case "/cs313-php/web/team/login.php":
		echo "<a href=\"home.php\">Home</a>";
		echo "<a style=\"color: green\" href=\"login.php\">Log In</a>";
		echo "<a href=\"about-us.php\">About Us</a>";
		break;

}


?>



