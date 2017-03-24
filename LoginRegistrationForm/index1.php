<?php require 'connect.inc.php';
$uentered=$_POST["username"];
$pentered=$_POST["password"];
$query = "SELECT * FROM Userss where name='$uentered' and pass='$pentered'";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($result);
echo $row['name'];
?>﻿
