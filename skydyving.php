<?php
?>
<a href="booking.php?place_name=Skydiving Dubai&price=44000"></a>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="styles.css" />
    <title>Nisarg Pravasi | Skydiving Dubai Tour</title>
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
        <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/80/96/cc/caption.jpg?w=1200&h=-1&s=1" alt="Skydiving Dubai">
      </div>
      <div class="container">
        <h2>Overview</h2>
        <p>Get ready for the thrill of a lifetime with a skydiving adventure in Dubai! This 3-day adventure tour will take you to iconic locations like the Palm Jumeirah, Desert Skydive, and Skydive Dubai drop zones. Experience the breathtaking views of the city and desert from thousands of feet above ground!</p>
      </div>
    </section>

    <section id="itinerary">
      <div class="container">
        <h2>Itinerary for 3 Days Skydiving Dubai Tour</h2>
        <ul>
          <li><strong>Day 1: Arrival in Dubai & Desert Safari</strong> – Arrive in Dubai and transfer to your hotel. Relax and unwind from your journey. In the afternoon, enjoy a thrilling desert safari experience, with dune bashing, camel riding, and a traditional Arabian dinner under the stars.</li>
          <li><strong>Day 2: Skydiving over Palm Jumeirah</strong> – Start your day with an adrenaline-pumping tandem skydive over the iconic Palm Jumeirah. After your jump, enjoy some leisure time to explore the city, visit Burj Khalifa, or shop in luxury malls.</li>
          <li><strong>Day 3: Desert Skydiving & Departure</strong> – Head to the desert for a stunning skydive over the vast sand dunes. Afterward, return to your hotel and prepare for your flight back home.</li>
        </ul>
      </div>
    </section>

    <section id="includes">
      <div class="container">
        <h2>Best Time to Visit</h2>
        <ul>
          <li><strong>November to March:</strong> Ideal for pleasant weather and outdoor adventure activities.</li>
        </ul>
      </div>
    </section>

    <section id="includes">
      <div class="container">
        <h2>Estimated Costs</h2>
        <ul>
          <li>Accommodation: ₹3,500–₹10,000 per night (luxury hotels and resorts).</li>
          <li>Meals: ₹1,000–₹3,000 per day per person.</li>
          <li>Skydiving: ₹25,000–₹35,000 per person (depending on the package selected).</li>
          <li>Desert Safari: ₹2,000–₹4,000 per person.</li>
        </ul>
      </div>
    </section>

    <section id="booking">
      <div class="container">
        <h2>Book Now</h2>
        <p>Contact us to reserve your spot on this unforgettable skydiving adventure in Dubai.</p>
        <a href="booking.php?place_name=Skydiving Dubai&price=44000&guide_name=Ahmed%20Al%20Farsi&contact_no=7896543210" class="btn">Book Now</a>
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
