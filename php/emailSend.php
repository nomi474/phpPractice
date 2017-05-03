<html lang="en">
<head>
<title>Send Some mail</title>
</head>
<body>
 <?php
	$to = "nomi.sheikh@gmail.com";
	$subject = "Feedback for you";
	$message = "This is a test email from the PHP class";
	$message = "from LearnToProgram.tv";
	$from  = "erinie@learntoprogram.tv";
	$headers = "From:" . $from;
	mail($to, $subject, $message, $headers);
	echo("Mail has been sent.");
		?>
		
</body>
</html>