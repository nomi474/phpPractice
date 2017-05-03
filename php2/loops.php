<?php

	$family = array("Nomi", "Bina", "Rayhan", "Alisha");

	foreach ($family as $key => $value) {
		$family[$key] = $value." Sheikh";
		echo "Array item ". $key. " is ".$value."</br>";
	}

	for ($i=0; $i<sizeof($family); $i++){

		echo $family[$i]."</br>";
	}
	for ($i=10; $i >=0; $i--){

		echo $i."</br>";
	}
	echo "</br>";

	$i = 5;

	while ($i <= 50) {

		echo $i."</br>";
		$i = $i+5;
	}
	echo "</br>";
	$i=1;
	while ($i <=10){
		$j = $i * 5;
		echo $j."</br>";
		$i++;

	}
	echo "</br>";

	$foods = array("Milk", "Yoghurt", "Cheese", "Apples");
	$i = 0;
	while($i < sizeof($foods)){
		echo $foods[$i]."</br>";
		$i++;
	}
	//http://localhost/php2/loops.php?name=nomi&password=1234&gender=male
	print_r($_GET);
	echo $_GET["gender"];

?>