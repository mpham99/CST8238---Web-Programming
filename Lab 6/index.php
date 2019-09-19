<!DOCTYPE html>
<html>

<head>
<meta charset="ISO-8859-1">
<title>Lab 6</title>
<link href="StyleSheet.css" type="text/css" rel="stylesheet">
</head>

<body>
  <?php
  include "Header.php";
  include "Menu.php";
  include "Footer.php";
   ?>
   <div id = "content">
     <?php
     for ($i = 99; $i > 0; $i -- ){
       echo $i." bottles of beer on the wall...";
       echo "<br>";
       echo $i." bottles of beer...";
       echo "<br>";
       echo "You take one down you pass it around ...";
       echo "<br>";
       echo ($i-1)." bottles of beer on the wall.";
       echo "<br>";
       echo "<br>";
     }
     echo "There are no more bottles of beer.";
     ?>
   </div>
</body>

</html>
