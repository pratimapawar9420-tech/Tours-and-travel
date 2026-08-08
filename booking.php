<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    echo "<script>
    alert('Please register or log in first to proceed with booking.');
    window.location.href = 'login6.php';
    </script>";
    exit();
}

// Get the logged-in user's username from the session
$loggedInUsername = $_SESSION['username'];
$place_name = isset($_GET['place_name']) ? $_GET['place_name'] : 'Unknown Place';
$price = isset($_GET['price']) ? (float)$_GET['price'] : 0;
$tour_guide_name = isset($_GET['guide_name']) ? $_GET['guide_name'] : 'No Guide Available';
$contact_no = isset($_GET['contact_no']) ? $_GET['contact_no'] : ''; 
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

    // Check if the first name matches the username
    if ($firstName !== $loggedInUsername) {
        echo "<script>
        alert('Your first name does not match your username. Please register first and then go to booking.');
        window.location.href = 'login6.php';
        </script>";
        exit();
    }

    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    /*$tour_type = $_POST['tourType'];*/
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
        (first_name, last_name, email, age, phone, address,tour_guide_name, place_name, price_per_person, total_amount, quantity, tour_date, pickup_place, drop_place, payment_method, passport, adharcard, pancard) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssissssdissssssss", $firstName, $lastName, $email, $age, $phone, $address,$tour_guide_name ,$place_name, $price, $total_amount, $quantity, $tour_date, $pickup_place, $drop_place, $payment_method, $passportPath, $adharcardPath, $pancardPath);
    $stmt->execute();
    $booking_id = $stmt->insert_id;

    // Insert additional persons
    if (isset($_POST['additionalPersons']) && is_array($_POST['additionalPersons'])) {
        foreach ($_POST['additionalPersons'] as $index => $person) {
            $passportPath = $uploadDir . basename($_FILES['additionalPersons']['name'][$index]['passport']);
            $adharcardPath = $uploadDir . basename($_FILES['additionalPersons']['name'][$index]['adharcard']);
            $pancardPath = $uploadDir . basename($_FILES['additionalPersons']['name'][$index]['pancard']);
    
            move_uploaded_file($_FILES['additionalPersons']['tmp_name'][$index]['passport'], $passportPath);
            move_uploaded_file($_FILES['additionalPersons']['tmp_name'][$index]['adharcard'], $adharcardPath);
            move_uploaded_file($_FILES['additionalPersons']['tmp_name'][$index]['pancard'], $pancardPath);
    
            $stmt = $conn->prepare("INSERT INTO additional_persons 
                (booking_id, first_name, last_name, email, age, phone, address, passport, adharcard, pancard) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("isssisssss", $booking_id, $person['firstName'], $person['lastName'], $person['email'], $person['age'], $person['phone'], $person['address'], $passportPath, $adharcardPath, $pancardPath);
            $stmt->execute();
        }
    }
    

    // Popup success message
    echo "<script>
        window.onload = function() {
            document.getElementById('successModal').style.display = 'block';
        };
    </script>";
}

?>

