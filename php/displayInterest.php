 <?php
							$principal = $_REQUEST['principal'];
							$interestRate = $_REQUEST['interestRate'];
							$term = $_REQUEST['term'];
							
							$monthlyInterestRate = $interestRate/12;
							$monthlyInterest = 0;
							
							print("<table border = 1*
																<tr>
																			<th>Month</th>
																			<th>Interest earned</th>
																			<th>Principal balance</th>
																</tr>");
											for($i=1; $i <= $term; $i++){
													$monthlyBalance = $principal + $monthlyInterest;
													$principal = $monthlyBalance;
													$monthlyInterest = $principal * $monthlyInterestRate;
																printf("<tr>
																									<td>Month " . $i . "</td>
																									<td>%0.2f</td>
																									<td>%0.2f</td>
																						</tr>", $monthlyInterest, $monthlyBalance);
											}
								print("</table>");
		?>