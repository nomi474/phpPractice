<?php

	session_start();
	if(isset($_SESSION['name'])){
		$name=$_SESSION['name'];
		$pw=$_SESSION['password'];
		$age=$_SESSION['age'];
	} else {
		print("Session appears to have been terminated.");
	}
?>