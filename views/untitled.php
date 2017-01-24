
<?php

class sendEmailModel
{

	function send($List)
	{

$user_email = "rath.shakti1994@gmail.com"; //from  
$friend_email = "aman1381singh@gmail.com"; //to
  $message = "Test Email.";
  $headers = "From: ".$user_email;
  $sent = mail($friend_email, "Test email for Eveni", $message, $headers);

}
}
