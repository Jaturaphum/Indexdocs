<?php
session_start();
require('src/connect.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/profrile.css">
    <link rel="stylesheet" href="css/profile-update.css">
    <title>Profile</title>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="profile.php">Edit</a></li>
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php?logout='1'">Logout</a></li>
            </ul>
        </nav>
    </header>
    <div class="container">
        <form class="profile-form" action="db/update_profile.php" method="post">
            <h1 style=" color: black; font-size: 2em;">UPDATE PROFILE</h1>
            <div class="update-profile">
                <label for="firstname">First Name</label>
                <input type="text" name="fname" id="fname">
                <button type="submit">Update</button>
            </div>
            <div class="update-profile">
                <label for="fistname">Last Name</label>
                <input type="text" name="fname" id="fname">
                <button type="submit">Update</button>
            </div>
            <div class="update-profile">
                <label for="fistname">Username</label>
                <input type="text" name="fname" id="fname">
                <button type="submit">Update</button>
            </div>
        </form>
        <form class="update-pss-form" action="db/new_pssword.php" method="post">
            <h1 style="text-align: center; color: black; font-size: 2em;">CHANGE PASSWORD</h1>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>
            <label for="newpassword">New Password</label>
            <input type="password" name="newpassword" id="newpassword" required>
            <label for="confirmnewpassword">Confirm New Password</label>
            <input type="password" name="confirmnewpassword" id="confirmnewpassword" required>
            <button type="submit">Update</button>
        </form>
    </div>
</body>

</html>