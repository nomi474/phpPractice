<html lang="en">
<head>
<title></title>
 <?php							
							function double($value){
												$value = $value + $value;
												return $value;
							}
									?>
</head>
<body>
 <?php
							print("The value of 25.55 doubled is " . double(25.55));
							
							$result = double(37);
							print("<br/>");
							print("The result is: " . $result);
								print("<br/>");
								
								$a = 45;
								$b=57.25;
								$c=18;
								
								$result2 = double($a-$b)/$c * double($a/$b/$c) + double(double($a));
								print("Result2 is : " . $result2);
								print("<br/>");
								print(strtoupper("this is in lowercase"));
		?>
		
</body>
</html>