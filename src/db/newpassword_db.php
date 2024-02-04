<?php
function changePassword($conn, $password, $newpassword, $confirmnewpassword) {
    
    session_start();

    if (empty($password) || empty($newpassword) || empty($confirmnewpassword)) {
        echo 'All fields are required.';
        return false;
    }

    if ($newpassword !== $confirmnewpassword) {
        echo 'New password and confirm password do not match.';
        return false;
    }

    $acc_id = $_SESSION['acc_id'];

    $current_password_query = "SELECT password FROM users WHERE username = ?";
    $stmt = mysqli_prepare($conn, $current_password_query);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "s", $acc_id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if ($result) {
            $row = mysqli_fetch_assoc($result);
            $current_password = $row['password'];

            if (password_verify($password, $current_password)) {
                $new_password = password_hash($newpassword, PASSWORD_DEFAULT);
                $query = "UPDATE users SET password=? WHERE username = ?";
                $stmt = mysqli_prepare($conn, $query);

                if ($stmt) {
                    mysqli_stmt_bind_param($stmt, "ss", $new_password, $acc_id);
                    mysqli_stmt_execute($stmt);
                    if (mysqli_stmt_affected_rows($stmt) > 0) {
                        mysqli_stmt_close($stmt);
                        return true;
                    } else {
                        echo 'Error updating password.';
                    }
                } else {
                    echo 'Error preparing update statement: ' . mysqli_error($conn);
                }
            } else {
                echo 'Incorrect current password.';
            }
        } else {
            echo 'Error querying current password: ' . mysqli_error($conn);
        }

        mysqli_stmt_close($stmt);
    } else {
        echo 'Error preparing query: ' . mysqli_error($conn);
    }

    return false;
}
?>
