<?php
session_start();

// Database connection
$c = mysqli_connect("localhost", "root", "", "tour_details1");
if (mysqli_connect_error()) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetch booking data
$user_query = "SELECT * FROM main_booking";
$g = mysqli_query($c, $user_query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
            background: #007bff;
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Booking Data</title>
</head>
<body>
<header>
    Tour & Travel - Bookings
</header>
<nav class="navbar">
    <a href="index.php">Home</a>
    <a href="packages.php">Packages</a>
    <a href="contact.php">Contact</a>
</nav>

<div class="container">
    <h2>Booking Details</h2>
    <table>
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Place Name</th>
                <th>Tour Date</th>
                <th>Total Amount</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            while ($r = mysqli_fetch_array($g)) {
            ?>
            <tr>
                <td><?php echo htmlspecialchars($r["first_name"]); ?></td>
                <td><?php echo htmlspecialchars($r["last_name"]); ?></td>
                <td><?php echo htmlspecialchars($r["email"]); ?></td>
                <td><?php echo htmlspecialchars($r["phone"]); ?></td>
                <td><?php echo htmlspecialchars($r["place_name"]); ?></td>
                <td><?php echo htmlspecialchars($r["tour_date"]); ?></td>
                <td><?php echo htmlspecialchars($r["total_amount"]); ?></td>
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
