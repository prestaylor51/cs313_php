
<?php
	if (basename($_SERVER['PHP_SELF']) == 'browse.php') {
		$browse = "active";
		$cart = "";
		$checkout = "";
	}
	elseif (basename($_SERVER['PHP_SELF']) == 'cart.php') {
		$browse = "";
		$cart = "active";
		$checkout = "";
	}
	elseif (basename($_SERVER['PHP_SELF']) == 'checkout.php'){
		$browse = "";
		$cart = "";
		$checkout = "active";
	}
	else {
		$browse = "";
		$cart = "";
		$checkout = "";
	}
?>


<nav class="navbar navbar-default">
	<div class="container">
		<div class="navbar-header">
			<p>ValCo OutDoor</p>
		</div>
		 <ul class="nav navbar-nav">
		 <?php
		  echo "<li class='$browse'><a href='browse.php'>Browse</a></li>
	      		<li class='$cart'><a href='cart.php'>Cart</a></li>
	      		<li class='$checkout'><a href='checkout.php'>Checkout</a></li>";
	      ?>
	    </ul>
		
	</div>
	
</nav>
