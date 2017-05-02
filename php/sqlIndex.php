<?php
require_once("db_connect.php");

$sql = "SELECT empId, lastName, firstName, d.departmentName, position, salary
		FROM employees e, departments d
		WHERE e.department = d.deptId";
//$result = mysqli_query($mysqli,$sql, MYSQLI_STORE_RESULT) or die(mysql_error());

$result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT) or die(mysql_error());

echo "<table border = '1'>";
echo "<tr>
		<th>Employee Id</th>
		<th>Last Name</th>
		<th>First Name</th>
		<th>Department</th>
		<th>Position</th>
		<th>Salary</th>
		<th>Delete</th>
		<th>Update</th>
	</tr>";
while($row = mysqli_fetch_array($result,MYSQLI_BOTH)) {		//or die (mysql_error());
	echo "<tr>";
	echo "<td>" . $row['empId'] . "</td>"
		. "<td>" . $row['lastName'] . "</td>"
		. "<td>" . $row['firstName'] . "</td>"
		. "<td>" . $row['departmentName'] . "</td>"
		. "<td>" . $row['position'] . "</td>"
		. "<td>" . $row['salary'] . "</td>"
		. "<td><a href='delete.php?id=" . $row['empId'] . "'>Delete</a></td>"
		. "<td><a href='update.php?id=" . $row['empId'] . "'>Update</a></td>";
	echo "</tr>";
}
echo "</table>";	
?>