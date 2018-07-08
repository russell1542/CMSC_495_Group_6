<?php

    $const = include("dbconfig.php");
    // replace with user login
    $conn = new mysqli($const['localhost'], $const['rlill'], $const['test1234'],$const['database']) or die("Connect failed: %s\n". $conn -> error);
    // Check connection
    if($conn === false){
        die("ERROR: Could not connect. " . $mysqli->connect_error);
    } 
      
    // insert into table
    $sql = "INSERT INTO 'workout_table' ('exercise_name', 'workout_date', 
            . 'reps', 'weight', 'sets', 'notes') 
            VALUES
            ([exerciseName], [workoutDate], [exerciseReps], 
            [exerciseWeight], [exerciseSets], [notes])";
    
    if($conn->query($sql) === true) {
        header("location:dataSubmitted.html"); // if pressed, return to workout log page
    } else{
        header("location:dataEntryFailed.html"); // if pressed, return to workout log page
    }
    
    
    
    //TODO
    // add other funcitons as necessary
    // delete, change, etc.

?>