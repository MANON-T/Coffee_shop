<?php
// Start the session
session_start();

require_once '../condb/database.php';



if (!isset($_SESSION['cus_username'])) {
    $_SESSION['error'] = 'กรุณาเข้าสู่ระบบ !';
    header('Location:signin_cs.php');
}else{
    $cus_username = $_SESSION['cus_username'];
    $sql_cus = "SELECT * FROM customer WHERE cus_username='$cus_username' ";
    $result = mysqli_query($conn, $sql_cus);
    $row = mysqli_fetch_assoc($result);

    $cus_firstname = $row['cus_firstname'];
    $cus_lastname = $row['cus_lastname'];
    $cus_phone_number = $row['cus_phone_number'];
    $cus_gender = $row['cus_gender'];
    $cus_birthday = $row['birthday'];

    $sql_point = "SELECT * FROM point WHERE cus_username='$cus_username' ";

    }



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/add_styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>P E R T</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <style>
        .gradient-custom {
        /* fallback for old browsers */
        background: #f6d365;

        /* Chrome 10-25, Safari 5.1-6 */
        background: -webkit-linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1));

        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        background: linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1))
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
            
            <button type="button" name="logoutBT" id="logoutBt">Logout</button>

        </div>
    </div>
    
        <section class="vh-100" style="background-color: #f4f5f7;">
                <div class="container py-5 h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col col-lg-6 mb-4 mb-lg-0">
                        <div class="card mb-3" style="border-radius: .5rem;">
                        <div class="row g-0">
                            <div class="col-md-4 gradient-custom text-center text-white"
                            style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                                alt="Avatar" class="img-fluid my-5" style="width: 80px;" />
                                <h5><?php echo $cus_firstname . '&nbsp;' . $cus_lastname; ?></h5>
                            <p>P E R T Customer</p>
                            <i class="far fa-edit mb-5"></i>
                            </div>
                            <div class="col-md-8">
                            <div class="card-body p-4">
                                <h5>Point</h5>
                                <hr class="mt-0 mb-4">
                                <div class="row pt-1">
                                <div class="col-6 mb-3">
                                    <h6>Point in</h6>
                                    <p class="text-muted"><?php echo $cus_username; ?></p>
                                </div>
                                <div class="col-6 mb-3">
                                    <h6>Point out</h6>
                                    <p class="text-muted"><?php echo $cus_phone_number ?></p>
                                </div>
                                <div class="col-6 mb-3">
                                    <h6>Toltal</h6>
                                    <p class="text-muted"><?php echo $cus_gender ?></p>
                                </div>
                                
                                </div>
                                <h5>Statement Point</h5>
                                <hr class="mt-0 mb-4">
                                <div class="row pt-1">
                                <div class="col-6 mb-3">
                                    <h6>total point</h6>
                                    <p class="text-muted">-----</p>
                                </div>
                                
                                </div>
                                
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
        </section>







        




    <!--Edite info Button Script-->












<!-- เพิ่มไลบรารี jQuery ถ้ายังไม่ได้ใช้งาน -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
import { Ripple, initMDB } from "mdb-ui-kit";
initMDB({ Ripple });
$(document).ready(function(){
    // เมื่อคลิกที่ปุ่ม "Logout"
    $("#logoutBt").click(function(){
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


</body>
</html>