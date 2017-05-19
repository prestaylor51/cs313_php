<?php

$dbUrl = getenv('DATABASE_URL');

if (empty($dbUrl)) {
 // example localhost configuration URL with postgres username and a database called cs313db
	echo "local connection <br>";
 $dbUrl = "postgres://postgres:postgres@localhost:5432/valcodb";
}

$dbopts = parse_url($dbUrl);

echo $dbopts;

$dbHost = $dbopts["host"];
echo $dbopts["host"];
$dbPort = $dbopts["port"];
$dbUser = $dbopts["user"];
$dbPassword = $dbopts["pass"];
$dbName = ltrim($dbopts["path"],'/');
echo "I think this is working?";

$db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

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