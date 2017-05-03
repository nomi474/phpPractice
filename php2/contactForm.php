<?php
	$error = "";  
	$successMessage = ""; 
	$errorMessage= ""; 
	$emailErr =  "";

	if($_POST) {

		if(!$_POST["email"]){
			$error .= "An email address is required. <br>";
		}

		if(!$_POST["subject"]){
			$error .= "A subject is required. <br>";
		}

		if(!$_POST["content"]){
			$error .= "Content is required. <br>";
		}

		if ($_POST["email"] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false) {
		  $emailErr .= "The email address is  invalid. <br>"; 
		}

		 if ($error != ""){
		        $error = '<div class="alert alert-danger" role="alert"><strong>There were error(s) in your form. ' . $error .
				  '</strong></div>';
	     } else {
	     	$emailTo = "nomi474@yahoo.com";

	     	$subject = $_POST["subject"];

	     	$content = $_POST["content"];

	     	$headers = "From: ".$_POST["email"];

	     	if(mail($emailTo, $subject, $content, $headers)){
	     		$successMessage = '<div class="alert alert-success" role="alert"><strong>Your message was sent. We\'ll get back to you soon.</strong></div>';
	     	} else {
	     		$errorMessage = '<div class="alert alert-danger" role="alert"><strong>Your message couldn\'t be sent. Please try again.</strong></div>';
	     	}
	     }
	}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  </head>
  <body>
  	<div class="container">
    	<h1>Get in Touch.</h1>
    	<div id="error"><? echo $error, $successMessage; ?></div>
  	<form method="post">
	  <fieldset class="form-group">
	    <label for="email">Email address</label>
	    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter your email address">
	    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
	  </fieldset>
	  <fieldset class="form-group">
	    <label for="subject">Subject</label>
	    <input type="text" class="form-control" id="subject" name="subject">
	  </fieldset>
	 
	  <fieldset class="form-group">
	    <label for="content">Please submit your query below.</label>
	    <textarea class="form-control" id="content" name="content" rows="3"></textarea>
	  </fieldset>
	 
	  <button type="submit" id="submit" name="submit" class="btn btn-primary">Submit</button>
	</form>
	</div>
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

    <script type="text/javascript">
    	    	$("form").submit(function(e){

	        var error = "";

			if($("#email").val() == "") {
	        	error += "<p>The email field is required. </p>";
	        }


	        if($("#subject").val() == "") {
	        	error += "<p>The subject field is required. </p>";
	        }

	        if($("#content").val() == "") {
	        	error += "<p>The content field is required. </p>";
	        }	        
	        if (error != ""){
		        $("#error").html('<div class="alert alert-danger" role="alert"><strong>There were error(s) in your form.</strong> ' + error + 
				  '</div>');

		        return false;
	        } else {
	        	return true;
	        }
	    });
    </script>
  </body>
</html>