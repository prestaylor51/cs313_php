<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="homepage.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>Preston-Home</title>
</head>
<body>
	<div class="container-fluid ">
		<?php
			require("home-nav.php");
		?>

		
		<div class="jumbotron mainColor opac">
			<h1>Preston Taylor</h1>
			<p>"It's our wits that make us men."</p>
			<p>-Malcom Wallace-</p>
		</div>

	</div>


	<div class="container-fluid ">
		

		<div class="row">
			<div class="col-sm-4 center">
				<div class="jumbotron opac smallJumbo ">
					<h2 class="hobbiesText ">Computers</h2>
				</div>
			</div>	
		</div>		

		<div class="row section ">
			<div class="col-sm-4">
				<img src="heatSink.jpg" class="img-rounded">
			</div>
		

			<div class="section col-sm-6 hobbyExplain hobbiesText">
				<p>Building desktop computers is a favorite past time of mine. I visit Deseret Industries most weeks to find old computer parts that I can use to upgrade a system or just build a new one.</p>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-4 center">
				<div class="jumbotron opac smallJumbo">
					<h2 class="hobbiesText" >Hunting</h2>
				</div>
				
			</div>
		</div>

		<div class="row section ">
			<div class="col-sm-4">
				<img src="Hunting.jpg" class="img-rounded">
			</div>
			<div class="section col-sm-6 hobbyExplain hobbiesText">
				<p>Since I can remember I have spent time with my dad and brother out in the woods hunting and fishing. We mostly hunt in the White Mountains of Arizona. Two years ago I harvested an elk there</p>
			</div>
		</div>		
		
	</div>
		
</body>
</html>