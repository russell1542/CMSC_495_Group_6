<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>


<!DOCTYPE html>
<!--
Russell Lilljedahl
CMSC 495 Group 6
24 Jun 2018
Login Page
-->
<html>
    <head>
        <!-- CARA IS WORKING ON DESIGN
        REPLACE HEADER AND FOOTER
        -->
    <form>

        <div class="container">
            <label for="userName"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="userName" required>
        </div>

        <div class="containter">
            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>        
            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
        </div>

        <div class="container" style="background-color:#f1f1f1">
            <button type="button" class="cancelbtn">Cancel</button>
            <button type="submit">Login</button>
            <!-- FUTURE FEATURE
                <span class="psw">Forgot <a href="#">password?</a></span>
            -->
        </div>
    </form>
</html>
