<?php
require_once("db2_connect.php");

$sql = "SELECT * FROM students";
//$result = mysqli_query($mysqli,$sql, MYSQLI_STORE_RESULT) or die(mysql_error());

$result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT) or die(mysql_error());
$testAvg = 0;
$letterGrade="";

echo "<table border = '1'>";
echo "<tr>
		<th>Last Name</th>
		<th>First Name</th>
		<th>test1 Grade</th>
		<th>test2 Grade</th>
		<th>test3 Grade</th>
		<th>test4 Grade</th>
		<th>Final Exam Grade</th>
		<th>Test Average</th>
		<th>Final letter grade</th>
		<th>Delete</th>
		<th>Update</th>
	</tr>";
while($row = mysqli_fetch_array($result,MYSQLI_BOTH)) {		//or die (mysql_error());
	
	$testAvg = ($row['test1Grade'] + $row['test2Grade'] +
				 $row['test3Grade'] + $row['test4Grade'] +
				  $row['finalExamGrade'])/5;
	
	if($testAvg >= 90 && $testAvg <=100){
		$letterGrade = 'A';
	}elseif($testAvg >= 90 && $testAvg <=100){
		$letterGrade = 'A';
	}elseif($testAvg >= 80 && $testAvg < 90){
		$letterGrade = 'B';
	}elseif($testAvg >= 70 && $testAvg < 800){
		$letterGrade = 'C';
	}elseif($testAvg >= 60 && $testAvg < 70){
		$letterGrade = 'D';
	}elseif($testAvg < 60){
		$letterGrade = 'F';
	}else{
		$letterGrade = "Unknown.";
	}
	echo "<tr>";
	echo "<td>" . $row['lastName'] . "</td>"
		. "<td>" . $row['firstName'] . "</td>"
		. "<td>" . $row['test1Grade'] . "</td>"
		. "<td>" . $row['test2Grade'] . "</td>"
		. "<td>" . $row['test3Grade'] . "</td>"
		. "<td>" . $row['test4Grade'] . "</td>"
		. "<td>" . $row['finalExamGrade'] . "</td>"
		. "<td>" . $testAvg . "</td>"
		. "<td>" . $letterGrade . "</td>"
		. "<td><a href=grades_delete.php?lastName=" . $row['lastName'] . "&firstName=" . $row['firstName'] . ">Delete</a></td>"
		. "<td><a href=grades_update.php?lastName=" . $row['lastName'] . "&firstName=" . $row['firstName'] . ">Update</a></td>";
	echo "</tr>";
}
echo "</table>";	
?>