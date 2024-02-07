<?php
session_start();
include "database.php";

// เมื่อกดปุ่ม Login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // รับค่าที่ส่งมาจากฟอร์ม
    $cus_username = $_POST['username'];
    $cus_password = $_POST['password'];
     
    try {
        $sql = $conn->prepare("SELECT * FROM customer WHERE cus_username = : $cus_username ");
        $check_data->bindParam(":cus_username", $cus_username);
        $check_data->execute();
        $row = $check_data->fetch(PDO::FETCH_ASSOC);
    
        if ($check_data->rowCount() > 0) {
            if (password_verify($cus_password, $row['cus_password'])) {
                $_SESSION['cus_username'] = $row['cus_username'];
                $_SESSION['cus_firstname'] = $row['cus_firstname'];
                $_SESSION['cus_lastname'] = $row['cus_lastname'];
                $_SESSION['cus_phone_number'] = $row['cus_phone_number'];
                $_SESSION['cus_gender'] = $row['cus_gender'];
                header('location: ../Userphp/Userinter.php');
            }
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
?>