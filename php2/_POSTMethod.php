<?php

	$names = array("Nomi","Bina", "Rubbiya", "Sufyan");

	$i = 0;
	$foundName = false;

	while ($i < sizeof($names)){
		if ($_POST["name"]==$names[$i]){
			$foundName = true;
			break;
		}
		$i++;
	}
	if($foundName){

			echo "Hello ".$_POST["name"];
		}else{

			echo "Sorry, I don't know you";
		}


?>

<p>Please enter your name.</p>

<form method="post">
	<input name="name" type="text">
	<input type="submit" value = "Go!">
</form>




