<?php
	if (isset($_POST["submit"])) {
		$firstName = $_POST['first-name'];
                $lastName = $_POST['last-name'];
                $city = $_POST['city'];
                $state = $_POST['state'];
                $country = $_POST['country'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$human = intval($_POST['human']);
		$from = 'Civil War Digital Digest Contact Form'; 
		$to = 'civilwardigitaldigest@gmail.com'; 
		$subject = 'Message from CWDD Contact Form ';
		
		$body ="From:\n Last Name: $lastName\n First Name: $firstName\n E-Mail: $email\n City: $city\n State: $state\n Country: $country\n Message:\n $message";
		// Check if first name has been entered
		if (!$_POST['first-name']) {
			$errFirstName = 'Please enter your first name. Please try again.';
		}
                
                // Check if last name has been entered
                if (!$_POST['last-name']) {
			$errLastName = 'Please enter your last name. Please try again.';
		}
                
                // Check if city has been entered
                if (!$_POST['city']) {
			$errCity = 'Please enter your city. Please try again.';
		}
                
                // Check if state has been entered
                if (!$_POST['state']) {
			$errState = 'Please enter your state. Please try again.';
		}
                
                // Check if country has been entered
                if (!$_POST['country']) {
			$errCountry = 'Please enter your country. Please try again.';
		}
		
		// Check if email has been entered and is valid
		if (!$_POST['email']) {
			$errEmail = 'Please enter a valid email address. Please try again.';
		}
		
		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message. Please try again.';
		}
		//Check if simple anti-bot test is correct
		if ($human !== 5) {
			$errHuman = 'Your anti-spam is incorrect. Please try again.';
		}
                
                // If there are no errors, send the email
                if (!$errFirstName && !$errLastName && !$errCity && !$errState && !$errCountry && !$errEmail && !$errMessage && !$errHuman) {
                        if (mail ($to, $subject, $body, $from)) {
                                $result='<div class="alert alert-success">Message sent. Thank you for contacting the CWDD.</div>';
                        } else {
                                $result='<div class="alert alert-danger">Sorry, there was an error sending your message. Please try again.</div>';
                        }
                }
	}
?>