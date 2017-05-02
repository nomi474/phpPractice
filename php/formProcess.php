 <?php
	//$name = $_POST['dogName'];
	//$age = $_POST['dogAge'];
	
	$name = $_REQUEST['dogName'];
	$age = $_REQUEST['dogAge'];
	
	echo("Your dog is named " . $name . " and your dog is " . $age . " years old");
	
	$dogAge = $age * 7;
	echo("<br/>");
	
	
	echo("Your dog is " . $dogAge . " years old in dog years." );
		?>