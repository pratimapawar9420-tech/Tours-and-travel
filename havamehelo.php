<?php
?>
<a href="booking.php?place_name=Hava_Mahal&price=2000"></a>

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
        <img src="https://images.pexels.com/photos/6440428/pexels-photo-6440428.jpeg?cs=srgb&dl=pexels-ankurbagai-6440428.jpg&fm=jpg" alt="Hava Mahal">
      </div>
      <div class="container">
        <h2>Overview</h2>
        <p>Hawa Mahal, also known as the "Palace of Winds", is one of the most iconic landmarks in Jaipur, Rajasthan. Famous for its unique honeycomb-like structure, the palace has 953 small windows that allowed royal ladies to observe the street life without being seen. It's an architectural marvel, built in 1799 by Maharaja Sawai Pratap Singh, designed to resemble the crown of Lord Krishna.</p>
      </div>
    </section>

    <!-- Itinerary Section -->
    <section id="itinerary">
      <div class="container">
        <h2>Itinerary for Hawa Mahal Tour</h2>
        <ul>
          <li><strong>Day 1: Arrival at Hawa Mahal:</strong> Start your visit by marveling at the grandeur of the Hawa Mahal and its intricate façade.</li>
          <li><strong>10:00 AM – Guided Tour of the Palace:</strong> Explore the history and architecture of the palace, including the unique windows and the royal rooms.</li>
          <li><strong>12:00 PM – Visit to the Museum:</strong> Discover artifacts and exhibits showcasing the history of Rajasthan and the royal families.</li>
          <li><strong>1:00 PM – Lunch at Local Restaurant:</strong> Enjoy traditional Rajasthani dishes like dal baati churma or gatte ki sabzi at a nearby restaurant.</li>
          <li><strong>2:00 PM – Rooftop View:</strong> Enjoy a spectacular view of Jaipur from the rooftop of the Hawa Mahal.</li>
          <li><strong>3:00 PM – Photography & Leisure Time:</strong> Capture the beauty of the palace and its surroundings, or simply relax and enjoy the historical ambiance.</li>
          <li><strong>4:00 PM – Departure:</strong> Conclude the tour with memorable photos and an appreciation for the stunning architecture of the Hawa Mahal.</li>
        </ul>
      </div>
    </section>

    <section id="includes">
      <div class="container">
        <h2>Best Time to Visit</h2>
        <ul>
          <li><strong>Winter (November to February):</strong> The weather is cool and pleasant, perfect for sightseeing.</li>
          <li><strong>Monsoon (July to September):</strong> The monsoon season brings out the lush surroundings, offering a beautiful view of the palace.</li>
        </ul>
      </div>
    </section>
    <!-- What's Included Section -->
    <section id="includes">
      <div class="container">
        <h2>Estimated Costs</h2>
        <ul>
          <li>Entry Fee: ₹50 for Indian citizens, ₹200 for foreign nationals.</li>
          <li>Meals: ₹200–₹500 per person at local restaurants.</li>
          <li>Transport: Local transport in Jaipur: ₹100–₹300 per person (depending on travel mode).</li>
        </ul>
      </div>
    </section>

    <!-- Booking Section -->
    <section id="booking">
      <div class="container">
        <h2>Book Now</h2>
        <p>Contact us to reserve your spot on this tour.</p>
        <a href="booking.php?place_name=Hawa_Mahal&price=2000&guide_name=Ravi%20Singh&contact_no=9900222883" class="btn">Book Now</a>
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
