<?php
$user = "a5022159_user";
$pass = "passw000rd";
$db = "a5022159_data";
$host = "mysql12.000webhost.com";
$konek = mysql_connect($host, $user, $pass);
mysql_select_db($db, $konek);
?>