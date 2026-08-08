<?php
?>
<a href="booking.php?place_name=Canada&price=89000"></a>

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
        <img src="https://cdn.hswstatic.com/gif/gettyimages-615764386-toronto.jpg" alt="Canada Nature">
      </div>
      <div class="container">
        <h2>Overview</h2>
        <p>Canada, known for its breathtaking landscapes, vibrant cities, and rich cultural heritage, is a diverse and captivating destination. From the majestic Rocky Mountains and pristine lakes to cosmopolitan hubs like Toronto and Vancouver, Canada offers a perfect blend of natural beauty and urban charm. Visitors can enjoy outdoor adventures, world-class museums, and delicious cuisine across this vast and welcoming country.</p>
      </div>
    </section>

    <!-- Itinerary Section -->
    <section id="itinerary">
  <div class="container">
    <h2>Itinerary for 10 days tour of Canada</h2>
    <ul>
      <li><strong>Day 1: Arrival in Toronto:</strong>
        - Explore the CN Tower and waterfront.
        - Visit the Royal Ontario Museum and Distillery District.</li>

      <li><strong>Day 2: Niagara Falls:</strong>
        - Witness the power of Horseshoe Falls.
        - Take a boat tour on the Niagara River.</li>

      <li><strong>Day 3: Ottawa – The Capital City:</strong>
        - Tour Parliament Hill.
        - Visit the National Gallery of Canada and Rideau Canal.</li>

      <li><strong>Day 4: Montreal – French-Canadian Charm:</strong>
        - Explore Old Montreal and Notre-Dame Basilica.
        - Enjoy local cuisine in Little Italy.</li>

      <li><strong>Day 5: Quebec City – A Step Back in Time:</strong>
        - Visit the historic Old Quebec and Château Frontenac.
        - Walk along the Dufferin Terrace.</li>

      <li><strong>Day 6: Banff National Park:</strong>
        - Discover Lake Louise and Moraine Lake.
        - Hike in the Canadian Rockies.</li>

      <li><strong>Day 7: Jasper National Park:</strong>
        - Take a scenic drive along the Icefields Parkway.
        - Experience the Athabasca Glacier.</li>

      <li><strong>Day 8: Vancouver – Coastal Beauty:</strong>
        - Walk through Stanley Park and Granville Island.
        - Visit the Vancouver Aquarium.</li>

      <li><strong>Day 9: Victoria – Gardens and Heritage:</strong>
        - Tour the Butchart Gardens.
        - Explore the Royal BC Museum and Inner Harbour.</li>

      <li><strong>Day 10: Whistler – Outdoor Adventure:</strong>
        - Take the Peak 2 Peak Gondola.
        - Enjoy zip-lining and mountain biking.</li>
    </ul>
  </div>
</section>

    <section id="includes">
      <div class="container">
        <h2>Best time to visit</h2>
        <ul>
          <li><strong>Summer (June to September):</strong> Ideal for hiking, sightseeing, and enjoying mild weather across cities and national parks.</li>
          <li><strong>Winter (December to February):</strong> Perfect for skiing and snowboarding in resorts like Whistler and Banff.</li>
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
        <a href="booking.php?place_name=Canada&price=80000&guide_name=Sayli%20patil&contact_no=9034788732" class="btn">Book Now</a>
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
