<?php

$db_host="localhost";
$db_username="root";
$db_password="";
$db_name="contact";

$db_connect=mysqli_connect($db_host,$db_username,$db_password,$db_name) or die();

// Chect the connection

if(mysqli_connect_error()) {
	echo "Faild to connect to MySQL:" .mysqli_connect_error();
}
else{
	echo "Connection successful";
}


?>