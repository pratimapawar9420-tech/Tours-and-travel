<?php

$c = mysqli_connect("localhost", "root", "", "register1");
if (!$c) 
{
    die("Connection failed: " . mysqli_connect_error());
}

session_start();

#login form section
if (isset($_POST['login'])) {
    $query = "SELECT * FROM test1 WHERE email = '$_POST[email_username]' OR username = '$_POST[email_username]'";
    $result = mysqli_query($c, $query);
    
    if ($result) {
        if (mysqli_num_rows($result) == 1) {
            $result_fetch = mysqli_fetch_assoc($result);
            if (password_verify($_POST['password'], $result_fetch['password'])) {
                $_SESSION['logged_in'] = true;
                $_SESSION['username'] = $result_fetch['username'];
                header("location: login6.php");
                exit();
            } else {
                echo "<script>
                alert('Incorrect password');
                window.location.href='index.php';
                </script>";
            }
        } else {
            echo "<script>
            alert('Email or username not registered');
            window.location.href='login6.php';
            </script>";
        }
    } else {
        echo "<script>
        alert('Cannot run the query');
        window.location.href='index.php';
        </script>";
    }
}

#registration section
if (isset($_POST['register'])) {
    $user_exit_query = "SELECT * FROM test1 WHERE username = '$_POST[username]' OR email = '$_POST[email]'";
    $result1 = mysqli_query($c, $user_exit_query);
    
    if ($result1) {
        if (mysqli_num_rows($result1) > 0) {
            $result_fetch = mysqli_fetch_assoc($result1);
            if ($result_fetch['username'] == $_POST['username']) {
                echo "<script>
                alert('$result_fetch[username] - Username already taken');
                window.location.href='index.php';
                </script>";
            } else {
                echo "<script>
                alert('$result_fetch[email] - Email already registered');
                window.location.href='index.php';
                </script>";
            }
        } else {
            $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
            $query = "INSERT INTO test1 (fullname, username, email, password) VALUES ('$_POST[fullname]', '$_POST[username]', '$_POST[email]', '$password')";
            
            if (mysqli_query($c, $query)) {
                echo "<script>
                alert('Registration successful');
                window.location.href='index.php';
                </script>";
            } else {
                echo "<script>
                alert('Cannot run the query');
                window.location.href='index.php';
                </script>";
            }
        }
    } else {
        echo "<script>
        alert('Cannot run the query');
        window.location.href='index.php';
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User - Login and Register</title>
    <link rel="stylesheet" href="login6css.css">
</head>
    <style>
        /* Slideshow container */
        .slideshow-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            z-index: -1;
        }

        .mySlides {
            display: none;
            width: 100%;
            height: 100%;
        }

        .nav__links li a {
            font-size: 1.5rem;
            font-weight: bold;
            color: white;
        }

        .nav__links li a:hover {
            color: orange;
        }

        .popup-container {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6);
            justify-content: center;
            align-items: center;
        }

        .popup {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            max-width: 400px;
            width: 100%;
        }
    </style>
</head>
<body style="background-image: url('https://wallpapers.com/images/hd/travel-hd-axhrsecphqby11wk.jpg'); background-size: cover; background-position: center; background-attachment: fixed;">

