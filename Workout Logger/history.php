<!--
Russell Lilljedahl
CMSC 495 Group 6
24 Jun 2018
Workout log home page
-->

<?php
    include 'session.php'; // cannot get to this page without being logged in
?>

<html>
    <head>
        <title>Workout Logs</title>  

        <link  href="\Styles\Styles.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <header>
            <h1>History</h1>
        </header>

        <section>
            <aside>
                <nav>
                    <ul>
                        <div>
                            <li><a href="./workoutlog.php">Workout Log Homepage</a></li>
                            <li><a href="./newentry.php">New Entry</a></li>
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
                    This is the history of all of your workout logs.<br>
                </p>
            </article>
        </section>

        <footer>
            <p>This is the footer of the page</p>
        </footer>
    </body>
</html>

