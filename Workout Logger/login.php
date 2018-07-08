<?php
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Workout Logs</title>  

        <link  href="\Styles\Styles.css" rel="stylesheet" type="text/css">
    </head>
    <!--<body onload="document.main.username.focus();-->
    <body>
        <header>
            <h1>Login</h1>
        </header>

        <section>
            <aside>
                <nav>
                    <ul>
                        <form name = "main" method = "post" action = Authenticate.php>
                            <label for="userName"><b>Username</b></label>
                            <input type="text" placeholder="Enter Username" name="username" required </input>
                            <br>
                            <label for="password"><b>Password</b></label>
                            <input type="password" placeholder="Enter Password" name="password"  </input>        
                            <!-- TODO
                            <label>
                                <input type="checkbox" checked="checked" name="remember"> Remember me
                            </label>
                            -->
                            <br>
                            <button type="button" class="cancelbtn">Cancel</button>
                            <button type="submit" class="loginbtn">Login</button>
                            <button type="button" class="newUserbtn">New User</button>
                            <!-- TODO
                                <span class="psw">Forgot <a href="#">password?</a></span>
                            -->
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
