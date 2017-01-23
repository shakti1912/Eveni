

<?php
session_start();
$_SESSION[''] = time();



$FName = $_REQUEST['FirstName'] ;
$LName = $_REQUEST['LastName'] ;
$Email = $_REQUEST['Email'] ;
$Password = $_REQUEST['Password'] ;

$_SESSION['FName'] = $FName;
$_SESSION['LName'] = $LName;

//Uncomment this line to create DB.
//require_once('./../configs/createDB.php');

$arr = array($FName, $LName, $Email, $Password);
require_once('./../models/signUpModel.php');
$login = new signUpModel();
$login->saveUserData($arr); 







