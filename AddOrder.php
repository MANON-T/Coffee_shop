<?php
  session_start();
  require_once 'condb/database.php';
  if (!isset($_SESSION['cashier_login'])) {
      $_SESSION['error'] = 'กรุณาเข้าสู่ระบบ !';
      header('Location:signin_ep.php');
  }


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/add2_styles.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <title>Menu & Order</title>
  <!-- เรียกใช้ Bootstrap 5 CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
    
    

  

    <nav class="navbar navbar-light" style="background-color: #34f6b5;">
        <div class="logo-container">
            <a href="#"><img src="image/coffee-cup.png" class="logo" /></a>
            <h2>P E R T</h2>
      </div>
      <div class="links">
            <a href="AddOrder.php">Add Menu</a> 
            <a href="Order.php">Order</a>
            <a href="ManagerLevel/index.html">Dashbord</a>  
            
            
            <button id="logoutBt"><i class="bi bi-arrow-left-circle-fill"></i> Logout</button>
      </div>
    </nav>

    <main>

    <div class="container">
        <center><h2>Water Menu</h2></center>
    </div>

    <br>
    <div class="row">
        <?php 
        // สร้างคำสั่ง SQL เพื่อดึงข้อมูลเมนูน้ำทั้งหมด
        $sqlwater = "SELECT * FROM water_menu";
        $result = $conn->query($sqlwater);
        // ตรวจสอบว่ามีข้อมูลหรือไม่
        if ($result->num_rows > 0) {
            // วนลูปเพื่อแสดงข้อมูลทั้งหมด
            while ($row = $result->fetch_assoc()) {

            echo '<div class="col-sm-4 mb-4">';
            echo '<div class="card">';
            echo '<img src="' . $row['w_pic'] . '" class="card-img-top" alt="' . $row['w_name'] . '">';
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
    
    <div class="container">
        <center><h2>Dessert Menu</h2></center>
    </div>
    
    <br>
    <div class="row">
        <?php 
        // สร้างคำสั่ง SQL เพื่อดึงข้อมูลเมนูน้ำทั้งหมด
        $sqldessert = "SELECT * FROM dessert_menu";
        $result = $conn->query($sqldessert);
        // ตรวจสอบว่ามีข้อมูลหรือไม่
        if ($result->num_rows > 0) {
            // วนลูปเพื่อแสดงข้อมูลทั้งหมด
            while ($row = $result->fetch_assoc()) {

            echo '<div class="col-sm-4 mb-4">';
            echo '<div class="card">';
            echo '<img src="' . $row['dess_pic'] . '" class="card-img-top" alt="' . $row['dess_menu_name'] . '">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">' . $row['dess_menu_name'] . '</h5>';
            echo '<p class="card-text">ราคา: ' . number_format($row['dess_price']) . ' บาท</p>';
            echo '<a href="login.php" class="nav-link px-2 text-center"> </a>';
            echo '</div></div></div>';
            }
        } else {
            echo "ไม่พบรายการเมนูน้ำ";
        }
        ?>
    </div>
    <br>

    <div class="container">
        <center><h2>Fruit Menu</h2></center>
    </div>
    

    <br>
    <div class="row">
        <?php 
        // สร้างคำสั่ง SQL เพื่อดึงข้อมูลเมนูน้ำทั้งหมด
        $sqldessert = "SELECT * FROM fruit_manu";
        $result = $conn->query($sqldessert);
        // ตรวจสอบว่ามีข้อมูลหรือไม่
        if ($result->num_rows > 0) {
            // วนลูปเพื่อแสดงข้อมูลทั้งหมด
            while ($row = $result->fetch_assoc()) {

            echo '<div class="col-sm-4 mb-4">';
            echo '<div class="card">';
            echo '<img src="' . $row['fruit_pic'] . '" class="card-img-top" alt="' . $row['fruit_menu_name'] . '">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">' . $row['fruit_menu_name'] . '</h5>';
            echo '<p class="card-text">ราคา: ' . number_format($row['fruit_Price']) . ' บาท</p>';
            echo '<a href="login.php" class="nav-link px-2 text-center"> </a>';
            echo '</div></div></div>';
            }
        } else {
            echo "ไม่พบรายการเมนูน้ำ";
        }
        ?>
    </div>

    

    </main>
    <aside>

    </aside>
    <!-- เพิ่มไลบรารี jQuery ถ้ายังไม่ได้ใช้งาน -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
        // เมื่อคลิกที่ปุ่ม "Logout"
        $("#logoutBt").click(function(){
            // สร้าง AJAX request
            $.ajax({
                url: "condb/logout.php", // กำหนด URL ของไฟล์ PHP ที่ใช้ในการล็อกเอาท์
                type: "GET", // กำหนดเป็นเมธอด GET
                success: function(data){
                    // หากการ request สำเร็จ
                    alert("Logout successful"); // แสดงข้อความแจ้งเตือน
                    window.location.href = "index.php"; // redirect ไปยังหน้า index.php
                },
                error: function(){
                    // หากการ request ไม่สำเร็จ
                    alert("Logout failed"); // แสดงข้อความแจ้งเตือน
                }
            });
        });
    });
    </script>
</body>
</html>