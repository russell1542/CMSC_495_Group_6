

<!DOCTYPE html>
<html>
    <head>
        <title>Workout Logs</title>  

        <link  href="\Styles\Styles.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <header>
            <h1>New Entry</h1>
        </header>

        <section>
            <aside>
                <nav>
                    <ul>
                        <div>
                            <li><a href="workoutlog.php">Workout Log Homepage</a></li>
                            <li><a href="history.php">History</a></li>
                        </div>
                    </ul>
                </nav>
            </aside>

            <article>
                <h2>Welcome!</h2>
                <p>
                    Keep track of all your workouts!!!<br>
                    Use the form below to enter a new workout into the database.<br>
                </p>
            </article>
        </section>
        
        <section>
            <aside>
                <nav>
                    <ul>
                        <form name ="main" method ="post" action=tableAlteration.php>
                            <div class="container">
                                <label for="workoutDate"><b>Workout date</b></label>
                                <input type="text" placeholder="Enter Workout Date" name="workoutDate" required <br></input>
                            </div>
                            <div class="exContainer">
                                <label for="exerciseName"><b>Exercise name</b></label>
                                <input type="text" placeholder="Enter Exercise Name" name="exerciseName" required </input>
                                <label for="exerciseSets"><b>Number of sets</b></label>
                                <input type="text" placeholder="Enter number of sets" name="exerciseSets" required </input>
                                <label for="exerciseWeight"><b>Weight</b></label>
                                <input type="text" placeholder="Enter weight" name="exerciseWeight" required </input>
                                <label for="exerciseReps"><b>Reps</b></label>
                                <input type="text" placeholder="Enter reps" name="exerciseReps" required <br></input>
                            </div>
                            <div class="container">
                                <label for="notes"><b>Workout notes</b></label>
                                <input type="text" placeholder="Enter notes" name="notes" required </input>
                            </div>
                            <div>
                                <button type="button" class="cancelbtn">Cancel</button>
                                <button type="button" class="submitbtn">Submit</button>
                            </div>
                        </form>
                    </ul>
                </nav>
            </aside>
            
        </section>

        <footer>
            <p>This is the footer of the page</p>
        </footer>
    </body>
</html>
