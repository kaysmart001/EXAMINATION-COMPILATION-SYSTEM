<?php
//get user input
$Name=$_POST['file'];
$type=$_POST['file'];
$Content=$_POST['file'];
$Size=$_POST['file'];
//create local variables
$taken="false";
$database="ecs";
$password="";
$username="root";


//connect to database
      $con = mysql_connect('localhost', $username, $password) or die ("unable to log into database");
@mysql_select_db($database, $con) or die ("unable to connect");

mysql_query("INSERT INTO `upload` VALUES ('$Name', '$Type', '$Content', '$Size')") or die ("strange error");

echo "NEW QUESTIONS ADDED";
header ('location:.html');

mysql_close($con);

?>