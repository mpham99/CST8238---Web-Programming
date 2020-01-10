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
       <?php
       if ($_SERVER["REQUEST_METHOD"] == "POST") {
         session_start();

         if(isset($_POST["box1"])){
          $_SESSION["firstName"] = $_POST["box1"];
         }

         if(isset($_POST["box2"])){
          $_SESSION["lastName"] = $_POST["box2"];
         }

         if(isset($_POST["box3"])){
          $_SESSION["emailAddress"] = $_POST["box3"];
         }

         if(isset($_POST["box4"])){
          $_SESSION["phone"] = $_POST["box4"];
         }

         if(isset($_POST["box5"])){
          $_SESSION["sinNum"] = $_POST["box5"];
         }

         if(isset($_POST["box6"])){
          $_SESSION["password"] = $_POST["box6"];
         }

         if(isset($_POST["box7"])){
          $designation = $_POST["box7"];
          $_SESSION["designation"] = $_POST["box7"];
         }

         if(isset($_POST["box8"])){
          $adminCode = $_POST["box8"];
          $_SESSION["adminCode"] = $_POST["box8"];
         }

         if($designation == "Manager" && $adminCode != 999)
            $adminCodeErr = "Admin code must be 999 for Manager";
         else if($designation == "Manager" || $designation == "ITDeveloper" || $designation == "IT Developer"){
           $sqlQuery = "INSERT INTO Employee (FirstName, LastName, EmailAddress, TelephoneNumber, SocialInsuranceNumber, Password, Designation, AdminCode) VALUES('".$_SESSION["firstName"]."', '".$_SESSION["lastName"]."', '".$_SESSION["emailAddress"]."', '".$_SESSION["phone"]."', '".$_SESSION["sinNum"]."', '".$_SESSION["password"]."', '".$_SESSION["designation"]."', '".$_SESSION["adminCode"]."')";
           mysqli_query($dbConnection, $sqlQuery);
           header("Location: ViewAllEmployees.php");
           exit;
         }else {
            $adminCodeErr = "Designation must be Manager or IT Developer";
         }
       }
        ?>

       <div style = "margin: 10px 10px 10px 10px;">
         <strong>Create your new account</strong></br></br>
         Please fill in all information</br>
         <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            First Name: <input type="text" name="box1" placeholder="Enter the first name" style="width: 300px;"><br></br>
            Last Name: <input type="text" name="box2" placeholder="Enter the last name" style="width: 300px;"><br></br>
            Email Address: <input type="email" name="box3" placeholder="Enter a email address" style="width: 300px;"><br></br>
            Phone Number: <input type="tel" name="box4" placeholder="Enter a phone number" style="width: 300px;"><br></br>
            SIN: <input type="number" name="box5" placeholder="Enter the SIN number" style="width: 300px;"><br></br>
            Password: <input type="password" name="box6" placeholder="Enter the password" style="width: 300px;"><br></br>
            Designation: <input type="text" name="box7" placeholder="Enter the Designation" style="width: 300px;"><br></br>
            Admin Code: <input type="number" name="box8" placeholder="Enter the admin code" style="width: 300px;"></br>
            <span class="error" style = "color: red;">   <?php echo $adminCodeErr;?></span><br></br>
            <button type="submit" value="Submit" name = "Submit1">Submit Information</button>
         </form>

       </div>

     </div>

   </div>
</body>

</html>
