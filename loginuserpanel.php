<?php
session_start();

// Database connection
$c = mysqli_connect("localhost", "root", "", "register1");
if (mysqli_connect_error()) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetch registered user data
$user_query = "SELECT * FROM test1";
$g = mysqli_query($c, $user_query);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="styles.css" />
    <title>Webb Design Mastery | Travel Toor</title>
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
      
        
        <li><a href="tourdetails.php">Tours Details</a></li>

        

      </ul>
</nav>
   <style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f8f9fa;
    margin: 0;
    padding: 0;
}

header {
    background: #007bff;
    color: white;
    padding: 15px;
    text-align: center;
    font-size: 24px;
    font-weight: bold;
}

.navbar {
    display: flex;
    justify-content: center;
    background: #0056b3;
    padding: 10px;
}

.navbar a {
    color: white;
    text-decoration: none;
    padding: 12px 20px;
    font-size: 18px;
    transition: background 0.3s ease, transform 0.2s;
}

.navbar a:hover {
    background: #004494;
    border-radius: 5px;
    transform: scale(1.05);
}

.container {
    max-width: 800px;
    margin: 50px auto;
    background: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;
}

h2 {
    color: #333;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

th, td {
    border: 3px solid #ddd;
    padding: 12px;
    text-align: left;
}

th {
    background: orange;
    color: white;
}

tr:nth-child(even) {
    background: #f2f2f2;
}

.btn-danger {
    display: block;
    width: 120px;
    margin: 20px auto;
    padding: 12px;
    background: red;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    transition: background 0.3s ease, transform 0.2s;
}

.btn-danger:hover {
    background: darkred;
    transform: scale(1.05);
}

    </style>
       


<div class="container">
    <h2>Registered Users</h2>
    <table class="table">
        <thead>
            <tr>
                
                <th class="bg-primary">FULL NAME</th>
                <th class="bg-primary">USER NAME</th>
                <th class="bg-primary">EMAIL</th>

            </tr>
        </thead>
        <tbody>
            <?php 
            while ($r = mysqli_fetch_array($g)) {
            ?>
            <tr>
                <td><?php echo htmlspecialchars($r["fullname"]); ?></td>
                <td><?php echo htmlspecialchars($r["username"]); ?></td>
                <td><?php echo htmlspecialchars($r["email"]); ?></td>
                
                
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>

<form action="logout.php" method="post">
    <button type="submit" class="btn btn-danger">Logout</button>
</form>
</body>
</html>
