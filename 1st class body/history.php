<?php

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Workout Logs</title>  
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link  href="Styles\Styles.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <header>
            <h1>History</h1>
        </header>

        <section>
            <aside>
                <nav>
                    <ul>
                        <li><a href="newentry.html">New Entry</a></li>
                        <li><a href="workoutlog.html">Workout Log Homepage</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </nav>
            </aside>

            <article>
                <h2>Welcome!</h2>
                <p>
                    This is the history of all of your workout logs.<br>
                </p>
                <table>
                    <thead>
                        <tr>
                            <td>Exercise Name      </td>
                            <td>Exercise Date      </td>
                            <td>Reps      </td>
                            <td>Weight      </td>
                            <td>Sets      </td>
                            <td>Notes      </td>                            
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        //TODO
                        // change connection type
//                        $connect = mysql_connect("localhost","root", "root");
//                        if (!$connect) {
//                            die(mysql_error());
//                        }
//                        mysql_select_db("apploymentdevs");
//                        $results = mysql_query("SELECT * FROM demo LIMIT 10");
//                        while($row = mysql_fetch_array($results)) {
                        ?>
                            <tr>
                                <td><?php echo $row['exercise_name']?></td>
                                <td><?php echo $row['workout_date']?></td>
                                <td><?php echo $row['reps']?></td>
                                <td><?php echo $row['weight']?></td>
                                <td><?php echo $row['sets']?></td>
                                <td><?php echo $row['notes']?></td>         
                            </tr>
                            

                        <?php // } ?>
                    </tbody>
                </table>
            </article>
        </section>

        <footer>
            <p>Current Trends and Projects in Computer Science - Group 6 - 2018</p>
        </footer>
    </body>
</html>
