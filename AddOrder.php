<?php
    session_start();
    require_once('condb/database.php');
    if (!isset($_SESSION['cashier_login'])) {
        $_SESSION['error'] = 'กรุณาเข้าสู่ระบบ !';
        header('Location:signin.php');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/add_styles.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <title>Menu & Order</title>
  <!-- เรียกใช้ Bootstrap 5 CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>

<body style="background-color: #34f6b5;">
  <!-- start login -->
  <div class="container">
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
  </div>

  <!-- end login -->

  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <div class="row border mb-4">
          <div>
            <br>
          </div>
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

              echo '<div class="col-sm-4 mb-4">';
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
        <div class="row border mb-4">
          <h2 class="text-center">รายการเมนูขนม</h2>
          <?php
          // เชื่อมต่อกับฐานข้อมูล
          include "condb/database.php";

          // สร้างคำสั่ง SQL เพื่อดึงข้อมูลเมนูน้ำทั้งหมด
          $sql = "SELECT * FROM dessert_menu";
          $result = $conn->query($sql);

          // ตรวจสอบว่ามีข้อมูลหรือไม่
          if ($result->num_rows > 0) {
            // วนลูปเพื่อแสดงข้อมูลทั้งหมด
            while ($row = $result->fetch_assoc()) {

              echo '<div class="col-sm-4 mb-2">';
              echo '<div class="card">';
              echo '<img src="https://s359.kapook.com/r/600/auto/pagebuilder/fd5eb499-d919-437c-925c-87fef18dff94.jpg' . $row['dess_pic'] . '" class="card-img-top" alt="' . $row['dess_menu_name'] . '">';
              echo '<div class="card-body">';
              echo '<h5 class="card-title">' . $row['dess_menu_name'] . '</h5>';
              echo '<p class="card-text">ราคา: ' . number_format($row['dess_price']) . ' บาท</p>';
              echo '<a href="login.php" class="nav-link px-2 text-center"> <button type="button" class="btn btn-outline-dark me-2">Add</button></a>';
              echo '</div></div></div>';
            }
          } else {
            echo "ไม่พบรายการเมนูขนม";
          }
          $conn->close();
          ?>
        </div>
        <div class="row border mb-4">
          <h2 class="text-center">รายการเมนูผลไม้</h2>
          <?php
          // เชื่อมต่อกับฐานข้อมูล
          include "condb/database.php";

          // สร้างคำสั่ง SQL เพื่อดึงข้อมูลเมนูน้ำทั้งหมด
          $sql = "SELECT * FROM fruit_manu";
          $result = $conn->query($sql);

          // ตรวจสอบว่ามีข้อมูลหรือไม่
          if ($result->num_rows > 0) {
            // วนลูปเพื่อแสดงข้อมูลทั้งหมด
            while ($row = $result->fetch_assoc()) {

              echo '<div class="col-sm-4 mb-2">';
              echo '<div class="card">';
              echo '<img src="https://fit-d.com/uploads/food/5f6c8c69a8f190b979f93f02475aac80.jpg' . $row['fruit_pic'] . '" class="card-img-top" alt="' . $row['fruit_menu_name'] . '">';
              echo '<div class="card-body">';
              echo '<h5 class="card-title">' . $row['fruit_menu_name'] . '</h5>';
              echo '<p class="card-text">ราคา: ' . number_format($row['fruit_Price']) . ' บาท</p>';
              echo '<a href="login.php" class="nav-link px-2 text-center"> <button type="button" class="btn btn-outline-dark me-2">Add</button></a>';
              echo '</div></div></div>';
            }
          } else {
            echo "รายการเมนูผลไม้";
          }
          $conn->close();
          ?>
        </div>
      </div>
      <div class="col-md-4" style="background-color: #d4b4b4;">
        <h2 style="color: #2b3036;">Order</h2>

        <table class="table" background-color: #d4b4b4;>

          <thead>
            <tr class="text-center">
              <th scope="col" class="col-sm-1">#</th>
              <th scope="col" class="col-sm-2">ชื่อ</th>
              <th scope="col" class="col-sm-2">หวาน</th>
              <th scope="col" class="col-sm-2">H/C/S</th>
              <th scope="col" class="col-sm-2">จำนวน</th>
              <th scope="col" class="col-sm-2">ราคา</th>
              <th scope="col" class="col-sm-1">ลบ</th>
            </tr>
          </thead>
          <tbody>
            <tr class="text-center">
              <td scope="row">1</td>
              <td>Latte</td>
              <td>
                <select name="sweetness" id="sweet">
                  <option value="200">200%</option>
                  <option value="150">150%</option>
                  <option value="100" selected>ปกติ</option>
                  <option value="50">50%</option>
                  <option value="0">0%</option>
                </select>
              </td>
              <td>
                <select name="hot-cold-spin" id="hcs">
                  <option value="" disabled selected hidden>เลือก</option>
                  <option value="hot">ร้อน</option>
                  <option value="cold">เย็น</option>
                  <option value="spin">ปั่น</option>
                </select>
              </td>
              <td>
                <input type="number" name="total" class="col-sm-8" value="1" min="1">
              </td>
              <td>40</td>
              <td>
                <a href="#" class="btn btn-danger btn-sm">del</a>
              </td>
            </tr>
            <tr class="text-center">
              <td colspan="5">รวม</td>
              <td> 160.00</td>
            </tr>
          </tbody>
        </table>
        <p class="text-end ">
          <button class="btn btn-outline-dark ">ยกเลิก</button>
          <button class="btn btn-dark ">สั่ง</button>
        </p>

      </div>

    </div>
  </div>

  <!-- เรียกใช้ Bootstrap 5 JS และ popper.js -->
  <script>
    // Add an event listener to the Log In button
    document.getElementById('LgoutBtn').addEventListener('click', function() {
      // Redirect to the login page or any other page you want
      window.location.href = 'condb/logout.php'; // Replace 'login.html' with the desired page
    });
  </script>
</body>

</html>