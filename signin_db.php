<?php
session_start();

$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "coffee_db";
    
    //Creat Connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // ทำการค้นหาผู้ใช้ในฐานข้อมูล
    $sql = "SELECT * FROM employee WHERE emp_username='$username' AND emp_password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // ล็อกอินสำเร็จ
        $_SESSION['loggedin'] = true;
        header('Location:main.php'); // หากล็อกอินสำเร็จ ไปยังหน้าที่ควบคุม
        exit;
    } else {
        $_SESSION['loggedin'] = false;
        echo "ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง";
        header('Location:signin.php');
        exit;
    }
    
}
?>