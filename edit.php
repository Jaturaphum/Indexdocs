<?php
session_start();
require('src/services/connect.php');
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
        <div class="div-header">
            <nav>
                <ul>
                    <li><a href="./edit.php"><?php echo $_SESSION['username']; ?></a></li>
                    <li><a href="./index.php">Home</a></li>
                    <li><a href="./login.php?status=1">Logout</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="container">
        <form class="profile-form" action="" method="post">
            <h1 style=" color: black; font-size: 2em;">UPDATE PROFILE</h1>
            <div class="update-profile">
                <label for="firstname">First Name</label>
                <input type="text" name="fname" id="fname" placeholder="">
                <label for="lastname">Last Name</label>
                <input type="text" name="lname" id="lname" placeholder="">
                <button type="submit">Name</button>
            </div>
            <div class="update-profile">
                <label for="fistname">Username</label>
                <input type="text" name="usernmae" id="usernmae" placeholder="<?php echo $_SESSION['username']; ?>">
                <button type="submit">Username</button>
            </div>
        </form>
        <form class="update-pss-form" action="./src/newpssword.php" method="post">
            <h1 style="text-align: center; color: black; font-size: 2em;">CHANGE PASSWORD</h1>
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>

            <?php if (isset($_GET['success'])) { ?>
                <p class="success"><?php echo $_GET['success']; ?></p>
            <?php } ?>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>
            <label for="newpassword">New Password</label>
            <input type="password" name="newpassword" id="newpassword" required>
            <label for="confirmpassword">Confirm Password:</label>
            <input type="password" name="confirmpassword" id="confirmpassword" required>
            <button type="submit">Update Password</button>
        </form>
    </div>
</body>

</html>