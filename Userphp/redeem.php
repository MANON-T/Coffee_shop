<?php
session_start();
include '../condb/database.php';

if (!isset($_SESSION['cus_login'])) {
    $_SESSION['error'] = 'กรุณาเข้าสู่ระบบ !';
    header('Location:../signin_cs.php');
}

$name = $_POST['product_name'];

$cof_query = mysqli_query($conn, "SELECT * FROM water_menu WHERE w_menuName = ('$name')");
$cof_row = mysqli_num_rows($cof_query);
if ($cof_row >= 1) {
    $table = 'water_menu';
    $where = 'w_menuName';
}
$mil_query = mysqli_query($conn, "SELECT * FROM water_menu WHERE w_menuName = ('$name')");
$mil_row = mysqli_num_rows($mil_query);
if ($mil_row >= 1) {
    $table = 'water_menu';
    $where = 'w_menuName';
}

$tea_query = mysqli_query($conn, "SELECT * FROM water_menu WHERE w_menuName = ('$name')");
$tea_row = mysqli_num_rows($tea_query);
if ($tea_row >= 1) {
    $table = 'water_menu';
    $where = 'w_menuName';
}

$dess_query = mysqli_query($conn, "SELECT * FROM dessert_menu WHERE dess_menuName = ('$name')");
$dess_row = mysqli_num_rows($dess_query);
if ($dess_row >= 1) {
    $table = 'dessert_menu';
    $where = 'dess_menuName';
}

$fruit_query = mysqli_query($conn, "SELECT * FROM fruit_menu WHERE fruit_menuName = ('$name')");
$fruit_row = mysqli_num_rows($fruit_query);
if ($fruit_row >= 1) {
    $table = 'fruit_menu';
    $where = 'fruit_menuName';
}

$cus_username = $_SESSION['cus_login'];
$point_query = "SELECT * FROM points WHERE p_customerName = '$cus_username' ";
$point_row = mysqli_query($conn, $point_query);
$point = mysqli_fetch_assoc($point_row);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../css/add_styles.css">
    <title>Point Use</title>
</head>

<body>
    <div class="nav">
        <div class="logo-container">
            <a href="#"><img src="../image/coffee-cup.png" class="logo" /></a>
            <h2>P E R T</h2>
        </div>
        <div class="links">
            <a href="Userinter.php">Menu</a>
            <a href="#"><i class="bi bi-coin"></i> <?php echo $point['p_pointTotal'] ?> Point</a>
            <a href="Information.php">Information</a>
            <button id="LogoutBtn"><i class="bi bi-check2-circle"></i> Log Out</button>
        </div>
    </div>
    <div class="container" style="margin-top: 30px;">
        <?php if (!empty($_SESSION['message'])) : ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <?php echo $_SESSION['message']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>
        <?php unset($_SESSION['message']); ?>

        <div class="card mb-3 mx-auto" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="..." class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $table.$where ?></h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>