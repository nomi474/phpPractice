<html lang="en">
<head>
<title></title>
 <?php
		?>
</head>
<body>
 <?php
	$file = "Parts.csv";
	$fp = fopen($file, "r");
	$output = "";
	while(!feof($fp)){
		$inventory = fgetcsv($fp, 1024);
		$line = "";
		$line .= "<tr>";
		$line .= "<td>" . $inventory[0] . "</td>";
		$line .= "<td>" . $inventory[1] . "</td>";
		$line .= "<td>" . $inventory[2] . "</td>";
		$line .= "<td>" . $inventory[3] . "</td>";
		$line .= "</tr>";
		$output .= $line;
	}
		print("<table border= '1'>" . $output .	"</table>)");
		?>

</body>
</html>