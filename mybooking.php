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
        <li><a href="#home">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="packages.php">Tours</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="review.php">Review</a></li>
        <li><a href="conus.php">Contact</a></li>
        <li><a href="termsandcondition.php">terms & condition</a></li>

      </ul>
      <div class="nav__btns">
      <a href="mybooking.php" class="btn">My bookings</a>
      </div>
      <div class="icons">
      <a href="login6.php" class="fas fa-user fa-2x"></a> <!-- 3x larger -->
      </div>
    </nav>
    
    <?php
    // Fetch values from the URL
    if (isset($_GET['place_name']) && isset($_GET['price']) && isset($_GET['guide_name']) && isset($_GET['contact_no'])) {
        $placeName = htmlspecialchars($_GET['place_name']);
        $price = htmlspecialchars($_GET['price']);
        $guideName = htmlspecialchars($_GET['guide_name']);
        $contactNo = htmlspecialchars($_GET['contact_no']);
        
        // Display in a table
        echo "<table border='1'>
                <tr>
                    <th>Place Name</th>
                    <th>Price</th>
                    <th>Guide Name</th>
                    <th>Contact Number</th>
                </tr>
                <tr>
                    <td>$placeName</td>
                    <td>$price</td>
                    <td>$guideName</td>
                    <td>$contactNo</td>
                </tr>
              </table>";
    } else {
        echo "<p>No booking details available.</p>";
    }
    ?>
</body>
</html>
