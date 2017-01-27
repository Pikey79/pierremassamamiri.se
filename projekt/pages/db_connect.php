<?php

$db_host="localhost";
$db_username="root";
$db_password="";
$db_name="db_enskilt";

$db_connect=mysqli_connect($db_host,$db_username,$db_password,$db_name) or die();

if(mysqli_connect_error()) {
	echo "Faild to connect to MySQL:" .mysqli_connect_error();
}
else{
	
}


?>