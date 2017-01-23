
<?php
session_start();

$Email = $_POST['Email'] ;
$Password = $_POST['Password'] ;


$_SESSION['Email'] = $Email;
$_SESSION['Password'] = $Password;


$arr = array($Email, $Password);
require_once('./../models/loginModel.php');
$login = new LoginModel();
$login->findUser($arr); 