<?php
?>
<a href="booking.php?place_name=Tahiti&price=56000"></a>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="styles.css" />
    <title>Nisarg Pravasi | Tahiti Island Tour</title>
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
        <img src="https://a.travel-assets.com/findyours-php/viewfinder/images/res40/81000/81972-Tahiti.jpg" alt="Tahiti Island">
      </div>
      <div class="container">
        <h2>Overview</h2>
        <p>Tahiti, the largest island in French Polynesia, is a paradise of crystal-clear lagoons, lush mountains, and exotic beaches. Experience the culture, adventure, and relaxation that make Tahiti an unforgettable destination.</p>
      </div>
    </section>

    <section id="itinerary">
      <div class="container">
        <h2>4-Day Itinerary for Tahiti Island</h2>
        <ul>
          <li><strong>Day 1: Arrival & Papeete Exploration:</strong> Discover the vibrant capital, visit the market, and enjoy a sunset dinner by the waterfront.</li>
          <li><strong>Day 2: Moorea Island Excursion:</strong> Take a ferry to Moorea, known for its stunning beaches, coral reefs, and breathtaking mountain views.</li>
          <li><strong>Day 3: Black Sand Beaches & Waterfalls:</strong> Explore Tahiti's unique black sand beaches and visit Faarumai Waterfalls for a scenic adventure.</li>
          <li><strong>Day 4: Snorkeling & Lagoon Cruise:</strong> Experience a half-day snorkeling trip in the turquoise waters, then relax with a traditional Polynesian lunch.</li>
        </ul>
      </div>
    </section>

    <section id="includes">
      <div class="container">
        <h2>Best Time to Visit</h2>
        <ul>
          <li><strong>May to October:</strong> Dry season with pleasant weather, ideal for outdoor activities.</li>
          <li><strong>November to April:</strong> Warmer temperatures and occasional rain, great for budget travelers.</li>
        </ul>
      </div>
    </section>

    <section id="costs">
      <div class="container">
        <h2>Estimated Costs</h2>
        <ul>
          <li>Accommodation: $200–$350 per night (mid-range hotels).</li>
          <li>Meals: $40–$70 per day per person.</li>
          <li>Transport: Rental car: ~$80 per day, Ferry to Moorea: ~$30 round trip.</li>
          <li>Attractions: ~$100–$150 (depending on activities).</li>
        </ul>
      </div>
    </section>

    <section id="booking">
      <div class="container">
        <h2>Book Now</h2>
        <p>Contact us to reserve your spot on this tour.</p>
        <a href="booking.php?place_name=Tahiti&price=56000&guide_name=Jiyae%20Doe&contact_no=9876543210" class="btn">Book Now</a>
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
