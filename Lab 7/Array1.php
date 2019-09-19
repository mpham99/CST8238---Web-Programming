<!DOCTYPE html>
<html>

<head>
<meta charset="ISO-8859-1">
<title>Lab 7</title>
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
     $calendar = array("1"=>"January",
                       "2"=>"February",
                       "3"=>"March",
                       "4"=>"April",
                       "5"=>"May",
                       "6"=>"June",
                       "7"=>"July",
                       "8"=>"August",
                       "9"=>"September",
                       "10"=>"October",
                       "11"=>"November",
                       "12"=>"December"
                      );
      echo "<pre>";
      print_r($calendar);
      echo "</pre>";

      echo "</br>";
      echo "<h1>FOR loop</h1>";
      echo "</br></br>";

      for ($i=1; $i<=12; $i++){
        echo "Month ".$i.": ".$calendar[$i];
        echo "</br>";
      }

      echo "</br>";
      echo "<h1>FOREACH loop</h1>";
      echo "</br></br>";

      foreach ($calendar as $i => $i_value){
        echo "Month ".$i.": ".$i_value;
        echo "</br>";
      }

      echo "</br>";
      echo "<h1>WHILE loop, SWITCH case</h1>";
      echo "</br></br>";

      $i = 1;
      while($i <= 12){
        switch ($i) {
          case 4:
          case 6:
          case 9:
          case 11:
              echo "Month ".$i.": ".$calendar[$i]." has 30 days.";
              echo "</br>";
              break;
         case 1:
         case 3:
         case 5:
         case 7:
         case 8:
         case 10:
         case 12:
              echo "Month ".$i.": ".$calendar[$i]." has 31 days.";
              echo "</br>";
              break;
         case 2:
              echo "Month ".$i.": ".$calendar[$i]." has 28, or 29 days";
              echo "</br>";
              break;
        }//end of switch
        $i++;
      }//end of while loop
     ?>
   </div>
</body>

</html>
