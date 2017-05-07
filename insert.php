<?php
//get user input
$Username=$_POST['users'];
$Password=$_POST['passs'];
$Class=$_POST['class'];
$Subject=$_POST['subj'];

//create local variables
$taken="false";
$database="ecs";
$password="";
$username="root";


//connect to database
      $con = mysql_connect('localhost', $username, $password) or die ("unable to log into database");
@mysql_select_db($database, $con) or die ("unable to connect");

mysql_query("INSERT INTO `teachers` VALUES ('$Username', '$Password', '$Class', '$Subject')") or die ("strange error");

echo "NEW USER ADDED";
header ('location:teach2.html');

mysql_close($con);

?>