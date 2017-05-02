<html lang="en">
<head>
<title>Associate Arrays</title>	
</head>
<body>
 <?php
					//Declare the Array
					$gpas = array(
														"Smith" => 3.25,
														"Sufyan" => 3.1,
														"Nomi" => 2.5,
														"Bina" => 1.77,
														"Naveen" => 4.0,
														"Rubbiya" => 3.11						
													);
					print ("Smith has a gpa of " . $gpas["Smith"] . "<br/>");
					print ("Sufyan has a gpa of " . $gpas["Sufyan"] . "<br/>");
					
					//Multidimensional arrays
					$teams = array
														(
															"Pakistan" => array
																			(
																				 "Shoaib Malik",
																					"Imad Wasim",
																					"Azhar Ali",
																				 "Wahab Riaz"
																			),
																"England"  => array
																			(
																				"Jos Butler",
																				"Joe Root",
																				"Alex Hales",
																				"Johnny Bairstow"
																			),
																	"Australia"  => array
																				(
																					"Steven Smith",
																					"Starc Mitchell",
																					"Nathan Lyon",
																					"Shane Watson"
																				)
														);
									print($teams['Pakistan'][0]);
									echo "<br/>";
									echo($teams['England'][3]);
		?>
		
</body>
</html>