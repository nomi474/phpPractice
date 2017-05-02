<?php
	setcookie("band", "Journey", time()+ 3600);	//Expires in One Hour
	setcookie("food", "pasta", time() + (60 * 60 *24 * 30));	//30 Day cookie
	
	
	setcookie("name", "Joan", (time()-1));
	
?>
