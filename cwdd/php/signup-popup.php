<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$from = 'Civil War Digital Digest Popup Form'; 
		$to = 'civilwardigitaldigest@gmail.com'; 
		$subject = 'Message from CWDD Popup Form ';
		
		$body ="From:\n Name: $name\n E-Mail: $email\n Message:\n $message";
                
		// Check for errors
		if (!$_POST['name'] || !$_POST['email'] || !$_POST['message']) {
			$errError = 'Some information is missing. Unable to send.';
		}
		
		// If there are no errors, send the email
                if (!$errError) {
                    if (mail ($to, $subject, $body, $from)) {
                        $result='<div class="alert alert-success">Message sent. Thank you for contacting the CWDD.</div>';
                    } else {
                        $result='<div class="alert alert-danger">Sorry, there was an error sending your message. Please try again.</div>';
                    }
                }
		
	}
?>
