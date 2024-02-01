<?php
// เชื่อมต่อกับฐานข้อมูล
include_once("database.php");

// ตรวจสอบว่ามีการส่งข้อมูลมาจากฟอร์มหรือไม่
if(isset($_POST['register'])) {
    // รับค่าจากฟอร์ม
    $username = $_POST['username'];
    $password = $_POST['password'];
    $firstname = $_POST['name'];
    $lastname = $_POST['surname'];
    $phone_number = $_POST['phone_num'];
    $gender = $_POST['gender'];

    // สร้างคำสั่ง SQL เพื่อเพิ่มข้อมูลลงในฐานข้อมูล
    $sql = "INSERT INTO customer (cus_username, cus_password, cus_firstname, cus_lastname, cus_phone_number, cus_gender) 
            VALUES ('$username', '$password', '$firstname', '$lastname', '$phone_number', '$gender')";

    // ส่งคำสั่ง SQL ไปยังฐานข้อมูล
    if(mysqli_query($conn, $sql)) {
        // หากสำเร็จให้เปลี่ยนเส้นทางไปที่หน้า index.php
        header("Location: ../index.php");
        exit();
    } else {
        // หากเกิดข้อผิดพลาดในการเพิ่มข้อมูล
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // ปิดการเชื่อมต่อฐานข้อมูล
    mysqli_close($conn);
}
?>
