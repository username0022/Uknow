<?php	
	if(empty($_POST['name_40245']) && strlen($_POST['name_40245']) == 0 || empty($_POST['email_40245']) && strlen($_POST['email_40245']) == 0 || empty($_POST['message_40245']) && strlen($_POST['message_40245']) == 0)
	{
		return false;
	}
	
	$name_40245 = $_POST['name_40245'];
	$email_40245 = $_POST['email_40245'];
	$input_2794 = $_POST['input_2794'];
	$select_913 = $_POST['select_913'];
	$date = $_POST['date'];
	$message_40245 = $_POST['message_40245'];
	$optin_40245 = $_POST['optin_40245'];
	
	$to = 'wiwi.sent@gmail.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from a Blocs website.";
	$email_body = "You have received a new message. \n\n".
				  "Name_40245: $name_40245 \nEmail_40245: $email_40245 \nInput_2794: $input_2794 \nSelect_913: $select_913 \nDate: $date \nMessage_40245: $message_40245 \nOptin_40245: $optin_40245 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@wickme.ga\n";
	$headers .= "Reply-To: $email_40245";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>