<?php
include("header.php");
include("db_config.php");
?>

            <div id="content" class="clearfix">
                <aside>
                        <h2>Mailing Address</h2>
                        <h3>1385 Woodroffe Ave<br>
                            Ottawa, ON K4C1A4</h3>
                        <h2>Phone Number</h2>
                        <h3>(613)727-4723</h3>
                        <h2>Fax Number</h2>
                        <h3>(613)555-1212</h3>
                        <h2>Email Address</h2>
                        <h3>info@wpeatery.com</h3>
                </aside>

                <?php
                $error = 0;
                $errorMessage = "";
                $missing1 = "";
                $missing2 = "";
                $missing3 = "";
                $missing4 = "";
                $missing5 = "";
                $missing6 = "";

                 if ($_SERVER["REQUEST_METHOD"] == "POST") {
                   session_start();

                   if(!empty($_POST["customerfName"])){
                    $_SESSION["firstName"] = $_POST["customerfName"];
                   }else{
                    $error = 1;
                    $missing1 = " first name,";
                   }


                   if(!empty($_POST["customerlName"])){
                    $_SESSION["lastName"] = $_POST["customerlName"];
                   }else{
                    $error = 1;
                    $missing2 = " last name,";
                   }

                   if(!empty($_POST["phoneNumber"])){
                    $_SESSION["phone"] = $_POST["phoneNumber"];
                   }else{
                    $error = 1;
                    $missing3 = " phone number,";
                   }

                   if(!empty($_POST["emailAddress"])){
                    $_SESSION["email"] = $_POST["emailAddress"];
                   }else{
                    $error = 1;
                    $missing4 = " email address,";
                   }

                   if(!empty($_POST["username"])){
                    $_SESSION["username"] = $_POST["username"];
                   }else{
                    $error = 1;
                    $missing5 = " username,";
                   }

                   if(!empty($_POST["referral"]) && $_POST["referral"] != "Select referer"){
                    $_SESSION["referral"] = $_POST["referral"];
                   }else{
                    $error = 1;
                    $missing6 = " referrer";
                   }

                   if($error == 0) {
                      if(!filter_var($_POST['emailAddress'], FILTER_VALIDATE_EMAIL))
                          $errorMessage = " Invalid email address";
                      else {
                        $sqlQuery = "SELECT `emailAddress` FROM `mailingList` WHERE `emailAddress` = '".$_POST['emailAddress']."'";
                        $select = mysqli_query($conn, $sqlQuery);
                        if(mysqli_num_rows($select))
                          $errorMessage = " This email is already being used for mailing list";
                        else {
                          $sqlQuery = "INSERT INTO mailingList (firstName, lastName, phoneNumber, emailAddress, userName, referrer) VALUES('".$_SESSION["firstName"]."', '".$_SESSION["lastName"]."', '".$_SESSION["phone"]."', '".$_SESSION["email"]."', '".$_SESSION["username"]."', '".$_SESSION["referral"]."')";
                          mysqli_query($conn, $sqlQuery);
                          $errorMessage = " ADDED successfully";
                        }
                      }

                   }else if($error == 1)
                     $errorMessage = " Please fill the following fields: ". $missing1 . $missing2 . $missing3 . $missing4 . $missing5 . $missing6 ;

                 }

                 ?>

                <div class="main">
                    <h1>Sign up for our newsletter</h1>
                    <p>Please fill out the following form to be kept up to date with news, specials, and promotions from the WP eatery!</p>
                    <form name="frmNewsletter" id="frmNewsletter" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                        <table>
                            <tr>
                                <td>First Name:</td>
                                <td><input type="text" name="customerfName" id="customerfName" size='40'></td>
                            </tr>
                            <tr>
                                <td>Last Name:</td>
                                <td><input type="text" name="customerlName" id="customerlName" size='40'></td>
                            </tr>
                            <tr>
                                <td>Phone Number:</td>
                                <td><input type="text" name="phoneNumber" id="phoneNumber" size='40'></td>
                            </tr>
                            <tr>
                                <td>Email Address:</td>
                                <td><input type="text" name="emailAddress" id="emailAddress" size='40'>
                            </tr>
                             <tr>
                                <td>Username:</td>
                                <td><input type="text" name="username" id="username" size='20'>
                            </tr>
                            <tr>
                                <td>How did you hear<br> about us?</td>
                                <td>
                                   <select name="referral" size="1">
                                      <option>Select referer</option>
                                      <option value="newspaper">Newspaper</option>
                                      <option value="radio">Radio</option>
                                      <option value="tv">Television</option>
                                      <option value="other">Other</option>
                                   </select>
                                </td>
                            </tr>
                            <tr>
                              <span class="error" style = "color: red;">   <?php echo $errorMessage;?></span><br></br>
                            </tr>
                            <tr>
                                <td colspan='2'><input type='submit' name='btnSubmit' id='btnSubmit' value='Sign up!'>&nbsp;&nbsp;<input type='reset' name="btnReset" id="btnReset" value="Reset Form"></td>
                            </tr>
                        </table>
                    </form>
                </div><!-- End Main -->
            </div><!-- End Content -->

    <?php include("footer.php"); ?>
