 <?php
	require_once("db2_connect.php");	
	$lastName = $_REQUEST['lastName'];
	$firstName = $_REQUEST['firstName'];
	$test1Grade = $_REQUEST['test1Grade'];
	$test2Grade = $_REQUEST['test2Grade'];
	$test3Grade = $_REQUEST['test3Grade'];
	$test4Grade = $_REQUEST['test4Grade'];	
	$finalExamGrade = $_REQUEST['finalExamGrade'];
	
	$sql = "UPDATE students SET " .
		"lastName = '" . $lastName . "', " .
		"firstName = '" . $firstName . "', " .
		"test1Grade = '" . $test1Grade . "', " .
		"test2Grade = '" . $test2Grade . "', " .
		"test3Grade = '" . $test3Grade . "', " .
		"test4Grade = '" . $test4Grade . "', " .
		"finalExamGrade = '" . $finalExamGrade . "'" .
		" WHERE firstName = '" . $firstName .
		"' AND lastName = '" . $lastName . "';";
	echo $sql;
	if(mysqli_query($conn,$sql)){
		//echo "User " . $id . " has been updated.";
	}else{
		echo "Error: " . mysqli_error($conn);
	}
	
	mysqli_close($conn);
	echo("<br/>Back to <a href=\"grade_list.php\">Main page</a>");
		?>