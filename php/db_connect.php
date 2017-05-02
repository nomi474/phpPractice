<?php
	$db_name = "employees";
	$un = "root";
	$pw = "password";
	$host = "localhost";

	$conn = mysqli_connect($host, $un, $pw, $db_name);
	
		/* check connection */
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
	
	//echo $row['empId'] . ' ' . $row['lastName'] . ', ' . $row['firstName'] . ' ' . $row['department'] . ' ' . $row['salary'];
?>