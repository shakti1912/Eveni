
<?php
class createEventModel 
{
	//$config = require("./../configs/config.php");
	//	 $con = mysqli_connect($config['host'], $config['username'], $config['password'], $config['database']);

	public function saveEvent($arr, $EmailList)
	{
			
		$config = require("./../configs/config.php");
 $con = mysqli_connect($config['host'], $config['username'], $config['password'], $config['database']);
 
 $stmt = mysqli_prepare($con,'DROP TABLE IF EXISTS EventTable;');
    mysqli_stmt_execute($stmt);
    $stmt = mysqli_prepare($con, 'CREATE TABLE EventTable 
        (
        EventCreator VARCHAR(100) ,
        HostName VARCHAR(100) ,
        EventTitle VARCHAR(100),
        EventTime VARCHAR(100),
        EventDate VARCHAR(100),
        Address VARCHAR(200),
        tstamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP)');
   mysqli_stmt_execute($stmt);

   	$stmt = mysqli_prepare($con,'INSERT INTO EventTable (EventCreator, HostName, EventTitle, EventTime, EventDate, Address) VALUES (?,?,?,?,?,?)');
		mysqli_stmt_bind_param($stmt, "ssssss", $arr[0],$arr[1],$arr[2],$arr[3], $arr[4], $arr[5]);
		mysqli_stmt_execute($stmt);
		//echo "You have successfully signed up. Check your email.";
   

     $stmt = mysqli_prepare($con,'DROP TABLE IF EXISTS EventGuestList;');
    mysqli_stmt_execute($stmt);
    $stmt = mysqli_prepare($con, 'CREATE TABLE EventGuestList 
        (
        EventTitle VARCHAR(100),
        Email VARCHAR(100)
        )');
    mysqli_stmt_execute($stmt);
    

    $stmt = mysqli_prepare($con,'INSERT INTO EventTable (EventCreator, HostName, EventTitle, EventTime, EventDate, Address) VALUES (?,?,?,?,?,?)');
		mysqli_stmt_bind_param($stmt, "ssssss", $arr[0],$arr[1],$arr[2],$arr[3], $arr[4], $arr[5]);
		mysqli_stmt_execute($stmt);
		//echo "You have successfully signed up. Check your email."


    foreach ($EmailList as $key => $value) 
    {
        		$stmt = mysqli_prepare($con,'INSERT INTO EventGuestList ( EventTitle, Email) VALUES (?,?)');
		mysqli_stmt_bind_param($stmt, "ss", $arr[2],$value);
		mysqli_stmt_execute($stmt);
    }








   
	
	
	}





}