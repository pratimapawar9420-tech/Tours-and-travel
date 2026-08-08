<?php
?>
<a href="booking.php?place_name=GatewayofIndia&price=1900"></a>

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
        <img src="https://live.staticflickr.com/3852/14309625769_30a5da1716_b.jpg" alt="Gateway of India">
      </div>
      <div class="container">
        <h2>Overview</h2>
        <p>The **Gateway of India** is an iconic monument located in Mumbai, India. It was built during the 20th century to commemorate the visit of King George V and Queen Mary to India in 1911. The structure is a blend of Hindu and Muslim architectural styles and has served as the departure point for the last British troops to leave India in 1948, marking the end of British rule. It stands as a symbol of India's independence and is one of the most popular tourist attractions in Mumbai.</p>
      </div>
    </section>

    <!-- Itinerary Section -->
    <section id="itinerary">
      <div class="container">
        <h2>Itinerary for Gateway of India Tour</h2>
        <ul>
          <li><strong>Day 1: Arrival in Mumbai:</strong> Arrive in Mumbai and check into your hotel. Relax and prepare for your visit to the Gateway of India.</li>
          <li><strong>9:00 AM – Visit Gateway of India:</strong> Start your day with a visit to the iconic Gateway of India, exploring its grandeur and learning about its historical significance.</li>
          <li><strong>11:00 AM – Visit Elephanta Caves:</strong> Take a ferry ride from the Gateway of India to Elephanta Island to visit the ancient Elephanta Caves, a UNESCO World Heritage Site.</li>
          <li><strong>1:00 PM – Lunch at a Local Restaurant:</strong> Enjoy a traditional meal at one of Mumbai’s famous restaurants with a view of the Arabian Sea.</li>
          <li><strong>3:00 PM – Visit Chhatrapati Shivaji Maharaj Vastu Sangrahalaya (formerly the Prince of Wales Museum):</strong> Explore the museum and its impressive collection of sculptures, artifacts, and exhibits.</li>
          <li><strong>5:00 PM – Visit Colaba Causeway:</strong> End the day by shopping at the bustling Colaba Causeway, known for its vibrant markets and local souvenirs.</li>
        </ul>
      </div>
    </section>

    <section id="includes">
      <div class="container">
        <h2>Best Time to Visit</h2>
        <ul>
          <li><strong>Winter (November to February):</strong> This is the best time to visit Mumbai, as the weather is cool and pleasant for sightseeing.</li>
          <li><strong>Summer (March to June):</strong> The weather is hot and humid, but this is a great time to avoid the crowds.</li>
          <li><strong>Monsoon (July to October):</strong> While the monsoon season brings lush greenery, it might affect your sightseeing due to rain.</li>
        </ul>
      </div>
    </section>
    <!-- What's Included Section -->
    <section id="includes">
      <div class="container">
        <h2>Estimated Costs</h2>
        <ul>
          <li>Entry Fee for Gateway of India: Free to visit (Note: Fees for ferry rides to Elephanta Caves apply).</li>
          <li>Entry Fee for Elephanta Caves: ₹250 per person (Indian residents), ₹500 per person (foreign tourists).</li>
          <li>Meals: ₹300–₹700 per person at local restaurants.</li>
          <li>Transport (if needed): ₹400–₹800 for taxi or private car hire for the day.</li>
        </ul>
      </div>
    </section>

    <!-- Booking Section -->
    <section id="booking">
      <div class="container">
        <h2>Book Now</h2>
        <p>Contact us to reserve your spot on this exciting tour.</p>
        <a href="booking.php?place_name=GatewayofIndia&price=1900&guide_name=Ridhi%20Pawar&contact_no=3376543210" class="btn">Book Now</a>
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
