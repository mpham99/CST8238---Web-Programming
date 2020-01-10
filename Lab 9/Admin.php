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
  $error = "";
   ?>

   <div id = "content">

     <div id = "section1">
       <?php
       if ($_SERVER["REQUEST_METHOD"] == "POST") {
         session_start();

         if(isset($_POST["box1"])){
          $_SESSION["emailAddress"] = $_POST["box1"];
         }

         if(isset($_POST["box2"])){
          $_SESSION["password"] = $_POST["box2"];
         }

         if(isset($_POST["box3"])){
          $_SESSION["adminCode"] = $_POST["box3"];
        }

         $query = "SELECT * FROM Employee WHERE EmailAddress = '".$_SESSION["emailAddress"]."' AND Password = '".$_SESSION["password"]."'";
         $result = mysqli_query($dbConnection, $query);
         if(mysqli_num_rows($result) > 0){
           if($_SESSION["adminCode"] == "999"){
             $_SESSION["login"] = true;
             header("Location: SelectAccount.php");
             exit;
           }else{
             $error = "Invalid Admin code !";
           }
         }else {
           $error = "Invalid login !";
         }
       }
        ?>

       <div style = "margin: 10px 10px 10px 10px;">
         <strong>Admin Panel</strong></br></br>
         <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            Email Address: <input type="email" name="box1" placeholder="Enter a email address" style="width: 300px;"><br></br>
            Password: <input type="password" name="box2" placeholder="Enter the password" style="width: 300px;"><br></br>
            Admin Code: <input type="number" name="box3" placeholder="Enter the admin code" style="width: 300px;"></br>
            <span class="error" style = "color: red;">   <?php echo $error;?></span><br></br>
            <button type="submit" value="Submit" name = "Submit1">Login</button>
         </form>

       </div>

     </div>

   </div>
</body>

</html>
