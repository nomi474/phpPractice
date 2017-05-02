<html lang="en">
<head>
<title></title>	
</head>
<body>
 <?php
						$age = 65;
						
						if($age < 18){
								print("You're still a pup! Stay in school.");
						}elseif($age >=18 && $age <=29){
									print("This is the prime of your life-- Enjoy it.");
						}elseif($age >=30 && $age <=39){
							print("This is the time to focus on your career.");
						}elseif($age >=40 && $age <=49){
								print("These might be your prime earning years.");
						}elseif($age >=50 && $age <=59){
									print("Time to get ready for retirement.");
						}elseif($age >60){
										print("What's life's next adventure?");
									}
					print("<br/>");			
									$studentGrades = array(
										                "Mary" =>  array(89, 99, 63, 85),
																										"Bob" => array(73,80,81,82),
																										"Mark" => array(90,95,91,70)
																													);
									foreach($studentGrades as $key => $value){
										//This will print the name of each student
											//print($key);
											$letterGrade = "";
													if(is_array($value)){
														//print("Value from if state: " . $value);
															$studentTotalScore = 0;
															foreach($value as $key2 => $value2){
																//print("Value2 from inner foreach" . $value2);
																	$studentTotalScore = $studentTotalScore + $value2;
															}//end for each)
															}//end if
															//T	his will print total score for each student.
														//print($studentTotalScore . "<br/>");
														$avgStudentScore = $studentTotalScore/count($value);
														//print($avgStudentScore . "<br/>");
														print($key . " has an average score of " . $avgStudentScore . "<br/>");
																		if($avgStudentScore >=90){
																					$letterGrade = "A";
																		}elseif($avgStudentScore >=80 && $avgStudentScore < 90){
																					$letterGrade = "B";
																		}elseif($avgStudentScore >=70 && $avgStudentScore < 80){
																					$letterGrade = "C";		
																		}
																		print("Therefore the letter grade is " . $letterGrade . "<br/>");					
									}//end outer foreach									
		?>
		
</body>
</html>