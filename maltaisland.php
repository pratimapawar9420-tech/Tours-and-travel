<?php
?>
<a href="booking.php?place_name=Malta Island&price=65000"></a>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="styles.css" />
    <title>Nisarg Pravasi | Malta Island Tour</title>
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
        <img src="https://live.staticflickr.com/5611/15541274298_063899c111_b.jpg" alt="Malta Island">
      </div>
      <div class="container">
        <h2>Overview</h2>
        <p>Malta Island, located in the heart of the Mediterranean, is known for its rich history, stunning architecture, and beautiful beaches. From ancient ruins to clear blue waters, Malta offers a perfect combination of history and relaxation.</p>
      </div>
    </section>

    <section id="itinerary">
      <div class="container">
        <h2>4-Day Itinerary for Malta Island</h2>
        <ul>
          <li><strong>Day 1: Arrival & Valletta Exploration:</strong> Arrive in Malta, explore the capital city of Valletta, and visit St. John's Co-Cathedral and Upper Barracca Gardens.</li>
          <li><strong>Day 2: Mdina & Rabat:</strong> Explore the silent city of Mdina, wander its narrow streets, and then visit Rabat for its historical catacombs and churches.</li>
          <li><strong>Day 3: Blue Lagoon & Comino Island:</strong> Take a boat trip to the famous Blue Lagoon for swimming, snorkeling, and relaxing on the beach on Comino Island.</li>
          <li><strong>Day 4: Gozo Island & Departure:</strong> Visit Gozo Island, explore the Ggantija Temples, the Azure Window, and enjoy the stunning views before departing.</li>
        </ul>
      </div>
    </section>

    <section id="includes">
      <div class="container">
        <h2>Best Time to Visit</h2>
        <ul>
          <li><strong>April to June:</strong> Perfect weather for sightseeing, with fewer tourists.</li>
          <li><strong>September to November:</strong> Ideal for warm weather and outdoor activities.</li>
        </ul>
      </div>
    </section>

    <section id="costs">
      <div class="container">
        <h2>Estimated Costs</h2>
        <ul>
          <li>Accommodation: $100–$220 per night (mid-range hotels).</li>
          <li>Meals: $20–$50 per day per person.</li>
          <li>Transport: Bus rides: ~$1.50 per ride, Car rental: ~$40 per day.</li>
          <li>Attractions: ~$30–$100 (including boat trips and historical sites).</li>
        </ul>
      </div>
    </section>

    <section id="booking">
      <div class="container">
        <h2>Book Now</h2>
        <p>Contact us to reserve your spot on this amazing Malta Island tour.</p>
        <a href="booking.php?place_name=Malta Island&price=65000&guide_name=Giovanni%20Borg&contact_no=9988771122" class="btn">Book Now</a>
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
