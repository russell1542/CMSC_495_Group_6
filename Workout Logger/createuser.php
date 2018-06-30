<!--
Russell Lilljedahl
CMSC 495 Group 6
24 Jun 2018
Create User Page
-->

<?php
?>


<!DOCTYPE html>

<html>
    <head>
        <title>Workout Logs</title>  

        <link  href="\Styles\Styles.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <header>
            <h1>New User</h1>
        </header>

        <section>
            <aside>
                <nav>
                    <ul>
                        <form>
                            <div class="container">
                                <label for="userName"><b>Username</b></label>
                                <input type="text" placeholder="Enter Username" name="userName" required>
                            </div>

                            <div class="containter">
                                <label for="password"><b>Password</b></label>
                                <input type="password" placeholder="Enter Password" name="password" required>        
                            </div>

                            <div class="container" style="background-color:#f1f1f1">
                                <button type="button" class="cancelbtn">Cancel</button>
                                <button type="submit">Create</button>
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