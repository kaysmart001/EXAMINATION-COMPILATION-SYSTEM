<?php
//get user input
$Username=$_POST['userp'];
$Password=$_POST['passp'];
$Class=$_POST['class'];

//create local variables
$taken="false";
$database="epiz_33459705_testme_db";
$password="hvZgW4p2guu7";
$username="epiz_33459705";


//connect to database
      $con = mysql_connect('sql311.epizy.com', $username, $password) or die ("unable to log into database");
@mysql_select_db($database, $con) or die ("unable to connect");

mysql_query("INSERT INTO `student` VALUES ('$Username', '$Password', '$Class')") or die ("strange error");

echo "NEW USER ADDED";
header ('location:stud2.html');

mysql_close($con);

?>
