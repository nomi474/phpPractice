<html lang="en">
<head>
<title></title>
 <?php
	require("myFunctions.php");	
		?>
</head>
<body>
 <?php
		$temperature = $_REQUEST['temperature'];
		$degrees = $_REQUEST['degrees'];

			if($temperature == "celcius"){
					print("The temperature from Celcius to Farenheit is " . celToFar($degrees));
			}elseif($temperature == "farenheit"){
				print("The temperature from Farenheit to Celcius is " . 	farToCel($degrees));								
			}
 /*
	$celcius = farToCel(109);
	$farenheit = celToFar(49);
	print($celcius . "<br/>");
	print($farenheit . "<br/>");
	*/
	?>
		
</body>
</html>