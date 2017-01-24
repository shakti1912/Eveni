
<?php
session_start();

if(isset($_POST['Email']) && isset($_POST['Password']))
{

$Email = $_POST['Email'] ;
$Password = $_POST['Password'] ;
$_SESSION['Email'] = $Email;
$_SESSION['Password'] = $Password;



}
else
{
$Email = $_SESSION['Email'];
$Password = $_SESSION['Password'];

}




$arr = array($Email, $Password);
require_once('./../models/loginModel.php');
$login = new LoginModel();
$login->findUser($arr); 