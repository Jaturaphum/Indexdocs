<?php
function register($conn, $firstname, $lastname, $email, $username, $password_1, $password_2)
{
    if ($password_1 != $password_2) {
        echo "Passwords do not match.";
        return;
    }

    $accid = rand(1000000000, 9999999999);

    $password = ($password_1);

    $conn->autocommit(FALSE);

    $accounts = "INSERT INTO accounts (acc_id, fname, lname, email) VALUES (?, ?, ?, ?)";
    $stmtAccounts = $conn->prepare($accounts);
    $stmtAccounts->bind_param("ssss", $accid, $firstname, $lastname, $email);

    $users = "INSERT INTO users (acc_id, user_id, username, password) VALUES (?, ?, ?, ?)";
    $stmtUsers = $conn->prepare($users);
    $stmtUsers->bind_param("ssss", $accid, $accid, $username, $password);

    if (!$stmtAccounts->execute() || !$stmtUsers->execute()) {
        $conn->rollback();
        $stmtAccounts->close();
        $stmtUsers->close();
        $conn->close();
        return;
    }

    $conn->commit();
    $stmtAccounts->close();
    $stmtUsers->close();
    $conn->close();
}
