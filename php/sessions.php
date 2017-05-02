<?php

	session_start();
	
	$name="Mark";
	$_SESSION['name'] = $name;
	$_SESSION['password'] = "lobsterchops";	
	$_SESSION['age'] = 37;
	
?>

		<a href="sessions2.php">Sessions 2</a>