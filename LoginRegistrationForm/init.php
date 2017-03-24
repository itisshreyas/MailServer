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
function get_username() {
	return $_SESSION['user'];
}

function get_password() {
	return $_SESSION['pass'];
}
?>