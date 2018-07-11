<?php
    session_start();

    // replace with user login
    $const = include("dbconfig.php");
    $conn = new mysqli($const['host'], $const['username'], $const['password'], $const['database']) or die("Connect failed: %s\n" . $conn->error);

    if ( isset( $_GET['submit'] ) ) { 
        $exerciseName = $_GET['exerciseName'];
        $workoutDate = $_GET['workoutDate'];
        $exerciseReps = $_GET['exerciseReps'];
        $exerciseWeight = $_GET['exerciseWeight'];
        $exerciseSets = $_GET['exerciseSets'];
        $notes = $_GET['notes'];
    } else {
        error_log("Not all forms submitted\n", 3, "my-errors.log");
    }

    // Check connection
    if($conn === false){
        die("ERROR: Could not connect. " . $mysqli->connect_error);
        error_log("couldn't connect\n", 3, "my-errors.log");
    } else {
        error_log("successful connection\n", 3, "my-errors.log");
    }
    
    // insert into table
    $sql = "INSERT INTO workout_table (exercise_name, workout_date, reps, weight, sets, notes) 
            VALUES (" . $exerciseName . ", " . $workoutDate . ", " . $exerciseReps . ", " . $exerciseWeight . ", " . $exerciseSets . ", " . $notes . ")";

    error_log($sql, 3, "my-errors.log");
    
    if($conn->query($sql) === true) {
        header("location:dataSubmitted.html"); // if pressed, return to workout log page
    } else{
        header("location:dataEntryFailed.html"); // if pressed, return to workout log page
    }
        
    //TODO
    // add other funcitons as necessary
    // delete, change, etc.

?>