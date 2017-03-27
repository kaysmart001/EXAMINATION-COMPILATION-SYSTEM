
<?php

$taken="false";
$database="grading system";
$password="";
$username="root";

 $con = mysql_connect('localhost', $username, $password) or die ("unable to log into database");
@mysql_select_db($database, $con) or die ("unable to connect");


//$student=$_POST['day'];


$result = mysql_query("SELECT * FROM `grade` WHERE `STUDENTNAME` ='$student'");

echo "<table border=0 align='center' cellspacing='15'>";
echo "<tr>";
  echo "<th>STUDENT NAME</th>";
  echo "<th>FORM</th>";
  echo "<th>TERM</th>";
  echo "<th>MATHEMATICS</th>";
  echo "<th>SOCIAL STUDIES</th>";
  echo "<th>ENGLISH</th>";
  echo "<th>INTEGRATED SCIENCE</th>";
  echo "<th>PHYSICS</th>";
  echo "<th>CHEMISTRY</th>";
  echo "<th>BIOLOGY</th>";
  echo "<th>ELECTIVE MATHS</th>";
  echo "</tr>";
while ($row = mysql_fetch_array($result))
{
  echo "<tr>";
  echo "<td align='center'>".$row[0]. "</td>";
 	echo "<td align='center'>".$row[1]."</td>";
 	echo "<td align='center'>".$row[2]. "</td>";
 	echo "<td align='center'>".$row[3]."</td>";
  echo "<td align='center'>".$row[4]. "</td>";
  echo "<td align='center'>".$row[5]."</td>";
  echo "<td align='center'>".$row[6]. "</td>";
  echo "<td align='center'>".$row[7]. "</td>";
  echo "<td align='center'>".$row[8]. "</td>";
  echo "<td align='center'>".$row[9]. "</td>";
  echo "<td align='center'>".$row[10]. "</td>";
 	echo "</tr>";
}
echo "</table>";

?>
<form action="" method="post">
  <input type="submit" value="PRINT GRADE" onClick='window.print()'>
</form>


<form action="studentoption.html" method="post">
  <input type="submit" value="BACK">
</form>


