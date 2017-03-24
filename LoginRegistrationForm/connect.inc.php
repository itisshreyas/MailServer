<?php
$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_pass = '';
$mysql_db = 'userz';
//create new connection , this takes servername,username, userpassword, mysql db name
$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_pass, $mysql_db); //check connection , if failed, kill the page
if(!$conn)
{
	die("Connection failed: ".mysqli_connect_error());
}
echo "Connected";
?>