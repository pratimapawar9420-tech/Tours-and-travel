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
      <div class="nav__btns">
        <button class="btn">My bookings</button>
      </div>
      <div class="icons">
      <a href="login.php" class="fas fa-user fa-2x"></a> <!-- 3x larger -->
      </div>
    </nav>

<div class="packages-container">
    <!-- First Card -->
    <div class="package-card">
        <a href="booking.php?place_name=Kashmir&price=40000">
            <img src="https://media.istockphoto.com/id/1323846766/photo/a-beautiful-view-of-dal-lake-in-winter-srinagar-kashmir-india.jpg?s=612x612&w=0&k=20&c=Dp3peie2t-jdLEmqe4W-DD09GACu2Cr-JjHHeB6rpBc=" alt="Kashmir" />
        </a>
        <div class="content">
            <h4>Kashmir</h4>
            <p>Rs. 40,000/- Per Person</p>
            <div class="details">
                <div><i class="fas fa-clock"></i> 5 Days</div>
                <div><i class="fas fa-map-marker-alt"></i> India</div>
            </div>
        </div>
    </div>

    <!-- Second Card -->
    <div class="package-card">
        <a href="booking.php?place_name=Russia&price=275000">
            <img src="https://ihplb.b-cdn.net/wp-content/uploads/2021/11/St.-Basils-Cathedral-799x430.jpg" alt="Russia" />
        </a>
        <div class="content">
            <h4>Russia</h4>
            <p>Rs. 2,75,000/- Per Person</p>
            <div class="details">
                <div><i class="fas fa-clock"></i> 5 Days</div>
                <div><i class="fas fa-map-marker-alt"></i> Russia</div>
            </div>
        </div>
    </div>
   <style>
    
        body {
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        .image-container {
            position: relative;
            width: 1700px; /* Adjust the width as needed */
            height: 500px; /* Adjust the height as needed */
            margin: 20px; /* Add margin if needed */
        }
        .image-container img {
            width: 100%; /* Fill container width */
            height: 100%; /* Fill container height */
            object-fit: cover; /* Ensure image does not stretch and maintains aspect ratio */
            border-radius: 10px; /* Optional: rounded corners */
        }
        .image-container .text {
            position: absolute;
            font-size: 72px; /* Increased text size */

            top: 50%; /* Center vertically */
            left: 50%; /* Center horizontally */
            transform: translate(-50%, -50%); /* Adjust text to exactly center */
            color: white;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7); /* Shadow for better readability */
        }
    </style>

    </body>
    </html>
































    ////////booking another form created 
    <?php
