<?php
	$name = "Mark";
	
	echo("My name is $name");
	echo('<br/>My name is $name');
	echo("<br/>");
	
	/*
	$poem = <<<TEST
	Roses are red <br/>
	Violets are Blue <br/>
	I'm no fan of Heredocs <br/>
	But you might be too <br/>
	TEST;
		*/
	$poem = "Roses are red <br/>
	Violets are Blue <br/>
	I'm no fan of Heredocs <br/>
	But you might be too <br/>";

	
	print_r(str_split($name));
	print("<br/>" . strrev("Wheel of fortune"));
	echo("<br/>");
	print(substr($poem, 0, 40));
	echo("<br/>");
	print(crypt($poem));
	
?>