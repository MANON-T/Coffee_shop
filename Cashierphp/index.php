<?php
session_start();
include '../condb/database.php';

$cof_query = mysqli_query($conn, "SELECT * FROM water_menu WHERE w_watertype = 'coffee'");
$cof_row = mysqli_num_rows($cof_query);

$mil_query = mysqli_query($conn, "SELECT * FROM water_menu WHERE w_watertype = 'milk'");
$mil_row = mysqli_num_rows($mil_query);

$tea_query = mysqli_query($conn, "SELECT * FROM water_menu WHERE w_watertype = 'tea'");
$tea_row = mysqli_num_rows($tea_query);

$dess_query = mysqli_query($conn, "SELECT * FROM dessert_menu");
$dess_row = mysqli_num_rows($dess_query);

$fruit_query = mysqli_query($conn, "SELECT * FROM fruit_manu");
$fruit_row = mysqli_num_rows($fruit_query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../css/add_styles.css">
    <title>Menu</title>
</head>

<body>
    <div class="nav">
        <div class="logo-container">
            <a href="#"><img src="../image/coffee-cup.png" class="logo" /></a>
            <h2>P E R T</h2>
        </div>
        <div class="links">
            <a href="index.php">Menu</a>
            <a href="cart.php">Cart (<?php echo count($_SESSION['cart'] ?? []) ?>) </a>
            <button id="RegisBtn"><i class="bi bi-check2-circle"></i> Log Out</button>
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
        <br>
        <div class="row">
            <h4>Coffee</h4>
            <?php if ($cof_row > 0) : ?>
                <?php while ($water = mysqli_fetch_assoc($cof_query)) : ?>
                    <div class="col-3 mb-3">
                        <div class="card" style="width: 16rem;">
                            <?php if (!empty($water['w_pic'])) : ?>
                                <img src="../image/menu/water/<?php echo $water['w_pic']; ?>" class="card-img-top" width="100" alt="Product Image">
                            <?php else : ?>
                                <img src="../image/error.png" class="card-img-top" width="100" alt="Product Image">
                            <?php endif; ?>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $water['w_name']; ?></h5>
                                <p class="card-text text-muted mb-0">Option : <?php echo $water['w_hcm']; ?></p>
                                <p class="card-text text-success fw-bold"><?php echo number_format($water['w_price'],2); ?> Baht</p>
                                <a href="../condb/cart-adddb.php?id=<?php echo $water['w_menuID']; ?>" class="btn btn-dark w-100"><i class="bi bi-cart-check"></i> Add Cart</a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <diiv class="col-12">
                    <h4 class="text-danger">No product data</h4>
                </diiv>
            <?php endif; ?>
        </div>
        <div class="row">
            <h4>Milk</h4>
            <?php if ($mil_row > 0) : ?>
                <?php while ($water = mysqli_fetch_assoc($mil_query)) : ?>
                    <div class="col-3 mb-3">
                        <div class="card" style="width: 16rem;">
                            <?php if (!empty($water['w_pic'])) : ?>
                                <img src="../image/menu/water/<?php echo $water['w_pic']; ?>" class="card-img-top" width="100" alt="Product Image">
                            <?php else : ?>
                                <img src="../image/error.png" class="card-img-top" width="100" alt="Product Image">
                            <?php endif; ?>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $water['w_name']; ?></h5>
                                <p class="card-text text-muted mb-0">Option : <?php echo $water['w_hcm']; ?></p>
                                <p class="card-text text-success fw-bold"><?php echo number_format($water['w_price'],2); ?> Baht</p>
                                <a href="../condb/cart-adddb.php?id=<?php echo $water['w_menuID']; ?>" class="btn btn-dark w-100"><i class="bi bi-cart-check"></i> Add Cart</a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <diiv class="col-12">
                    <h4 class="text-danger">No product data</h4>
                </diiv>
            <?php endif; ?>
        </div>
        <div class="row">
            <h4>Tea</h4>
            <?php if ($tea_row > 0) : ?>
                <?php while ($water = mysqli_fetch_assoc($tea_query)) : ?>
                    <div class="col-3 mb-3">
                        <div class="card" style="width: 16rem;">
                            <?php if (!empty($water['w_pic'])) : ?>
                                <img src="../image/menu/water/<?php echo $water['w_pic']; ?>" class="card-img-top" width="100" alt="Product Image">
                            <?php else : ?>
                                <img src="../image/error.png" class="card-img-top" width="100" alt="Product Image">
                            <?php endif; ?>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $water['w_name']; ?></h5>
                                <p class="card-text text-muted mb-0">Option : <?php echo $water['w_hcm']; ?></p>
                                <p class="card-text text-success fw-bold"><?php echo number_format($water['w_price'],2); ?> Baht</p>
                                <a href="../condb/cart-adddb.php?id=<?php echo $water['w_menuID']; ?>" class="btn btn-dark w-100"><i class="bi bi-cart-check"></i> Add Cart</a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <diiv class="col-12">
                    <h4 class="text-danger">No product data</h4>
                </diiv>
            <?php endif; ?>
        </div>
        <div class="row">
            <h4>Dessert</h4>
            <?php if ($dess_row > 0) : ?>
                <?php while ($dessert = mysqli_fetch_assoc($dess_query)) : ?>
                    <div class="col-3 mb-3">
                        <div class="card" style="width: 16rem;">
                            <?php if (!empty($dessert['dess_pic'])) : ?>
                                <img src="../image/menu/dessert/<?php echo $dessert['dess_pic']; ?>" class="card-img-top" width="100" alt="Product Image">
                            <?php else : ?>
                                <img src="../image/error.png" class="card-img-top" width="100" alt="Product Image">
                            <?php endif; ?>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $dessert['dess_menu_name']; ?></h5>
                                <p class="card-text text-muted mb-0">Stock : <?php echo $dessert['dess_quantity']; ?></p>
                                <p class="card-text text-success fw-bold"><?php echo number_format($dessert['dess_price'],2); ?> Baht</p>
                                <a href="../condb/cart-adddb.php?id=<?php echo $dessert['dess_menuID']; ?>" class="btn btn-dark w-100"><i class="bi bi-cart-check"></i> Add Cart</a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <diiv class="col-12">
                    <h4 class="text-danger">No product data</h4>
                </diiv>
            <?php endif; ?>
        </div>
        <div class="row">
            <h4>Fruit</h4>
            <?php if ($fruit_row > 0) : ?>
                <?php while ($fruit = mysqli_fetch_assoc($fruit_query)) : ?>
                    <div class="col-3 mb-3">
                        <div class="card" style="width: 16rem;">
                            <?php if (!empty($fruit['fruit_pic'])) : ?>
                                <img src="../image/menu/fruit/<?php echo $fruit['fruit_pic']; ?>" class="card-img-top" width="100" alt="Product Image">
                            <?php else : ?>
                                <img src="../image/error.png" class="card-img-top" width="100" alt="Product Image">
                            <?php endif; ?>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $fruit['fruit_menu_name']; ?></h5>
                                <p class="card-text text-muted mb-0">Stock : <?php echo $fruit['fruit_quantity']; ?></p>
                                <p class="card-text text-success fw-bold"><?php echo number_format($fruit['fruit_Price'],2); ?> Baht</p>
                                <a href="../condb/cart-adddb.php?id=<?php echo $fruit['fruit_menuID']; ?>" class="btn btn-dark w-100"><i class="bi bi-cart-check"></i> Add Cart</a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <diiv class="col-12">
                    <h4 class="text-danger">No product data</h4>
                </diiv>
            <?php endif; ?>
        </div>
    </div>
</body>

</html>