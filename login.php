<?php
session_start();
require('src/services/connect.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>

<body>
    <div class="container">
        <form class="login-form" action="./src/login.php" method="post">
            <h1 style="text-align: center;"></h1>
            <div class="column-login">
                <?php
                session_destroy();
                if (isset($_SESSION['error_message'])) {
                    echo '<div><p style="color: red; text-align: center;">' . $_SESSION['error_message'] . '</p></div>';
                    unset($_SESSION['error_message']);
                }
                ?>
                <label for="username">Username</label>
                <input type="text" id="username" placeholder="username" name="username" required>
                <label for="password">Password</label>
                <input type="password" id="password" placeholder="password" name="password" required>
            </div>
            <div class="column-butt">
                <button type="submit" name="bttlogin">Login</button>
            </div>
            <hr>
            <p><a href="register.php">Sign Up</a></p>
        </form>
    </div>
</body>
</html>