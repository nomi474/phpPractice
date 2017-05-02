
 <?php
	require_once("db_connect.php");
	$id = $_REQUEST['id'];
	
	$sql = "SELECT * FROM employees WHERE empId = '" . $id . "'";
	//$sql = "DELETE FROM employees WHERE empId = '" . $id . "'";
	//echo $sql;
	
	$result = (mysqli_query($conn,$sql)) or die(mysqli_error($conn));
	$row = mysqli_fetch_array($result)  or die(mysqli_error($conn));
	mysqli_close($conn);
	echo("<br/><a href=\"sqlIndex.php\">Update more records</a>");
	//echo($lName . " successfully added to the datbase");
		?>
<html lang="en">
<head>
<title>Insert Employee</title>	
</head>
<body>
	<form action="update_process.php" method="post">
		<input type="hidden" name="id" value="<?php print($id) ?>" />
		<p>Last Name: &nbsp;&nbsp;
		<input type="text" value = "<?php print($row['lastName']) ?>" name="lName"></p>
		<p>First Name:&nbsp;&nbsp; 
		<input type="text"  value = "<?php print($row['firstName']) ?>" name="fName"></p>
		<p>Department: &nbsp;&nbsp;
		<select name="department">
			<option <?php if($row['department']==1){print('selected');} ?> value="1">Accounting</option>
			<option <?php if($row['department']==2){print('selected');} ?> value="2">Sales</option>
			<option <?php if($row['department']==3){print('selected');} ?> value="3">Information Technology</option>
			<option <?php if($row['department']==4){print('selected');} ?> value="4">Management</option>
		</select>
		<p>Position: &nbsp;&nbsp;
		<input type="text"  value = "<?php print($row['position']) ?>" name="pos"></p>
		<p>Salary: &nbsp;&nbsp;
		<input type="text"  value = "<?php print($row['salary']) ?>" name="sal"></p>
		
		<input type="submit" value="Update the value" />
	</form>
</body>
</html>