<?php
	$myArray = array("Hamad", "Yasir", "Khalid", "Imran");

	print_r($myArray);
	echo "<br></br>";	

	echo $myArray[3];

	$anotherArray[0] = "pizza";
	$anotherArray[1] = "red peppers";
	$anotherArray[5] = "crushed cheese";

	$anotherArray["myFavouriteFood"] = "fried chicken";

	print_r($anotherArray);

	echo "<br></br>";

	$thirdArray = array("France" => "French", 
						"USA" => "English", 
						"Germany" => "German");

	unset($thirdArray["France"]);

	print_r($thirdArray);

	echo "<br></br>";


	echo sizeof($thirdArray);
	
	echo "<br></br>";
?>

PHP arrays are associative.