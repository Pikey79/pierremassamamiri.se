<?php include('header.php'); ?>


<?php
if (isset($_GET['page'])) {
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

    case 'hängagubbe':
        include ('pages/hänga-gubbe.php');
        break;

    default:
        include ('pages/home.php');
        break; 
   }

   } else {
   include ('pages/home.php');
}
?>



  