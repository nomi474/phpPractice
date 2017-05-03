<?php

	$name = "Nomi";
	echo "<p>My name is $name </p>";

	$string1 = "<p>This is the first line.</p>";

	$string2 = "<p>This is the second part</p>";

	echo $string1 . " " . $string2;

	$myNumber = 45;

	$calculation = $myNumber * 31 / 97 + 4;

	echo "The result of the  calculation is ".$calculation;
	$myBool = true;
	echo "<p>This statement is true?".$myBool."</p>";

	$variableName = "name";

	echo $$variableName;
?>