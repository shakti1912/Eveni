
<?php

class eventCreatedView
{
	function __construct()
	{
			require_once('./../views/welcomeView.php');
			
			$welView = new welcomeView();
			$welView->renderView("<p style='font-size:25px; font-family:serif;'>We are inviting your friends. Please wait.<p>", self::renderView());

  
	}

	function renderView()
	{
		$toAdd = '';
return $toAdd;

	}

}

$call = new eventCreatedView();



