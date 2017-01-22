<?php include('header.php'); ?>


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

    case 'portfolio':
        include ('pages/portfolio.php');
        break;

    default:
        include ('pages/home.php');
        break; 
   }
?>



  