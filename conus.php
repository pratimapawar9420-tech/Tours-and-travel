


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
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
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="packages.php">Tours</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="conus.php">Contact</a></li>

      </ul>
   
</nav>
</body>
</html>


<?php
// Database connection
$host = "localhost";
$user = "root"; // Change this if you have a different DB user
$password = ""; // Set your database password if applicable
$database = "travelcon";

$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $inquiry_type = $_POST['inquiry_type'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contact_form (name, email, phone, inquiry_type, message) 
            VALUES ('$name', '$email', '$phone', '$inquiry_type', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('your response submitted successfully we will conctact you soon!'); window.location.href='index.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Nisarg Pravasi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        label {
            font-size: 16px;
            color: #333;
            display: block;
            margin-top: 10px;
        }
        input, select, textarea {
            width: 100%;
            padding: 12px;
            margin-top: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }
        button {
            background-color: orange;
            color: white;
            padding: 14px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            width: 100%;
            margin-top: 20px;
        }
        button:hover {
            background-color: darkorange;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Get in Touch with Us</h2>
        <p style="text-align: center; color: #777;">Have questions or need assistance? Feel free to reach out. We’re here to help you plan your dream vacation.</p>

        <form action="" method="POST">
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" required placeholder="Enter your name">

            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" required placeholder="Enter your email">

            <label for="phone">Phone Number</label>
            <input type="text" id="phone" name="phone" required placeholder="Enter your phone number">

            <label for="inquiry_type">Type of Inquiry</label>
            <select id="inquiry_type" name="inquiry_type">
                <option value="travel_package">Travel Package Inquiry</option>
                <option value="general_question">General Question</option>
                <option value="other">Other</option>
            </select>

            <label for="message">Message</label>
            <textarea id="message" name="message" required placeholder="Your message here..." style="height: 150px;"></textarea>

            <button type="submit">Submit</button>
        </form>
    </div>

</body>
</html>
