<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
		$q1 = $_POST["q1"];
		$q2 = $_POST["q2"];
		$q3 = $_POST["q3"];
		$q4 = $_POST["q4"];
		$q5 = $_POST["q5"];
		echo "<p>";
		echo "1) What is put before variables in PHP?<br> ";
		echo "\t You answered: ".$q1."<br>";
		echo "\t Correct Answer: ".$q1."<br><br>";
		echo "2) What does PHP stand for?<br> ";
		echo "\t You answered: ".$q2."<br>";
		echo "\t Correct Answer: ".$q2."<br><br>";
		echo "3) What keyword is used to load a php file in html?<br> ";
		echo "\t You answered: ".$q3."<br>";
		echo "\t Correct Answer: ".$q3."<br><br>";
		echo "4) PHP will not display anything if ...<br> ";
		echo "\t You answered: ".$q4."<br>";
		echo "\t Correct Answer: ".$q4."<br><br>";
		echo "5) PHP is used for<br> ";
		echo "\t You answered: ".$q5."<br>";
		echo "\t Correct Answer: ".$q5."<br><br>";
		
		$total = 0;
		if($q1 == "$"){
			$total = $total + 1;
		}
		if($q2 == "HyperText Preprocessor"){
			$total = $total + 1;
		}
		if($q3 == "Include"){
			$total = $total + 1;
		}
		if($q4 == "There is a syntax error."){
			$total = $total + 1;
		}
		if($q5 == "Backend Development"){
			$total = $total + 1;
		}
		$percent = $total/5*100;
		echo "You Scored ".$total." out of 5 <br>";
		echo "That is a ".$percent."%";
	echo "</p>";
?>