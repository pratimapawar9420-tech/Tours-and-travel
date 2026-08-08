<?php
?>
<a href="bookingmalta.php?place_name=Malta&price=70000"></a>

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
        <img src="https://i0.wp.com/www.thecravetraveler.com/wp-content/uploads/2024/07/first-time-malta-01.jpg?fit=1000%2C750&ssl=1" alt="Malta Honeymoon">
      </div>
      <div class="container">
        <h2>Overview</h2>
        <p>Malta, an enchanting Mediterranean island, is known for its stunning beaches, crystal-clear waters, rich history, and vibrant culture. With its charming streets, beautiful coastlines, and romantic ambiance, Malta is the perfect destination for couples seeking an unforgettable honeymoon experience.</p>
      </div>
    </section>

    <!-- Itinerary Section -->
    <section id="itinerary">
      <div class="container">
        <h2>Itinerary for 5 Days Malta Honeymoon</h2>
        <ul>
          <li><strong>Day 1: Arrival in Valletta:</strong> Arrive in Malta and check into your hotel in Valletta. Explore the charming streets, visit St. John's Co-Cathedral, and enjoy a romantic dinner with a view of the harbor.</li>
          <li><strong>Day 2: Gozo Island Day Trip:</strong> Take a ferry to Gozo Island. Visit the Azure Window, explore the Citadel in Victoria, and relax at Ramla Bay Beach.</li>
          <li><strong>Day 3: Blue Lagoon & Comino Island:</strong> Take a boat trip to the stunning Blue Lagoon. Enjoy swimming in the turquoise waters and relaxing on the sandy shores. Explore Comino Island's serene beauty.</li>
          <li><strong>Day 4: Mdina & Rabat Exploration:</strong> Visit the historic city of Mdina, also known as the Silent City. Explore the medieval streets and visit the St. Paul's Cathedral. Discover Rabat's ancient ruins and quiet charm.</li>
          <li><strong>Day 5: Relaxing at Mellieha Bay:</strong> Spend your final day unwinding at Mellieha Bay. Enjoy the beautiful sandy beach, and indulge in a couple's spa treatment at a luxury resort before departing.</li>
        </ul>
      </div>
    </section>

    <section id="booking">
      <div class="container">
        <h2>Book Now</h2>
        <p>Contact us to reserve your honeymoon trip to Malta.</p>
        <a href="bookinghoneymoon.php?place_name=Malta&price=70000&guide_name=Rohan%20Mehta&contact_no=9900112222" class="btn">Book Now</a>
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
