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
       if ($i % 3 == 0){
         echo $i." bottles of beer is a multiple of 3...";
         echo "<br>";
         echo "<br>";
       }else {
         echo $i." bottles of beer is NOT a multiple of 3...";
         echo "<br>";
         echo "<br>";
       }/*End of if else loop*/
     }
     ?>
   </div>
</body>

</html>
