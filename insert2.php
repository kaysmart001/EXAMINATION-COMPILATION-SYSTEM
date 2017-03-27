<?php
//get user input
$STUDENTNAME=$_POST['a'];
$FORM=$_POST['b'];
$TERM=$_POST['c'];
$MATHEMATICS=$_POST['d'];
$SOCIALSTUDIES=$_POST['e'];
$ENGLISH=$_POST['f'];
$INTEGRATEDSCIENCE=$_POST['g'];
$PHYSICS=$_POST['h'];
$CHEMISTRY=$_POST['i'];
$BIOLOGY=$_POST['j'];
$ELECTIVEMATHS=$_POST['k'];

//create local variables
$taken="false";
$database="grading system";
$password="";
$username="root";


//connect to database
      $con = mysql_connect('localhost', $username, $password) or die ("unable to log into database");
@mysql_select_db($database, $con) or die ("unable to connect");

mysql_query("INSERT INTO `grade` VALUES ('$STUDENTNAME', '$FORM', '$TERM',  '$MATHEMATICS', '$SOCIALSTUDIES', '$ENGLISH', '$INTEGRATEDSCIENCE','$PHYSICS', '$CHEMISTRY', '$BIOLOGY', '$ELECTIVEMATHS')") or die ("strange error");

echo "GRADE SUCCESFULLY SUBMITTED";
header ('location: getfact.php');

mysql_close($con);

?>