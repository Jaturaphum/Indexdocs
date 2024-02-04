<?php
//เป็นการกำหนด function ในการทำงานของ register
function register($conn, $firstname, $lastname, $email, $username, $password_1, $password_2)
{
    //เป็นการเริ่มต้นของโครงสร้าง if statement จะตรวจสอบว่าค่าใน $password_1 ไม่เท่ากับ $password_2 หรือไม่
    if ($password_1 != $password_2) {
        echo "Passwords do not match.";
        return;
    }
    //จะทำการ random accountID ของ user
    $accid = rand(1000000000, 9999999999);
    //เป็นการกำหนดค่าให้ตัวแปร $password ด้วยค่าที่เก็บในตัวแปร $password_1
    $password = ($password_1);
    //ปิดการทำงานอัตโนมัติของการ commit ในการทำงานกับฐานข้อมูล database
    $conn->autocommit(FALSE);
    // insert ข้อมูลเข้าไปใน database ที่ table accounts
    $accounts = "INSERT INTO accounts (acc_id, fname, lname, email) VALUES (?, ?, ?, ?)";
    $stmtAccounts = $conn->prepare($accounts);
    $stmtAccounts->bind_param("ssss", $accid, $firstname, $lastname, $email);
    // insert ข้อมูลเข้าไปใน database ที่ table users
    $users = "INSERT INTO users (acc_id, user_id, username, password) VALUES (?, ?, ?, ?)";
    $stmtUsers = $conn->prepare($users);
    $stmtUsers->bind_param("ssss", $accid, $accid, $username, $password);
    //เป้นการตรวจสอบการทำงานของ statements การอ่านเเละจบการอ่านข้อมูล
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
