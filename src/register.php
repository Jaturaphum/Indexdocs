<?php
session_start();
require('./db/register_db.php');
require('./services/connect.php');

$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$email = $_POST['email'];
$username = $_POST['username'];
$password_1 = $_POST['password_1'];
$password_2 = $_POST['password_2'];

$register = register($conn, $firstname, $lastname, $email, $username, $password_1, $password_2);

if ($register) {
    header("location: ../register.php?id={$register}");
} else {
    header("location: ../login.php?");
}