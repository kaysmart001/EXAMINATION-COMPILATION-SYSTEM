
<?php

$taken="false";
$database="epiz_33459705_testme_db";
$password="hvZgW4p2guu7";
$username="epiz_33459705";

 $con = mysql_connect('sql311.epizy.com', $username, $password) or die ("unable to log into database");
@mysql_select_db($database, $con) or die ("unable to connect");


$name = $_POST['name'];

$result = mysql_query("SELECT * FROM `fee` WHERE `STUDENTNAME`= '$name'");


while ($row = mysql_fetch_array($result))
{
  
  if ($row["STUDENTNAME"]==$name && $row["AMOUNPAID"] >= 1800)
  {
    echo "THIS STUDENT IS ELIGIBLE TO WRITE THE EXAMS DUE TO FULL PAYMENT,YOU CAN PRINT YOUR PERMIT ";
    echo '<h3 align="left">BY MANAGEMENT</h3>';

  } 

  else{
    echo "YOU ARE NOT ELIGIBLE TO WRITE THIS EXAMS DUE TO INSUFFICIENT AMOUNT,BALANCE UP YOUR ACCOUNT";
  }
}




?>
<br>
<br>
<form action="permit.html" method="post">
  <input type="submit" value="PRINT PERMIT"onClick='window.print()' >
</form>

<br>
<form action="permit.html" method="post">
  <input type="submit" value="BACK">
</form>


