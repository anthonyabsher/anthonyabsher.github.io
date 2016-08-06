<?php

	$name = $POST_['name'];
	$email = $POST_['email'];
	$message = $POST_['message'];
	$from = $email;
	$to = 'anthonyabsher@gmail.com';
	$subject = 'Hi! Contacting you from your website.';

	$body = "From: $email\n Name: $name\n\n $message";

	if( $POST_['submit'] ){

		if($name != '' && $email != ''){
			if(mail($to, $subject, $body, $from)){
				echo "<p> Message Sent </p>";
			}else {
				echo "<p> Oops! Message wasn't sent, try again! </p>";
			}
		}else{
			echo "<p> Please fill out all required fields! </p>";
		}
	}

?>