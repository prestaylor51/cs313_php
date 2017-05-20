<?php
	session_start();
	
	$dbUrl = getenv('DATABASE_URL');

	if (empty($dbUrl)) {
	 // example localhost configuration URL with postgres username and a database called cs313db
		echo "local connection <br>";
	 $dbUrl = "postgres://postgres:postgres@localhost:5432/valcodb";
	}

	$dbopts = parse_url($dbUrl);

	$dbHost = $dbopts["host"];
	$dbPort = $dbopts["port"];
	$dbUser = $dbopts["user"];
	$dbPassword = $dbopts["pass"];
	$dbName = ltrim($dbopts["path"],'/');

	$db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

	echo "Connected to database <br>";

?>