<?php
$host="localhost";
$username="root";
$password="";
$dbname="dictionary";
$conn=mysql_connect($host,$username,$password) OR die("database not connected!!!");
mysql_select_db($dbname,$conn);
?>