<?php
	print(date("D F d Y h:i:s"));
	print "<br/>";
	
	print("Current time: " . time());
	$thirtyDays = 60*60*24*30;
	
	print("<br>30 days from right now: "  . (time() + $thirtyDays));
	print("<br>30 days from right now: "  . (date("D F d, Y h:i:s", time() + $thirtyDays)));
	
	$twelvehours = 60* 60 *12;
print("<br>12 hours from right now: "  . (date("D F d, Y h:i:s", time() + $twelvehours)));		
	
	
?>