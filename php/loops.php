<html lang="en">
<head>
<title>loops</title>	
</head>
<body>
 <?php
						$i=0;
						
						while($i < 101)
						{
									print($i . "   ");
									$i+=5;
						}
						print("<br/>");
						$airlines = array("American", "Southwest", "Delta", "US Airways", "United", "Jet Blue", "Frontier");						
						$x = 0;
						/*
						while($x < count($airlines)){
									print($airlines[$x] . "<br/>");
									$x++;
						}
						*/
						do{
									print($airlines[$x] . "<br/>");
									$x++;
						} while ($x < count($airlines));
						
						$i=50;
						
						do
						{
									print($i . "   ");
									$i++;
						}while($i < 31);
						
		?>
		
</body>
</html>