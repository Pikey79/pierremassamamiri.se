<?php include("db_connect.php");?>
<!DOCTYPE HTML>
<html>
<head>
<title>Kontakta mig</title>
<meta charset="utf8">
<style>
body {margin:0;}
#contact-form { background:#ddd; width:500px; margin:0 auto; padding:40px;}
input { width: 100%; padding: 12px 20px; margin: 8px 0; box-sizing: border-box;}
textarea { width: 100%; padding: 12px 20px; margin: 8px 0; box-sizing: border-box;}
</style>
</head>
<body>
<form id="contact-form" action="user_process.php" method="post" name="contact">
  Namn: <input  type="text" name="name" value=""><br />
  Telefon: <input type="text" name="number" value=""><br />
  Email: <input type="text" name="mail" value=""><br />
  Meddelande: <textarea name="message"></textarea>
  <input type="submit" value="Skicka">
  </form>
  
</body>

</html