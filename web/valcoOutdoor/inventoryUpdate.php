<?php
	session_start();
	// get database as $db
	require_once('accessdatabase.php');
?>
<!DOCTYPE html>
<html>
<head>
	<?php
		require_once("valcoHeader.php");
	?>
	<title></title>
</head>
<body>
	<?php
		require('banner-Valco.php');
		echo $_SESSION['user'] . ", you are loged in.";
	?>
	<h1>Lookup Inventory</h1>

	<form>
		<select>
			<?php

				$rows = $db->query("SELECT name FROM department;");
				foreach($rows as $row){
					echo "<option name='department' value='" . $row['name'] . "'>" . $row['name'] . "</option>";
				}
			?>
		</select>
	</form>
	
	<h1>Update Inventory</h1>
	<h3>Add new item</h3>
	<div class="narrow">
	<form method="post" action="makeInsertion.php">
		<ul>
				<li><lable for="itemname">Item Name</lable><input type="text" name="itemname" id="itemname"></li>
				<li><lable for="department" >Department</lable>
				<select name="department" id="department">
					<?php

						$rows = $db->query("SELECT * FROM department;");
						foreach($rows as $row){
							//echo $row['name'];
							echo "<option name='department' value='" . $row['department_id'] . "'>" . $row['name'] . "</option>";
						}
					?>
				</select></li>
				<li><lable for="quantity">Quantity</lable><input type="text" name="quantity" id="quantity"></li>
				<li><lable for="price">Price</lable><input type="text" name="price" id="price"></li>
		</ul>
		<button type="submit">Insert</button>
	</form>
		<?php
			if ($_SESSION['insertSuccess'] == 't') {

				echo "<p class='success'> Your last insert was successful!</p>";
			}
			else {
				echo "<p class='success'> Your last insert Failed!</p>";
			}
		?>
	</div>

</body>
</html>