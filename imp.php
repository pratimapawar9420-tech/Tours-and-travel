<?php
// Start the session to access session variables
session_start();

// Initialize cart if not already set
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Add items to the cart (for demonstration purposes)
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_to_cart'])) {
    $place_name = $_POST['place_name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];

    // Check if the place already exists in the cart
    $place_exists = false;
    foreach ($_SESSION['cart'] as &$item) {
        if ($item['place_name'] === $place_name) {
            $item['quantity'] += $quantity;
            $place_exists = true;
            break;
        }
    }

    // If the place doesn't exist, add it to the cart
    if (!$place_exists) {
        $_SESSION['cart'][] = [
            'place_name' => $place_name,
            'price' => $price,
            'quantity' => $quantity
        ];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tour Booking Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        input, select, button {
            margin: 10px 0;
            padding: 10px;
            font-size: 16px;
        }
        button {
            cursor: pointer;
            background-color: orange;
            color: white;
            border: none;
            border-radius: 5px;
        }
        #tourPrice, #availableSeats {
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Tour Booking Form</h2>
    <form id="bookingForm" method="post">
        <!-- Cname, Name, Email -->
        <input type="text" id="cname" name="cname" placeholder="Company Name" required>
        <input type="text" id="firstName" name="firstName" placeholder="First Name" required>
        <input type="text" id="lastName" name="lastName" placeholder="Last Name" required>
        <input type="email" id="email" name="email" placeholder="Email" required>
        <input type="number" id="age" name="age" placeholder="Age" required>
        <input type="tel" id="phone" name="phone" placeholder="Phone Number" required>
        <textarea id="address" name="address" placeholder="Address" required></textarea>

        <!-- Quantity and Price -->
        <label for="quantity">Quantity (Number of People):</label>
        <input type="number" id="quantity" name="quantity" value="1" min="1" max="30" required>

        <!-- Pickup/Drop Place -->
        <input type="text" id="pickupPlace" name="pickupPlace" placeholder="Pickup Place" required>
        <input type="text" id="dropPlace" name="dropPlace" placeholder="Drop Place" required>

        <!-- Tour Date -->
        <label for="tourDate">Select Tour Date:</label>
        <input type="date" id="tourDate" name="tourDate" required>

        <!-- Tour Guide -->
        <label for="tourGuide">Tour Guide (By default Mr. Samir Patil):</label>
        <input type="text" id="tourGuide" name="tourGuide" value="Mr. Samir Patil" readonly>

        <!-- Cart Items -->
        <h3>Cart Items</h3>
        <?php
        if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $item) {
                echo "<div>
                    <input type='text' name='place_name[]' value='{$item['place_name']}' readonly>
                    <input type='number' name='quantity[{$item['place_name']}]' value='{$item['quantity']}' min='1' max='10' onchange='this.form.submit();'>
                    <input type='hidden' name='price[{$item['place_name']}]' value='{$item['price']}'>
                    <button name='remove_item' value='{$item['place_name']}'>Remove</button>
                </div>";
            }
        } else {
            echo "<p>Your cart is empty.</p>";
        }
        ?>

        <!-- Calculate Price -->
        <div id="tourPrice">Total Price: ₹240,000</div>
        <div id="availableSeats">Available Seats: 30</div>

        <!-- Payment Options -->
        <h3>Payment Options</h3>
        <select id="paymentMethod" name="paymentMethod" required>
            <option value="credit">Credit/Debit Card</option>
            <option value="paypal">PayPal</option>
            <option value="bankTransfer">Bank Transfer</option>
        </select>

        <button type="submit" name="submit">Submit</button>
    </form>
</div>

<script>
    // JavaScript to handle form submission and cart updates
    document.getElementById('bookingForm').addEventListener('submit', function(event) {
        // Handle form submission logic here
    });
</script>

</body>
</html>






































