<?php
//get user input
$Username=$_POST['userp'];
$Password=$_POST['passp'];
$Class=$_POST['class'];

//create local variables
$taken="false";
$database="ecs";
$password="";
$username="root";


//connect to database
      $con = mysql_connect('localhost', $username, $password) or die ("unable to log into database");
@mysql_select_db($database, $con) or die ("unable to connect");

mysql_query("INSERT INTO `student` VALUES ('$Username', '$Password', '$Class')") or die ("strange error");

echo "NEW USER ADDED";
header ('location:stud2.html');

mysql_close($con);

?>