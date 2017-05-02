
 <?php
	require_once("db_connect.php");
	$id = $_REQUEST['id'];
	
	//echo($id);
	$sql = "DELETE FROM employees WHERE empId = '" . $id . "'";
	//echo $sql;
	
	if(mysqli_query($conn,$sql)){
		echo "Record deleted successfully";
	}else{
		echo "Error: " . mysqli_error($conn);
	}
	
	mysqli_close($conn);
	echo("<br/><a href=\"sqlIndex.php\">Main page</a>");

		?>