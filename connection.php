<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$db = 'rtwms';

$conn = mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db($db);
?>