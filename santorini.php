<?php
?>
<a href="booking.php?place_name=Santorini&price=89000"></a>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="styles.css" />
    <title>Nisarg Pravasi | Santorini Island Tour</title>
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
        <img src="https://plus.unsplash.com/premium_photo-1661963145672-a2bd28eba0fb?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8c2FudG9yaW5pfGVufDB8fDB8fHww" alt="Santorini Island">
      </div>
      <div class="container">
        <h2>Overview</h2>
        <p>Santorini, Greece, is a dream destination with stunning whitewashed houses, blue-domed churches, and breathtaking caldera views. Experience the charm of Oia, volcanic beaches, and rich Greek culture on this 6-day tour.</p>
      </div>
    </section>

    <section id="itinerary">
      <div class="container">
        <h2>6-Day Itinerary for Santorini Island</h2>
        <ul>
          <li><strong>Day 1: Arrival & Fira Exploration:</strong> Explore Fira, the capital of Santorini, visit the Archaeological Museum, and enjoy sunset views from a rooftop restaurant.</li>
          <li><strong>Day 2: Oia & Sunset Experience:</strong> Wander through Oia’s charming streets, visit the famous blue-domed churches, and witness the world-famous sunset over the caldera.</li>
          <li><strong>Day 3: Volcano & Hot Springs Tour:</strong> Take a boat tour to the Santorini Volcano, hike to the crater, and relax in the nearby natural hot springs.</li>
          <li><strong>Day 4: Akrotiri Ruins & Red Beach:</strong> Discover the ancient ruins of Akrotiri, an archaeological wonder, and unwind at the stunning Red Beach.</li>
          <li><strong>Day 5: Wine Tasting & Pyrgos Village:</strong> Visit Santorini’s traditional wineries for local wine tasting and explore Pyrgos, a picturesque medieval village.</li>
          <li><strong>Day 6: Kamari Beach & Departure:</strong> Relax at Kamari Beach, enjoy some last-minute shopping, and transfer to the airport for departure.</li>
        </ul>
      </div>
    </section>

    <section id="includes">
      <div class="container">
        <h2>Best Time to Visit</h2>
        <ul>
          <li><strong>April to June & September to October:</strong> Ideal weather, fewer crowds, and affordable prices.</li>
          <li><strong>July to August:</strong> Peak season with vibrant nightlife but higher costs.</li>
        </ul>
      </div>
    </section>

    <section id="costs">
      <div class="container">
        <h2>Estimated Costs</h2>
        <ul>
          <li>Accommodation: $150–$300 per night (mid-range hotels).</li>
          <li>Meals: $40–$80 per day per person.</li>
          <li>Transport: Rental car: ~$60 per day, Public transport: ~$5 per ride.</li>
          <li>Attractions: ~$100–$200 (including boat tours & wine tasting).</li>
        </ul>
      </div>
    </section>

    <section id="booking">
      <div class="container">
        <h2>Book Now</h2>
        <p>Contact us to reserve your spot on this tour.</p>
        <a href="booking.php?place_name=Santorini&price=89000&guide_name=Alex%20Papadopoulos&contact_no=9090776655" class="btn">Book Now</a>
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
