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
         <h1>Session State Data</h1></br></br>
         <?php
         if(isset($_SESSION)){
           session_start();
           if(isset($_SESSION["firstName"]))
             echo "<strong>Employee Name: </strong>".$_SESSION["firstName"]."</br>";

           if(isset($_SESSION["lastName"]))
             echo "<strong>Employee ID: </strong>".$_SESSION["lastName"]."</br>";

           if(isset($_SESSION["emailAddress"]))
             echo "<strong>Email: </strong>".$_SESSION["emailAddress"]."</br>";

           if(isset($_SESSION["phone"]))
             echo "<strong>Phone Number: </strong>".$_SESSION["phone"]."</br>";

           if(isset($_SESSION["sinNum"]))
             echo "<strong>SIN: </strong>".$_SESSION["sinNum"]."</br>";

           if(isset($_SESSION["designation"]))
             echo "<strong>Designation: </strong>".$_SESSION["designation"]."</br>";
         }else {
           header("Location: Login.php");
           exit;
         }


         ?>

         <?php
                 $sqlQuery = "SELECT * FROM Employee";

         			   $result = mysqli_query($dbConnection,$sqlQuery);

                  echo "</br></br><h1>Database Data</h1>
                       <table>
                       <tr>
                       <th>First Name</th>
                       <th>Last Name</th>
                       <th>Email Address</th>
                       <th>Phone Number</th>
                       <th>SIN</th>
                       <th>Designation</th>
                       </tr>";
                  while($row = mysqli_fetch_array($result)){
                     echo "<tr>";
                     echo "<td>" . $row["FirstName"] . "</td>";
                     echo "<td>" . $row["LastName"] . "</td>";
                     echo "<td>" . $row["EmailAddress"] . "</td>";
                     echo "<td>" . $row["TelephoneNumber"] . "</td>";
                     echo "<td>" . $row["SocialInsuranceNumber"] . "</td>";
                     echo "<td>" . $row["Designation"] . "</td>";
                  }
                  echo "</table>";
                  mysqli_close($dbConnection);
          ?>

       </div>
     </div>



   </div>
</body>

</html>
