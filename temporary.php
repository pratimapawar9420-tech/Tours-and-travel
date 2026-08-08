



<!--temporray kashmir.php file-->
<?php
// Database connection
$host = "localhost";
$user = "root";
$pass = "";
$db = "travel"; // Replace with your database name

// Create connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Form Data
    $name = $_POST['name'];
    $age = $_POST['age'];
    $pickup = $_POST['pickup'];
    $droping = $_POST['droping'];  // Changed to droping
    $date = $_POST['date'];
    $quantity = $_POST['quantity'];

    // Base price for calculation (example: ₹40000)
    $basePrice = 40000;
    $totalPrice = $basePrice * $quantity;

    // Prepared statement to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO bookings (name, age, pickup, droping, date, quantity, total_price) VALUES (?, ?, ?, ?, ?, ?, ?)");
    if ($stmt === false) {
        die('Error preparing the statement: ' . $conn->error);
    }

    // Bind parameters
    $stmt->bind_param("sisssid", $name, $age, $pickup, $droping, $date, $quantity, $totalPrice); // "s" = string, "i" = integer, "d" = double

    // Execute the query
    if ($stmt->execute()) {
        echo "<p>Booking successfully submitted!</p>";
    } else {
        echo "<p>Error: " . $stmt->error . "</p>";
    }

    // Close the statement
    $stmt->close();
}

