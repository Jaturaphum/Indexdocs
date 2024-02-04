<?php
session_start();
require('./db/login_db.php');
require('./connect.php');

$username = $_POST['username'];
$password = $_POST['password'];

$user_id = loginuser($conn, $username, $password);

if ($user_id) {
    header("Location: ../index.php?login_status={$user_id}");
    exit();
} else {
    $_SESSION['error_message'] = 'ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง';
    header("Location: ../login.php?login_status=0");
    exit();
}
?>