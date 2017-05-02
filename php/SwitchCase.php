<html lang="en">
<head>
<title>Switch Case statements</title>	
</head>
<body>
 <?php
					$grade = 'f';
					
					switch($grade){
									case 'A':
									case 'a':
													print("That's a great grade");
													break;
									case 'B':
										case 'b':
														print("That's a good grade");
													break;
									case 'C':
										case 'c':
												print("That's an average grade");
													break;
									case 'D':
										case 'e':
										print("That's a low passing grade");
													break;
									case 'F':
										case 'f':
										print("You are failing. You must retake the course");
													break;
									default:
											print("Letter grade not recognized");
					}
		?>
		
</body>
</html>