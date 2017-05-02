<html lang="en">
<head>
<title>Arrays</title>	
</head>
<body>
 <?php
					$family = array("Nomi", "Bina", "Naveen", "Rubbiya", "Sufyan");
					
					$vehicles[0] = "car";
					$vehicles[1] = "truck";
					$vehicles[2] = "van";
					$vehicles[3] = "bus";
					
					print ($family[0] . " just purchased a new " . $vehicles[0]);
					print "<br/>";
					print ($family[3] . " vacations on a " . $vehicles[2]);
					
					print "<br/>";
					for($i = 0; $i < count($family); $i++){
							print($family[$i]);
							print "<br/>";
					}
		?>
		
</body>
</html>