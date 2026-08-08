<?php
?>
<a href="booking.php?place_name=Skydiving Iceland&price=30000"></a>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="styles.css" />
    <title>Nisarg Pravasi | Iceland Adventure Tour</title>
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
        <img src="https://images.ctfassets.net/a68ipajj4t9l/5surS8u2xrRqWVWk0DXMiG/12b1eee2393a22ad37f832ee4e12bef6/Iceland_adventure_tours_header_size.jpg?w=1200&q=60" alt="Iceland Adventure">
      </div>
      <div class="container">
        <h2>Overview</h2>
        <p>Prepare for an unforgettable adventure in Iceland! This 4-day tour will take you to stunning natural landscapes, including glaciers, waterfalls, hot springs, and volcanic landscapes. From ice climbing on glaciers to exploring lava caves, this tour will immerse you in Iceland's natural wonders.</p>
      </div>
    </section>

    <section id="itinerary">
      <div class="container">
        <h2>Itinerary for 4 Days Iceland Adventure Tour</h2>
        <ul>
          <li><strong>Day 1: Arrival in Reykjavik & Golden Circle</strong> – Arrive in Reykjavik and transfer to your hotel. Explore Iceland's Golden Circle, including the Geysir geothermal area, Gullfoss waterfall, and Þingvellir National Park. End the day with a visit to the Secret Lagoon, a natural hot spring.</li>
          <li><strong>Day 2: Glacier Hike & Ice Climbing</strong> – Head to Sólheimajökull Glacier for an ice climbing and glacier hiking adventure. Learn the ropes of ice climbing and explore the breathtaking glacier formations. Later, visit Skógafoss waterfall and enjoy a scenic hike nearby.</li>
          <li><strong>Day 3: Lava Caves & Volcano Exploration</strong> – Explore Iceland's famous lava caves and take a guided tour through volcanic tunnels. Later, visit the active volcanoes of Fagradalsfjall or Hekla (depending on volcanic activity). In the evening, relax at the Blue Lagoon geothermal spa.</li>
          <li><strong>Day 4: South Coast Exploration & Departure</strong> – Visit the iconic Seljalandsfoss waterfall and the black sand beach of Reynisfjara. Explore the surrounding coastline before heading back to Reykjavik for your flight home.</li>
        </ul>
      </div>
    </section>

    <section id="includes">
      <div class="container">
        <h2>Best Time to Visit</h2>
        <ul>
          <li><strong>June to September:</strong> Ideal for warm weather, longer days, and access to outdoor activities like hiking and ice climbing.</li>
        </ul>
      </div>
    </section>

    <section id="includes">
      <div class="container">
        <h2>Estimated Costs</h2>
        <ul>
          <li>Accommodation: ₹5,000–₹15,000 per night (hotels and guesthouses).</li>
          <li>Meals: ₹1,500–₹4,000 per day per person.</li>
          <li>Glacier Hiking & Ice Climbing: ₹10,000–₹15,000 per person.</li>
          <li>Lava Cave Exploration: ₹5,000–₹8,000 per person.</li>
          <li>Blue Lagoon Entry: ₹3,000–₹6,000 per person.</li>
        </ul>
      </div>
    </section>

    <section id="booking">
      <div class="container">
        <h2>Book Now</h2>
        <p>Contact us to reserve your spot on this once-in-a-lifetime Iceland adventure.</p>
        <a href="booking.php?place_name=Iceland Adventure&price=30000&guide_name=Einar%20Bjornsson&contact_no=9876543210" class="btn">Book Now</a>
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
