<html lang="en">
<head>
<title>Read a file</title>
 <?php
		?>
</head>
<body>
 <?php

	$fileName = "poem.txt";
	$fp = fopen($fileName, 'r');
 /*	
	$string=fread($fp, filesize($fileName));
	
	fclose($fp);

	$string = file_get_contents($fileName,true);

	$string = fgets($fp);
	print($string);
	*/
	while(!feof($fp))
	{
		$string .= fgets($fp, 256);)
		$string .= "<br/>";
	}
	print($string);
		?>

</body>
</html>