<?php

	session_start();
	$name=$_SESSION['name'];
	$pw=$_SESSION['password'];
	$age=$_SESSION['age'];
	
	print("Stored in the session: $name $pw $age");
	
	session_destroy();
	print("Session Destroyed. Please go to <a href='sessions3.php'>Sessions 3</a>" );
?>