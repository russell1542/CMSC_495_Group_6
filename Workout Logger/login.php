<!--
Russell Lilljedahl
CMSC 495 Group 6
24 Jun 2018
Login Page
-->

<?php
    include("config.php");
    session_start();
    
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = mysqli_real_escape_string($db, $_POST['userName']);
        $userPassword = mysqli_real_escape_string($db, $_POST['password']);

        $sql = "SELECT id FROM admin WHERE username = '$username'"
                . " and passcode = '$userPassword'";
        $result = mysqli_query($db,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $active = $row['active'];
        
        $count = mysqli_num_rows($result);
        
        if($count == 1) {
            session_register("myusername");
            $_SESSION['login_user'] = $myusername;

            header("location: workoutlog.php");
        }else {
            $error = "Your Login Name or Password is invalid";
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Workout Logs</title>  

        <link  href="\Styles\Styles.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <header>
            <h1>Login</h1>
        </header>

        <section>
            <aside>
                <nav>
                    <ul>
                        <form>
                            <div class="container">
                                <label for="userName"><b>Username</b></label>
                                <input type="text" placeholder="Enter Username" name="userName" required </input>
                            </div>

                            <div class="container">
                                <label for="password"><b>Password</b></label>
                                <input type="password" placeholder="Enter Password" name="password" required </input>        
                                <!-- TODO
                                <label>
                                    <input type="checkbox" checked="checked" name="remember"> Remember me
                                </label>
                                -->
                            </div>

                            <div class="container" style="background-color:#f1f1f1">
                                <button type="button" class="cancelbtn">Cancel</button>
                                <button type="submit">Login</button>
                                <!-- TODO
                                    <span class="psw">Forgot <a href="#">password?</a></span>
                                -->
                            </div>
                        </form>
                    </ul>
                </nav>
            </aside>
        </section>

        <footer>
            <p>
                <li><a href="./workoutlog.php">Workout Log Homepage</a></li>
            </p>
        </footer>
    </body>
</html>
