<?php
?>
<a href="booking.php?place_name=Botanical_Graden&price=1500"></a>

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
        <img src="https://wallpapers.com/images/hd/botanical-garden-1920-x-1080-wallpaper-q5coqmtcgzsdmq39.jpg" alt="Botanical Garden Nashik">
      </div>
      <div class="container">
        <h2>Overview</h2>
        <p>The Botanical Garden in Nashik offers a peaceful escape amidst beautiful flora and fauna. This garden is a perfect place to explore different plant species and enjoy a calm day surrounded by nature. Whether you're a nature enthusiast or just looking for a peaceful spot, the Botanical Garden is an ideal getaway.</p>
      </div>
    </section>

    <!-- Itinerary Section -->
    <section id="itinerary">
      <div class="container">
        <h2>Itinerary for Botanical Garden Pune Tour</h2>
        <ul>
          <li><strong>Day 1: Arrival at Botanical Garden:</strong> Explore the lush greenery, stunning flowers, and tranquil atmosphere. Start with a guided tour of the garden to learn about the different plants and their significance.</li>
          <li><strong>10:00 AM – Relaxing Walk & Nature Exploration:</strong> Stroll along the garden pathways and enjoy the beauty of different plant species. Take your time to enjoy the flora and birds in the vicinity.</li>
          <li><strong>12:00 PM – Visit to the Orchid Garden:</strong> Explore the exotic variety of orchids on display and learn about their conservation.</li>
          <li><strong>1:00 PM – Lunch at Garden Café:</strong> Enjoy a delightful meal at the garden café with fresh, local dishes to rejuvenate your energy.</li>
          <li><strong>2:00 PM – Greenhouse Tour:</strong> Visit the greenhouse where you can see rare and tropical plants from different parts of the world.</li>
          <li><strong>3:00 PM – Free Time & Photography:</strong> Capture the beauty of the garden with your camera or take a moment to relax and enjoy the calm environment.</li>
          <li><strong>4:00 PM – Departure:</strong> Leave the garden with refreshing memories of the lush flora and peaceful surroundings.</li>
        </ul>
      </div>
    </section>

    <section id="includes">
      <div class="container">
        <h2>Best Time to Visit</h2>
        <ul>
          <li><strong>Summer (March to June):</strong> Best for sightseeing and enjoying the blooming flowers.</li>
          <li><strong>Winter (November to February):</strong> Ideal for a peaceful visit with cool, pleasant weather.</li>
        </ul>
      </div>
    </section>
    <!-- What's Included Section -->
    <section id="includes">
      <div class="container">
        <h2>Estimated Costs</h2>
        <ul>
          <li>Entry Fee: ₹200 per person.</li>
          <li>Meals: ₹200–₹400 per person at the garden café.</li>
          <li>Transport: Local transport to the garden from Nashik city center: ₹100–₹200 per person.</li>
        </ul>
      </div>
    </section>

    <!-- Booking Section -->
    <section id="booking">
      <div class="container">
        <h2>Book Now</h2>
        <p>Contact us to reserve your spot on this tour.</p>
        <a href="booking.php?place_name=Botanical_Garden&price=1500&guide_name=Priya%20Sharma&contact_no=8976554545" class="btn">Book Now</a>
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
