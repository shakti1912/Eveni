
<?php

echo "sh";
	$config = require("/Applications/XAMPP/xamppfiles/htdocs/Eveni/configs/config.php");
 $con = mysqli_connect($config['host'], $config['username'], $config['password'], $config['database']);

        		$result = mysqli_query($con,"select Email from EventGuestList where Email='rathore.shakti1912@gmail.com'");
		
			echo mysqli_num_rows($result);
			$row = $result->fetch_row();
			echo $row;
			
$fromMail = $_SESSION['Email']; //from 

				
				  $message = "Hey you are invitated to ";
				  $headers = "From: ".$fromMail;
				 // $to = "rath.shakti1994@gmail.com";

				  $sent = mail($row, "Invitation to the Event", $message, $headers);
				   var_dump($sent);