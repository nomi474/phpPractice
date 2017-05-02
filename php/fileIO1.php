<html lang="en">
<head>
<title>File Save</title>
 <?php
		?>
</head>
<body>
 <?php
	$fileName = "names.txt";
	$fp = fopen($fileName, 'w') or die ("Can't open the file");
	$name = array("Mark", "Kevin", "Amina","Alisha", "Aafiya", "Rayhan");
	for($i=0;$i < count($name); $i++){
		fwrite($fp, $name[$i] . "\r\n");
	}
	fwrite($fp, "#####END OF NAMES LIST#####\n");
	
	fclose($fp);
	print("List of names saved");
		?>
		
</body>
</html>