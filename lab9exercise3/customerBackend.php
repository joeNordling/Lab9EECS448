<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
	echo "<body style= 'background-color: aqua'>";
	echo "<link href='style.css' rel='stylesheet' type='text/css'>";
	echo "<div align='center'>";
	echo "<p class='backend'>";
	echo "Welcome! <br>".$_POST["username"]."<br>";
	echo "Your Password is ".$_POST["password"]."<br><br>";
	echo "You bought ".$_POST["apple"]." Apples at 0.50$ a piece for a total of ".($_POST["apple"]*0.5)."<br><br>";
	echo "You bought ".$_POST["orange"]." Oranges at 0.25$ a piece for a total of ".($_POST["orange"]*0.25)."<br><br>";
	echo "You bought ".$_POST["banana"]." Bananas at 0.29$ a piece for a total of ".($_POST["banana"]*0.29)."<br><br>";
	echo "You Selected: ".$_POST["shipping"]." Day Shipping<br><br>";
	
	$total = ($_POST["apple"]*0.5)+ ($_POST["orange"]*0.25)+($_POST["banana"]*0.29);
	if($_POST["shipping"] == 3){
		$total = $total + 5;
	}
	if($_POST["shipping"] == 1){
		$total = $total + 50;
	}
	echo "Your Total is: ".$total."<br>";

	echo "</p>";
	echo "</div>";
?>