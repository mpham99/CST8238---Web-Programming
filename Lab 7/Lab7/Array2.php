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
     $Product = array ( array("Category" => "Printer",
                              "Brand" => "Epson",
                              "Quantity" => "100",
                              "Price" => "2500"
                             ),
                        array("Category" => "Printer",
                              "Brand" => "Canon",
                              "Quantity" => "100",
                              "Price" => "3000"
                             ),
                        array("Category" => "Printer",
                              "Brand" => "Xerox",
                              "Quantity" => "500",
                              "Price" => "2000"
                             ),
                        array("Category" => "Laptop",
                              "Brand" => "Apple",
                              "Quantity" => "200",
                              "Price" => "2000"
                             ),
                        array("Category" => "Laptop",
                              "Brand" => "HP",
                              "Quantity" => "300",
                              "Price" => "1500"
                             ),
                        array("Category" => "Laptop",
                              "Brand" => "Toshiba",
                              "Quantity" => "100",
                              "Price" => "1200",
                             ),
                        array("Category" => "TV",
                              "Brand" => "Samsung",
                              "Quantity" => "500",
                              "Price" => "1200"
                             ),
                        array("Category" => "TV",
                              "Brand" => "LG",
                              "Quantity" => "500",
                              "Price" => "1050"
                             ),
                        array("Category" => "TV",
                              "Brand" => "Sony",
                              "Quantity" => "200",
                              "Price" => "1000"
                             )
                      );

      echo "<pre>";
      var_dump($Product);
      echo "</pre>";

      echo "</br><b><u>Printer</u></b>";
      for($row = 0; $row < 3; $row++){
        echo "</br>";
        echo "Brand: ".$Product[$row]["Brand"];
        echo "</br>";
        echo "Quantity: ".$Product[$row]["Quantity"];
        echo "</br>";
        echo "Price: ".$Product[$row]["Price"];
        echo "</br></br>";
      }

      echo "</br><b><u>Laptop</u></b>";
      for($row = 3; $row < 6; $row++){
        echo "</br>";
        echo "Brand: ".$Product[$row]["Brand"];
        echo "</br>";
        echo "Quantity: ".$Product[$row]["Quantity"];
        echo "</br>";
        echo "Price: ".$Product[$row]["Price"];
        echo "</br></br>";
      }

      echo "</br><b><u>TV</u></b>";
      for($row = 6; $row < 9; $row++){
        echo "</br>";
        echo "Brand: ".$Product[$row]["Brand"];
        echo "</br>";
        echo "Quantity: ".$Product[$row]["Quantity"];
        echo "</br>";
        echo "Price: ".$Product[$row]["Price"];
        echo "</br></br>";
      }

      echo "<table>";
      echo "<tr>";
      echo "<th>Category</th>";
      echo "<th>Brand</th>";
      echo "<th>Quantity</th>";
      echo "<th>Price</th>";
      echo "</tr>";

      echo "<tr>";
      echo "<td>".$Product[0]["Category"]."</td>";
      echo "<td>".$Product[0]["Brand"]."</td>";
      echo "<td>".$Product[0]["Quantity"]."</td>";
      echo "<td>".$Product[0]["Price"]."</td>";
      echo "</tr>";

       for($row = 1; $row < 3; $row++){
         echo "<tr>";
         echo "<td></td>";
         echo "<td>".$Product[$row]["Brand"]."</td>";
         echo "<td>".$Product[$row]["Quantity"]."</td>";
         echo "<td>".$Product[$row]["Price"]."</td>";
         echo "</tr>";
       }

       echo "<tr>";
       echo "<td>".$Product[3]["Category"]."</td>";
       echo "<td>".$Product[3]["Brand"]."</td>";
       echo "<td>".$Product[3]["Quantity"]."</td>";
       echo "<td>".$Product[3]["Price"]."</td>";
       echo "</tr>";

        for($row = 4; $row < 6; $row++){
          echo "<tr>";
          echo "<td></td>";
          echo "<td>".$Product[$row]["Brand"]."</td>";
          echo "<td>".$Product[$row]["Quantity"]."</td>";
          echo "<td>".$Product[$row]["Price"]."</td>";
          echo "</tr>";
        }

        echo "<tr>";
        echo "<td>".$Product[6]["Category"]."</td>";
        echo "<td>".$Product[6]["Brand"]."</td>";
        echo "<td>".$Product[6]["Quantity"]."</td>";
        echo "<td>".$Product[6]["Price"]."</td>";
        echo "</tr>";

         for($row = 7; $row < 9; $row++){
           echo "<tr>";
           echo "<td></td>";
           echo "<td>".$Product[$row]["Brand"]."</td>";
           echo "<td>".$Product[$row]["Quantity"]."</td>";
           echo "<td>".$Product[$row]["Price"]."</td>";
           echo "</tr>";
         }
       echo "</table>";
     ?>
   </div>
</body>

</html>
