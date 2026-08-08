<?php
session_start();

// Database connection
$c = mysqli_connect("localhost", "root", "", "tour_details1");
if (mysqli_connect_error()) {
    die("Connection failed: " . mysqli_connect_error());
}

// Handle delete request using booking ID
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete_id"])) {
    $delete_id = mysqli_real_escape_string($c, $_POST["delete_id"]);
    $delete_query = "DELETE FROM main_booking WHERE id = '$delete_id'";

    if (mysqli_query($c, $delete_query)) {
        echo "success";
    } else {
        echo "error: " . mysqli_error($c);
    }
    exit();
}

$tour_date = "";
$total_sales = 0.00; // Initialize total sales

// Fetch all booking data initially
$user_query = "SELECT * FROM main_booking";
if (isset($_POST['search'])) {
    $tour_date = $_POST['tour_date'];
    
    // Calculate total sales for selected date
    $total_sales_query = "SELECT SUM(price_per_person * quantity) AS total_sales FROM main_booking WHERE tour_date = '$tour_date'";
    $result = mysqli_query($c, $total_sales_query);
    if ($row = mysqli_fetch_assoc($result)) {
        $total_sales = $row['total_sales']; // Get the total sales amount
    }
    
    // Fetch booking data for selected date
    $user_query = "SELECT * FROM main_booking WHERE tour_date = '$tour_date'";
}
$g = mysqli_query($c, $user_query);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="styles.css" />
    <title>Webb Design Mastery | Travel Tour</title>
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
        <li><a href="additionalperson.php">Additional persons details</a></li>
        <li><a href="help.php">Requirements/Help</a></li>

      </ul>
      <div class="icons">
        <a href="login6.php" class="fas fa-user fa-2x"></a>
      </div>
    </nav>

    <div class="container">
        <form method="POST" action="">
            <label for="tour_date">Select Date:</label>
            <input type="date" name="tour_date" value="<?php echo $tour_date; ?>">
            <button type="submit" name="search" class="btn btn-primary">Search</button>
            <h2 style="text-align: center; margin-top: 20px;">Booking Details</h2>

        </form>

        <h3>Total Sales: ₹<?php echo number_format($total_sales, 2); ?></h3>
    </div>
    
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

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Age</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Tour guide name</th>
                <th>Place name</th>
                <th>Price</th>
                <th>Total amount</th>
                <th>Quantity</th>
                <th>Tour Date</th>
                <th>Pickup place</th>
                <th>Drop place</th>
                <th>Payment method</th>
                <th>Passport</th>
                <th>Aadhaar card</th>
                <th>PAN card</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($r = mysqli_fetch_array($g)) { ?>
            <tr id="row-<?php echo htmlspecialchars($r['id']); ?>">
                <td><?php echo htmlspecialchars($r["id"]); ?></td>
                <td><?php echo htmlspecialchars($r["first_name"]); ?></td>
                <td><?php echo htmlspecialchars($r["last_name"]); ?></td>
                <td><?php echo htmlspecialchars($r["email"]); ?></td>
                <td><?php echo htmlspecialchars($r["age"]); ?></td>
                <td><?php echo htmlspecialchars($r["phone"]); ?></td>
                <td><?php echo htmlspecialchars($r["address"]); ?></td>
                <td><?php echo htmlspecialchars($r["tour_guide_name"]); ?></td>
                <td><?php echo htmlspecialchars($r["place_name"]); ?></td>
                <td><?php echo htmlspecialchars($r["price_per_person"]); ?></td>
                <td><?php echo htmlspecialchars($r["total_amount"]); ?></td>
                <td><?php echo htmlspecialchars($r["quantity"]); ?></td>
                <td><?php echo htmlspecialchars($r["tour_date"]); ?></td>
                <td><?php echo htmlspecialchars($r["pickup_place"]); ?></td>
                <td><?php echo htmlspecialchars($r["drop_place"]); ?></td>
                <td><?php echo htmlspecialchars($r["payment_method"]); ?></td>
                <td><img src="<?php echo htmlspecialchars($r["passport"]); ?>" alt="Passport" width="100" height="100"></td>
                <td><img src="<?php echo htmlspecialchars($r["adharcard"]); ?>" alt="Aadhaar Card" width="100" height="100"></td>
                <td><img src="<?php echo htmlspecialchars($r["pancard"]); ?>" alt="PAN Card" width="100" height="100"></td>
                <td>
                    <button class="btn-danger" onclick="deleteRecord(<?php echo htmlspecialchars($r['id']); ?>)">Delete</button>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>
