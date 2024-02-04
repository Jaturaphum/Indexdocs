<?php
// เป็นนิยามฟังก์ชัน getUserById ที่รับพารามิเตอร์ $acc_id และ $db
function getUserById($acc_id, $db){
    // กำหนด SQL query ที่ใช้ SELECT ข้อมูลจากตาราง accounts โดยกำหนดเงื่อนไขที่ acc_id เท่ากับค่าที่รับมา
    $sql = "SELECT * FROM accounts WHERE acc_id = ?";
    // เตรียม statement สำหรับ query โดยใช้ prepare method ของ PDO
	$stmt = $db->prepare($sql);
    // ทำการ execute statement โดยใส่ค่า $acc_id เป็น parameter ใน array
	$stmt->execute([$acc_id]);
    // ตรวจสอบว่ามีผลลัพธ์ที่คาดหวังหรือไม่
    if($stmt->rowCount() == 1){
        // ถ้ามี 1 รายการ ให้ดึงข้อมูลผู้ใช้จาก fetch method และ return ข้อมูลนั้น
        $user = $stmt->fetch();
        return $user;
    } else {
        // ถ้าไม่มีผลลัพธ์หรือมีมากกว่า 1 รายการ ให้ return ค่า 0
        return 0;
    }
}
?>

