<?php
include('session.php');
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
//$name = $_POST['pic'];
//$upfile = '/demo/'.$name;
 $file_path = "/OST/welcomepage/".$_FILES["picture"]["name"];
 $file_name = pathinfo($_FILES['picture']['name'], PATHINFO_FILENAME);
//$sql = "INSERT INTO userdetails"."(Name, Path)"."VALUES"."('$file_name', '$file_path')";
$sql = "UPDATE userdetails SET Imagepath='$file_path' WHERE Username='$login_session'";
if (mysqli_query($conn, $sql)) 
   // echo "New record created successfully";
	{
		$_SESSION['imgpath'] = $file_path;
header('refresh: 0; url= ../welcomepage/index.php');
    }
	else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
//echo '<img src="' . $file_path . '" alt="error" style="width:128px;height:128px">';
 ?>