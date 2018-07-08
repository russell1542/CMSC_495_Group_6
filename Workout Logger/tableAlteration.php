<?php

    if($_POST['cancel']) {
        echo "CANCELLED";
        header("location:welcome.php");
    }
    
    if($_POST['submit']) {
        echo "Submitted";
        header("location:welcome.php");
    }

    // insert into table
    $sql = "INSERT INTO workout_table (exercise_name, workout_date, 
            . reps, weight, sets, notes) 
            VALUES
            (exerciseName, workoutDate, exerciseReps , 
            exerciseWeight, exerciseSets, notes)";
    header("location:workoutlog.php"); // if cancel is pressed, return to workout log page
    
    //TODO
    // add other funcitons as necessary
    // delete, change, etc.

?>
