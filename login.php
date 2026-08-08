<?php
$c = mysqli_connect("localhost", "root", "", "testing");
if (!$c) 
{
    die("Connection failed: " . mysqli_connect_error());
}

session_start();

#login form section
if (isset($_POST['login'])) {
    // Fixed the use of single quotes for field names and added quotes around the variable
    $query = "SELECT * FROM registered_users WHERE email = '$_POST[email_username]' OR username = '$_POST[email_username]'";
    $result = mysqli_query($c, $query);
    
    if ($result) {
        if (mysqli_num_rows($result) == 1) {
            $result_fetch = mysqli_fetch_assoc($result);
            // Verify password
            if (password_verify($_POST['password'], $result_fetch['password']))
             {
                $_SESSION['logged_in'] = true;
                $_SESSION['username'] = $result_fetch['username'];
                header("location: login.php");
                exit(); // Added exit to stop execution after redirect
            } else {
                echo "<script>
                alert('Incorrect password');
                window.location.href='onee.php';
                </script>";
            }
        } else {
            echo "<script>
            alert('Email or username not registered');
            window.location.href='onee.php';
            </script>";
        }
    } else {
        echo "<script>
        alert('Cannot run the query');
        window.location.href='onee.php';
        </script>";
    }
}

#registration section
if (isset($_POST['register'])) {
    // Fixed the use of single quotes for field names in the SQL query
    $user_exit_query = "SELECT * FROM registered_users WHERE username = '$_POST[username]' OR email = '$_POST[email]'"; 
    $result1 = mysqli_query($c, $user_exit_query);
    
    if ($result1) {
        if (mysqli_num_rows($result1) > 0) {
            $result_fetch = mysqli_fetch_assoc($result1); // Fixed variabōle name
            if ($result_fetch['username'] == $_POST['username']) {
                echo "<script>
                alert('$result_fetch[username] - Username already taken');
                window.location.href='onee.php';
                </script>";
            } else {
                echo "<script>
                alert('$result_fetch[email] - Email already registered');
                window.location.href='onee.php';
                </script>";
            }
        } else 
        {
           // It will execute when no username and email exists
            $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
            
            // Fixed the use of single quotes for field names
            $query = "INSERT INTO registered_users (fullname, username, email, password) VALUES ('$_POST[fullname]', '$_POST[username]', '$_POST[email]', '$password')";
            
            if (mysqli_query($c, $query)) {
                echo "<script>
                alert('Registration successful');
                window.location.href='onee.php';
                </script>";
            } else {
                echo "<script>
                alert('Cannot run the query');
                window.location.href='onee.php';
                </script>";
            }
        }
    } else {
        echo "<script>
        alert('Cannot run the query');
        window.location.href='onee.php';
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
    <link rel="stylesheet" href="logincss.css">
</head>
<body>
  
<style>
     body {
    margin: 0;
    height: 100vh; /* Full height */
    width: 100vw; /* Full width */
    background-image: url("https://niche.style/wp-content/uploads/2024/02/three-pastel-colored-womens-hand-bags-on-pink-back-2023-11-27-04-57-25-utc-copy.jpg"); /* Valid single URL */
    background-size: cover; /* Cover the entire viewport */
    background-position: center; /* Center the image */
    background-repeat: no-repeat; /* Prevent repeating */
}

        
        </style>
<header>
<a href="#" class="logo">PurseParadise<span>.</span><img src="https://png.pngtree.com/png-clipart/20190925/original/pngtree-pink-and-white-female-handbag-png-image_4938220.jpg" width="70px" height="80px" style="vertical-align:middle; margin-right: 10px;"></span></a>
    <nav>
      
        <a href="onee.php"><strong>Home</a>
        <a href="product1.php"><strong>products</a>
        <a href="review1.php"><strong>review</a>
        <a href="contanct1.php"><strong>contact</a>
        <style>
          strong {
            font-size: 2rem;
            color: grey;      /* Add some padding */
            font-family: Garamond;
           }

          </style>
    </nav>
    <?php
    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
        echo "
        <div class='user'>
            $_SESSION[username] - <a href='logout.php' class='btn'>LOGOUT</a>

            </div>";
    } else {
        echo 
        "<div class='sign-in-up'>
            <button type='button' onclick=\"popup('login-popup')\">LOGIN</button>
            <button type='button' onclick=\"popup('register-popup')\">REGISTER</button>
        </div>";
    }
    ?>
    
</header>

<div class="popup-container" id="login-popup">
    <div class="popup">
        <form method="POST" action="login.php">
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

<div class="popup-container" id="register-popup">
    <div class="register popup">
        <form method="POST" action="login.php">
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
    echo "<h1 style='text-align:center;margin-top:200px'>Welcome to PurseParadies - $_SESSION[username]</h1>";
}
?>

<script>
function popup(popup_name) {
    get_popup = document.getElementById(popup_name);
    get_popup.style.display = (get_popup.style.display === "flex") ? "none" : "flex";
}
</script>

</body>
</html>

