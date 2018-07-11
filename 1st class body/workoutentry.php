<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <!-- The following provides a description for the website -->
        <meta name="description" content="Free Web tutorials">
        <!-- The following defines keywords for websites -->
        <meta name="keywords" content="HTML, CSS, XML, JavaScript">
        <!-- The following automatically sets the viewport for all devices -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>New Workout Entry</title>        
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link  href="Styles\Styles.css" rel="stylesheet" type="text/css">
    </head>

    <body OnLoad="document.createstudent.firstname.focus();">
        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
        <script>
            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function() {scrollFunction()};

            function scrollFunction() {
                if (document.body.scrollTop > 250 || document.documentElement.scrollTop > 20) {
                    document.getElementById("myBtn").style.display = "block";
                } else {
                    document.getElementById("myBtn").style.display = "none";
                }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
        </script>
        <header>
            <img src="Styles\FirstClassBodyLogo.png" alt="First Class Body Logo" style="height:200px;">
        </header>

        <section>
            <aside>
                <nav>
                    <ul>
                        <div>
                            <li><a href="index.html" class="active"><i class="fa fa-home"></i> Home</a></li>
                            <li><a href="workoutlog.html">Workout Log</a></li>
                            <li><a href="history.php">History</a></li>
                            <li><a href="logout.php">Logout</a></li>
                        </div>
                    </ul>
                </nav>
            </aside>

            <article>
            <?php
                header('X-Content-Type-Options: nosniff');
                header('X-Frame-Options: SAMEORIGIN');
                ini_set("session.cookie_httponly", 1);
                if (isset($_POST["Submit"])) {

                    validate_form();
                } else {
                    $messages = array();
                    show_form($messages);
                }

                function show_form($messages) {
                    if (count($messages) > 0) {
                        echo "<p></p>";
                        echo "<div><table id='myresults'>";
                        echo "<tr>";
                        echo "<td>";
                        echo "<h2>Warning! Form Entry Errors Exist.</h2>";
                        echo "<h4>Please revise based on the following issues and submit again.</h4>";
                        echo "<ol>";


                        foreach ($messages as $m) {
                            echo "<li> $m </li>";
                        }
                        echo "</ol>";
                        echo "</td>";
                        echo "</tr>";
                        echo "</table></div>";
                        echo "<p></p>";
                    }

                    // Assign post values if exist
                    $date = "";
                    $ex_name = "";
                    $sets = "";
                    $weight = "";
                    $reps = "";
                    $notes = "";
                    if (isset($_POST["workoutDate"]))
                        $date = $_POST["workoutDate"];
                    if (isset($_POST["exerciseName"]))
                        $ex_name = $_POST["exerciseName"];
                    if (isset($_POST["exerciseSets"]))
                        $sets = $_POST["exerciseSets"];
                    if (isset($_POST["exerciseWeight"]))
                        $weight = $_POST["exerciseWeight"];
                    if (isset($_POST["exerciseReps"]))
                        $reps = $_POST["exerciseReps"];
                    if (isset($_POST["exerciseNotes"]))
                        $notes = $_POST["exerciseNotes"];
            ?>

            <h2>Welcome!</h2>
            <p>
                Keep track of all your workouts!!!
                Use the form below to enter your new entry.
            </p>
            <form name="createnewentry" method="POST" action="workoutentry.php">		
                <div class="field">
                    <label for="workoutDate"><b>Date:</b></label>
                    <input type="text" placeholder="YYYY-MM-DD" name="workoutDate" required />
                </div>
                <div class="field">
                    <label for="exerciseName"><b>Exercise Name:</b></label>
                    <input type="text" placeholder="Exercise Name" name="exerciseName" required />
                </div>
                <div class="field">
                    <label for="exerciseSets"><b>Number of Sets:</b></label>
                    <input type="text" placeholder="Number of Sets" name="exerciseSets" required />
                </div>
                <div class="field">
                    <label for="exerciseWeight"><b>Weight Amount:</b></label>
                    <input type="text" placeholder="Weight Amount" name="exerciseWeight" required />
                </div>
                <div class="field">
                    <label for="exerciseReps"><b>Number of Reps:</b></label>
                    <input type="text" placeholder="Number of Reps" name="exerciseReps" required />
                </div>
                <div class="field">
                    <label for="notes"><b>Workout Notes</b></label>
                    <input type="text" placeholder="Workout Notes" name="exerciseNotes" required />
                </div>
                <div class="entry_submit">
                    <input type="submit" value="Submit" name="Submit">
                    <!--<button type="submit" name="submit" class="submitbtn">Submit</button>-->
                </div>		
            </form>

            <?php
                }// End Show form

                function validate_form() {

                    $messages = array();
                    $redisplay = false;
                    // Assign values
                    $date = $_POST["workoutDate"];
                    $ex_name = $_POST["exerciseName"];
                    $sets = $_POST["exerciseSets"];
                    $weight = $_POST["exerciseWeight"];
                    $reps = $_POST["exerciseReps"];
                    $notes = $_POST["exerciseNotes"];

                    // Check for null values
                    if (strlen($date) == 0) {
                        $redisplay = true;
                        $messages[] = "Please enter the date in the format YYYY-MM-DD.";
                    }
                    if (strlen($ex_name) == 0) {
                        $redisplay = true;
                        $messages[] = "Please enter the workout name.";
                    }
                    if (strlen($sets) == 0) {
                        $redisplay = true;
                        $messages[] = "Please enter the number of sets.";
                    }
                    if (strlen($weight) == 0) {
                        $redisplay = true;
                        $messages[] = "Please enter the quantity of weight.";
                    }
                    if (strlen($reps) == 0) {
                        $redisplay = true;
                        $messages[] = "Please enter the number of reps.";
                    }

                    $const = include("dbconfig.php");

                    $conn = new mysqli($const['host'], $const['username'], $const['password'], $const['database']) or die("Connect failed: %s\n" . $conn->error);                    

                    // Check connection
                    if($conn === false){
                        die("ERROR: Could not connect. " . $mysqli->connect_error);
                        error_log("couldn't connect\n", 3, "my-errors.log");
                    } else {
                        error_log("successful connection\n", 3, "my-errors.log");
                    }

                    $query=mysql_query("SELECT * FROM user_login WHERE name = '$username' AND password = '$password'");

                    $row = mysql_fetch_assoc($query);
                    $num = mysql_num_rows();

                    if($num==1)
                    {
                        session_start(); 
                        $_SESSION['user_id']= $row['user_id'];
                    };

                    $id = "$_SESSION[user_id]";
                    error_log($id, 3, "my-errors.log");

                    // insert into table
                    $sql = "INSERT INTO workout_table (user_id, workout_date, exercise_name, sets, weight, reps, notes) 
                            VALUES ( $id, $date, $ex_name, $sets, $weight, $reps, $notes)";

                    error_log($sql, 3, "my-errors.log");
                    
                    if($conn->query($sql) === true) {
                        header("location:dataSubmitted.html"); // if pressed, return to workout log page
                    } else{
                        header("location:dataEntryFailed.html"); // if pressed, return to workout log page
                    }

                    header("location:workoutlog.html");
                }
            ?>
            </article>
        </section>
        <footer>
            <p>Current Trends and Projects in Computer Science - Group 6 - 2018</p>
        </footer>
    </body>
</html>