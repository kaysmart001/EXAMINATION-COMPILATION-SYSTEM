<?php

$inputuser =$_POST['username'];
$inputpass =$_POST['password']; 

$username = "root";
$password = "";
$database = "grading system";

$connect=mysql_connect("localhost", $username, $password);
@mysql_select_db($database) or die ("unable to connect");

$query = "SELECT * FROM `users` WHERE `Name` = '$inputuser' AND  `Password` = '$inputpass'";

$result = mysql_query($query);

$row = mysql_fetch_array($result); 

if($row["Name"]==$inputuser && $row["Password"]==$inputpass)
header ('location: admine.html');
else
header ('location: admin.php');
?>