<?php 
    session_start();
    unset($_SESSION['cashier_login']);
    unset($_SESSION['barista_login']);
    unset($_SESSION['Manager_login']);
    header('Location:../index.php');
?>