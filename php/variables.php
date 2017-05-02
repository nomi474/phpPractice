<html lang="en">
<head>
<title>Variables</title>	
</head>
<body>
 <?php
				$age = 37;
				$name = "Mark Lassoff";
				$taxRate = .06;
				
				
				print($name);
				print("<br/>");
				print($age);
				print("<br/>");
				print($name . " is " . $age . " years old");
				print("<br/>");
				printf("Tax rate in Connecticut is %0.2f", $taxRate);
				
				$value =37*3/14+25-6+.003/6;
				print("<br/>");
				print("Value: " . $value);
		?>
		
</body>
</html>