<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <!-- The following provides a description for the website -->
        <meta name="description" content="Workout Logging">
        <!-- The following defines keywords for websites -->
        <meta name="keywords" content="HTML, CSS">
        <!-- The following automatically sets the viewport for all devices -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Workout Logs</title>  

        <link  href="\Styles\Styles.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <header>
            <h1>Workout Log</h1>
        </header>

        <section>
            <aside>
                <nav>
                    <ul>
                        <div>
                            <li><a href="./newentry.php">New Entry</a></li>
                            <li><a href="./history.php">History</a></li>
                            
                            <li><a href="./createuser.php">TESTING FOR CREATE USER</a></li>
                            <li><a href="./login.php">TESTING FOR LOGIN</a></li>
                            
                            <div class="container" style="background-color:#f1f1f1">
                                <button type="logoutButton" class="logoutButton">Logout</button>
                            </div>

                        </div>
                    </ul>
                </nav>
            </aside>

            <article>
                <h2>Welcome!</h2>
                <p>
                    This is the homepage to all of your workout logs.<br>
                    You can either log a new workout or you can view your history.<br>
                    Please use the links to select what you want to do.<br>
                </p>
            </article>
        </section>

        <footer>
            <p>This is the footer of the page</p>
        </footer>
    </body>
</html>
