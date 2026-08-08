<?php
?>
<a href="booking.php?place_name=Amritsar&price=90000"></a>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="styles.css" />
    <title>Webb Design Mastery | Amritsar Tour</title>
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
        <li><a href="review.php">Review</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>

      <div class="icons">
        <a href="login6.php" class="fas fa-user fa-2x"></a>
      </div>
    </nav>

    <section id="overview">
      <div class="image-container">
        <img src="https://upload.wikimedia.org/wikipedia/commons/e/ea/Golden_Temple_Amritsar_Gurudwara_%28cropped%29.jpg" alt="Amritsar Tour">
      </div>
      <div class="container">
        <h2>Overview</h2>
        <p>Explore the cultural and historical richness of Amritsar with this comprehensive 10-day tour. From the iconic Golden Temple to historical landmarks and vibrant local markets, this tour offers a deep dive into the heart of Punjab.</p>
      </div>
    </section>

    <!-- Itinerary Section -->
    <section id="itinerary">
      <div class="container">
        <h2>Itinerary for 10 days tour of Amritsar</h2>
        <ul>
          <li><strong>Day 1: Arrival in Amritsar:</strong>
            - Check-in and visit the Golden Temple for the evening aarti.</li>

          <li><strong>Day 2: Jallianwala Bagh and Partition Museum:</strong>
            - Explore the historical Jallianwala Bagh and learn about history at the Partition Museum.</li>

          <li><strong>Day 3: Wagah Border Ceremony:</strong>
            - Witness the famous Wagah Border flag-lowering ceremony and enjoy local markets in the evening.</li>

          <li><strong>Day 4: Durgiana Temple and Gobindgarh Fort:</strong>
            - Visit the Durgiana Temple and Gobindgarh Fort for cultural shows.</li>

          <li><strong>Day 5: Local Food Trail:</strong>
            - Enjoy authentic Punjabi cuisine and explore Amritsar’s vibrant food culture.</li>

          <li><strong>Day 6: Visit Tarn Taran Sahib:</strong>
            - A day trip to Tarn Taran Sahib, a serene gurdwara known for its spiritual vibes.</li>

          <li><strong>Day 7: Shopping and Handicrafts:</strong>
            - Explore Amritsar’s bustling markets for phulkari embroidery and local crafts.</li>

          <li><strong>Day 8: Village Tour:</strong>
            - Experience rural Punjab with a visit to a local village and enjoy traditional activities.</li>

          <li><strong>Day 9: Ram Tirath and Pul Kanjari:</strong>
            - Visit Ram Tirath Temple and the historic Pul Kanjari, built by Maharaja Ranjit Singh.</li>

          <li><strong>Day 10: Departure:</strong>
            - Final shopping for souvenirs and departure from Amritsar.</li>
        </ul>
      </div>
    </section>

    <section id="includes">
      <div class="container">
        <h2>Best time to visit</h2>
        <ul>
          <li><strong>November to March:</strong> Pleasant weather for sightseeing and outdoor activities.</li>
        </ul>
      </div>
    </section>

    <!-- Estimated Costs Section -->
    <section id="includes">
      <div class="container">
        <h2>Estimated Costs</h2>
        <ul>
          <li>Accommodation: ₹2,000–₹6,000 per night (budget to luxury).</li>
          <li>Meals: ₹500–₹1,200 per day per person (local and international cuisine).</li>
          <li>Transport: Private cars or taxis costing ₹2,000–₹4,000 per day.</li>
          <li>Attractions: Minimal entry fees for museums, forts, and temples.</li>
        </ul>
      </div>
    </section>

    <!-- Booking Section -->
    <section id="booking">
      <div class="container">
        <h2>Book Now</h2>
        <p>Contact us to reserve your spot on this tour.</p>
        <a href="booking.php?place_name=Amritsar&price=90000&guide_name=Raj%20ketan&contact_no=9777743210" class="btn">Book Now</a>
      </div>
    </section>

<style>
  /* General Reset */
  header h1 {
    font-size: 2.5rem;
    margin-bottom: 0.5rem;
  }

  nav ul {
    list-style: none;
    text-align: center;
  }

  nav ul li {
    display: inline;
    margin-right: 1.5rem;
  }

  nav ul li a {
    color: #fff;
    text-decoration: none;
    font-size: 1.1rem;
  }

  .container {
    max-width: 1100px;
    margin: 2rem auto;
    padding: 1rem;
    background: #fff;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
  }

  section h2 {
    font-size: 2rem;
    margin-bottom: 1rem;
  }

  section p, section li {
    font-size: 1.1rem;
    margin-bottom: 0.5rem;
  }

  form label {
    display: block;
    margin: 0.5rem 0 0.3rem;
  }

  form input {
    width: 100%;
    padding: 0.5rem;
    margin-bottom: 1rem;
    border: 1px solid #ccc;
    border-radius: 4px;
  }

  button {
    background-color: #2980b9;
    color: #fff;
    border: none;
    padding: 0.7rem 1.5rem;
    font-size: 1rem;
    cursor: pointer;
    border-radius: 4px;
  }

  button:hover {
    background-color: #3498db;
  }

  footer {
    background-color: #2c3e50;
    color: #fff;
    text-align: center;
    padding: 1rem 0;
    margin-top: 2rem;
  }
</style>

<style>
  body {
    margin: 0;
    padding: 0;
    background-color: #f0f0f0;
  }

  .image-container {
    position: relative;
    width: 1700px;
    height: 500px;
    margin: 20px;
  }

  .image-container img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 10px;
  }
</style>
  </body>
</html>
