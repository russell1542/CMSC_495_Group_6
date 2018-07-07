<!--
Russell Lilljedahl
CMSC 495 Group 6
30 Jun 2018
Test if user is logged in, else redirect to login page
-->

<?php
    include('dbconfig.php');
    session_start();

    $user_check = $_SESSION['login_user'];

    $ses_sql = mysqli_query($db,"select username from admin where username = '$user_check' ");

    $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

    $login_session = $row['username'];

    if(!isset($_SESSION['login_user'])){
        header("location:login.php");
    }
?>

