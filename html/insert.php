<?php
//get user input
$STUDENTNAME=$_POST['day'];
$FORM=$_POST['title'];
$AMOUNTPAID=$_POST['code'];

//create local variables
$taken="false";
$database="grading system";
$password="";
$username="root";


//connect to database
      $con = mysql_connect('localhost', $username, $password) or die ("unable to log into database");
@mysql_select_db($database, $con) or die ("unable to connect");

mysql_query("INSERT INTO `fee` VALUES ('$STUDENTNAME', '$FORM', '$AMOUNTPAID')") or die ("strange error");

echo "STUDENT FEES UPDATED";
header ('location: form2.php');

mysql_close($con);

?>