<?php
session_start();
require('src/services/connect.php');
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
            <h1 style="text-align: center;"></h1>
            <div style="display: flex; flex-direction: column; align-items: center; margin: 12px 0;" class="div-name">
                <label style="font-size: 1.2em; margin-right: auto;">Name</label>
                <div style="display: flex; margin: 6px 0;" class="div-input">
                    <label for="Fistname"></label>
                    <input type="text" id="fname" name="fname" placeholder="first name" required>
                    <label for="lastname"></label>
                    <input type="text" id="lname" name="lname" placeholder="last name" required>
                </div>
            </div>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="email" required>
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="username" required>
            <label for="password">Password</label>
            <input type="password" id="password_1" name="password_1" placeholder="password" required>
            <label for="confirm password">confirm Password</label>
            <input type="password" id="password_2" name="password_2" placeholder="confirm password" required>
            <button type="submit" name="signup">Sign Up</button>
        </form>
    </div>
</body>
</html>