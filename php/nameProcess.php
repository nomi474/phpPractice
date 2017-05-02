 <?php
	//$name = $_POST['dogName'];
	//$age = $_POST['dogAge'];
	
	$fName = $_REQUEST['fName'];
	$lName = $_REQUEST['lName'];
	$phone = $_REQUEST['phone'];
	
	$line = "\r\n" . $fName . "," . $lName . "," . $phone;
	$file = "fullNames.txt";
	$fp = fopen($file,'a');
		fwrite($fp, $line);
		//print("New name appended to the end of the file");
		fclose($fp);
	$fp2 = fopen($file, 'r');
	$output = "";
	while(!feof($fp2)){
		$inventory = fgetcsv($fp2, 1024);
		$line = "";
		$line .= "<tr>";
		$line .= "<td>" . $inventory[0] . "</td>";
		$line .= "<td>" . $inventory[1] . "</td>";
		$line .= "<td>" . $inventory[2] . "</td>";
		$line .= "</tr>";
		$output .= $line;
	}
	print("<table border= '1'>" . $output .	"</table>)");
		?>
		<HTML>
			<head></head>
			<body>
				<a href="names.html">Back to input form</a>
			</body>
		</HTML>