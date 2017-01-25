
<?php

class signUpModel 
{
	public function saveUserData($arr)
	{
			
		$config = require("./../configs/config.php");
		 $con = mysqli_connect($config['host'], $config['username'], $config['password'], $config['database']);   
		$stmt = mysqli_prepare($con,'INSERT INTO SignUp(FirstName, LastName, Email, Password) VALUES (?,?,?,?)');
		mysqli_stmt_bind_param($stmt, "ssss", $arr[0],$arr[1],$arr[2],$arr[3]);
		mysqli_stmt_execute($stmt);
<<<<<<< Updated upstream
		//echo "You have successfully signed up. Check your email.";
		
=======
		echo "You have successfully signed up. Check your email.";
>>>>>>> Stashed changes





	}



}