// Close connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="styles.css" />
    <title>Kashmir Tour Packages</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
      }

      .container {
        display: flex;
        max-width: 1500px;
        margin: 20px auto;
        padding: 20px;
        gap: 20px;
      }

      .itinerary {
        flex: 2;
        background-color: #f9f9f9;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      }

      .itinerary h2 {
        text-align: center;
        color: #333;
        margin-bottom: 20px;
      }

      .day-heading {
        display: inline-block;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        background-color: orange;
        color: white;
        text-align: center;
        line-height: 30px;
        font-size: 18px;
        margin-right: 10px;
      }

      .register-form {
        flex: 1;
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      }

      .register-form h2 {
        text-align: center;
        color: #333;
        margin-bottom: 20px;
      }

      .register-form input {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        border: 1px solid #ccc;
        border-radius: 5px;
      }

      .register-form button {
        width: 100%;
        padding: 10px;
        background-color: orange;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
      }

      .register-form button:hover {
        background-color: darkorange;
      }
      
    </style>
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
        <li><a href="about.php">About</a></li>
        <li><a href="packages.php">Packages</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="review.php">Review</a></li>
        <li><a href="conus.php">Contact</a></li>
      </ul>
      <div class="nav__btns">
        <button class="btn">My bookings</button>
      </div>
      <div class="icons">
        <a href="login6.php" class="fas fa-user fa-2x"></a>
      </div>
    </nav>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .header {
            background-color: white;
            color: black;
            padding: 20px;
            text-align: center;
        }
        .container {
            display: flex;
            justify-content: center;
            padding: 40px;
            background-color: #ffffff;
            margin: 20px auto;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .image-section {
            width: 50%;
            padding-right: 20px;
        }
        .image-section img {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }
        .details-section {
            width: 50%;
        }
        .package-title {
            font-size: 24px;
            font-weight: bold;
        }
        .package-description {
            margin: 10px 0;
            font-size: 16px;
            color: #555;
        }
        .slider-container {
            display: flex;
            align-items: center;
            margin-top: 20px;
        }
        .slider-container input {
            width: 80%;
            margin-right: 20px;
        }
        .slider-container button {
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 4px;
        }
        .slider-container button:hover {
            background-color: #0056b3;
        }
        .price-section {
            margin-top: 30px;
            font-size: 20px;
            font-weight: bold;
        }
        .popup {
  display: none;
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background-color: white;
  padding: 40px; /* Increased padding for more space */
  border-radius: 10px;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
  z-index: 1000;
  width: 400px; /* Increased width */
  height: auto; /* Adjust height automatically based on content */
  text-align: center;
}

.popup button {
  padding: 15px 25px; /* Increased padding for buttons */
  margin: 15px; /* Increased margin for spacing */
  background-color: #007bff;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 16px; /* Increased font size for buttons */
}

.popup button:hover {
  background-color: #0056b3;
}

.popup-close {
  position: absolute;
  top: 10px;
  right: 10px;
  background: none;
  border: none;
  color: #333;
  font-size: 20px; /* Increased size for close button */
  cursor: pointer;
}


      
    </style>
</head>
<body>
<!--<div class="header__image">
        <img src="assets/bg.png" alt="bg" height="300" width="200">
      </div>-->
    <div class="header">
        <h1>Kashmir Holiday Package</h1>
        <p>Enjoy a luxurious trip with beautiful landscapes and exciting activities</p>
    </div>

    <div class="container">
        <!-- Image Section -->
        <div class="image-section">
        <img src="https://www.dreamtravelyaari.com/admin/webroot/img/uploads/blog/1731065485_197224-Kashmir.jpg" alt="Kashmir Package" style=" height: 600px;">
        </div>

        <!-- Details Section -->
        <div class="details-section">
           

          <!--  <div class="slider-container">
                <button onclick="changeQuantity(-1)">-</button>
                <input type="number" id="quantity" value="1" min="1" readonly />
                <button onclick="changeQuantity(1)">+</button>
            </div>-->

           
      <!-- Left Section -->
      <div class="itinerary">
        <h2 style="background-color: orange; color: white; padding: 10px; border-radius: 5px;">5-Day Kashmir Tour Itinerary</h2>
        <div class="package-title">Kashmir - The Paradise on Earth</div>
            <div class="package-description">
                <p>Explore the scenic beauty of Kashmir, enjoy the serene Dal Lake, visit famous gardens, and indulge in skiing and other adventurous activities.</p>
            </div>
        <h3><span class="day-heading">D1</span>: Arrival in Srinagar</h3>
        <ul>
          <li>Dal Lake: Shikara ride.</li>
          <li>Mughal Gardens: Nishat Bagh, Shalimar Bagh, Chashme Shahi.</li>
          <li>Pari Mahal: Panoramic views.</li>
          <li>Local Market: Handicrafts and saffron shopping.</li>
        </ul>

        <h3><span class="day-heading">D2</span>: Gulmarg - The Meadow of Flowers</h3>
        <ul>
          <li>Gondola Ride: Phase 1 and Phase 2.</li>
          <li>Skiing: Seasonal activities.</li>
          <li>Golf Course: Highest in the world.</li>
        </ul>

        <h3><span class="day-heading">D3</span>: Pahalgam - The Valley of Shepherds</h3>
        <ul>
          <li>Aru Valley: Hiking and photography.</li>
          <li>Betaab Valley: Scenic Bollywood spot.</li>
          <li>Lidder River: Rafting or relaxing.</li>
        </ul>

        <h3><span class="day-heading">D4</span>: Sonamarg - The Meadow of Gold</h3>
        <ul>
          <li>Thajiwas Glacier: Pony ride or trek.</li>
          <li>Zoji La Pass: Stunning views (seasonal).</li>
          <li>Sind River: Fishing and photography.</li>
        </ul>

        <h3><span class="day-heading">D5</span>: Explore Local Culture and Departure</h3>
        <ul>
          <li>Shankaracharya Temple: Hilltop views.</li>
          <li>Jama Masjid: Historic mosque.</li>
          <li>Local Cuisine: Kashmiri delicacies.</li>
          <li>Shopping: Pashmina shawls and carpets.</li>
        </ul>
      </div>

            </div>
        </div>
    </div>

<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  .container {
    display: flex;
    max-width: 1500px;
    margin: 20px auto;
    padding: 20px;
    gap: 20px;
  }

  .itinerary {
    flex: 2;
    background-color: #f9f9f9;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  }

  .register-form {
    flex: 1;
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  }

  .register-form input {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
  }

  .register-form button {
    width: 100%;
    padding: 10px;
    background-color: orange;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
  }

  .register-form button:hover {
    background-color: darkorange;
  }
</style>
</head>
<body>
  <h1>Kashmir Holiday Package</h1>
  <p>Fill the details</p>

  <div class="container">
    <div class="register-form">
      <h2>Booking Form</h2>
      <form method="POST" action="">
        <div class="form-group">
          <label for="name">Full Name:</label>
          <input type="text" id="name" name="name" placeholder="Enter your full name" required>
        </div>
        <div class="form-group">
          <label for="age">Age:</label>
          <input type="number" id="age" name="age" placeholder="Enter your age" required>
        </div>
        <div class="form-group">
          <label for="pickup">Pickup Destination:</label>
          <input type="text" id="pickup" name="pickup" placeholder="Enter pickup location" required>
        </div>
        <div class="form-group">
          <label for="droping">Drop Destination:</label>
          <input type="text" id="droping" name="droping" placeholder="Enter drop location" required>
        </div>
        <div class="form-group">
          <label for="date">Date of Travel:</label>
          <input type="date" id="date" name="date" required>
        </div>
        <div class="form-group">
          <label for="quantity">Number of People:</label>
          <input type="number" id="quantity" name="quantity" value="1" min="1" required onchange="calculatePrice()">
        </div>
        <div class="form-group">
          <label>Total Price:</label>
          <p class="price" id="totalPrice">₹40000</p>
        </div>
        <button type="submit">Submit Booking</button>
      </form>
    </div>
  </div>

  <script>
    const basePrice = 40000;

    function calculatePrice() {
      const quantity = parseInt(document.getElementById('quantity').value);
      const totalPrice = basePrice * quantity;
      document.getElementById('totalPrice').innerText = `₹${totalPrice}`;
    }

    window.onload = function() {
      calculatePrice();
    }
  </script>
</body>
</html>



























<?php
// Database connection
$host = "localhost";
$user = "root";
$pass = "";
$db = "travel"; // Replace with your database name

// Create connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$popupMessage = ""; // Initialize popup message

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Form Data
    $name = $_POST['name'];
    $age = $_POST['age'];
    $pickup = $_POST['pickup'];
    $droping = $_POST['droping'];  // Changed to droping
    $date = $_POST['date'];
    $quantity = $_POST['quantity'];

    // Base price for calculation (example: ₹40000)
    $basePrice = 40000;
    $totalPrice = $basePrice * $quantity;

    // Prepared statement to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO bookings (name, age, pickup, droping, date, quantity, total_price) VALUES (?, ?, ?, ?, ?, ?, ?)");
    if ($stmt === false) {
        die('Error preparing the statement: ' . $conn->error);
    }

    // Bind parameters
    $stmt->bind_param("sisssid", $name, $age, $pickup, $droping, $date, $quantity, $totalPrice); // "s" = string, "i" = integer, "d" = double

    // Execute the query
    if ($stmt->execute()) {
        $popupMessage = "Booking successfully submitted!"; // Message to show in the popup
    } else {
        $popupMessage = "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

// Close connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kashmir Tour Packages</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="styles.css" />

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .container {
            display: flex;
            max-width: 1500px;
            margin: 20px auto;
            padding: 20px;
            gap: 20px;
        }

        .itinerary {
            flex: 2;
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .register-form {
            flex: 1;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .register-form input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .register-form button {
            width: 100%;
            padding: 10px;
            background-color: orange;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .register-form button:hover {
            background-color: darkorange;
        }

        .popup {
            display: <?php echo $popupMessage ? 'block' : 'none'; ?>;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            z-index: 1000;
            width: 400px;
            height: auto;
            text-align: center;
        }

        .popup button {
            padding: 15px 25px;
            margin: 15px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .popup button:hover {
            background-color: #0056b3;
        }

        .popup-close {
            position: absolute;
            top: 10px;
            right: 10px;
            background: none;
            border: none;
            color: #333;
            font-size: 20px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="popup">
        <button class="popup-close" onclick="document.querySelector('.popup').style.display='none';">X</button>
        <h3><?php echo $popupMessage; ?></h3>
    </div>

    <h1>Kashmir Holiday Package</h1>
    <p>Fill the details</p>

    <div class="container">
        <div class="register-form">
            <h2>Booking Form</h2>
            <form method="POST" action="">
                <div class="form-group">
                    <label for="name">Full Name:</label>
                    <input type="text" id="name" name="name" placeholder="Enter your full name" required>
                </div>
                <div class="form-group">
                    <label for="age">Age:</label>
                    <input type="number" id="age" name="age" placeholder="Enter your age" required>
                </div>
                <div class="form-group">
                    <label for="pickup">Pickup Destination:</label>
                    <input type="text" id="pickup" name="pickup" placeholder="Enter pickup location" required>
                </div>
                <div class="form-group">
                    <label for="droping">Drop Destination:</label>
                    <input type="text" id="droping" name="droping" placeholder="Enter drop location" required>
                </div>
                <div class="form-group">
                    <label for="date">Date of Travel:</label>
                    <input type="date" id="date" name="date" required>
                </div>
                <div class="form-group">
                    <label for="quantity">Number of People:</label>
                    <input type="number" id="quantity" name="quantity" value="1" min="1" required onchange="calculatePrice()">
                </div>
                <div class="form-group">
                    <label>Total Price:</label>
                    <p class="price" id="totalPrice">₹40000</p>
                </div>
                <button type="submit">Submit Booking</button>
            </form>
        </div>
    </div>

    <script>
        const basePrice = 40000;

        function calculatePrice() {
            const quantity = parseInt(document.getElementById('quantity').value);
            const totalPrice = basePrice * quantity;
            document.getElementById('totalPrice').innerText = `₹${totalPrice}`;
        }

        window.onload = function() {
            calculatePrice();
        }
    </script>
</body>
</html>



<!--confirm login6.php file secure file-->

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
