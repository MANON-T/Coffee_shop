<?php
session_start();
include 'database.php';

$cus_username = $_SESSION['cus_login'];

$point_use = $_POST['point_use'];
$point_have = $_POST['point_have'];
$point_result = $point_have - $point_use;

$sql = "UPDATE points SET p_pointTotal = {$point_result}";
$result = mysqli_query($conn, $sql);
if ($result) {
    $_SESSION['message'] = 'Redeem Porduct successfully';
    header('location: ../Userphp/Userinter.php');
} else {
    $_SESSION['message'] = 'Redeem Product Error';
    header('location: ../Userphp/Userinter.php');
}
