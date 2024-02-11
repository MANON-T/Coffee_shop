<?php
    session_start();
    include 'database.php';

    $product_name = trim($_POST['product_name']);
    $price = $_POST['price'] ?: 0;
    $product_type = trim($_POST['product_type']);
    $image_name = $_FILES['profile_image']['name'];
    $temperature = isset($_POST['temperature']) ? $_POST['temperature'] : array();

    $temperature_str = implode(',', $temperature);
    $image_tmp = $_FILES['profile_image']['tmp_name'];
    $folder = '../image/menu/water/';
    $image_location = $folder . $image_name;

    if(empty($_POST['id'])){
        $query = mysqli_query($conn,"INSERT INTO water_menu(w_name, w_watertype, w_hcm, w_price, w_pic) VALUES ('{$product_name}','{$product_type}','{$temperature_str}','{$price}', '{$image_name}')") or die('query failed');
    }else{
        $query_product = mysqli_query($conn, "SELECT * FROM water_menu WHERE w_menuID = '{$_POST['id']}'");
        $result = mysqli_fetch_assoc($query_product);

        if (empty($image_name)) {
            $image_name = $result['w_pic'];
        }else{
            @unlink($folder . $result['w_pic']);
        }

        $query = mysqli_query($conn,"UPDATE water_menu SET w_name='{$product_name}', w_watertype='{$product_type}', w_hcm='{$temperature_str}', w_price='{$price}', w_pic='{$image_name}' WHERE w_menuID = '{$_POST['id']}'") or die('query failed');
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