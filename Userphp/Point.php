<?php
// Start the session
session_start();

require_once '../condb/database.php';





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index_styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>P E R T</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/signin_styles.css"> <!-- Include your CSS file -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

    <style>
        .container {
            background-color: #fff !important; /* Add !important to enforce the white background */
            color: #d98900;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
            max-width: 400px;
            width: 100%;
            margin-left: auto;
            margin-right: auto;
            font-family: 'Poppins', sans-serif;
            transition: box-shadow 0.3s ease-in-out;
        }
    </style>
</head>


<body>
    
    <div class="nav">
        <div class="logo-container">
            <a href="#"><img src="../image/coffee-cup.png" class="logo" /></a>
            <h2>P E R T</h2>
        </div>
        <div class="links">
            <a href="Userinter.php">Menu</a>
            <a href="Information.php">Information</a>
            <a href="Point.php">point</a>
            
            <button type="button" name="logoutBT" id="logoutBT">Logout</button>

        </div>
    </div>
    <div class="container text-center">
        <!-- Add your logo here -->
        <img src="../image/coffee-cup.png" alt="Logo" class="mx-auto d-block mb-4" style="max-width: 100px;">

        

        <h3 class="mt-4">Welcome</h3>
        <p class="pink-text">Customer Information </p>
        <hr>
        
        
        <br>


        <div class="d-grid gap-2">
            <div class="btn-group" role="group" aria-label="Edit and Delete buttons">
                <button type="submit" name="edit" class="btn btn-warning mx-auto">แก้ไข</button>
                <button type="submit" name="delete" class="btn btn-danger mx-auto">ลบข้อมูล</button>
            </div>
        </div>



    </div>

</body>
<!-- เพิ่มไลบรารี jQuery ถ้ายังไม่ได้ใช้งาน -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
$(document).ready(function(){
    // เมื่อคลิกที่ปุ่ม "Logout"
    $("#logoutBT").click(function(){
        // สร้าง AJAX request
        $.ajax({
            url: "../condb/logout.php", // กำหนด URL ของไฟล์ PHP ที่ใช้ในการล็อกเอาท์
            type: "GET", // กำหนดเป็นเมธอด GET
            success: function(data){
                // หากการ request สำเร็จ
                alert("Logout successful"); // แสดงข้อความแจ้งเตือน
                window.location.href = "../index.php"; // redirect ไปยังหน้า index.php
            },
            error: function(){
                // หากการ request ไม่สำเร็จ
                alert("Logout failed"); // แสดงข้อความแจ้งเตือน
            }
        });
    });
});
</script>



</html>
