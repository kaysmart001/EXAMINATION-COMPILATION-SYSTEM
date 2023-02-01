<?php

$username = "epiz_33459705";
$password = "hvZgW4p2guu7";
$database = "epiz_33459705_testme_db";

$connect=mysql_connect("sql311.epizy.com", $username, $password);
@mysql_select_db($database) or die ("unable to connect");
?>
