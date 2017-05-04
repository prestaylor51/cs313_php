<?php 
	session_start();
	?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
	foreach ($_GET as $key => $item) {
		if ($item == "on") {
			echo "item: $key<br>";
			
		}
		
	}
	
	//header("Location: browse.php");

?>
</body>
</html>
