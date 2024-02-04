<?php
// กำหนดฟังก์ชัน loginuser รับพารามิเตอร์เชื่อมต่อฐานข้อมูล ($conn), ชื่อผู้ใช้ ($username), และ รหัสผ่าน ($password)
function loginuser($conn, $username, $password)
{
    // กำหนด SQL query สำหรับค้นหาข้อมูลผู้ใช้ที่ตรงกับชื่อผู้ใช้และรหัสผ่านที่รับมา
    $loginuser = "SELECT acc_id FROM users WHERE username = ? AND password = ?";
    // เตรียมคำสั่ง SQL และกำหนดค่าพารามิเตอร์
    $stmt = $conn->prepare($loginuser);
    $stmt->bind_param("ss", $username, $password);
    // ประมวลผลคำสั่ง SQL
    $stmt->execute();
    // ดึงผลลัพธ์จากคำสั่ง SQL
    $result = $stmt->get_result();
    // ตรวจสอบว่ามีข้อมูลผู้ใช้ที่ตรงหรือไม่
    if ($result->num_rows == 1) {
        // ถ้ามี ดึงข้อมูลผู้ใช้
        $user = $result->fetch_assoc();
        $stmt->close();
        $conn->close();
        // คืนค่า id ของบัญชีผู้ใช้
        return $user['acc_id'];
    } else {
        // ถ้าไม่มีข้อมูลผู้ใช้ที่ตรง
        $stmt->close();
        $conn->close();
        // คืนค่าเป็น false
        return false;
    }
}
?>
