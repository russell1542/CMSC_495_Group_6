<?php
    //include 'session.php'; // cannot get to this page without being logged in

    if(isset($_POST['submitbtn'])) {
        $sql = "INSERT INTO workout_table (workout_name, workout_date, 
                . exercise_name, reps, weight, sets, notes) 
                VALUES
                (workoutName, workoutDate, exerciseName1,exerciseReps1 , 
                exerciseWeight1, exerciseSets1, notes), 
                (workoutName, workoutDate, exerciseName2,exerciseReps2 , 
                exerciseWeight2, exerciseSets2, notes),
                ";
    } else if(isset ($_POST['cancelbtn'])){
        header("location:workoutlog.php"); // if cancel is pressed, return to workout log page
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
            <div class="container">
                <label for="workoutName"><b>Workout name</b></label>
                <input type="text" placeholder="Enter Workout Name" name="workoutName" required </input>
                <label for="workoutDate"><b>Workout date</b></label>
                <input type="text" placeholder="Enter Workout Date" name="workoutDate" required <br></input>
            </div>
            <div class="exContainer">
                <label for="exerciseName1"><b>Exercise name</b></label>
                <input type="text" placeholder="Enter Exercise Name" name="exerciseName" required </input>
                <label for="exerciseSets1"><b>Number of sets</b></label>
                <input type="text" placeholder="Enter number of sets" name="exerciseSets" required </input>
                <label for="exerciseWeight1"><b>Weight</b></label>
                <input type="text" placeholder="Enter weight" name="exerciseWeight" required </input>
                <label for="exerciseReps1"><b>Reps</b></label>
                <input type="text" placeholder="Enter reps" name="exerciseReps" required <br></input>
            </div>
            <div class="exContainer">
                <label for="exerciseName2"><b>Exercise name</b></label>
                <input type="text" placeholder="Enter Exercise Name" name="exerciseName" required </input>
                <label for="exerciseSets2"><b>Number of sets</b></label>
                <input type="text" placeholder="Enter number of sets" name="exerciseSets" required </input>
                <label for="exerciseWeight2"><b>Weight</b></label>
                <input type="text" placeholder="Enter weight" name="exerciseWeight" required </input>
                <label for="exerciseReps2"><b>Reps</b></label>
                <input type="text" placeholder="Enter reps" name="exerciseReps" required <br></input>
            </div>
            <div class="exContainer">
                <label for="exerciseName3"><b>Exercise name</b></label>
                <input type="text" placeholder="Enter Exercise Name" name="exerciseName" required </input>
                <label for="exerciseSets3"><b>Number of sets</b></label>
                <input type="text" placeholder="Enter number of sets" name="exerciseSets" required </input>
                <label for="exerciseWeight3"><b>Weight</b></label>
                <input type="text" placeholder="Enter weight" name="exerciseWeight" required </input>
                <label for="exerciseReps3"><b>Reps</b></label>
                <input type="text" placeholder="Enter reps" name="exerciseReps" required <br></input>
            </div>
            <div class="exContainer">
                <label for="exerciseName4"><b>Exercise name</b></label>
                <input type="text" placeholder="Enter Exercise Name" name="exerciseName" required </input>
                <label for="exerciseSets4"><b>Number of sets</b></label>
                <input type="text" placeholder="Enter number of sets" name="exerciseSets" required </input>
                <label for="exerciseWeight4"><b>Weight</b></label>
                <input type="text" placeholder="Enter weight" name="exerciseWeight" required </input>
                <label for="exerciseReps4"><b>Reps</b></label>
                <input type="text" placeholder="Enter reps" name="exerciseReps" required <br></input>
            </div>
            <div class="exContainer">
                <label for="exerciseName5"><b>Exercise name</b></label>
                <input type="text" placeholder="Enter Exercise Name" name="exerciseName" required </input>
                <label for="exerciseSets5"><b>Number of sets</b></label>
                <input type="text" placeholder="Enter number of sets" name="exerciseSets" required </input>
                <label for="exerciseWeight5"><b>Weight</b></label>
                <input type="text" placeholder="Enter weight" name="exerciseWeight" required </input>
                <label for="exerciseReps5"><b>Reps</b></label>
                <input type="text" placeholder="Enter reps" name="exerciseReps" required <br></input>
            </div>
            <div class="exContainer">
                <label for="exerciseName6"><b>Exercise name</b></label>
                <input type="text" placeholder="Enter Exercise Name" name="exerciseName" required </input>
                <label for="exerciseSets6"><b>Number of sets</b></label>
                <input type="text" placeholder="Enter number of sets" name="exerciseSets" required </input>
                <label for="exerciseWeight6"><b>Weight</b></label>
                <input type="text" placeholder="Enter weight" name="exerciseWeight" required </input>
                <label for="exerciseReps6"><b>Reps</b></label>
                <input type="text" placeholder="Enter reps" name="exerciseReps" required <br></input>
            </div>
            <div class="exContainer">
                <label for="exerciseName7"><b>Exercise name</b></label>
                <input type="text" placeholder="Enter Exercise Name" name="exerciseName" required </input>
                <label for="exerciseSets7"><b>Number of sets</b></label>
                <input type="text" placeholder="Enter number of sets" name="exerciseSets" required </input>
                <label for="exerciseWeight7"><b>Weight</b></label>
                <input type="text" placeholder="Enter weight" name="exerciseWeight" required </input>
                <label for="exerciseReps7"><b>Reps</b></label>
                <input type="text" placeholder="Enter reps" name="exerciseReps" required <br></input>
            </div>
            <div class="exContainer">
                <label for="exerciseName8"><b>Exercise name</b></label>
                <input type="text" placeholder="Enter Exercise Name" name="exerciseName" required </input>
                <label for="exerciseSets8"><b>Number of sets</b></label>
                <input type="text" placeholder="Enter number of sets" name="exerciseSets" required </input>
                <label for="exerciseWeight8"><b>Weight</b></label>
                <input type="text" placeholder="Enter weight" name="exerciseWeight" required </input>
                <label for="exerciseReps8"><b>Reps</b></label>
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
            
        </section>

        <footer>
            <p>This is the footer of the page</p>
        </footer>
    </body>
</html>
