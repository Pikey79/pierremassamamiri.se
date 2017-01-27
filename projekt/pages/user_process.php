<?php

include("db_connect.php");

$name=$_REQUEST['name'];
$number=$_REQUEST['number'];
$mail=$_REQUEST['mail'];
$message=$_REQUEST['message'];

$query=mysqli_query($db_connect, "INSERT INTO contact(name,number,mail,message) VALUES 
('$name','$number','$mail','$message')") or die(mysqli_error($db_connect));

mysqli_close($db_connect);

header('location:index.php?note=succsess');