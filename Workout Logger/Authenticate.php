<?php

    $const = include("dbconfig.php");

    $conn = new mysqli($const['host'], $const['username'], $const['password'],$const['database']) or die("Connect failed: %s\n". $conn -> error);

    // Fixing XSS
    $username= mysqli_real_escape_string($conn,$_POST['username']);
    $password= mysqli_real_escape_string($conn,$_POST['password']); 

    // fixing SQL injection 
    $query = $conn->prepare("SELECT * FROM users_tbl WHERE username = ? AND password = ?");
    $query->bind_param("si", $username, $password);
    $query->execute();
    $result =$query->get_result();
    if ($result ->num_rows ===1) {
        echo "Welcome";
    } else {
        echo "Wrong Username or Password"; 
    }

    mysqli_close($conn);
?>

