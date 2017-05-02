<html lang="en">
<head>
<title>PHP Lab 3 Arrays</title>	
</head>
<body>
 <?php
				$testone = array(
															"Smith" => 98,
															"Johnson" => 67,
															"Fields" => 71,
															"Laurel" => 68,
																				"Gold" => 91,
																				"Braverman" => 88,
																				"Stone" => 84,
																				"Kiel" => 84
																			);
				
					$testtwo = array(
												"Smith" => 75,
															"Johnson" => 88,
															"Fields" => 81,
															"Laurel" => 63,
																				"Gold" => 67,
																				"Braverman" => 82,
																				"Stone" => 77,
																				"Kiel" => 81
																		);
					
										$testthree = array(
												"Smith" => 100,
															"Johnson" => 85,
															"Fields" => 76,
															"Laurel" => 71,
																				"Gold" => 63,
																				"Braverman" => 55,
																				"Stone" => 81,
																				"Kiel" => 79
																		);
										
												$testfour = array(
												"Smith" => 91,
															"Johnson" => 81,
															"Fields" => 77,
															"Laurel" => 70,
																				"Gold" => 90,
																				"Braverman" => 82,
																				"Stone" => 90,
																				"Kiel" => 100
																		);
												$totalScoreOne = 0;
													$totalScoreTwo = 0;
														$totalScoreThree = 0;
															$totalScoreFour = 0;												

												foreach($testone as $v){
													$totalScoreOne += $v;
												}
												echo ("Total score test one: " . $totalScoreOne);
												echo "<br/>";
												
												foreach($testtwo as $v){
													$totalScoreTwo += $v;
												}
												echo ("Total score test two: " . $totalScoreTwo);
												echo "<br/>";
												
												foreach($testthree as $v){
													$totalScoreThree += $v;
												}
												echo ("Total score test three: " . $totalScoreThree);
												echo "<br/>";
												
												foreach($testfour as $v){
													$totalScoreFour += $v;
												}
												echo ("Total score test four: " . $totalScoreFour);												
												echo "<br/>";
												
												$AverageScoreOne = $totalScoreOne / count($testone);
												$AverageScoreTwo = $totalScoreTwo / count($testtwo);
												$AverageScoreThree = $totalScoreThree / count($testthree);
												$AverageScoreFour = $totalScoreFour / count($testfour);
																							
									echo("<table border=1>
														<tr>
																	<th>Name</th>
																	<th>Test One</th>
																	<th>Test Two</th>
																	<th>Test Three</th>
																	<th>Test Four</th>
															</tr>
															<tr>
																			<td>Smith</td>
																			<td>" . $testone["Smith"] . "</td>
																			<td>" . $testtwo["Smith"] . "</td>
																			<td>" . $testthree["Smith"] . "</td>
																			<td>" . $testfour["Smith"] . "</td>
															</tr>
															<tr>
																			<td>Johnson</td>
																			<td>" . $testone["Johnson"] . "</td>
																			<td>" . $testtwo["Johnson"] . "</td>
																			<td>" . $testthree["Johnson"] . "</td>
																			<td>" . $testfour["Johnson"] . "</td>
															</tr>
															<tr>
																			<td>Fields</td>
																			<td>" . $testone["Fields"] . "</td>
																			<td>" . $testtwo["Fields"] . "</td>
																			<td>" . $testthree["Fields"] . "</td>
																			<td>" . $testfour["Fields"] . "</td>
															</tr>
															<tr>
																			<td>Laurel</td>
																			<td>" . $testone["Laurel"] . "</td>
																			<td>" . $testtwo["Laurel"] . "</td>
																			<td>" . $testthree["Laurel"] . "</td>
																			<td>" . $testfour["Laurel"] . "</td>
															</tr>
																<tr>
																			<td>Gold</td>
																			<td>" . $testone["Gold"] . "</td>
																			<td>" . $testtwo["Gold"] . "</td>
																			<td>" . $testthree["Gold"] . "</td>
																			<td>" . $testfour["Gold"] . "</td>
															</tr>
															<tr>
																			<td>Braverman</td>
																			<td>" . $testone["Braverman"] . "</td>
																			<td>" . $testtwo["Braverman"] . "</td>
																			<td>" . $testthree["Braverman"] . "</td>
																			<td>" . $testfour["Braverman"] . "</td>
															</tr>
															<tr>
																			<td>Stone</td>
																			<td>" . $testone["Stone"] . "</td>
																			<td>" . $testtwo["Stone"] . "</td>
																			<td>" . $testthree["Stone"] . "</td>
																			<td>" . $testfour["Stone"] . "</td>
															</tr>
															<tr>
																			<td>Kiel</td>
																			<td>" . $testone["Kiel"] . "</td>
																			<td>" . $testtwo["Kiel"] . "</td>
																			<td>" . $testthree["Kiel"] . "</td>
																			<td>" . $testfour["Kiel"] . "</td>
															</tr>
															<tr></tr>
															<tr>
																			<td>Average</td>
																			<td>" . $AverageScoreOne . "</td>
																			<td>" . $AverageScoreTwo . "</td>
																			<td>" . $AverageScoreThree . "</td>
																			<td>" . $AverageScoreFour . "</td>
															</tr>
									</table>"												);


		?>
		
</body>
</html>