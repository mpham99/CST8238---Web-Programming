<!DOCTYPE html>
<html>

<head>
<meta charset="ISO-8859-1">
<title>Lab 9</title>
<link href="StyleSheet.css" type="text/css" rel="stylesheet">
</head>

<?php
$host = "localhost";
$username = "minhocnz_cst8238";
$password = "cst@8238";
$database = "minhocnz_cst8238";
$dbConnection = mysqli_connect($host, $username, $password);
if(!$dbConnection)
   die("Could not connect to the database.");
mysqli_select_db($dbConnection, $database);
?>

<body>
  <?php
  include "Header.php";
  include "Menu.php";
  include "Footer.php";
  $adminCodeErr = "";
   ?>

   <div id = "content">

     <div id = "section1">
       <div style = "margin: 10px 10px 10px 10px;">
         <?php
         $sqlQuery = "UPDATE Employee SET FirstName = '".$_POST["box1"]."', LastName = '".$_POST["box2"]."', EmailAddress = '".$_POST["box3"]."', TelephoneNumber = '".$_POST["box4"]."', Designation = '".$_POST["box5"]."', AdminCode = '".$_POST["box6"]."' WHERE EmployeeId = '".$_POST["updateEmployeeId"]."'";
         if (mysqli_query($dbConnection, $sqlQuery)) {
		         echo "Employee Information Successfully Updated". "<br>";
	       }else {
		         echo "Employee Information Could not be updated: " . $sql . "<br>" . mysqli_error($dbConnection);
	       }
          ?>
       </div>

     </div>

   </div>
</body>

</html>