database coennetion confirm code for booking.php file<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tour_details1";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize variables
$place_name = isset($_GET['place_name']) ? $_GET['place_name'] : "Unknown Place";
$price = isset($_GET['price']) ? (float)$_GET['price'] : 0;

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $tour_type = $_POST['tourType'];
    $quantity = $_POST['quantity'];
    $tour_date = $_POST['tourDate'];
    $pickup_place = $_POST['pickupPlace'];
    $drop_place = $_POST['dropPlace'];
    $payment_method = $_POST['paymentMethod'];

    // File uploads
    $uploadDir = 'uploads/';
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    $passportPath = $uploadDir . basename($_FILES['passport']['name']);
    $adharcardPath = $uploadDir . basename($_FILES['adharcard']['name']);
    $pancardPath = $uploadDir . basename($_FILES['pancard']['name']);

    move_uploaded_file($_FILES['passport']['tmp_name'], $passportPath);
    move_uploaded_file($_FILES['adharcard']['tmp_name'], $adharcardPath);
    move_uploaded_file($_FILES['pancard']['tmp_name'], $pancardPath);

    // Calculate total amount
    $total_amount = $quantity * $price;

    // Insert into main_booking
    $stmt = $conn->prepare("INSERT INTO main_booking 
        (first_name, last_name, email, age, phone, address, place_name, price_per_person, total_amount, quantity, tour_date, pickup_place, drop_place, payment_method, passport, adharcard, pancard) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssisssdissssssss", $firstName, $lastName, $email, $age, $phone, $address, $place_name, $price, $total_amount, $quantity, $tour_date, $pickup_place, $drop_place, $payment_method, $passportPath, $adharcardPath, $pancardPath);
    $stmt->execute();
    $booking_id = $stmt->insert_id;

    // Insert additional persons
    if (isset($_POST['additionalPersons']) && is_array($_POST['additionalPersons'])) {
        foreach ($_POST['additionalPersons'] as $person) {
            $stmt = $conn->prepare("INSERT INTO additional_persons 
                (booking_id, first_name, last_name, email, age, phone, address) 
                VALUES (?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("isssiss", $booking_id, $person['firstName'], $person['lastName'], $person['email'], $person['age'], $person['phone'], $person['address']);
            $stmt->execute();
        }
    }

    // Insert booking summary
    $stmt = $conn->prepare("INSERT INTO booking_summary (booking_id, total_amount, quantity) VALUES (?, ?, ?)");
    $stmt->bind_param("idi", $booking_id, $total_amount, $quantity);
    $stmt->execute();

    echo "Booking saved successfully!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tour Booking Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        input, select, textarea, button {
            margin: 10px 0;
            padding: 10px;
            font-size: 16px;
        }
        button {
            cursor: pointer;
            background-color: orange;
            color: white;
            border: none;
            border-radius: 5px;
        }
        .additional-form {
            margin-top: 20px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Tour Booking Form</h2>
    <form method="POST" enctype="multipart/form-data">
        <input type="text" name="firstName" placeholder="First Name" required>
        <input type="text" name="lastName" placeholder="Last Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="number" name="age" placeholder="Age" required>
        <input type="tel" name="phone" placeholder="Phone Number" required>
        <textarea name="address" placeholder="Address" required></textarea>
        
        <input type="text" name="place" value="<?php echo htmlspecialchars($place_name) . ' - ₹' . number_format($price, 0, '.', ','); ?>" readonly>

        <label for="tourType">Select Tour Type:</label>
        <select name="tourType" required>
            <option value="couple">Couple</option>
            <option value="girlsGroup">Girls Group</option>
            <option value="boysGroup">Boys Group</option>
        </select>

        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" value="1" min="1" max="30" required>

        <input type="text" name="pickupPlace" placeholder="Pickup Place" required>
        <input type="text" name="dropPlace" placeholder="Drop Place" required>

        <label for="tourDate">Tour Date:</label>
        <input type="date" name="tourDate" required>

        <label for="paymentMethod">Payment Method:</label>
        <select name="paymentMethod" required>
            <option value="credit">Credit/Debit Card</option>
            <option value="paypal">PayPal</option>
            <option value="bankTransfer">Bank Transfer</option>
        </select>

        <label>Upload Passport:</label>
        <input type="file" name="passport" required>

        <label>Upload Aadhaar Card:</label>
        <input type="file" name="adharcard" required>

        <label>Upload PAN Card:</label>
        <input type="file" name="pancard" required>

        <button type="submit">Submit</button>
    </form>
</div>
</body>
</html>
