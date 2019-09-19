<?php include("header.php"); ?>
            <div id="content" class="clearfix">
                <aside>
                        <h2><?php echo date("l")?>'s Specials</h2>
                        <hr>
                        <img src="images/burger_small.jpg" alt="Burger" title="Monday's Special - Burger">
                        <h3>The WP Burger</h3>
                        <p>Freshly made all-beef patty served up with homefries - $14</p>
                        <hr>
                        <img src="images/kebobs.jpg" alt="Kebobs" title="WP Kebobs">
                        <h3>WP Kebobs</h3>
                        <p>Tender cuts of beef and chicken, served with your choice of side - $17</p>
                        <hr>
                        <h2>Private Dining</h2>
                        <img src="images/dining_room_sm.jpg" width="228" alt="Dining Room" title="The WP Eatery Dining Room">
                        <p>Call us to find out more about our private dinning options.</p>
                </aside>
                <div class="main">
                    <h1>Welcome to WP Eatery!</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                    <h3>Upcoming Events ...</h3>

                    <?php
                    include("class_lib.php");
                    $event1 = new EventItem("St. Patty's Day Party", "2017-10-17 19:00:00", "Join us for an authentic Irish four course meal, complete with shepard's pie and one green beer!", "$35.00");
                    $event2 = new EventItem("Samy's Spring Fling!", "2017-10-18 20:00:00", "Join us for to kick off the beginning of spring! This event will include 4 of Samy's infamous appetizers and one cocktail!", "$40.00");
                    ?>

                    <p>
                      <?php
                      echo"<strong class=\"event\">".$event1->getEventName()."</strong><br/>";
                      echo"<strong>Date:</strong> ".date_format($event1->getEventDate(), 'l M d, Y')."<br/>";
                      echo"<strong>Time:</strong> ".date_format($event1->getEventDate(), 'ga')."<br/>";
                      echo"<strong>Price:</strong> ".$event1->getEventPrice()."<br/>";
                      echo $event1->getEventDesc();
                      ?>
                    </p>

                    <p>
                    <?php
                      echo"<strong class=\"event\">".$event2->getEventName()."</strong><br/>";
                      echo"<strong>Date:</strong> ".date_format($event2->getEventDate(), 'l M d, Y')."<br/>";
                      echo"<strong>Time:</strong> ".date_format($event2->getEventDate(), 'ga')."<br/>";
                      echo"<strong>Price:</strong> ".$event2->getEventPrice()."<br/>";
                      echo $event2->getEventDesc();
                      ?>
                    </p>

                    <h2>Book your Private Party!</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                </div><!-- End Main -->
            </div><!-- End Content -->
<?php include("footer.php"); ?>
