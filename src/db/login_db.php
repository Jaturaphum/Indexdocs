<?php
function loginuser($conn, $username, $password)
{
    $loginuser = "SELECT acc_id FROM users WHERE username = ? AND password = ?";
    $stmt = $conn->prepare($loginuser);
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        return $user['acc_id'];
    } else {
        return false;
    }

    $stmt->close();
    $conn->close();
}
