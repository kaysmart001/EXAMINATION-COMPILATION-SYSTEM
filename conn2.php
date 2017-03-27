<?php
//get user input
$Name=$_POST['users'];
$Password=$_POST['passs'];

//create local variables
$taken="false";
$database="grading system";
$password="";
$username="root";


//connect to database
      $con = mysql_connect('localhost', $username, $password) or die ("unable to log into database");
@mysql_select_db($database, $con) or die ("unable to connect");

mysql_query("INSERT INTO `ideas` VALUES ('$Name', '$Password')") or die ("strange error");

echo "TEACHER ACCOUNT UPDATED";
header ('location: teach2.html');

mysql_close($con);

?>