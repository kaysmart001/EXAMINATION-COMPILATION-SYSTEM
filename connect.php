<?php

$inputuser =$_POST['username'];
$inputpass =$_POST['password']; 

$username = "epiz_33459705";
$password = "hvZgW4p2guu7";
$database = "epiz_33459705_testme_db";

$connect=mysql_connect("sql311.epizy.com", $username, $password);
@mysql_select_db($database) or die ("unable to connect");

$query = "SELECT * FROM `teachers` WHERE `Username` = '$inputuser' AND  `Password` = '$inputpass'";

$result = mysql_query($query);

$row = mysql_fetch_array($result); 

if($row["Username"]==$inputuser && $row["Password"]==$inputpass)
header ('location: mole.html');
else
header ('location: facultylogin.html');
?>
