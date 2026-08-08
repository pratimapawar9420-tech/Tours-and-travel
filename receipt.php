<?php
session_start();

// Database connection
$c = mysqli_connect("localhost", "root", "", "tour_details1");
if (mysqli_connect_error()) {
    echo "<script>
    alert('Cannot connect to the database');
    window.location.href='index.php';
    </script>";
    exit();
}

// Check if the booking ID is provided
if (isset($_GET['booking_id']) && !empty($_GET['booking_id'])) {
    $booking_id = $_GET['booking_id'];

    // Fetch main booking details
    $query1 = "SELECT * FROM `main_booking` WHERE `id` = ?";
    $stmt1 = mysqli_prepare($c, $query1);
    mysqli_stmt_bind_param($stmt1, "i", $booking_id);
    mysqli_stmt_execute($stmt1);
    $result1 = mysqli_stmt_get_result($stmt1);
    $order = mysqli_fetch_assoc($result1);

    // Fetch additional persons
    $query2 = "SELECT * FROM `additional_persons` WHERE `booking_id` = ?";
    $stmt2 = mysqli_prepare($c, $query2);
    mysqli_stmt_bind_param($stmt2, "i", $booking_id);
    mysqli_stmt_execute($stmt2);
    $result2 = mysqli_stmt_get_result($stmt2);

    if (!$order) {
        echo "<script>
        alert('Order not found');
        window.location.href='index.php';
        </script>";
        exit();
    }
} else {
    echo "<script>
    alert('Booking ID not provided');
    window.location.href='index.php';
    </script>";
    exit();
}
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
    <title>Adjustable Image with Text</title>
    <style>
         .packages-container {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 30px;
        padding: 20px;
        flex-wrap: nowrap;
        overflow-x: auto; /* Allows horizontal scrolling if needed */
      }

      .package-card {
        border: 1px solid #ddd;
        border-radius: 10px;
        overflow: hidden;
        width: 250px;
        background-color: #fff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        text-align: center;
      }

      .package-card img {
        width: 100%;
        height: 180px;
        object-fit: cover;
        border-bottom: 1px solid #ddd;
        border-radius: 10px 10px 0 0; /* Rounds the top corners */
      }

      .package-card .content {
        padding: 15px;
      }

      .package-card .content h4 {
        margin: 10px 0;
        font-size: 1.2em;
        color: #333;
      }

      .package-card .content p {
        margin: 5px 0;
        font-size: 1em;
        color: #555;
      }

      .package-card .details {
        display: flex;
        justify-content: space-between;
        margin-top: 10px;
        font-size: 0.9rem;
        color: #777;
      }
    </style>
<body>
<nav>
      <div class="nav__header">
        
        <div class="nav__menu__btn" id="menu-btn">
          <i class="ri-menu-3-line"></i>
        </div>
      </div>
      <ul class="nav__links" id="nav-links">
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="packages.php">Tours</a></li>
        <li><a href="holiday.php">All Tours</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="review.php">Review</a></li>
        <li><a href="conus.php">Contact</a></li>

      </ul>
      <div class="nav__btns">
        <button class="btn">My bookings</button>
      </div>
      <div class="icons">
      <a href="login6.php" class="fas fa-user fa-2x"></a> <!-- 3x larger -->
      </div>
    </nav>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .receipt-container {
            max-width: 800px;
            margin: auto;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 8px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
        .total-amount {
            text-align: right;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="receipt-container">
        <h2>Tour Booking Invoice</h2>
        <h3>Booking Details:-</h3>
        <table>
            <tr>
                <th>Field</th>
                <th>Details</th>
            </tr>
            <tr>
                <td>Booking ID</td>
                <td><?= htmlspecialchars($order['id']) ?></td>
            </tr>
            <tr>
                <td>Name</td>
                <td><?= htmlspecialchars($order['first_name'] . ' ' . $order['last_name']) ?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><?= htmlspecialchars($order['email']) ?></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td><?= htmlspecialchars($order['phone']) ?></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><?= htmlspecialchars($order['address']) ?></td>
            </tr>
            <tr>
                <td>Tour guide</td>
                <td><?= htmlspecialchars($order['tour_guide_name']) ?></td>
            </tr>
            <tr>
                <td>Place</td>
                <td><?= htmlspecialchars($order['place_name']) ?></td>
            </tr>
           
            <tr>
                <td>Tour Date</td>
                <td><?= htmlspecialchars($order['tour_date']) ?></td>
            </tr>
            <tr>
                <td>Payment Method</td>
                <td><?= htmlspecialchars($order['payment_method']) ?></td>
            </tr>
            <tr>
                <td>Total Amount</td>
                <td>₹<?= htmlspecialchars(number_format($order['total_amount'], 2)) ?></td>
            </tr>
        </table>

        <h3>Additional Persons</h3>
        <table>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Age</th>
            </tr>
            <?php
            $counter = 1;
            while ($person = mysqli_fetch_assoc($result2)) {
                echo "<tr>
                    <td>" . $counter++ . "</td>
                    <td>" . htmlspecialchars($person['first_name'] . ' ' . $person['last_name']) . "</td>
                    <td>" . htmlspecialchars($person['email']) . "</td>
                    <td>" . htmlspecialchars($person['phone']) . "</td>
                    <td>" . htmlspecialchars($person['age']) . "</td>
                </tr>";
            }
            ?>
        </table>
    </div>
    <?php echo "<button onclick='window.print()' class='btn btn-primary mb-3'>Print Bill</button>"; ?>
    <form action="logout.php" method="post">
    <button type="submit" class="btn btn-danger">Logout</button>
</form>
    

</body>
</html>
