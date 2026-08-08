<?php
session_start();

// Define your username and password
define('USERNAME', 'pratima'); // Change to your username
define('PASSWORD', 'pratima9420'); // Change to your password

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check credentials
    if ($username === USERNAME && $password === PASSWORD) {
        $_SESSION['loggedin'] = true; // Set session variable to indicate user is logged in
        header('Location: loginuserpanel.php'); // Redirect to user login panel
        exit;
    } else {
        $error = 'Invalid username or password.';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="styles.css" />
</head>
<body>
    
    <nav>
        <div class="nav__header">
            <div class="nav__logo">
                <a href="#">Nisarg <span>Pravasi</span></a>
            </div>
            <div class="nav__menu__btn" id="menu-btn">
                <i class="ri-menu-3-line"></i>
            </div>
        </div>
        <ul class="nav__links" id="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="packages.php">Tours</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="review.php">Review</a></li>
            <li><a href="conus.php">Contact</a></li>
        </ul>
    </nav>
    <style>
.login-container {
        width: 500px;
        padding: 20px;
        background: white;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
}
       

        .login-container h2 {
            text-align: center;
            color: #333;
        }

        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 3px;
            box-sizing: border-box;
        }

        .login-container input[type="submit"] {
            background-color: #5cb85c;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            width: 100%;
        }

        .login-container input[type="submit"]:hover {
            background-color: #4cae4c;
        }

        .login-container a {
            display: block;
            text-align: center;
            margin-top: 10px;
            color: #5cb85c;
            text-decoration: none;
        }

        .login-container a:hover {
            text-decoration: underline;
        }
        .login-container form {
    display: flex;
    flex-direction: column;
    align-items: flex-center; /* Align all items to the end (right side) */
}
</style>
    <div class="login-container">
        <form method="post" action="">
            <h2>Login</h2>
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" class="btn">Login</button>
        </form>
        <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
    </div>

</body>
</html>
