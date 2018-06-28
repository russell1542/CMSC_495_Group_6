<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>


<!DOCTYPE html>
<!--
Russell Lilljedahl
CMSC 495 Group 6
24 Jun 2018
Create User Page
-->
<html>
    <head>
        <meta charset="utf-8">
        <!-- The following provides a description for the website -->
        <meta name="description" content="Free Web tutorials">
        <!-- The following defines keywords for websites -->
        <meta name="keywords" content="HTML, CSS, XML, JavaScript">
        <!-- The following automatically sets the viewport for all devices -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

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