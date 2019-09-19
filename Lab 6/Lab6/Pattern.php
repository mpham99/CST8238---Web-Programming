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

  <div id ="content">
    <?php
    echo "<pre>";
    for($i = 1; $i <= 6; $i ++) {
             for($space = 1; $space <= (6-$i); $space ++) {
                 echo "&nbsp;";
             }
             for($j = 1; $j <= (2*$i-1); $j ++){
                 echo "*";
             }
             echo ("<br>");
         }

         for($i = 6; $i >= 1; $i --) {
           for($space = 0; $space < (6-$i); $space ++){
               echo "&nbsp;";
           }
           for($j = 1; $j <= (2*$i-1); $j ++){
               echo "*";
           }
           echo ("<br>");
       }
    echo "</pre>";
    ?>
  </div>


</body>

</html>
