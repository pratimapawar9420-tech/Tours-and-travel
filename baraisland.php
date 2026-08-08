<?php
?>
<a href="booking.php?place_name=Bara%20Bara%20Island&price=80000"></a>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="styles.css" />
    <title>Nisarg Pravasi | Bara Bara Island Tour</title>
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
        <img src="https://images.pexels.com/photos/753626/pexels-photo-753626.jpeg?cs=srgb&dl=pexels-julius-silver-240301-753626.jpg&fm=jpg" alt="Bara Bara Island">
      </div>
      <div class="container">
        <h2>Overview</h2>
        <p>Bara Bara Island, a hidden gem in the tropics, offers visitors pristine beaches, crystal-clear waters, and vibrant wildlife. A perfect getaway for nature lovers and adventure seekers.</p>
      </div>
    </section>

    <section id="itinerary">
      <div class="container">
        <h2>5-Day Itinerary for Bara Bara Island</h2>
        <ul>
          <li><strong>Day 1: Arrival & Beach Relaxation:</strong> Arrive at Bara Bara Island, check into your beachfront resort, and enjoy a relaxing day by the pristine beaches.</li>
          <li><strong>Day 2: Island Trekking & Scenic Views:</strong> Go on an island trek to explore the lush vegetation, visit secluded beaches, and capture breathtaking panoramic views.</li>
          <li><strong>Day 3: Snorkeling & Coral Reefs Exploration:</strong> Dive into the crystal-clear waters for a snorkeling adventure, exploring vibrant coral reefs and marine life.</li>
          <li><strong>Day 4: Water Sports & Fishing Tour:</strong> Try exciting water sports like kayaking, windsurfing, or paddleboarding, followed by a local fishing tour.</li>
          <li><strong>Day 5: Departure:</strong> Enjoy a final relaxing morning on the island before your departure, with a farewell lunch at the resort.</li>
        </ul>
      </div>
    </section>

    <section id="includes">
      <div class="container">
        <h2>Best Time to Visit</h2>
        <ul>
          <li><strong>November to April:</strong> Ideal weather with clear skies and warm temperatures, perfect for outdoor activities and beach relaxation.</li>
          <li><strong>May to October:</strong> Fewer tourists and lower prices for accommodation, but occasional rain showers.</li>
        </ul>
      </div>
    </section>

    <section id="costs">
      <div class="container">
        <h2>Estimated Costs</h2>
        <ul>
          <li>Accommodation: ₹1000–$250 per night (mid-range to luxury resorts).</li>
          <li>Meals: $25–$50 per day per person.</li>
          <li>Transport: Boat transfers: ~$40–$60 per trip.</li>
          <li>Attractions: ~$50–$100 (including snorkeling, fishing tours, and water sports).</li>
        </ul>
      </div>
    </section>

    <section id="booking">
      <div class="container">
        <h2>Book Now</h2>
        <p>Contact us to reserve your spot on this unforgettable tour to Bara Bara Island.</p>
        <a href="booking.php?place_name=Bara%20Bara%20Island&price=80000&guide_name=jiya%20Dokne&contact_no=9981129044" class="btn">Book Now</a>
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
