<?php
session_start();
include 'database.php';

$now = date('Y-m-d H:i:s');
$username = mysqli_real_escape_string($conn, $_POST['username']);
$queryID = mysqli_query($conn, "SELECT * FROM customer WHERE cus_username = '{$username}'");

$customerID = mysqli_fetch_assoc($queryID);
$query = mysqli_query($conn, "INSERT INTO order_main(ord_orderDate, ord_customerID, ord_total) 
VALUES ('{$now}','{$customerID['cus_customerID']}', '{$_POST['grand_total']}')") or die('query failed');

if ($query) {
    $last_id = mysqli_insert_id($conn);
    foreach ($_SESSION['cart'] as $product => $productQty) {
        $productID = $_POST['product'][$product]['id'];
        $product_name = $_POST['product'][$product]['name'];
        $price = $_POST['product'][$product]['price'];
        $total = $price * $productQty;

        // $_SESSION['cart'][$productID] = $_POST['product'][$productID]['quantity'];
        $query = mysqli_query($conn, "INSERT INTO order_detail(ord_orderID, ord_productID, ord_productName, ord_price, ord_quantity, ord_totalPrice) 
        VALUES ('{$last_id}','{$productID}', '{$product_name}', '{$price}', '{$productQty}', '{$total}')") or die('query failed');
    }

    unset($_SESSION['cart']);
    $_SESSION['message'] = 'Checkout Order successfully!!!';
    header('location: ../Cashierphp/checkout-success.php');
}else{
    $_SESSION['message'] = 'Checkout not complete!!!';
    header('location: ../Cashierphp/checkout-success.php');
}
