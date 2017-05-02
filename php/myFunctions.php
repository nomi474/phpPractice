 <?php
	function farToCel($far){
		$cel = (($far - 32) / 9) * 5;
		return $cel;
	}
	
	function celToFar($cel){
		$far = ((9/5) * $cel) + 32;
		return $far;
	}
	?>