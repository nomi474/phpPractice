<?php
	$emailTo = "nomi474@yahoo.com";

	$subject = "Email from PHP code";

	$body = "I think it's fantastic to send email via PHP";

	$headers = "From: nomi474@yahoo.com";

	if (mail($emailTo, $subject, $body, $headers)) {
		echo "The email was sent successfully.";
	} else{
		echo "Sorry, we couldn't send your email. Please try again later.";
	}

?>