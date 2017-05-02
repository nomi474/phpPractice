<html lang="en">
<head>
<title>Ternary operators</title>	
</head>
<body>
 <?php
							$age = 19;
							
							$voteString = ($age >=18) ? "can vote" : "can't vote";
							
							print $voteString;
							
							$testScore = 67;
							
							$pass = ($testScore>=60)? "true" : "false";
							print("<br/>" . $pass);
		?>
		
</body>
</html>