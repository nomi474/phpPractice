
 <?php
	require_once("db2_connect.php");
	$lastName = $_REQUEST['lastName'];
	$firstName = $_REQUEST['firstName'];
	
	$sql = "SELECT * FROM students WHERE lastName = '" . $lastName
				. "' AND firstName = '" . $firstName . "'";
	//$sql = "DELETE FROM employees WHERE empId = '" . $id . "'";
	echo $sql;
	
	$result = (mysqli_query($conn,$sql)) or die(mysqli_error($conn));
	$row = mysqli_fetch_array($result)  or die(mysqli_error($conn));
	mysqli_close($conn);
	echo("<br/><a href=\"grade_list.php\">Update more records</a>");
	//echo($lName . " successfully added to the datbase");
		?>
<html lang="en">
<head>
<title>Insert Employee</title>	
</head>
<body>
	<form action="update_grades_process.php" method="post">
		<p>Last Name: &nbsp;&nbsp;
		<input type="text" value = "<?php print($row['lastName']) ?>" name="lastName"></p>
		<p>First Name:&nbsp;&nbsp; 
		<input type="text"  value = "<?php print($row['firstName']) ?>" name="firstName"></p>
		<p>Test 1 Grade: &nbsp;&nbsp;
		<input type="text"  value = "<?php print($row['test1Grade']) ?>" name="test1Grade"></p>
		<p>Test 2Grade: &nbsp;&nbsp;
		<input type="text"  value = "<?php print($row['test2Grade']) ?>" name="test2Grade"></p>
		<p>Test 3 Grade: &nbsp;&nbsp;
		<input type="text"  value = "<?php print($row['test3Grade']) ?>" name="test3Grade"></p>
		<p>Test 4 Grade: &nbsp;&nbsp;
		<input type="text"  value = "<?php print($row['test4Grade']) ?>" name="test4Grade"></p>		
		<p>Final Exam Grade: &nbsp;&nbsp;
		<input type="text"  value = "<?php print($row['finalExamGrade']) ?>" name="finalExamGrade"></p>
		
		<input type="submit" value="Update the value" />
	</form>
</body>
</html>