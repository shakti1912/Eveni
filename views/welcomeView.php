<?php
class welcomeView
{

public function renderView($message, $toAdd)
{
?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="./../main.css">
</head>
<body>
<nav class="navBackground navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
    <a class="navbar-brand" href="./../controllers/brandController.php" style="color:white;">Brand</a>
    </div>
    <div>
    	 <ul class="nav navbar-nav navbar-right">
        

    	 <li ><a href="./../controllers/loginController.php" style="color:white;">HOME</a></li>
    	 <li ><a href="#" style="color:white;">ACCOUNT</a></li>
    	 <li ><a href="./../controllers/logoutController.php" style="color:white;">LOGOUT</a></li>
    	 </ul>

    </div>
    </div>
    </nav>

    <div class="container">
     <div class="row">
 <div class="col-md-3"> 


 <div class="row">
 <div class= "col-xs-12">
 <p class="bg-primary" style="font-size: 25px; text-align: center;">YOUR PROFILE</p>
 <img src="" class="img-thumbnail img-responsive" alt="add pic" width="350" height="1000">
 </div>
 </div>


 <div class="row">
 <div class= "col-xs-12">
 
 <p class="bg-primary" style="font-size: 25px; text-align: center;">MENU</p>
 <ul class="nav" style="background-color: white ;">

 <!--<li class="active"><a href="#" class="navBackground" style="color: white;">NAVIGATION</a></li>-->

 <li> <a href="#" style="font-size: 20px; text-align: center;">Events</a></li>
 <li> <a href="#" style="font-size: 20px; text-align: center;">Upcoming Events</a></li>
 <li> <a href="#" style="font-size: 20px; text-align: center;">Invitations</a></li>
 <li> <a href="./../views/createEventView.php" style="font-size: 20px; text-align: center;">Create Event</a></li>
      </ul>

      </div>
      </div>
      </div>


 <div class="col-md-8"> 
 <p style="font-size: 20px; font-family: serif; text-align: center;">
    <?= $message ?>
    <?= $toAdd ?>
<<<<<<< Updated upstream
    
</p>
=======
     
     </p>
 
 </div>
>>>>>>> Stashed changes
</div>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
<?php
}
}

