<html lang="en">
<head>
<title></title>	
</head>
<body>
 <?php
						$age = $_REQUEST['age'];
						$citizen = $_REQUEST['citizen'];
						
						if($age > 18 && $citizen == "true"){
								print("<strong>You are eligible to vote</strong>");
								
						}
		?>
		
</body>
</html>