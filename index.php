<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index_styles.css">
    <title>P E R T</title>
</head>

<body>
    <div class="nav">
        <div class="logo-container">
            <a href="#"><img src="image/coffee-cup.png" class="logo" /></a>
            <h5>P E R T</h5>
        </div>
        <div class="links">
            <a href="#">For Brands</a>
            <a href="#">For Creators</a>
            <a href="#">About</a>
            <button id="loginBtn">Log In</button>
        </div>
    </div>
    <div class="container">
        <div class="hero">
            <div class="hero-image"></div> <!-- Move the image container here -->
            <div class="content">
                <h1>Brewing Happiness</h1>
                <p>in Every Cup</p>
                <div class="buttons">
                    <button>Customer Mode</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Add an event listener to the Log In button
        document.getElementById('loginBtn').addEventListener('click', function () {
            // Redirect to the login page or any other page you want
            window.location.href = 'signin.php'; // Replace 'login.html' with the desired page
        });
    </script>
</body>

</html>