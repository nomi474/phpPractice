<html lang="en">
<head>
<title>HTML email</title>
 <?php
		?>
</head>
<body>
 <?php
	$to = "nomi.sheikh@gmail.com";
	$from  = "erinie@learntoprogram.tv";	
	$subject = "HTML test email";
	$message = "<html><body><h1>This is a test HTML email from the PHP class</h1></body></html>";
	$message = "from LearnToProgram.tv";

	$headers = "From:" . $from. "\r\n";
	$headers = "Reply-To " . $from . "\r\n";
	$headers = "MIME-Version : 1.0\r\n";
	$headers = "Content-Type: text/html; charset=ISO-8859-1\r\n";
	mail($to, $subject, $message, $headers);
	echo("Mail has been sent.");
		?>
		
</body>
</html>