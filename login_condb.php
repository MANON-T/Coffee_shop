<?php
session_start();
include "database.php";

// เมื่อกดปุ่ม Login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // รับค่าที่ส่งมาจากฟอร์ม
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // สร้างคำสั่ง SQL เพื่อตรวจสอบข้อมูลในฐานข้อมูล
    $sql = "SELECT * FROM employee WHERE emp_username='$username' AND emp_password='$password'";
    $result = $conn->query($sql);

    // ตรวจสอบว่ามีผู้ใช้งานนี้หรือไม่
    if ($result->num_rows == 1) {
        // ในกรณีที่มีผู้ใช้งาน ให้ทำการเปลี่ยนเส้นทางไปยังหน้าหลักหรือหน้าอื่น ๆ ตามที่ต้องการ
        echo "เข้าสู่ระบบสำเร็จ";
        header('Location: ../AddOrder.php');
    } else {
        echo "ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง";
    }
}
?>