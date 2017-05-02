
 <?php
	require_once("db_connect.php");
	$lName = $_REQUEST['lName'];
	$fName = $_REQUEST['fName'];
	$department = $_REQUEST['department'];
	$pos = $_REQUEST['pos'];
	$sal = $_REQUEST['sal'];
	
	//echo($lName);
	$sql = "INSERT INTO employees VALUES(NULL," .
						"'" . $lName . "'," .
						"'" . $fName . "'," .
						"'" . $department . "'," .
						"'" . $pos . "'," .
						"" . $sal . ")";
	//echo $sql;
	if(mysqli_query($conn,$sql)){
		echo "New record created successfully";
	}else{
		echo "Error: " . mysqli_error($conn);
	}
	
	mysqli_close($conn);
	echo("<br/><a href=\"insert.html\">Add more records</a>");
	//echo($lName . " successfully added to the datbase");
		?>