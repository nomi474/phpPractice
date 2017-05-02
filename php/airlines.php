<html lang="en">
<head>
<title>Appending to a file</title>
 <?php
		?>
</head>
<body>
 <?php
	$file = "airlines.txt";
	$fp = fopen($file, 'a') or die ("Can't open file");
	
	$airline1 = "US Airways";
	$airline2 = "Frontier";
	
	fwrite($fp, $airline1 . "\r\n");
	fwrite($fp, $airline2 . "\r\n");
	
	unlink("example.txt");
	
	print("Airline file written and example file deleted");
	//fclose($file);
		?>
		
</body>
</html>