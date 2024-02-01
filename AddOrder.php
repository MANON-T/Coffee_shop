<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/add_styles.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <title>P E R T</title>
</head>

<body>
  <div class="nav">
    <div class="logo-container">
      <a href="#"><img src="image/coffee-cup.png" class="logo" /></a>
      <h2>P E R T</h2>
    </div>
    <div class="links">
      <a href="#">Menu</a>
      <a href="order.php">Order</a>
      <a href="#">coming soon</a>
      <button id="LgoutBtn"><i class="bi bi-arrow-left-circle-fill"></i> Logout</button>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <div class="row border mb-4">
          <h2 class="text-center">รายการเมนูน้ำ</h2>
          <?php
          // เชื่อมต่อกับฐานข้อมูล
          include "condb/database.php";

          // สร้างคำสั่ง SQL เพื่อดึงข้อมูลเมนูน้ำทั้งหมด
          $sql = "SELECT * FROM water_menu";
          $result = $conn->query($sql);

          // ตรวจสอบว่ามีข้อมูลหรือไม่
          if ($result->num_rows > 0) {
            // วนลูปเพื่อแสดงข้อมูลทั้งหมด
            while ($row = $result->fetch_assoc()) {
              echo '<div class="col-sm-4 mb-2">';
              echo '<div class="card">';
              echo '<img src="https://www.allrecipes.com/thmb/Wh0Qnynwdxok4oN0NZ1Lz-wl0A8=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/9428203-9d140a4ed1424824a7ddd358e6161473.jpg' . $row['w_pic'] . '" class="card-img-top" alt="' . $row['w_name'] . '">';
              echo '<div class="card-body">';
              echo '<h5 class="card-title">' . $row['w_name'] . '</h5>';
              echo '<p class="card-text">ราคา: ' . number_format($row['w_price']) . ' บาท</p>';
              echo '<a href="login.php" class="nav-link px-2 text-center"> <button type="button" class="btn btn-outline-dark me-2">Add</button></a>';
              echo '</div></div></div>';
            }
          } else {
            echo "ไม่พบรายการเมนูน้ำ";
          }
          $conn->close();
          ?>
        </div>
      </div>
    </div>
  </div>

  <script>
    // Add an event listener to the Log Out button
    document.getElementById('LgoutBtn').addEventListener('click', function() {
      // Redirect to the login page or any other page you want
      window.location.href = 'index.php'; // Replace 'login.html' with the desired page
    });
  </script>
</body>

</html>
