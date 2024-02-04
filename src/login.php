<?php
session_start();
require('./db/login_db.php');
require('./services/connect.php');

$username = $_POST['username'];
$password = $_POST['password'];

$user_id = loginuser($conn, $username, $password);

if ($user_id) {
    $_SESSION['username'] = $username;
    header("Location: ../index.php?login_status={$user_id}");
    exit();
} else {
    $_SESSION['error_message'] = ' username or password is incorrect!';
    header("Location: ../login.php?login_status=0");
    exit();
}
?>