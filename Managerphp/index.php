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
            <a href="#">Menu</a>
            <a href="#">Bartander Site</a>
            <a href="#">Dashboard</a>
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
        <div class="container" style="margin-top: 30px;">
            <a href="water_config.php" class="btn btn-primary"><i class="bi bi-cup-hot-fill"></i> Add Water Menu</a> <!-- Add Water Menu Button -->
            <a href="dessert_config.php" class="btn btn-primary"><i class="bi bi-cake2"></i> Add Dessert Menu</a> <!-- Add Water Menu Button -->
            <a href="fruit_config.php" class="btn btn-primary"><i class="bi bi-apple"></i> Add Friut Menu</a> <!-- Add Water Menu Button -->
        </div>
        <br>
        <div class="row">
            <h4>Coffee</h4>
            <div class="col-12">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th style="width: 100px;">Image</th>
                            <th>Product Name</th>
                            <th style="width: 200px;">Option</th>
                            <th style="width: 100px;">Price</th>
                            <th style="width: 200px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($cof_row > 0) : ?>
                            <?php while ($water = mysqli_fetch_assoc($cof_query)) : ?>
                                <tr>
                                    <td>
                                        <?php if(!empty($water['w_pic'])) : ?>
                                            <img src="../image/menu/water/<?php echo $water['w_pic']; ?>" width="100" alt="Product Image">
                                        <?php else : ?>
                                            <img src="../image/error.png" width="100" alt="Product Image">
                                        <?php endif ; ?>
                                    </td>
                                    <td><?php echo $water['w_name']; ?> </td>
                                    <td><?php echo $water['w_hcm']; ?> </td>
                                    <td><?php echo number_format($water['w_price'],2); ?> </td>
                                    <td>
                                        <a role="button" href="water_config.php?id=<?php echo $water['w_menuID']; ?>" class="btn btn-outline-dark"><i class="bi bi-pencil"></i> Edit</a>
                                        <a onclick="return confirm('Are you sure you want to deleat');" role="button" href="../condb/water_delete.php?id=<?php echo $water['w_menuID']; ?>" class="btn btn-outline-danger"><i class="bi bi-trash"></i> Delete</a>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        <?php else : ?>
                            <td colspan="5">
                                <h4 class="text-center text-danger">No Product Data</h4>
                            </td>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <h4>Milk</h4>
            <div class="col-12">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th style="width: 100px;">Image</th>
                            <th>Product Name</th>
                            <th style="width: 200px;">Option</th>
                            <th style="width: 100px;">Price</th>
                            <th style="width: 200px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($mil_row > 0) : ?>
                            <?php while ($water = mysqli_fetch_assoc($mil_query)) : ?>
                                <tr>
                                    <td>
                                        <?php if(!empty($water['w_pic'])) : ?>
                                            <img src="../image/menu/water/<?php echo $water['w_pic']; ?>" width="100" alt="Product Image">
                                        <?php else : ?>
                                            <img src="../image/error.png" width="100" alt="Product Image">
                                        <?php endif ; ?>
                                    </td>
                                    <td><?php echo $water['w_name']; ?> </td>
                                    <td><?php echo $water['w_hcm']; ?> </td>
                                    <td><?php echo number_format($water['w_price'],2); ?> </td>
                                    <td>
                                        <a role="button" href="water_config.php?id=<?php echo $water['w_menuID']; ?>" class="btn btn-outline-dark"><i class="bi bi-pencil"></i> Edit</a>
                                        <a onclick="return confirm('Are you sure you want to deleat');" role="button" href="../condb/water_delete.php?id=<?php echo $water['w_menuID']; ?>" class="btn btn-outline-danger"><i class="bi bi-trash"></i> Delete</a>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        <?php else : ?>
                            <td colspan="5">
                                <h4 class="text-center text-danger">No Product Data</h4>
                            </td>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <h4>Tea</h4>
            <div class="col-12">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th style="width: 100px;">Image</th>
                            <th>Product Name</th>
                            <th style="width: 200px;">Option</th>
                            <th style="width: 100px;">Price</th>
                            <th style="width: 200px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($tea_row > 0) : ?>
                            <?php while ($water = mysqli_fetch_assoc($tea_query)) : ?>
                                <tr>
                                    <td>
                                        <?php if(!empty($water['w_pic'])) : ?>
                                            <img src="../image/menu/water/<?php echo $water['w_pic']; ?>" width="100" alt="Product Image">
                                        <?php else : ?>
                                            <img src="../image/error.png" width="100" alt="Product Image">
                                        <?php endif ; ?>
                                    </td>
                                    <td><?php echo $water['w_name']; ?> </td>
                                    <td><?php echo $water['w_hcm']; ?> </td>
                                    <td><?php echo number_format($water['w_price'],2); ?> </td>
                                    <td>
                                        <a role="button" href="water_config.php?id=<?php echo $water['w_menuID']; ?>" class="btn btn-outline-dark"><i class="bi bi-pencil"></i> Edit</a>
                                        <a onclick="return confirm('Are you sure you want to deleat');" role="button" href="../condb/water_delete.php?id=<?php echo $water['w_menuID']; ?>" class="btn btn-outline-danger"><i class="bi bi-trash"></i> Delete</a>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        <?php else : ?>
                            <td colspan="5">
                                <h4 class="text-center text-danger">No Product Data</h4>
                            </td>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <h4>Dessert</h4>
            <div class="col-12">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th style="width: 100px;">Image</th>
                            <th>Product Name</th>
                            <th style="width: 200px;">Quantity</th>
                            <th style="width: 100px;">Price</th>
                            <th style="width: 200px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($dess_row > 0) : ?>
                            <?php while ($dessert = mysqli_fetch_assoc($dess_query)) : ?>
                                <tr>
                                    <td>
                                        <?php if(!empty($dessert['dess_pic'])) : ?>
                                            <img src="../image/menu/dessert/<?php echo $dessert['dess_pic']; ?>" width="100" alt="Product Image">
                                        <?php else : ?>
                                            <img src="../image/error.png" width="100" alt="Product Image">
                                        <?php endif ; ?>
                                    </td>
                                    <td><?php echo $dessert['dess_menu_name']; ?> </td>
                                    <td><?php echo $dessert['dess_quantity']; ?> </td>
                                    <td><?php echo number_format($dessert['dess_price'],2); ?> </td>
                                    <td>
                                        <a role="button" href="dessert_config.php?id=<?php echo $dessert['dess_menuID']; ?>" class="btn btn-outline-dark"><i class="bi bi-pencil"></i> Edit</a>
                                        <a onclick="return confirm('Are you sure you want to deleat');" role="button" href="../condb/dessert_delete.php?id=<?php echo $dessert['dess_menuID']; ?>" class="btn btn-outline-danger"><i class="bi bi-trash"></i> Delete</a>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        <?php else : ?>
                            <td colspan="5">
                                <h4 class="text-center text-danger">No Product Data</h4>
                            </td>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <h4>Fruit</h4>
            <div class="col-12">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th style="width: 100px;">Image</th>
                            <th>Product Name</th>
                            <th style="width: 200px;">Quantity</th>
                            <th style="width: 100px;">Price</th>
                            <th style="width: 200px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($fruit_row > 0) : ?>
                            <?php while ($fruit = mysqli_fetch_assoc($fruit_query)) : ?>
                                <tr>
                                    <td>
                                        <?php if(!empty($fruit['fruit_pic'])) : ?>
                                            <img src="../image/menu/fruit/<?php echo $fruit['fruit_pic']; ?>" width="100" alt="Product Image">
                                        <?php else : ?>
                                            <img src="../image/error.png" width="100" alt="Product Image">
                                        <?php endif ; ?>
                                    </td>
                                    <td><?php echo $fruit['fruit_menu_name']; ?> </td>
                                    <td><?php echo $fruit['fruit_quantity']; ?> </td>
                                    <td><?php echo number_format($fruit['fruit_Price'],2); ?> </td>
                                    <td>
                                        <a role="button" href="fruit_config.php?id=<?php echo $fruit['fruit_menuID']; ?>" class="btn btn-outline-dark"><i class="bi bi-pencil"></i> Edit</a>
                                        <a onclick="return confirm('Are you sure you want to deleat');" role="button" href="../condb/fruit_delete.php?id=<?php echo $fruit['fruit_menuID']; ?>" class="btn btn-outline-danger"><i class="bi bi-trash"></i> Delete</a>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        <?php else : ?>
                            <td colspan="5">
                                <h4 class="text-center text-danger">No Product Data</h4>
                            </td>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>