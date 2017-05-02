
 <?php
	require_once("db2_connect.php");
	$lastName = $_REQUEST['lastName'];
	$firstName = $_REQUEST['firstName'];
	
	//echo($id);
	$sql = "DELETE FROM students
				WHERE lastName = '" . $lastName
				. "' AND firstName = '" . $firstName . "'"; 
	echo $sql;
	
	if(mysqli_query($conn,$sql)){
		echo "Record deleted successfully";
	}else{
		echo "Error: " . mysqli_error($conn);
	}
	
	mysqli_close($conn);
	echo("<br/><a href=\"grade_list.php\">Main page</a>");

		?>