<!-- Slideshow Container -->
<div class="slideshow-container">
    <div class="mySlides fade">
        <img src="https://images.travelandleisureasia.com/wp-content/uploads/sites/2/2024/02/15094015/kirkjufell.jpeghttps://images.travelandleisureasia.com/wp-content/uploads/sites/2/2024/02/15094015/kirkjufell.jpeg" style="width:100%">
    </div>
    <div class="mySlides fade">
        <img src="https://www.thomascook.in/blog/wp-content/uploads/2022/08/Most-Iconic-Landmarks-in-Singapore-scaled-1.jpg" style="width:100%">
    </div>
    <div class="mySlides fade">
        <img src="https://lp-cms-production.imgix.net/2021-04/shutterstockRF_571847170.jpg" style="width:100%">
    </div>
    <div class="mySlides fade">
        <img src="https://i0.wp.com/www.theluxeinsider.com/wp-content/uploads/2021/05/russia-must-sees.jpg?fit=1189%2C720&ssl=1" style="width:100%">
    </div>
    <div class="mySlides fade">
        <img src="https://d2rdhxfof4qmbb.cloudfront.net/wp-content/uploads/20180221131008/iStock-627935066.jpg" style="width:100%">
    </div>
    <div class="mySlides fade">
        <img src="https://www.golanguedoc.com/images/848/famous-places-france.jpg" style="width:100%">
    </div>
    <div class="mySlides fade">
        <img src="https://i.insider.com/5d3b004b2516e949fa4523a5?width=800&format=jpeg&auto=webp" style="width:100%">
    </div>
    <div class="mySlides fade">
        <img src="https://static1.thetravelimages.com/wordpress/wp-content/uploads/2023/04/resized-image-promo-2023-04-05t004914-209.jpeg" style="width:100%">
    </div>
    <div class="mySlides fade">
        <img src="https://images.travelandleisureasia.com/wp-content/uploads/sites/2/2024/09/19170952/Kailasanathar-Temple-Kanchipuram.jpg" style="width:100%">
    </div>
    <div class="mySlides fade">
        <img src="https://imageio.forbes.com/specials-images/dam/imageserve/1171238184/0x0.jpg?format=jpg&height=900&width=1600&fit=bounds" style="width:100%">
    </div>
</div>

<!-- Navigation Bar -->
<nav>
    <div class="nav__header">
        <div class="nav__logo">
            <a href="#">Nisarg <span style="color: orange;">Pravasi</span></a>
        </div>
    </div>
    <div class="nav__menu__btn" id="menu-btn">
        <i class="ri-menu-3-line"></i>
    </div>
    <ul class="nav__links" id="nav-links">
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="packages.php">Packages</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="review.php">Review</a></li>
        <li><a href="conus.php">Contact</a></li>
        <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true): ?>
            <li><a href="logout1.php">Logout (<?= $_SESSION['username'] ?>)</a></li>
        <?php else: ?>
            <button type="button" onclick="popup('login-popup')" style="background-color: orange; color: white; padding: 10px 20px; font-size: 16px; border: none; border-radius: 5px; cursor: pointer;">Login</button>
            <button type="button" onclick="popup('register-popup')" style="background-color: orange; color: white; padding: 10px 20px; font-size: 16px; border: none; border-radius: 5px; cursor: pointer;">Register </button>
            <?php endif; ?>
    </ul>
</nav>

<div class="popup-container" id="login-popup" style="background-image: url('https://your-image-url-here.jpg'); background-size: cover; background-position: center;">
    <div class="popup">
        <form method="POST" action="login6.php">
            <h2>
                <span>USER LOGIN</span>
                <button type="reset" onclick="popup('login-popup')">X</button>
            </h2>
            <input type="text" placeholder="E-mail or Username" name="email_username" required>
            <input type="password" placeholder="Password" name="password" required>
            <button type="submit" class="login-btn" name="login">LOGIN</button>
        </form>
    </div>
</div>


<div class="popup-container" id="register-popup" style="background-image: url('https://your-image-url-here.jpg'); background-size: cover; background-position: center;">>
    <div class="register popup">
        <form method="POST" action="login6.php">
            <h2>
                <span>USER REGISTER</span>
                <button type="reset" onclick="popup('register-popup')">X</button>
            </h2>
            <input type="text" placeholder="Full Name" name="fullname" required>
            <input type="text" placeholder="Username" name="username" required>
            <input type="email" placeholder="E-mail" name="email" required>
            <input type="password" placeholder="Password" name="password" required>
            <button type="submit" class="register-btn" name="register">REGISTER</button>
        </form>
    </div>
</div>


<?php
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
    echo "<h3 style='text-align:center; margin-top:70px; font-size: 36px; font-weight: bold;'>Welcome to NisargPravasi - $_SESSION[username]</h3>";
}
?>

<script>
    function popup(popup_name) {
        var get_popup = document.getElementById(popup_name);
        get_popup.style.display = (get_popup.style.display === "flex") ? "none" : "flex";
    }

    // Slideshow functionality
    let slideIndex = 0;
    showSlides();

    function showSlides() {
        let slides = document.getElementsByClassName("mySlides");
        for (let i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}    
        slides[slideIndex-1].style.display = "block";  
        setTimeout(showSlides, 4000); // Change image every 6 seconds
    }
</script>

</body>
</html>
