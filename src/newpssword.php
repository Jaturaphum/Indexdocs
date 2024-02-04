<?php
session_start();
require('./services/connect.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $password = $_POST['password'];
    $newpassword = $_POST['newpassword'];
    $confirmpassword = $_POST['confirmpassword'];
    
    $pass_word = changePassword($conn, $password, $newpassword, $confirmpassword);

    if ($pass_word) {
        header('Location: ../edit.php?newpassword=success');
    } else {
        $_SESSION['error_message'] = 'not newpassword!!';
        header("Location: ../edit.php?newpassword=error");
        exit();
    }
}

