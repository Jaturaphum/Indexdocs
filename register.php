<?php
session_start();
require('src/connect.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/register.css">
    <title>Register</title>
</head>

<body>
    <div class="container">
        <form class="register-form" action="./src/register.php" method="post">
           <div>
           <label for="Fistname">fist name</label>
            <input type="text" id="fname" name="fname" placeholder="first name">
            <label for="lastname">Last name</label>
            <input type="text" id="lname" name="lname" placeholder="last name">
           </div>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="email">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="username">
            <label for="password">Password</label>
            <input type="password" id="password_1" name="password_1" placeholder="password">
            <label for="confirm password">confirm Password</label>
            <input type="password" id="password_2" name="password_2" placeholder="confirm password">
            <button type="submit" name="signup">Register</button>
        </form>
    </div>
</body>

</html>