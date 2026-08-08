<?php
?>
<a href="booking.php?place_name=Edinburgh&price=134000"></a>

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
        <img src="https://www.telegraph.co.uk/content/dam/Travel/2021/GettyImages-1207467401.jpg?imwidth=680" alt="Edinburgh">
      </div>
      <div class="container">
        <h2>Overview</h2>
        <p> Edinburgh, the capital of Scotland, is a city rich in history, culture, and stunning landscapes. From its medieval Old Town to the neoclassical New Town, it offers a perfect blend of ancient and modern charm. The city is famous for its historic sites, breathtaking castles, lively festivals, and warm hospitality.</p>
      </div>
    </section>

    <!-- Itinerary Section -->
    <section id="itinerary">
      <div class="container">
        <h2>Itinerary for 10 days tour of Edinburgh</h2>
        <ul>
          <li><strong>Day 1: Arrival & Exploration:</strong> Arrive in Edinburgh and explore the Old Town, Royal Mile, and Grassmarket.</li>
          <li><strong>Day 2: Edinburgh Castle & Museums:</strong> Visit Edinburgh Castle, National Museum of Scotland, and St. Giles' Cathedral.</li>
          <li><strong>Day 3: Arthur’s Seat & Holyrood Palace:</strong> Hike up Arthur’s Seat for panoramic views and visit Holyrood Palace.</li>
          <li><strong>Day 4: New Town & Shopping:</strong> Stroll through Princes Street, George Street, and enjoy local shopping.</li>
          <li><strong>Day 5: Day Trip to Stirling:</strong> Visit Stirling Castle, Wallace Monument, and learn about Scotland's history.</li>
          <li><strong>Day 6: Rosslyn Chapel & Scottish Borders:</strong> Explore Rosslyn Chapel and take a scenic drive through the Scottish Borders.</li>
          <li><strong>Day 7: Leith & Royal Yacht Britannia:</strong> Discover Leith’s waterfront and visit the Royal Yacht Britannia.</li>
          <li><strong>Day 8: Whisky Tasting & Scottish Highlands:</strong> Experience whisky tasting and a tour of the Highlands.</li>
          <li><strong>Day 9: Dean Village & Botanic Gardens:</strong> Walk through picturesque Dean Village and visit the Royal Botanic Garden.</li>
          <li><strong>Day 10: Departure:</strong> Enjoy a relaxed morning before departure.</li>
        </ul>
      </div>
    </section>

    <section id="includes">
      <div class="container">
        <h2>Best time to visit</h2>
        <ul>
          <li><strong>Spring & Summer (April to August):</strong> Best for sightseeing, festivals, and pleasant weather.</li>
          <li><strong>Winter (November to February):</strong> Great for Christmas markets and cozy Scottish experiences.</li>
        </ul>
      </div>
    </section>

    <!-- Estimated Costs Section -->
    <section id="includes">
      <div class="container">
        <h2>Estimated Costs</h2>
        <ul>
          <li>Accommodation: ₹1200–₹1800 per night (mid-range hotels).</li>
          <li>Meals: ₹300–₹500 per day per person.</li>
          <li>Transport: Local transport: ~₹100 per day, Day trips: ~₹500–₹1000.</li>
          <li>Attractions: ~₹500–₹1200 (depending on choices).</li>
        </ul>
      </div>
    </section>

    <!-- Booking Section -->
    <section id="booking">
      <div class="container">
        <h2>Book Now</h2>
        <p>Contact us to reserve your spot on this tour.</p>
        <a href="booking.php?place_name=Edinburgh&price=134000&guide_name=James%20McGregor&contact_no=9900278222" class="btn">Book Now</a>
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
