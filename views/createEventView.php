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
		<form class="form-vertical">
  <div class="form-group">    
      <input type="HostName" class="form-control" id="inputEmail3" placeholder="HostName">
    </div>
 
  <div class="form-group">
      <input type="Event Title" class="form-control" id="inputPassword3" placeholder="Event Title">
    </div>
    <div class="form-group">
      <input type="date" class="form-control" id="inputPassword3" placeholder="Date">
    </div>
    <div class="form-group">
      <input type="time" class="form-control" id="inputPassword3" placeholder="Time">
    </div>
    <div class="form-group">
      <input type="Address" class="form-control" id="inputPassword3" placeholder="Address">
    
</div>
      <div class="form-group"> 
  		<textarea class="paste-multiple ui-autocomplete-input" name="paste-multiple" type="text" placeholder="Invite Friends! Enter emails separated by commas " autocomplete="off" data-gramm="true" data-txt_gramm_id="aaf218b0-09b9-2fbf-84a7-938b3e5839a9" data-gramm_id="aaf218b0-09b9-2fbf-84a7-938b3e5839a9" spellcheck="false" data-gramm_editor="true" style="z-index: auto; position: relative; line-height: 18px; width: 650px;
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



