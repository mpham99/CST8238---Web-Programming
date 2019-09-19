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

     <div id = "section1">
       <div style = "margin: 10px 10px 10px 10px;">
         <form method="post">
            Employee Name: <input type="text" name="box1" placeholder="Enter a employee name" style="width: 300px;"><br></br>
            Employee ID: <input type="text" name="box2" placeholder="Enter a employee ID" style="width: 300px;"><br></br>
            Telephone Number: <input type="tel" name="box3" placeholder="Enter a telephone number" style="width: 300px;"><br></br>
            Email Address: <input type="email" name="box4" placeholder="Enter a email address" style="width: 300px;"><br></br>
            Position:
              <input type="radio" name="position" value="Manager">Manager
              <input type="radio" name="position" value="Team Lead">Team Lead
              <input type="radio" name="position" value="IT Developer" >IT Developer
              <input type="radio" name="position" value="IT Analyst">IT Analyst</br></br>
            Poroject:
              <select name = "projectOption">
                <option value="Project A">Project A</option>
                <option value="Project B">Project B</option>
                <option value="Project C">Project C</option>
                <option value="Project D">Project D</option>
              </select>
            </br></br><button type="submit" value="Submit" name = "Submit1">Submit</button>
         </form>
       </div>
     </div>

     <?php
     if (isset($_POST['Submit1'])) {

       if(empty($_POST["box1"]))
         $name = "was not set by the form";
       else
	       $name = $_POST["box1"];

       if(empty($_POST["box2"]))
          $id = "was not set by the form";
       else
  	      $id = $_POST["box2"];

       if(empty($_POST["box3"]))
          $telNum = "was not set by the form";
       else
    	    $telNum = $_POST["box3"];

       if(empty($_POST["box4"]))
          $email = "was not set by the form";
       else
          $email = $_POST["box4"];

       if(empty($_POST["position"]))
          $position = "was not set by the form";
       else
          $position = $_POST["position"];

      if(empty($_POST["projectOption"]))
          $project = "was not set by the form";
      else
          $project = $_POST["projectOption"];
     }
      ?>

     <div id = "section2">
       <div style = "margin: 10px 10px 10px 10px;">
         <?php
            echo "<strong>Employee Name: </strong>".$name."</br>";
            echo "<strong>Employee ID: </strong>".$id."</br>";
            echo "<strong>Telephone Number: </strong>".$telNum."</br>";
            echo "<strong>Email Address: </strong>".$email."</br>";
            echo "<strong>Position: </strong>".$position."</br>";
            echo "<strong>Project: </strong>".$project."</br>";
         ?>
       </div>
     </div>

   </div>
</body>

</html>
