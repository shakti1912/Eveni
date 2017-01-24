<?php

class createEventView
{
	function __construct()
	{
			require_once('./../views/welcomeView.php');
			session_start();
			$welView = new welcomeView();
			$welView->renderView($_SESSION["FName"]."! Create a new Event here", self::rendercreateView());


	}

	function rendercreateView()
	{
		$toAdd = '
		<form class="form-vertical" action="./../controllers/createEventController.php">
  <div class="form-group">    
      <input type="text" class="form-control" name="Host" placeholder="HostName">
    </div>
 
  <div class="form-group">
      <input type="text" class="form-control" name="Title" placeholder="Event Title">
    </div>
    <div class="form-group">
      <input type="date" class="form-control" name="Date" placeholder="Date">
    </div>
    <div class="form-group">
      <input type="time" class="form-control" name="Time" placeholder="Time">
    </div>
    <div class="form-group">
      <input type="text" class="form-control" name="Address" placeholder="Address">
    
</div>
      <div class="form-group"> 
  		<textarea name="paste-multiple" type="text" placeholder="Invite Friends! Enter emails separated by commas " autocomplete="off" style="z-index: auto; position: relative; line-height: 18px; width: 650px;
    height: 45px; font-size: 14px; transition: none; background: transparent !important;"></textarea>
  </div>
  
      <div class="form-group"> 
      <button type="submit" class="btn btn-lg btn-primary">Create Event</button>
  </div>
  </div>

</form>';
return $toAdd;

	}

}

$call = new createEventView();



