<?php

$dbhost = 'd2shop-mks.com';
$dbuser = 'wendy93_gkka';
$dbpass = '061093';
$dbname = 'wendy93_gkka';
$con=mysqli_connect($dbhost,$dbuser,$dbpass) or die('cannot connect to the server'); 
mysql_select_db($dbname) or die('database selection problem');

?>