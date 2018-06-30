<!--
Russell Lilljedahl
CMSC 495 Group 6
30 Jun 2018
Logout Page
-->

<?php
    session_start();

    if(session_destroy()) {
        header("Location: login.php");
    }
?>
