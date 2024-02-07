<?php
include "database.php";
// เมื่อกดปุ่มสมัครสมาชิก
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // รับค่าที่ส่งมาจากฟอร์ม
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $pnum = $_POST['pnum'];
    $gender = $_POST['gender'];
    $bdate = $_POST['bdate'];
    // สร้างคำสั่ง SQL เพื่อเพิ่มข้อมูลลงในฐานข้อมูล
    $sql = "INSERT INTO customer (cus_username, cus_password ,cus_email,cus_fristname,cus_lastname,cus_pnum,cus_gender,cus_bdate) 
    VALUES ('$username', '$password' , '$email','$fname','$lname','$pnum','$gender','$bdate')";

    if ($conn->query($sql) === TRUE) {
        echo "เพิ่มข้อมูลสำเร็จ";
    } else {
        echo "เกิดข้อผิดพลาดในการเพิ่มข้อมูล: " . $conn->error;
    }
}
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สมัครสมาชิก</title>
    <!-- เรียกใช้ Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* เพิ่ม CSS เพื่อปรับแต่งรูปแบบตามความต้องการ */
        body {
            padding-top: 50px;
        }
        form {
            max-width: 400px;
            margin: auto;
        }
    </style>
</head>
<body>


<!-- start login -->
<div class="container" >
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 ">
      <div class="col-md-3 mb-2 mb-md-0">
        <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
          <svg class="bi" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
        </a>
      </div>
      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="index.php" class="nav-link px-2 link-dark ">Menu</a></li>
        <li><a href="order.php" class="nav-link px-2">Order</a></li>
      </ul>
      <div class="col-md-3 d-flex justify-content-end">
      <a href="login.php" class="nav-link px-2">
        <button type="button" class="btn btn-outline-dark me-2">Login</button>
      </a>
      <a href="registration.php" class="nav-link px-2">
        <button type="button" class="btn btn-dark">Sign-up</button>
      </a>
    </div>

    </header>
  </div>
<!-- end login -->









<div class="container">
    <h2 class="text-center">สมัครสมาชิก</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="needs-validation" novalidate>
    <div class="row">
        <div class="col">
            <label for="username" class="form-label">UserName:</label>
            <input type="text" id="username" name="username" class="form-control" required>
            <div class="invalid-feedback">Please enter a username.</div>
        </div>
        <div class="col">
            <label for="email" class="form-label">Email:</label>
            <input type="email" id="email" name="email" class="form-control" required>
            <div class="invalid-feedback">Please enter a valid email address.</div>
        </div>
        </div>
        <div class="col-mb-3">
            <label for="password" class="form-label">Password:</label>
            <input type="password" id="password" name="password" class="form-control" required>
            <div class="invalid-feedback">Please enter a password.</div>
        </div>
    <div class="row">
        <div class="col">
            <label for="fname" class="form-label">First Name:</label>
            <input type="text" id="fname" name="fname" class="form-control" required>
            <div class="invalid-feedback">Please enter your first name.</div>
        </div>
        <div class="col">
            <label for="lname" class="form-label">Last Name:</label>
            <input type="text" id="lname" name="lname" class="form-control" required>
            <div class="invalid-feedback">Please enter your last name.</div>
        </div>
        </div>
        <div class="col-mb-3">
            <label for="pnum" class="form-label">Phone Number:</label>
            <input type="text" id="pnum" name="pnum" class="form-control" required>
            <div class="invalid-feedback">Please enter your phone number.</div>
        </div>
        <div class="row">
        <div class="col">
            <label for="gender" class="form-label">Gender:</label>
            <select name="gender" id="gender" class="form-select" required>
                <option value="" selected>Select</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
            <div class="invalid-feedback">Please select your gender.</div>
        </div>
        <div class="col mb-2">
            <label for="bdate" class="form-label">Birth Day:</label>
            <input type="date" id="bdate" name="bdate" class="form-control" required>
            <div class="invalid-feedback">Please enter your birth day.</div>
        </div>
    </div>

     <a href="" class="nav-link px-2 text-center"><button type="submit" class="btn btn-primary ">สมัครสมาชิก</button></a>
    </form>
</div>

<!-- เรียกใช้ Bootstrap 5 JS และ popper.js -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
<script>
    // เพิ่มสคริปต์เพื่อให้แสดงการตรวจสอบข้อมูลของฟอร์ม
    // ที่มีการใช้งาน Bootstrap Validation
    (function () {
        'use strict'

        // ใช้ Bootstrap 5 เวอร์ชัน 5.0.0-alpha1
        var forms = document.querySelectorAll('.needs-validation')

        // วนลูปผ่านและป้องกันการส่งฟอร์มหากมีฟิลด์ที่ไม่ถูกต้อง
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()
</script>
</body>
</html>
