<?php
session_start();
$_SESSION['time'] = time();
echo '
<!DOCTYPE html>
<html>
<head>
	<title>Eveni</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<nav class="navBackground  navbar navbar-default">
  <div class="container-fluid">
    <div class=" navbar-header">
      <a class="navbar-brand" href="controllers/brandController.php">
        <img class = "center-block" alt="Eveni" src="...">
      </a>
    </div>
  </div>
  </nav>

<div class="row">
 <div class="col-md-1"> 
 </div>
  <div class="col-md-5"> 

<form action="./controllers/signUpController.php">
<label class="labelClass" style="font-size: 40px; font-family: serif; ">Join Eveni Today</label>
  
  <div class="form-inline form-group ">
   
  
    <input type="text" class="form-control" name="FirstName" placeholder="FirstName">


    <input type="text" class="form-control" name="LastName" placeholder="LastName">
</div>

  <div class="form-group">
   
    <input type="email" class="form-control" name="Email" placeholder="Email">
  </div>
  <div class="form-group">
    
    <input type="password" class="form-control" name="Password" placeholder="Password">
  </div>
  <div class="form-group">
    
    <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm Password">
  </div>
  
  <button type="submit" class="btn btn-primary btn-lg btn-block"  >SignUp</button>
</form>	
  </div>

  <div class="col-md-5"> 
  <form method="post" action="./controllers/loginController.php">
  <label class="labelClass" style="font-size: 40px; font-family: serif; ">Have account? Log In</label>
  <div class="form-group">
    
    <input type="email" class="form-control" name="Email" placeholder="Email or Username">
  </div>
  <div class="form-group">
   
    <input type="password" class="form-control" name="Password" placeholder="Password">
  </div>
  
  
  <button type="submit" class="btn btn-lg btn-primary btn-block">Login</button>
</form></div>
</div>


	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>';
