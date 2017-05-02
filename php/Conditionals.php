<html lang="en">
<head>
<title>Conditionals</title>	
</head>
<body>
	
 <?php
								/*	Comparison operators
							 *		== Equivalency
							 *		> Greater than
							 *		< Less than
							 *		>=
							 *		<=
							 *		!=
							 *
							 *		Compound Conditionals
							 *			&&				and
							 *			||				or
							 */
							$age = 15;
							$citizen = true;

							if($age > 18  && $citizen){
										print("<b>You are eligible to vote</b>");
							} else {
										print("<b>You are not eligible to vote</b>");
							}
							print("<br/>");
							$gpa = .2;
							if($gpa == 4.0){
										print("You have perfect GPA");
							} elseif($gpa < 4 && $gpa > 3.0){
									print("You have a very good GPA");
							}elseif($gpa > 2.0){
										print("You have average GPA");
							}elseif($gpa > 1.0){
								print("You have a poor GPA");
							}else{
								print("Get your act together. Time to hit the books!");
							}
		?>
		
</body>
</html>