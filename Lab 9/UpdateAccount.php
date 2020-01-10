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
  $adminCodeErr = "";
   ?>

   <div id = "content">

     <div id = "section1">

       <div style = "margin: 10px 10px 10px 10px;">
         <strong>Update the following fields.</strong></br></br>
         Please fill in all information</br>
         <form method="post" action="UpdateAccountComplete.php">
           <input type="hidden" name="updateEmployeeId" value="<?php echo  $_POST['EmployeeId']?>" />
            First Name: <input type="text" name="box1" placeholder="Enter the first name" style="width: 300px;" value="<?php echo  $_POST['firstName']?>"><br></br>
            Last Name: <input type="text" name="box2" placeholder="Enter the last name" style="width: 300px;" value="<?php echo  $_POST['lastName']?>"><br></br>
            Email Address: <input type="email" name="box3" placeholder="Enter a email address" style="width: 300px;" value="<?php echo  $_POST['EmailAddress']?>"><br></br>
            Phone Number: <input type="tel" name="box4" placeholder="Enter a phone number" style="width: 300px;" value="<?php echo  $_POST['TelephoneNumber']?>"><br></br>
            Designation: <input type="text" name="box5" placeholder="Enter the Designation" style="width: 300px;" value="<?php echo  $_POST['designation']?>"><br></br>
            Admin Code: <input type="number" name="box6" placeholder="Enter the admin code" style="width: 300px;" value="<?php echo  $_POST['adminCode']?>"></br>
            <button type="submit" value="Submit" name = "Submit1">Update Record</button>
         </form>

       </div>

     </div>

   </div>
</body>

</html>
