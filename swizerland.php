<?php
?>
<a href="booking.php?place_name=Switzerland&price=79000"></a>

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
        <img src="https://immigrantinvest.com/_next/image/?url=https://a.storyblok.com/f/176292/1536x864/921868e01e/immigration-to-switzerland-175447226.jpg&w=2048&q=65" alt="Nature">
      </div>
      <div class="container">
        <h2>Overview</h2>
        <p>Switzerland, known for its stunning alpine scenery, charming villages, and world-class cities, is a dream destination for nature lovers and luxury travelers alike. From the serene lakes of Lucerne to the towering Matterhorn and the cultural richness of Geneva, Switzerland offers an unparalleled blend of natural beauty, adventure, and Swiss precision. With its efficient rail system and scenic routes, exploring Switzerland is both easy and unforgettable.</p>
      </div>
    </section>

    <!-- Itinerary Section -->
    <section id="itinerary">
  <div class="container">
    <h2>Itinerary for 10 days tour of Switzerland</h2>
    <ul>
      <li><strong>Day 1: Arrival in Zurich:</strong>
        - Explore Bahnhofstrasse for high-end shopping.
        - Visit the Swiss National Museum and Old Town.</li>

      <li><strong>Day 2: Lucerne – The Gateway to Central Switzerland:</strong>
        - Walk across the iconic Chapel Bridge.
        - Visit the Lion Monument and enjoy a boat ride on Lake Lucerne.</li>

      <li><strong>Day 3: Mt. Titlis – Snow and Adventure:</strong>
        - Take the cable car to Mt. Titlis for panoramic views.
        - Experience the Titlis Cliff Walk and Glacier Cave.</li>

      <li><strong>Day 4: Interlaken – Adventure Hub:</strong>
        - Enjoy a boat ride on Lake Thun or Lake Brienz.
        - Try paragliding or take a funicular to Harder Kulm.</li>

      <li><strong>Day 5: Jungfraujoch – The Top of Europe:</strong>
        - Board the Jungfrau Railway to Europe’s highest train station.
        - Visit the Ice Palace and the Sphinx Observatory.</li>

      <li><strong>Day 6: Geneva – City of Peace:</strong>
        - Stroll through Jardin Anglais and see the Jet d'Eau.
        - Explore the United Nations Office and Red Cross Museum.</li>

      <li><strong>Day 7: Lausanne and Montreux:</strong>
        - Visit the Olympic Museum in Lausanne.
        - Walk along the lakeside promenade in Montreux and see Chillon Castle.</li>

      <li><strong>Day 8: Zermatt – Matterhorn Village:</strong>
        - Take the Gornergrat Railway for a view of the Matterhorn.
        - Visit the Matterhorn Museum and enjoy alpine activities.</li>

      <li><strong>Day 9: Bern – The Capital:</strong>
        - Explore the UNESCO World Heritage Old Town.
        - Visit the Zytglogge clock tower and Bear Park.</li>

      <li><strong>Day 10: Basel – Art and Culture:</strong>
        - Visit the Kunstmuseum and Basel Minster.
        - Explore the Rhine promenade and old town squares.</li>
    </ul>
  </div>
</section>

    <section id="includes">
      <div class="container">
        <h2>Best time to visit</h2>
        <ul>
          <li><strong>Summer (June to September):</strong> Ideal for hiking, sightseeing, and enjoying clear alpine views.</li>
          <li><strong>Winter (December to February):</strong> Best for skiing and experiencing snow activities in resorts like **Zermatt** and **St. Moritz**.</li>
        </ul>
      </div>
    </section>

    <!-- What's Included Section -->
    <section id="includes">
      <div class="container">
        <h2>Estimated Costs</h2>
        <ul>
          <li>Accommodation: ₹1500–₹5000 per night (depending on location and hotel class).</li>
          <li>Meals: ₹300–₹700 per day per person (local and fine dining).</li>
          <li>Transport: Trains and cable cars costing approximately ₹500–₹1500 per day.</li>
          <li>Attractions: Entry fees for mountains and museums: ₹200–₹1000.</li>
        </ul>
      </div>
    </section>

    <!-- Booking Section -->
    <section id="booking">
      <div class="container">
        <h2>Book Now</h2>
        <p>Contact us to reserve your spot on this tour.</p>
        <a href="booking.php?place_name=Switzerland&price=79000&guide_name=Raghav%20singhaniya&contact_no=9034788732" class="btn">Book Now</a>
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