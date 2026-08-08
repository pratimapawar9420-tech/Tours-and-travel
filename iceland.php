<?php
?>
<a href="booking.php?place_name=Iceland&price=40000"></a>

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
        <img src="https://images.ctfassets.net/a68ipajj4t9l/Fw4zQtjrEzcUED9aXWJqL/c6728661bbffca41a5abadd9e5ab115f/Seljalandsfoss_waterfall_header.JPG?w=1200&q=60" alt="Iceland Landscape">
      </div>
      <div class="container">
        <h2>Overview</h2>
        <p>Iceland, a land of fire and ice, is renowned for its dramatic landscapes featuring volcanoes, geysers, hot springs, and lava fields. Its natural beauty includes glaciers, black sand beaches, and the magical Northern Lights.</p>
      </div>
    </section>

    <section id="itinerary">
      <div class="container">
        <h2>Itinerary for 11 Days Tour of Iceland</h2>
        <ul>
          <li><strong>Day 1: Arrival in Reykjavik:</strong> Explore the capital city and visit the iconic Hallgrímskirkja church.</li>
          <li><strong>Day 2: Golden Circle:</strong> Visit Þingvellir National Park, Gullfoss Waterfall, and the Strokkur Geyser.</li>
          <li><strong>Day 3: South Coast:</strong> Discover Seljalandsfoss and Skógafoss waterfalls, and the black sand beach of Reynisfjara.</li>
          <li><strong>Day 4: Jökulsárlón Glacier Lagoon:</strong> Witness floating icebergs and Diamond Beach.</li>
          <li><strong>Day 5: Vatnajökull National Park:</strong> Experience glacier hiking and ice caves.</li>
          <li><strong>Day 6: East Fjords:</strong> Enjoy scenic drives through picturesque fjords.</li>
          
        </ul>
      </div>
    </section>

    <section id="includes">
      <div class="container">
        <h2>Best time to visit</h2>
        <ul>
          <li><strong>June to August:</strong> Midnight sun and mild weather for outdoor activities.</li>
          <li><strong>September to April:</strong> Best season for Northern Lights.</li>
        </ul>
      </div>
    </section>

    <section id="includes">
      <div class="container">
        <h2>Estimated Costs</h2>
        <ul>
          <li>Accommodation: ₹1000–₹4000 per night.</li>
          <li>Meals: ₹400–₹1000 per day per person.</li>
          <li>Transport: ₹600–₹1500 per day.</li>
          <li>Attractions: ₹250–₹2000 for safaris and excursions.</li>
        </ul>
      </div>
    </section>

    <section id="booking">
      <div class="container">
        <h2>Book Now</h2>
        <p>Contact us to reserve your spot on this tour.</p>
        <a href="booking.php?place_name=Iceland&price=40000&guide_name=Pradnya%20Pawar&contact_no=9784788732" class="btn">Book Now</a>
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
      }

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
