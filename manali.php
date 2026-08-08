<?php
?>
<a href="booking.php?place_name=Manali&price=40000"></a>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="styles.css" />
    <title>Nisarg Pravasi | Manali Adventure Tour</title>
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
        <img src="https://www.naturetravelagency.com/uploads/1703234831best%20time%20to%20visit%20Manali%20for%20snowfall.jpg" alt="Manali Adventure Tour">
      </div>
      <div class="container">
        <h2>Overview</h2>
        <p>Experience the thrill of adventure in Manali with this 5-day tour. From snow-capped peaks to thrilling activities like paragliding and river rafting, this tour is perfect for adrenaline seekers.</p>
      </div>
    </section>

    <section id="itinerary">
      <div class="container">
        <h2>Itinerary for 5 Days Adventure Tour of Manali</h2>
        <ul>
          <li><strong>Day 1: Arrival & Local Sightseeing:</strong>
            - Arrival in Manali, pickup from the hotel in a comfortable van, explore Mall Road, Hadimba Temple, and Manu Temple.</li>

          <li><strong>Day 2: Solang Valley & Paragliding:</strong>
            - Visit Solang Valley for adventure sports like paragliding and ropeway rides.</li>

          <li><strong>Day 3: Rohtang Pass & Skiing:</strong>
            - Drive to Rohtang Pass (subject to permit) for skiing and snow activities.</li>

          <li><strong>Day 4: River Rafting & Trekking:</strong>
            - Enjoy white-water rafting in Beas River and trek to Jogini Waterfalls.</li>

          <li><strong>Day 5: Departure:</strong>
            - Leisure time for shopping, followed by drop-off at the hotel or transportation hub.</li>
        </ul>
      </div>
    </section>

    <section id="includes">
      <div class="container">
        <h2>Best time to visit</h2>
        <ul>
          <li><strong>March to June:</strong> Ideal for summer adventures like paragliding and trekking.</li>
          <li><strong>December to February:</strong> Best for snow activities like skiing and snowboarding.</li>
        </ul>
      </div>
    </section>

    <section id="includes">
      <div class="container">
        <h2>Estimated Costs</h2>
        <ul>
          <li>Accommodation: ₹1,500–₹5,000 per night (budget to luxury hotels included).</li>
          <li>Meals: ₹400–₹1,000 per day per person.</li>
          <li>Transport: ₹2,000–₹4,500 per day (cab rentals and local transport, hotel pickup and drop included).</li>
          <li>Adventure Activities: ₹1,000–₹5,000 per activity (paragliding, rafting, skiing).</li>
        </ul>
      </div>
    </section>

    <section id="booking">
      <div class="container">
        <h2>Book Now</h2>
        <p>Contact us to reserve your spot on this adventure tour.</p>
        <a href="booking.php?place_name=Manali&price=40000&guide_name=Shamala%20Thaker&contact_no=1216543210" class="btn">Book Now</a>
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
