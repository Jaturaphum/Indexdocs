<?php
session_start();
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
                    <li><a href="profile.php"><?php echo $_SESSION['username']; ?></a></li>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="login.php?logout=1">Logout</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="container">
    <form class="profile-form" action="db/update_profile.php" method="post">
            <h1 style=" color: black; font-size: 2em;">UPDATE PROFILE</h1>
            <div class="update-profile">
                <label for="firstname">First Name</label>
                <input type="text" name="fname" id="fname" placeholder="<?php echo $_SESSION['fname'];?>>
                <label for="lastname">Last Name</label>
                <input type="text" name="lname" id="lname" placeholder="<?php echo $_SESSION['lname'];?>>
                <button type="submit">Name</button>
            </div>
            <div class="update-profile">
                <label for="fistname">Username</label>
                <input type="text" name="usernmae" id="usernmae" placeholder="<?php echo $_SESSION['username'];?>">
                <button type="submit">Username</button>
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
            <button type="submit">New Password</button>
        </form>
    </div>
</body>

</html>