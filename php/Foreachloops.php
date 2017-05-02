<html lang="en">
<head>
<title>Foreach loops</title>	
</head>
<body>
 <?php
							$gpas;
							$gpas["Nomi"] = 3.62;
							$gpas["Bina"] = 2.75;
							$gpas["Naveen"] = 4.00;
							$gpas["Rubbiya"] = 2.10;
							$gpas["Sufyan"] = 2.87;
							
							$totalGpa = 0;
							$avgGpa=0;
							
							foreach($gpas as $key => $value){
										print("Name: " . $key . "</br>");
										print("GPA: " . $value . "</br>");
										$totalGpa += $value;
							}
								print("Total GPA: " . $totalGpa . "</br>");
								$avgGpa = $totalGpa/count($gpas);
								print("Average GPA: " . $avgGpa . "</br>");
								
		?>
		
</body>
</html>