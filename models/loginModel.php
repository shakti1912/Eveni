
<?php

class LoginModel 
{
	public function findUser($arr)
	{	
		$config = require("./../configs/config.php");
		 $con = mysqli_connect($config['host'], $config['username'], $config['password'], $config['database']);   
		$stmt = mysqli_prepare($con, "select FirstName, LastName from signup where Email=? and Password=?");
		 mysqli_stmt_bind_param($stmt, "ss", $arr[0], $arr[1]);
		  mysqli_stmt_execute($stmt);
		  mysqli_stmt_bind_result($stmt, $first, $last );
		mysqli_stmt_fetch($stmt);
		if(!$first)
		{
			echo "You are not registered yet.";
		}

		else
		{

			$_SESSION["FName"] = $first;
			$_SESSION["LName"] = $last;

		$welcomeMessage =  "Welcome Back ".$first." ".$last." to Eveni!";
		$toAdd = '
		<div class="row">
  <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <img src="./../images/me1.jpeg" alt="shakti">
      <div class="caption">
        <h3>Thumbnail</h3>
                
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <img src="./../images/me1.jpeg" alt="shakti">
      <div class="caption">
        <h3>Thumbnail</h3>
                
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <img src="./../images/me1.jpeg" alt="shakti">
      <div class="caption">
        <h3>Thumbnail</h3>
                
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <img src="./../images/me1.jpeg" alt="shakti">
      <div class="caption">
        <h3>Thumbnail</h3>
                
      </div>
    </div>
  </div>

</div>
<div class="row">
  <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <img src="./../images/me1.jpeg" alt="shakti">
      <div class="caption">
        <h3>Thumbnail</h3>
                
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <img src="./../images/me1.jpeg" alt="shakti">
      <div class="caption">
        <h3>Thumbnail</h3>
                
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <img src="./../images/me1.jpeg" alt="shakti">
      <div class="caption">
        <h3>Thumbnail</h3>
                
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <img src="./../images/me1.jpeg" alt="shakti">
      <div class="caption">
        <h3>Thumbnail</h3>
                
      </div>
    </div>
  </div>

</div>
     
     
</div>';
			require_once('./../views/welcomeView.php');
			$welView = new welcomeView();
			$welView->renderView($welcomeMessage, $toAdd);
	}
	

		
		

		//mysqli_stmt_bind_param($stmt, "ss", $arr[0],$arr[1]);
		



	}



}