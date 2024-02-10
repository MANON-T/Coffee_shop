<?php
    session_start();
    include 'database.php';

    $product_name = trim($_POST['product_name']);
    $price = $_POST['price'] ?: 0;
    $quantity = trim($_POST['product_quantity']);
    $image_name = $_FILES['profile_image']['name'];

    $image_tmp = $_FILES['profile_image']['tmp_name'];
    $folder = '../image/menu/fruit/';
    $image_location = $folder . $image_name;

    if(empty($_POST['id'])){
        $query = mysqli_query($conn,"INSERT INTO fruit_manu(fruit_menu_name, fruit_quantity, fruit_Price, fruit_pic) VALUES ('{$product_name}','{$quantity}', '{$price}', '{$image_name}')") or die('query failed');
    }else{
        $query_product = mysqli_query($conn, "SELECT * FROM fruit_menu WHERE fruit_menuID = '{$_POST['id']}'");
        $result = mysqli_fetch_assoc($query_product);

        if (empty($image_name)) {
            $image_name = $result['fruit_pic'];
        }else{
            @unlink($folder . $result['fruit_pic']);
        }

        $query = mysqli_query($conn,"UPDATE fruit_menu SET fruit_menu_name='{$product_name}', fruit_quantity='{$quantity}', fruit_Price='{$price}', fruit_pic='{$image_name}' WHERE fruit_menuID = '{$_POST['id']}'") or die('query failed');
    }
    mysqli_close($conn);
    if ($query) {
        move_uploaded_file($image_tmp,$image_location);
        
        $_SESSION['message'] = 'Product Saved successfully';
        header('location: ../Managerphp/index.php');
    }
    else {
        $_SESSION['message'] = 'Product could not be saved';
        header('location: ../Managerphp/index.php');
    }