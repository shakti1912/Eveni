
<?php
session_start();
$EventCreator = $_SESSION['FName'];
$Host = $_REQUEST['Host'];
$Title = $_REQUEST['Title'];
$Date = $_REQUEST['Date'];
$Time = $_REQUEST['Time'];
$Address = $_REQUEST['Address'];

$EmailList = split(",", $_REQUEST['paste-multiple']);

$arr = array($EventCreator, $Host, $Title, $Time, $Date, $Address);


require_once('./../models/createEventModel.php');
$createEvent = new createEventModel();
//$createEvent->saveEvent($arr, $EmailList); 

require_once('./../models/sendMailModel.php');
$createEvent = new sendMailModel();
$createEvent->send($arr, $EmailList); 





