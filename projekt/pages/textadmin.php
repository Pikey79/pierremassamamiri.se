<?php
$db = mysqli_connect('localhost', 'root', '', 'db_enskilt');

mysqli_query($db, "SET NAMES utf8");

/*********************************************************************************************/

// update the text in the database and the adminpage and save it.  
if(isset($_POST["id"])) {
	$new_heading = mysqli_real_escape_string($db, $_POST['headingtext1']);
	$new_text1 = mysqli_real_escape_string($db, $_POST['formtext1']);
	$new_text2 = mysqli_real_escape_string($db, $_POST['formtext2']);
	$id = mysqli_real_escape_string($db, $_POST['id']);
	$query = "UPDATE pages SET main_heading = '$new_heading', page_content1 = '$new_text1', page_content2 = '$new_text2' WHERE id = $id";
	mysqli_query($db, $query);   
}

