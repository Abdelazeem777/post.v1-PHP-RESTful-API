<?php

$dbname="androidUserDB";
$dbserver="localhost";
$dbusername="android_user";
$dbpassword="251998";
$dbconnect =new mysqli($dbserver,$dbusername,$dbpassword,$dbname);

if ($dbconnect->connect_error) {
    die("Connection failed: " . $dbconnect->connect_error);
}else{
	echo "Connection Success !";
}


 ?>
