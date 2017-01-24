
<?php

class sendMailModel
{

	public function send($arr, $List)
	{
	 	
		foreach ($List as $key => $value) 
   			 {
				$fromMail = $_SESSION['Email']; //from 
				
				 //to
				  $message = "Hey you are invitated to ".$arr[2];
				  $headers = "From: ".$fromMail;
				 

				  $sent = mail($value, "Invitation to the Event", $message, $headers);
				  //var_dump($sent);
			 }

			 echo "<p style='font-size:25px; font-family:serif;'>We are inviting your friends. Please wait.<p>";

			 header('Location: http://localhost/Eveni/views/eventCreatedView.php');
			 
			 

}
}
