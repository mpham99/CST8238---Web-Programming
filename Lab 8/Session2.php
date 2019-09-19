<!DOCTYPE html>
<html>

<head>
<meta charset="ISO-8859-1">
<title>Lab 8</title>
<link href="StyleSheet.css" type="text/css" rel="stylesheet">
</head>

<body>
  <?php
  include "Header.php";
  include "Menu.php";
  include "Footer.php";
   ?>

   <div id = "content">

     <div style = "width: 600px; float: left; border: 1px solid black;">
       <div style = "margin: 10px 10px 10px 10px;">
         <?php
         session_start();
         if(isset($_SESSION["name"]))
     			echo "<strong>Employee Name: </strong>".$_SESSION["name"]."</br>";

         if(isset($_SESSION["id"]))
     			echo "<strong>Employee ID: </strong>".$_SESSION["id"]."</br>";

         if(isset($_SESSION["telNum"]))
     			echo "<strong>Telephone Number: </strong>".$_SESSION["telNum"]."</br>";

         if(isset($_SESSION["email"]))
     			echo "<strong>Email Address: </strong>".$_SESSION["email"]."</br>";

         if(isset($_SESSION["position"]))
     			echo "<strong>Position: </strong>".$_SESSION["position"]."</br>";

         if(isset($_SESSION["project"]))
     			echo "<strong>Project: </strong>".$_SESSION["project"]."</br>";
         ?>
       </div>
     </div>

   </div>
</body>

</html>
