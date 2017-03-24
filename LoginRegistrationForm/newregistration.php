<?php
$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_pass = '';
$mysql_db = 'mailingservice';
//create new connection , this takes servername,username, userpassword, mysql db name
$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_pass, $mysql_db); //check connection , if failed, kill the page
if(!$conn)
{
	die("Connection failed: ".mysqli_connect_error());
}
echo "Connected";
$uentered=$_POST["usernamesignup"];
$pentered=$_POST["passwordsignup"];
$pentered_confirm=$_POST["passwordsignup_confirm"];
$emailentered=$_POST["emailsignup"];
if(!strcmp($pentered,$pentered_confirm))
{

	$sql = "INSERT INTO userdetails"."(Username, Password, Emailaddress)"."VALUES"."('$uentered', '$pentered', '$emailentered')";
	if (mysqli_query($conn, $sql)) 
    echo "New record created successfully";
	else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
?>﻿