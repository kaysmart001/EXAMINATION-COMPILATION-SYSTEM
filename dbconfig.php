<?php

$username = "root";
$password = "";
$database = "ecs";

$connect=mysql_connect("localhost", $username, $password);
@mysql_select_db($database) or die ("unable to connect");
?>