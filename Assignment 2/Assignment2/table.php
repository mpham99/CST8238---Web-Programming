<!DOCTYPE html>
<html>
    <head>
        <title>Assignment 2 - Task 2</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href='http://fonts.googleapis.com/css?family=Fugaz+One|Muli|Open+Sans:400,700,800' rel='stylesheet' type='text/css' />
        <link href="css/StyleSheet.css" rel="stylesheet" type="text/css">
    </head>

    <body>
      <div id = "content">
        <?php
        $primeArray = array();
        $multiple3Array = array();

        class Table {

          function isPrime($num) {
            if($num == 1)
              return false;
            for ($i = 2; $i < $num; $i ++){
              if($num % $i == 0)
                return false;
            }
            return true;
          }/*end of function*/

          function isMultiple3($num) {
            if($num % 3 == 0){
              return true;
            }
          }/*end of function*/
        }

        $obj = new Table();
        for($i = 1; $i <= 28; $i++){
          if($obj->isPrime($i) == true)
             array_push($primeArray, "$i");
        }/*end of for loop*/

        for($i = 1; $i <= 28; $i++){
          if($obj->isMultiple3($i) == true)
             array_push($multiple3Array, "$i");
        }/*end of for loop*/

        echo "<table>";
        for($row = 0; $row < 9; $row++){
          echo "<tr>";
          echo "<td>".$primeArray[$row]."</td>";
          echo "<td>".$multiple3Array[$row]."</td>";
          echo "</tr>";
        }
        echo "</table>";

        ?>
      </div>
    </body>

</html>
