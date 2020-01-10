<!DOCTYPE html>
<html>

<head>
<meta charset="ISO-8859-1">
<title>Lab 9</title>
<link href="StyleSheet.css" type="text/css" rel="stylesheet">
</head>

<?php
$host = "localhost";
$username = "minhcybc_cst8238";
$password = "cst@8238";
$database = "minhcybc_cst8238";
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
   ?>

   <div id = "content">

     <div style = "width: 1000px; float: left; border: 1px solid black;">
       <div style = "margin: 10px 10px 10px 10px;">
         <?php
         session_start();
         if($_SESSION["adminCode"] != "999"){
           header("Location: Admin.php");
         }
         ?>
         <?php
          $sqlQuery = "SELECT * FROM Employee";

          $result = mysqli_query($dbConnection,$sqlQuery);

          $rowCount = mysqli_num_rows($result);

          if($rowCount == 0)
				      echo "*** There are no rows to display from the Person table ***";
			    else {
				      for($i=0; $i<$rowCount; ++$i) {
					       $row = mysqli_fetch_row($result);

					       echo "<table border=\"0\"><tr><td>";
					       echo "<br/>";

					       echo "<form action=\"UpdateAccount.php\" method=\"post\">";
						     echo "<input type=\"hidden\" name=\"EmployeeId\" value=\"".$row[0]."\" />";
						     echo "<input type=\"hidden\" name=\"firstName\" value=\"".$row[1]."\" />";
						     echo "<input type=\"hidden\" name=\"lastName\" value=\"".$row[2]."\" />";
                 echo "<input type=\"hidden\" name=\"EmailAddress\" value=\"".$row[3]."\" />";
                 echo "<input type=\"hidden\" name=\"TelephoneNumber\" value=\"".$row[4]."\" />";
                 echo "<input type=\"hidden\" name=\"designation\" value=\"".$row[7]."\" />";
                 echo "<input type=\"hidden\" name=\"adminCode\" value=\"".$row[8]."\" />";
						     echo "<input type=\"submit\" name=\"editButton\" value=\"Edit Person\" />";
					       echo "</form>";
					       echo "</td>";

					       echo "<td>";
					       echo "First Name: ".$row[1]."<br />";
					       echo "Last Name: ".$row[2]."<br />";
					       echo "</td></tr></table>";
						     echo "<br />";
				       }
			     }
          mysqli_close($dbConnection);
          ?>

       </div>
     </div>



   </div>
</body>

</html>
