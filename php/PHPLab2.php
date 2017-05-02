<html lang="en">
<head>
<title></title>	
</head>
<body>
 <?php
					$operand1 = 15.55;
					$operand2 = 2.94;
					
					echo($operand1 . " + " . $operand2 . " = " . ($operand1 + $operand2));
					echo("<br/>");
					echo($operand1 . " - " . $operand2 . " = " . ($operand1 - $operand2));
					echo("<br/>");
					echo($operand1 . " * " . $operand2 . " = " . ($operand1 * $operand2));
					echo("<br/>");
					echo($operand1 . " / " . $operand2 . " = " . ($operand1 / $operand2));
					echo("<br/>");
					echo($operand1 . " mod " . $operand2 . " = " . ($operand1 % $operand2));
					echo("<br/>");
					
					$phrase = "If you are strong enough, then there are no precedents.";
					echo $phrase;
						echo("<br/>");
					$phrase .= "<br/> -Unknown";
					echo $phrase;
		?>
		
</body>
</html>