<!-- HTML content remains the same as your previous code -->


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
        <div class="nav__logo">
          <a href="#">Nisarg <span>Pravasi</span></a>
        </div>
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
     
      <div class="icons">
      <a href="login6.php" class="fas fa-user fa-2x"></a> <!-- 3x larger -->
      </div>
    </nav>
    <style>
        /* Basic styles for modal */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0,0,0);
            background-color: rgba(0,0,0,0.4);
            padding-top: 60px;
        }

        .modal-content {
            background-color: #fefefe;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

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
        .total-amount {
            font-weight: bold;
            color: green;
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
        
        <input type="text" name="tour_guide_name" value="Tour Guide: <?php echo htmlspecialchars($tour_guide_name); ?>" readonly>
        <input type="text" name="tour_info" value="<?php echo htmlspecialchars($place_name) . ' - ₹' . number_format($price, 0, '.', ','); ?>" readonly>
        <!--<label for="tourType">Select Tour Type:</label>
        <select name="tourType" required>
            <option value="couple">Couple</option>
            <option value="girlsGroup">Girls Group</option>
            <option value="boysGroup">Boys Group</option>
        </select>-->

        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="quantity" value="1" min="1" max="30" required onchange="updateAdditionalForms()">

        <div id="totalAmountContainer"></div>

        <input type="text" name="pickupPlace" placeholder="Pickup Place" required>
        <input type="text" name="dropPlace" placeholder="Drop Place" required>

        <label for="tourDate">Tour Date:</label>
        <input type="date" name="tourDate" required>

        <label for="paymentMethod">Payment Method:</label>
<select name="paymentMethod" id="paymentMethod" onchange="showQRCode()" required>
    <option value="">Select Payment Method</option>
    <option value="paypal">PayPal</option>
    <option value="bankTransfer">Bank Transfer</option>
</select>

<div id="qrCodeContainer" style="display: none; margin-top: 20px;">
    <p id="qrDescription">Please scan this QR code to proceed:</p>
    <img id="qrImage" src="" alt="QR Code" style="width: 150px; height: 150px;">
</div>

<script>
    function showQRCode() {
        const paymentMethod = document.getElementById("paymentMethod").value;
        const qrCodeContainer = document.getElementById("qrCodeContainer");
        const qrImage = document.getElementById("qrImage");
        const qrDescription = document.getElementById("qrDescription");

        if (paymentMethod === "bankTransfer") {
            qrCodeContainer.style.display = "block";
            qrImage.src = "https://i.pinimg.com/originals/a8/69/40/a86940a4ed8a69539b341f3c414c47b3.png";  // Replace with your bank transfer QR code
            qrDescription.innerText = "Please scan this QR code to proceed with the bank transfer:";
        } else if (paymentMethod === "paypal") {
            qrCodeContainer.style.display = "block";
            qrImage.src = "https://i.pinimg.com/originals/a8/69/40/a86940a4ed8a69539b341f3c414c47b3.png";  // Replace with your PayPal QR code
            qrDescription.innerText = "Please scan this QR code to proceed with PayPal:";
        } else {
            qrCodeContainer.style.display = "none";
        }
    }
</script>

        <label>Upload Passport:</label>
        <input type="file" name="passport" required>

        <label>Upload Aadhaar Card:</label>
        <input type="file" name="adharcard" required>

        <label>Upload PAN Card:</label>
        <input type="file" name="pancard" required>

        <div id="additionalFormsContainer"></div>

        <button type="submit">Submit</button>
        <h2>Your tour guide is <?php echo htmlspecialchars($tour_guide_name); ?> for any inquiry, you can directly contact him at <?php echo htmlspecialchars($contact_no); ?> or if you need any help, just contact <a href="conus.php" style="color: orange;">here</a>.</h2>
        </div>

<!-- Modal -->
<div id="successModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <h2>Booking Saved Successfully!</h2>
        <p>Your booking has been saved. We will contact you soon!</p>
        <button onclick="window.location.href = 'receipt.php?booking_id=<?php echo $booking_id; ?>';">OK</button>
    </div>
</div>

<script>
    function closeModal() {
        document.getElementById('successModal').style.display = "none";
    }
 
    function updateAdditionalForms() {
    const quantity = document.getElementById("quantity").value;
    const price = <?php echo $price; ?>;
    const totalAmountContainer = document.getElementById("totalAmountContainer");
    const additionalFormsContainer = document.getElementById("additionalFormsContainer");

    // Update total amount
    const totalAmount = quantity * price;
    totalAmountContainer.innerHTML = `<div class="total-amount">Total Amount: ₹${totalAmount.toFixed(2)}</div>`;

    // Clear existing forms
    additionalFormsContainer.innerHTML = "";

    for (let i = 1; i < quantity; i++) {
        const formHtml = `
            <div class="additional-form">
                <h4>Details for Person ${i + 1}</h4>
                <input type="text" name="additionalPersons[${i}][firstName]" placeholder="First Name" required>

                <input type="text" name="additionalPersons[${i}][lastName]" placeholder="Last Name" required>

                <input type="email" name="additionalPersons[${i}][email]" placeholder="Email" required>

                <input type="number" name="additionalPersons[${i}][age]" placeholder="Age" required>

                <input type="tel" name="additionalPersons[${i}][phone]" placeholder="Phone Number" required>
                <br>
                <textarea name="additionalPersons[${i}][address]" placeholder="Address" required></textarea>
                <br>
                <label>Upload Passport:</label>
                <input type="file" name="additionalPersons[${i}][passport]" required>
                <br>
                <label>Upload Aadhaar Card:</label>
                <input type="file" name="additionalPersons[${i}][adharcard]" required>
                <br>
                <label>Upload PAN Card:</label>
                <input type="file" name="additionalPersons[${i}][pancard]" required>
            </div>
        `;
        additionalFormsContainer.insertAdjacentHTML("beforeend", formHtml);
    }
}


    // Show the modal on page load if the booking was successful
    <?php if (isset($booking_id)) { ?>
        document.getElementById('successModal').style.display = 'block';
    <?php } ?>
</script>

</body>
</html>
