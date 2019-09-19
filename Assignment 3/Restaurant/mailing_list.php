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

                <div class="main">
                    <h1>Mailing List</h1>
                    <?php
                    $sqlQuery = "SELECT * FROM mailingList";

                    $result = mysqli_query($conn,$sqlQuery);

                     echo "</br>
                          <table>
                          <tr>
                          <th>Full Name</th>
                          <th>Email Address</th>
                          <th>Phone Number</th>
                          </tr>";
                     while($row = mysqli_fetch_array($result)){
                        echo "<tr>";
                        echo "<td>" . $row["firstName"] . " " . $row["lastName"] . "</td>";
                        echo "<td>" . $row["emailAddress"] . "</td>";
                        echo "<td>" . $row["phoneNumber"] . "</td>";
                     }
                     echo "</table>";
                     mysqli_close($conn);
                     ?>
                </div><!-- End Main -->
            </div><!-- End Content -->

    <?php include("footer.php"); ?>
