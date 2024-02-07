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
    <link rel="stylesheet" href="../css/signin_styles.css"> <!-- Include your CSS file -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

    
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
    <br>
    <h3>Water Menu</h3>
    <br>
    <div class="row">
        <?php 
        // สร้างคำสั่ง SQL เพื่อดึงข้อมูลเมนูน้ำทั้งหมด
        $sql = "SELECT * FROM water_menu";
        $result = $conn->query($sql);
        // ตรวจสอบว่ามีข้อมูลหรือไม่
        if ($result->num_rows > 0) {
            // วนลูปเพื่อแสดงข้อมูลทั้งหมด
            while ($row = $result->fetch_assoc()) {

            echo '<div class="col-sm-4 mb-4">';
            echo '<div class="card">';
            echo '<img src="https://www.allrecipes.com/thmb/Wh0Qnynwdxok4oN0NZ1Lz-wl0A8=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/9428203-9d140a4ed1424824a7ddd358e6161473.jpg' . $row['w_pic'] . '" class="card-img-top" alt="' . $row['w_name'] . '">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">' . $row['w_name'] . '</h5>';
            echo '<p class="card-text">ราคา: ' . number_format($row['w_price']) . ' บาท</p>';
            echo '<a href="login.php" class="nav-link px-2 text-center"> </a>';
            echo '</div></div></div>';
            }
        } else {
            echo "ไม่พบรายการเมนูน้ำ";
        }
        ?>
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
