<?php
?>
<a href="booking.php?place_name=Rajasthan&price=65000"></a>

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
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="packages.php">Tours</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="review.php">Review</a></li>
        <li><a href="conus.php">Contact</a></li>
      </ul>
      
      <div class="icons">
        <a href="login6.php" class="fas fa-user fa-2x"></a>
      </div>
    </nav>

    <section id="overview">
      <div class="image-container">
        <img src="https://s7ap1.scene7.com/is/image/incredibleindia/2-jaisalmer-fort-city-hero?qlt=82&ts=1726659979868" alt="Rajasthan">
      </div>
      <div class="container">
        <h2>Overview</h2>
        <p> Rajasthan, the "Land of Kings," is a vibrant state in India known for its majestic forts, palaces, desert landscapes, and rich cultural heritage. From the pink city of Jaipur to the golden dunes of Jaisalmer, Rajasthan offers a royal experience filled with history, adventure, and luxury.</p>
      </div>
    </section>

    <!-- Itinerary Section -->
    <section id="itinerary">
      <div class="container">
        <h2>Itinerary for 7 days tour of Rajasthan</h2>
        <ul>
          <li><strong>Day 1: Jaipur – The Pink City:</strong> Visit Amber Fort, Hawa Mahal, City Palace, and Jantar Mantar.</li>
          <li><strong>Day 2: Jaipur – Local Exploration:</strong> Explore Nahargarh Fort, Albert Hall Museum, and vibrant local markets.</li>
          <li><strong>Day 3: Jodhpur – The Blue City:</strong> Visit Mehrangarh Fort, Jaswant Thada, and Umaid Bhawan Palace.</li>
          <li><strong>Day 4: Udaipur – The City of Lakes:</strong> Enjoy a boat ride on Lake Pichola and explore City Palace & Jag Mandir.</li>
          <li><strong>Day 5: Udaipur – Local Heritage:</strong> Visit Saheliyon Ki Bari, Fateh Sagar Lake, and Bagore Ki Haveli.</li>
          <li><strong>Day 6: Jaisalmer – The Golden City:</strong> Explore Jaisalmer Fort, Patwon Ki Haveli, and enjoy a camel safari in the Thar Desert.</li>
          <li><strong>Day 7: Jaisalmer – Desert Adventure:</strong> Visit Sam Sand Dunes and experience traditional Rajasthani folk performances.</li>
        </ul>
      </div>
    </section>

    <section id="includes">
      <div class="container">
        <h2>Best time to visit</h2>
        <ul>
          <li><strong>Winter (October to March):</strong> Best for sightseeing with pleasant weather.</li>
          <li><strong>Monsoon (July to September):</strong> Ideal for lush landscapes and fewer crowds.</li>
        </ul>
      </div>
    </section>

    <!-- Estimated Costs Section -->
    <section id="includes">
      <div class="container">
        <h2>Estimated Costs</h2>
        <ul>
          <li>Accommodation: $100–$200 per night (mid-range hotels).</li>
          <li>Meals: $30–$50 per day per person.</li>
          <li>Transport: Local transport and intercity travel: ~$20–$50 per day.</li>
          <li>Attractions: ~$50–$150 (depending on choices).</li>
        </ul>
      </div>
    </section>

    <!-- Booking Section -->
    <section id="booking">
      <div class="container">
        <h2>Book Now</h2>
        <p>Contact us to reserve your spot on this tour.</p>
        <a href="booking.php?place_name=Rajasthan&price=65000&guide_name=Rajveer%20Singh&contact_no=8900444444" class="btn">Book Now</a>
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

      section#itinerary ol {
        margin-left: 1.5rem;
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


