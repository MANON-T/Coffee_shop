<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/signin_styles.css"> <!-- Include your CSS file -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <title>Log In</title>
</head>

<body>
    <div class="container text-center">
        <!-- Add your logo here -->
        <img src="image/coffee-cup.png" alt="Logo" class="mx-auto d-block mb-4" style="max-width: 100px;">
        
        <h3 class="mt-4">Welcome</h3>
        <p class="pink-text">Pert Customer </p>
        <hr>
        <form action="condb/RegisCusDB.php" method="post">

            <div class="mb-3 form-label-left"> <!-- Apply the custom class for aligning labels to the left -->
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" >
            </div>
            <div class="mb-3 form-label-left"> <!-- Apply the custom class for aligning labels to the left -->
                <label for="surname" class="form-label">Surname</label>
                <input type="text" class="form-control" name="surname">
            </div>
            <div class="mb-3 form-label-left"> <!-- Apply the custom class for aligning labels to the left -->
                <label for="phone_num" class="form-label">Phone number</label>
                <input type="number" class="form-control" name="phone_num">
            </div>
            <div class="mb-3 form-label-left"> <!-- Apply the custom class for aligning labels to the left -->
                <label for="gender" class="form-label">Gender</label>
                <input type="text" class="form-control" name="gender">
            </div>
            <div class="mb-3 form-label-left"> <!-- Apply the custom class for aligning labels to the left -->
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" name="username">
            </div>
            <div class="mb-3 form-label-left"> <!-- Apply the custom class for aligning labels to the left -->
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>

            <div class="d-grid gap-2">
                <button type="submit" name="register" class="btn btn-warning" mx-auto" >Register</button>
            </div>
        </form>

        
    </div>
    
</body>

</html>
