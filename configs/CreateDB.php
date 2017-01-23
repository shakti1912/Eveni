<?php
function initializeDB()
{
    $config = require("config.php");
    $con = mysqli_connect($config['host'], $config['username'], $config['password']);    
    $stmt = mysqli_prepare($con, 'DROP DATABASE IF EXISTS EveniSignUp');
    mysqli_stmt_execute($stmt);
    $stmt = mysqli_prepare($con,'CREATE DATABASE EveniSignUp;' );
    mysqli_stmt_execute($stmt);
    mysqli_select_db($con,"EveniSignUp");

    //Create data table
    $stmt = mysqli_prepare($con,'DROP TABLE IF EXISTS SignUp;');
    mysqli_stmt_execute($stmt);
    $stmt = mysqli_prepare($con, 'CREATE TABLE SignUp 
        (
        FirstName VARCHAR(100) ,
        LastName VARCHAR(100),
        Email VARCHAR(200),
        Password VARCHAR(100),
        tstamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP)');
    mysqli_stmt_execute($stmt);
    
    echo ("Database Successfully Initialized. Be sure to change check mysql login is correct.");
}
initializeDB();