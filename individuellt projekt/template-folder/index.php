<?php include('header.php'); ?>

//gkfkkfdkfkksdk


<?php
   $p = $_GET['page'];


   switch ($p) {

    case 'home':
        include ('pages/home.php');
        break;

    case 'cv':
        include ('pages/cv.php');
        break;

    case 'kontakt':
        include ('pages/kontakt.php');
        break;

    default:
        include ('pages/home.php');
        break; 
   }
?>



  