// Check if 'place_name' and 'price' are passed in the URL
if (isset($_GET['place_name']) && isset($_GET['price'])) {
    // Get the values from the URL
    $place_name = $_GET['place_name'];
    $price = $_GET['price'];
} else {
    // Default values if parameters are not passed
    $place_name = "Unknown Place";
    $price = 0;
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
        .tour-price, .available-seats {
            font-weight: bold;
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
    <form id="bookingForm">
        <!-- Cname, Name, Email -->
        <input type="text" id="cname" placeholder="Company Name" required>
        <input type="text" id="firstName" placeholder="First Name" required>
        <input type="text" id="lastName" placeholder="Last Name" required>
        <input type="email" id="email" placeholder="Email" required>
        <input type="number" id="age" placeholder="Age" required>
        <input type="tel" id="phone" placeholder="Phone Number" required>
        <textarea id="address" placeholder="Address" required></textarea>

        <!-- Display the place name and price dynamically -->
        <input type="text" name="place" value="<?php echo htmlspecialchars($place_name) . ' - ₹' . number_format($price, 0, '.', ','); ?>" required>

        <!-- Quantity and Price -->
        <label for="quantity">Quantity (Number of People):</label>
        <input type="number" id="quantity" value="1" min="1" max="30" required>

        <!-- Pickup/Drop Place -->
        <input type="text" id="pickupPlace" placeholder="Pickup Place" required>
        <input type="text" id="dropPlace" placeholder="Drop Place" required>

        <!-- Tour Date -->
        <label for="tourDate">Select Tour Date:</label>
        <input type="date" id="tourDate" required>

        <!-- Tour Guide -->
        <label for="tourGuide">Tour Guide (By default Mr. Samir Patil):</label>
        <input type="text" id="tourGuide" value="Mr. Samir Patil" readonly>

        <!-- Calculate Price -->
        <div class="tour-price">Total Price: ₹<?php echo number_format($price, 0, '.', ','); ?></div>
        <div class="available-seats">Available Seats: 30</div>

        <!-- Payment Options -->
        <h3>Payment Options</h3>
        <select id="paymentMethod" required>
            <option value="credit">Credit/Debit Card</option>
            <option value="paypal">PayPal</option>
            <option value="bankTransfer">Bank Transfer</option>
        </select>

        <button type="submit">Submit</button>
    </form>

    <div id="additionalForms"></div> <!-- This will hold additional forms -->

</div>

<script>
    const pricePerPerson = <?php echo $price; ?>;
    const maxCapacity = 30;

    // Get form elements
    const quantityInput = document.getElementById('quantity');
    const tourPriceElement = document.querySelector('.tour-price');
    const availableSeatsElement = document.querySelector('.available-seats');
    const additionalFormsContainer = document.getElementById('additionalForms');
    
    // Calculate total price based on quantity
    quantityInput.addEventListener('input', function() {
        let quantity = parseInt(quantityInput.value);
        
        // Ensure the quantity doesn't exceed maximum capacity
        if (quantity > maxCapacity) {
            quantityInput.value = maxCapacity;
            alert('The maximum capacity is 30 people.');
            quantity = maxCapacity;
        }

        // Update total price
        const totalPrice = quantity * pricePerPerson;
        tourPriceElement.textContent = `Total Price: ₹${totalPrice.toLocaleString()}`;

        // Update available seats
        const remainingSeats = maxCapacity - quantity;
        availableSeatsElement.textContent = `Available Seats: ${remainingSeats}`;

        // Add additional forms for extra people
        updateAdditionalForms(quantity);
    });

    // Function to update additional forms
    function updateAdditionalForms(quantity) {
        additionalFormsContainer.innerHTML = ''; // Clear previous forms
        
        // Create additional forms for each person based on the quantity
        for (let i = 1; i < quantity; i++) {
            const formDiv = document.createElement('div');
            formDiv.classList.add('additional-form');
            formDiv.innerHTML = `
                <h3>Person ${i + 1} Details</h3>
                <input type="text" placeholder="First Name" required>
                <input type="text" placeholder="Last Name" required>
                <input type="email" placeholder="Email" required>
                <input type="number" placeholder="Age" required>
                <input type="tel" placeholder="Phone Number" required>
                <textarea placeholder="Address" required></textarea>
            `;
            additionalFormsContainer.appendChild(formDiv);
        }
    }

    // Form submission handling
    document.getElementById('bookingForm').addEventListener('submit', function(event) {
        event.preventDefault();

        // Here, you can add any form submission logic like sending data to a server
        alert('Form submitted successfully!');
    });
</script>

</body>
</html>











<?php
// Check if 'place_name' and 'price' are passed in the URL
if (isset($_GET['place_name']) && isset($_GET['price'])) {
    // Get the values from the URL
    $place_name = $_GET['place_name'];
    $price = $_GET['price'];
} else {
    // Default values if parameters are not passed
    $place_name = "Unknown Place";
    $price = 0;
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
        .tour-price, .available-seats {
            font-weight: bold;
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
    <form id="bookingForm">
        <!-- Cname, Name, Email -->
        <input type="text" id="cname" placeholder="Company Name" required>
        <input type="text" id="firstName" placeholder="First Name" required>
        <input type="text" id="lastName" placeholder="Last Name" required>
        <input type="email" id="email" placeholder="Email" required>
        <input type="number" id="age" placeholder="Age" required>
        <input type="tel" id="phone" placeholder="Phone Number" required>
        <textarea id="address" placeholder="Address" required></textarea>

        <!-- Display the place name and price dynamically -->
        <input type="text" name="place" value="<?php echo htmlspecialchars($place_name) . ' - ₹' . number_format($price, 0, '.', ','); ?>" required>

        <!-- Tour Type Selection -->
        <label for="tourType">Select Tour Type:</label>
        <select id="tourType" required>
            <option value="couple">Couple</option>
            <option value="girlsGroup">Girls Group</option>
            <option value="boysGroup">Boys Group</option>
        </select>

        <!-- Quantity and Price -->
        <label for="quantity">Quantity (Number of People):</label>
        <input type="number" id="quantity" value="1" min="1" max="30" required>

        <!-- Pickup/Drop Place -->
        <input type="text" id="pickupPlace" placeholder="Pickup Place" required>
        <input type="text" id="dropPlace" placeholder="Drop Place" required>

        <!-- Tour Date -->
        <label for="tourDate">Select Tour Date:</label>
        <input type="date" id="tourDate" required>

        <!-- Tour Guide -->
        <label for="tourGuide">Tour Guide (By default Mr. Samir Patil):</label>
        <input type="text" id="tourGuide" value="Mr. Samir Patil" readonly>

        <!-- Calculate Price -->
        <div class="tour-price">Total Price: ₹<?php echo number_format($price, 0, '.', ','); ?></div>
        <div class="available-seats">Available Seats: 30</div>

        <!-- Payment Options -->
        <h3>Payment Options</h3>
        <select id="paymentMethod" required>
            <option value="credit">Credit/Debit Card</option>
            <option value="paypal">PayPal</option>
            <option value="bankTransfer">Bank Transfer</option>
        </select>

        <button type="submit">Submit</button>
    </form>

    <div id="additionalForms"></div> <!-- This will hold additional forms -->

</div>

<script>
    const pricePerPerson = <?php echo $price; ?>;
    const maxCapacity = 30;

    // Get form elements
    const quantityInput = document.getElementById('quantity');
    const tourPriceElement = document.querySelector('.tour-price');
    const availableSeatsElement = document.querySelector('.available-seats');
    const additionalFormsContainer = document.getElementById('additionalForms');
    
    // Calculate total price based on quantity
    quantityInput.addEventListener('input', function() {
        let quantity = parseInt(quantityInput.value);
        
        // Ensure the quantity doesn't exceed maximum capacity
        if (quantity > maxCapacity) {
            quantityInput.value = maxCapacity;
            alert('The maximum capacity is 30 people.');
            quantity = maxCapacity;
        }

        // Update total price
        const totalPrice = quantity * pricePerPerson;
        tourPriceElement.textContent = `Total Price: ₹${totalPrice.toLocaleString()}`;

        // Update available seats
        const remainingSeats = maxCapacity - quantity;
        availableSeatsElement.textContent = `Available Seats: ${remainingSeats}`;

        // Add additional forms for extra people
        updateAdditionalForms(quantity);
    });

    // Function to update additional forms
    function updateAdditionalForms(quantity) {
        additionalFormsContainer.innerHTML = ''; // Clear previous forms
        
        // Create additional forms for each person based on the quantity
        for (let i = 1; i < quantity; i++) {
            const formDiv = document.createElement('div');
            formDiv.classList.add('additional-form');
            formDiv.innerHTML = `
                <h3>Person ${i + 1} Details</h3>
                <input type="text" placeholder="First Name" required>
                <input type="text" placeholder="Last Name" required>
                <input type="email" placeholder="Email" required>
                <input type="number" placeholder="Age" required>
                <input type="tel" placeholder="Phone Number" required>
                <textarea placeholder="Address" required></textarea>
            `;
            additionalFormsContainer.appendChild(formDiv);
        }
    }

    // Form submission handling
    document.getElementById('bookingForm').addEventListener('submit', function(event) {
        event.preventDefault();

        // Here, you can add any form submission logic like sending data to a server
        alert('Form submitted successfully!');
    });
</script>

</body>
</html>
   really very importtant booking.php file  <?php
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
    <script>
        function updateAdditionalForms() {
            const quantity = document.getElementById("quantity").value;
            const additionalFormsContainer = document.getElementById("additionalFormsContainer");

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
                        <textarea name="additionalPersons[${i}][address]" placeholder="Address" required></textarea>
                    </div>
                `;
                additionalFormsContainer.insertAdjacentHTML("beforeend", formHtml);
            }
        }
    </script>
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
        <input type="number" id="quantity" name="quantity" value="1" min="1" max="30" required onchange="updateAdditionalForms()">

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

        <div id="additionalFormsContainer"></div>

        <button type="submit">Submit</button>
    </form>
</div>
</body>
</html>





















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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tour Booking Form</title>
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
        
        <input type="text" name="place" value="<?php echo htmlspecialchars($place_name) . ' - ₹' . number_format($price, 0, '.', ','); ?>" readonly>

        <label for="tourType">Select Tour Type:</label>
        <select name="tourType" required>
            <option value="couple">Couple</option>
            <option value="girlsGroup">Girls Group</option>
            <option value="boysGroup">Boys Group</option>
        </select>

        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="quantity" value="1" min="1" max="30" required onchange="updateAdditionalForms()">

        <div id="totalAmountContainer"></div>

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

        <div id="additionalFormsContainer"></div>

        <button type="submit">Submit</button>
    </form>
</div>

<!-- Modal -->
<div id="successModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <h2>Booking Saved Successfully!</h2>
        <p>Your booking has been saved. We will contact you soon!</p>
        <button onclick="window.location.href = 'your-redirect-page.php';">OK</button>
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
                    <textarea name="additionalPersons[${i}][address]" placeholder="Address" required></textarea>
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



<button onclick="window.location.href='booking.php?place_name=Kashmir&price=40000';">
    Book Now 
</button>


<a href="booking.php?place_name=Kashmir&price=40000" class="book-now-link"></a>










































<!--confirm booking.php file-->
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
      <div class="nav__btns">
        <button class="btn">My bookings</button>
      </div>
      <div class="icons">
      <a href="login.php" class="fas fa-user fa-2x"></a> <!-- 3x larger -->
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
        
        <input type="text" name="place" value="<?php echo htmlspecialchars($place_name) . ' - ₹' . number_format($price, 0, '.', ','); ?>" readonly>

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

        <div id="additionalFormsContainer"></div>

        <button type="submit">Submit</button>
    </form>   
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
                    <textarea name="additionalPersons[${i}][address]" placeholder="Address" required></textarea>
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
