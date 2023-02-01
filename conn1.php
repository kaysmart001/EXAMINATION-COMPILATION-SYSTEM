<?php
//get user input
$Name=$_POST['userp'];
$Password=$_POST['passp'];

//create local variables
$taken="false";
$database="epiz_33459705_testme_db";
$password="hvZgW4p2guu7";
$username="epiz_33459705";


//connect to database
      $con = mysql_connect('sql311.epizy.com', $username, $password) or die ("unable to log into database");
@mysql_select_db($database, $con) or die ("unable to connect");

mysql_query("INSERT INTO `prayer` VALUES ('$Name', '$Password')") or die ("strange error");

echo "TEACHER ACCOUNT UPDATED";
header ('location: stud2.html');

mysql_close($con);

?>
