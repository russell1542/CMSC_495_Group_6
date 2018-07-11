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
        
        <title>Create User</title>        
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
                    $firstname = "";
                    $lastname = "";
                    $username = "";
                    $password = "";
                    if (isset($_POST["firstname"]))
                        $firstname = $_POST["firstname"];
                    if (isset($_POST["lastname"]))
                        $lastname = $_POST["lastname"];
                    if (isset($_POST["username"]))
                        $username = $_POST["username"];
                    if (isset($_POST["password"]))
                        $password = $_POST["password"];

                    echo "<p></p>";
                    echo "<h2> Create New Account</h2>";
                    echo "<p></p>";
            ?>

            <p>Complete the information in the form below and click Submit to create your account. All fields are required.</p>
            <form name="createuser" method="POST" action="createuser.php">	
                <table border="1" width="100%" cellpadding="0" id="mylogin">			
                    <div class = "field">
                        <label for="Firstname"><b>Firstname:</b></label>
                        <input type="text" name="firstname" value='<?php echo $firstname ?>' size="30">
                    </div>
                    <div class = "field">
                        <label for="Lastname"><b>Lastname:</b></label>
                        <input type="text" name="lastname" value='<?php echo $lastname ?>' size="30">
                    </div>
                    <div class = "field">
                        <label for="Username"><b>Username:</b></label>
                        <input type="text" name="username" value='<?php echo $username ?>' size="30">
                    </div>
                    <div class = "field">
                        <label for="Password"><b>Password</b></label>
                        <input type="password" name="password" value='<?php echo $password ?>' size="30">
                    </div>
                    <div class="entry_submit">
                        <input type="submit" value="Submit" name="Submit">
                        <!--<button type="submit" name="submit" class="submitbtn">Submit</button>-->
                    </div>
                </table>			
            </form>

            <?php
                }// End Show form

                function validate_form() {

                    $messages = array();
                    $redisplay = false;
                    // Assign values
                    $firstname = $_POST["firstname"];
                    $lastname = $_POST["lastname"];
                    $username = $_POST["username"];
                    $password = $_POST["password"];

                    // Check for null values
                    if (strlen($firstname) == 0) {
                        $redisplay = true;
                        $messages[] = "Please enter your Firstname.";
                    }
                    if (strlen($lastname) == 0) {
                        $redisplay = true;
                        $messages[] = "Please enter your Lastname.";
                    }
                    if (strlen($username) == 0) {
                        $redisplay = true;
                        $messages[] = "Please enter your Username.";
                    }
                    if (strlen($password) == 0) {
                        $redisplay = true;
                        $messages[] = "Please enter your Password.";
                    }

                    $const = include("dbconfig.php");

                    $conn = new mysqli($const['host'], $const['username'], $const['password'], $const['database']) or die("Connect failed: %s\n" . $conn->error);

                    $query = $conn->prepare("SELECT username FROM user_table WHERE username = ?");
                    $query->bind_param("s", $username);
                    $query->execute();
                    $result = $query->get_result();
                    if ($result->num_rows === 0) {
                        $query = $conn->prepare("INSERT INTO user_table (FirstName,LastName,Username,Password)VALUES(?,?,?,?)");
                        $query->bind_param("ssss", $firstname, $lastname, $username, $password);
                        $query->execute();
                        header("location:login.html");
                        // echo "<h3>Welcome</h3> ";
                        // echo "<h3>click here to <a href='Login.html' >login</a></h3> ";
                        
                    } else {
                        $redisplay = true;
                        $messages[] = "This UserName is already used. Please try another username.";
                    }
                    mysqli_close($conn);
                    
                    if ($redisplay) {
                        show_form($messages);
                    }
                }
            ?>
            </article>
        </section>
        <footer>
            <p>Current Trends and Projects in Computer Science - Group 6 - 2018</p>
        </footer>
    </body>
</html>