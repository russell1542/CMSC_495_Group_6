<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="tutors.css">   
        <title>Create User </title>
    </head>
    <body OnLoad="document.createstudent.firstname.focus();"> 

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
            <h5>Complete the information in the form below and click Submit to create your account. All fields are required.</h5>
            <form name="createuser" method="POST" action="createNewUser.php">	
                <table border="1" width="100%" cellpadding="0" id="mylogin">			
                    <tr>
                        <td width="157">Firstname:</td>
                        <td><input type="text" name="firstname" value='<?php echo $firstname ?>' size="30"></td>
                    </tr>
                    <tr>
                        <td width="157">Lastname:</td>
                        <td><input type="text" name="lastname" value='<?php echo $lastname ?>' size="30"></td>
                    </tr>
                    <tr>
                        <td width="157">Username:</td>
                        <td><input type="text" name="username" value='<?php echo $username ?>' size="30"></td>
                    </tr>
                    <tr>
                        <td width="157">Password:</td>
                        <td><input type="text" name="password" value='<?php echo $password ?>' size="30"></td>
                    </tr>
                    <tr>
                        <td width="157"><input type="submit" value="Submit" name="Submit"></td>
                        <td>&nbsp;</td>
                    </tr>
                </table>			
            </form>

    <?php
}

// End Show form

function validate_form() {

    $messages = array();
    $redisplay = false;
    // Assign values
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Just check for null values and email format
    if (strlen($firstname) == 0) {
        $redisplay = true;
        $messages[] = "Please enter your Firstname.";
    }
    if (strlen($lastname) == 0) {
        $redisplay = true;
        $messages[] = "Please enter your lastname.";
    }
    if (strlen($username) == 0) {
        $redisplay = true;
        $messages[] = "Please enter your username.";
    }
    if (strlen($password) == 0) {
        $redisplay = true;
        $messages[] = "Please enter your password.";
    }

    $const = include("dbconfig.php");

    $conn = new mysqli($const['host'], $const['username'], $const['password'], $const['database']) or die("Connect failed: %s\n" . $conn->error);

    $query = $conn->prepare("SELECT username FROM users_table WHERE username = ?");
    $query->bind_param("s", $username);
    $query->execute();
    $result = $query->get_result();
    if ($result->num_rows === 0) {
        $query = $conn->prepare("INSERT INTO users_table (FirstName,LastName,username,password)VALUES(?,?,?,?)");
        $query->bind_param("ssss", $firstname, $lastname, $username, $password);
        $query->execute();
        
        echo "<h3>Welcome</h3> ";
        echo "<h3>click here to <a href='Login.html' >login</a></h3> ";
        
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
    </body>
</html>