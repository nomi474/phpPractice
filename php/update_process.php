 <?php
	require_once("db_connect.php");	
	$id = $_REQUEST['id'];
	$lName = $_REQUEST['lName'];
	$fName = $_REQUEST['fName'];
	$department = $_REQUEST['department'];
	$pos = $_REQUEST['pos'];
	$sal = $_REQUEST['sal'];
	
	$sql = "UPDATE employees SET " .
		"lastName = '" . $lName . "', " .
		"firstName = '" . $fName . "', " .
		"department = '" . $department . "', " .
		"position = '" . $pos . "', " .
		"salary = '" . $sal .
		"' WHERE empId = '" . $id . "';";
	//echo $sql
	if(mysqli_query($conn,$sql)){
		echo "User " . $id . " has been updated.";
	}else{
		echo "Error: " . mysqli_error($conn);
	}
	
	mysqli_close($conn);
	echo("<br/>Back to <a href=\"sqlIndex.php\">Main page</a>");
		?>