<?php

$inputuser =$_POST['Username'];
$inputpass =$_POST['Password']; 

$username = "root";
$password = "";
$database = "ecs";

$connect=mysql_connect("localhost", $username, $password);
@mysql_select_db($database) or die ("unable to connect");

$query = "SELECT * FROM `admin` WHERE `Username` = '$inputuser' AND  `Password` = '$inputpass'";

$result = mysql_query($query);

$row = mysql_fetch_array($result); 

if($row["Username"]==$inputuser && $row["Password"]==$inputpass)
header ('location: admine.html');
else
header ('location: adminlogin.html');
?>