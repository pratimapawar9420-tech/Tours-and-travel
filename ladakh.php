<?php
?>
<a href="booking.php?place_name=Ladakh&price=100000"></a>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="styles.css" />
    <title>Webb Design Mastery | Ladakh Tour</title>
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
        <img src="https://media.licdn.com/dms/image/v2/C4D12AQEAnvgdQkcOMg/article-cover_image-shrink_600_2000/article-cover_image-shrink_600_2000/0/1651467488085?e=2147483647&v=beta&t=VCxRTmYJhoBZGwtFkOGjNkIopm0LUPeM9ol40cedGBo" alt="Ladakh">
      </div>
      <div class="container">
        <h2>Overview</h2>
        <p>Experience the rugged beauty of Ladakh, known for its stunning landscapes, serene monasteries, and crystal-clear lakes. This 8-day tour is perfect for adventure seekers and nature lovers looking to explore the mesmerizing charm of the Himalayas.</p>
      </div>
    </section>

    <!-- Itinerary Section -->
    <section id="itinerary">
      <div class="container">
        <h2>Itinerary for 8 days tour of Ladakh</h2>
        <ul>
          <li><strong>Day 1: Arrival in Leh:</strong>
            - Acclimatization and evening exploration of Leh market.</li>

          <li><strong>Day 2: Leh – Sham Valley:</strong>
            - Visit Magnetic Hill, Gurudwara Pathar Sahib, and Confluence of Indus & Zanskar rivers.</li>

          <li><strong>Day 3: Leh – Nubra Valley:</strong>
            - Drive through Khardung La Pass, visit Hunder sand dunes and enjoy a camel ride.</li>

          <li><strong>Day 4: Nubra Valley – Turtuk:</strong>
            - Explore the village of Turtuk near the India-Pakistan border.</li>

          <li><strong>Day 5: Nubra Valley – Pangong Lake:</strong>
            - Journey to Pangong Lake via Shyok, with an overnight stay by the lake.</li>

          <li><strong>Day 6: Pangong – Leh:</strong>
            - Return to Leh with stops at Chang La Pass and Thiksey Monastery.</li>

          <li><strong>Day 7: Leh – Hemis and Stok:</strong>
            - Explore Hemis Monastery and Stok Palace.</li>

          <li><strong>Day 8: Departure:</strong>
            - Transfer to Leh airport for your journey home.</li>
        </ul>
      </div>
    </section>

    <section id="includes">
      <div class="container">
        <h2>Best time to visit</h2>
        <ul>
          <li><strong>June to September:</strong> Ideal weather for sightseeing and adventure activities.</li>
        </ul>
      </div>
    </section>

    <!-- Estimated Costs Section -->
    <section id="includes">
      <div class="container">
        <h2>Estimated Costs</h2>
        <ul>
          <li>Accommodation: ₹600–₹2000 per night (budget to luxury).</li>
          <li>Meals: ₹150–₹400 per day per person (local cuisine and restaurants).</li>
          <li>Transport: Domestic flights or trains costing ₹500–₹1500.</li>
          <li>Attractions: Entry fees for sites like the Pyramids and Valley of the Kings.</li>
        </ul>
      </div>
    </section>

    <!-- Booking Section -->
    <section id="booking">
      <div class="container">
        <h2>Book Now</h2>
        <p>Contact us to reserve your spot on this tour.</p>
        <a href="booking.php?place_name=Ladakh&price=100000&guide_name=Isha%20Shelar&contact_no=9934776655" class="btn">Book Now</a>
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
