<?php
session_start();

// Database connection
$c = mysqli_connect("localhost", "root", "", "travelcon");
if (mysqli_connect_error()) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetch contact persons data
$contact_query = "SELECT * FROM contact_form";
$g = mysqli_query($c, $contact_query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="styles.css">
    <title>Contact Persons | Nisarg Pravasi</title>
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
            <li><a href="tourdetails.php">Tour Details</a></li>
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
            background: orange;
            color: white;
            padding: 15px;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
        }
        .navbar {
            display: flex;
            justify-content: center;
            background: orange;
            padding: 10px;
        }
        .navbar a {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            font-size: 18px;
        }
        .navbar a:hover {
            background: #004494;
            border-radius: 5px;
        }
        .container {
            width: 90%;
            margin: 50px auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
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
            cursor: pointer;
        }
        .btn-danger:hover {
            background: darkred;
        }
    </style>

    <div class="container">
        <h2>Contact Persons Details</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Inquiry Type</th>
                    <th>Message</th>
                    <th>Submitted At</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                while ($r = mysqli_fetch_array($g)) {
                ?>
                <tr>
                    <td><?php echo htmlspecialchars($r["id"]); ?></td>
                    <td><?php echo htmlspecialchars($r["name"]); ?></td>
                    <td><?php echo htmlspecialchars($r["email"]); ?></td>
                    <td><?php echo htmlspecialchars($r["phone"]); ?></td>
                    <td><?php echo htmlspecialchars($r["inquiry_type"]); ?></td>
                    <td><?php echo htmlspecialchars($r["message"]); ?></td>
                    <td><?php echo htmlspecialchars($r["submitted_at"]); ?></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

    <form action="logout.php" method="post">
        <button type="submit" class="btn-danger">Logout</button>
    </form>

</body>
</html>
