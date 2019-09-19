<!DOCTYPE html>
<html>

<head>
<meta charset="ISO-8859-1">
<title>Lab 6</title>
<link href="StyleSheet.css" type="text/css" rel="stylesheet">
</head>

<body>
  <?php
  include "Header.php";
  include "Menu.php";
  include "Footer.php";
  ?>

  <div id = "content">
    <form method="post">
       Range 1: <input type="number" name="range1" min = "0" placeholder="Enter a positive number" style="width: 300px;"><br>
       Range 2: <input type="number" name="range2" min = "0" placeholder="Enter a positive number" style="width: 300px;"><br>
       <button type="submit" value="Submit" name = "Submit1">Submit</button>
    </form>

    <?php
    if (isset($_POST['Submit1'])) {
      $r1 = $_POST["range1"];
      $r2 = $_POST["range2"];
      $randomValue = rand($r1,$r2);

      if($randomValue % 2 == 0) {
        echo "The Web Server has selected the random number ".$randomValue." from the range ".$r1." to ".$r2."<br>";
        echo $randomValue." Bottles of Beers can serve even number of guests";
        echo "<br><br";
      }else if($randomValue == 0){
        echo "The Web Server has selected the random number ".$randomValue." from the range ".$r1." to ".$r2."<br>";
        echo "Beer bottle is 0. Please enter new range value.";
        echo "<br><br";
      }else{
        echo "The Web Server has selected the random number ".$randomValue." from the range ".$r1." to ".$r2."<br>";
        echo $randomValue." Bottles of Beers can serve odd number of guests";
        echo "<br><br";
      }
    }
    ?>

  </div>

</body>

</html>
