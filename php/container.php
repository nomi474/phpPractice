<html lang="en">
<head>
<title>Display included data</title>	
</head>
<body>
 <?php
							print("Printer from container.php <br/>");
							include_once("includes.php");
							print("<br/>");
							include("includes.php");
							print("<br/>");
							require_once("includes.php");
							print("<br/>");
							require("includes.php");
							print("<br/>");
		?>
		
</body>
</html>