<?php
?>
<a href="booking.php?place_name=Serbia&price=70000"></a>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="styles.css" />
    <title>Webb Design Mastery | Peru Tour</title>
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
        <img src="https://imgproxy.natucate.com/f5iGbm0-9si1G_xQGmZ5pd13IIc-Pg3MBakLNzjVXX0/rs:fill/g:ce/w:2684/h:1510/aHR0cHM6Ly93d3cubmF0dWNhdGUuY29tL21lZGlhL3BhZ2VzL3JlaXNlemllbGUvMTViNjk0MjYtZDYxZi00ZDhlLWI1NGEtYmY2YjgwM2E0ZWYxLzZiOTMzN2M1MWItMTY3OTQ4NjcyMC9wZXJ1LWxhZW5kZXJpbmZvcm1hdGlvbmVuLW1hY2h1LXBpY2h1LWF1c2JsaWNrLXdlaXQtbmF0dWNhdGUuanBn" alt="Peru">
      </div>
      <div class="container">
        <h2>Overview</h2>
        <p>Embark on an exciting 4-day journey through Peru, visiting the breathtaking Machu Picchu, Lima, Cusco, and the Sacred Valley.</p>
      </div>
    </section>

    <!-- Itinerary Section -->
    <section id="itinerary">
      <div class="container">
        <h2>Itinerary for 4 days tour of Peru</h2>
        <ul>
          <li><strong>Day 1: Arrival in Lima:</strong> - Explore Plaza Mayor, the Cathedral of Lima, and enjoy the Miraflores coastline.</li>
          <li><strong>Day 2: Travel to Cusco:</strong> - Visit the Sacsayhuamán Fortress, Coricancha Temple, and stroll through the San Pedro Market.</li>
          <li><strong>Day 3: Sacred Valley and Aguas Calientes:</strong> - Discover the Pisac ruins, Ollantaytambo Fortress, and head to Aguas Calientes.</li>
          <li><strong>Day 4: Machu Picchu and Departure:</strong> - Experience the majestic Machu Picchu before returning to Cusco for departure.</li>
        </ul>
      </div>
    </section>

    <!-- Best Time to Visit -->
    <section id="includes">
      <div class="container">
        <h2>Best Time to Visit</h2>
        <ul>
          <li><strong>May to September:</strong> Dry season with clear skies, ideal for trekking and sightseeing.</li>
          <li><strong>November to April:</strong> Green landscapes due to rain, but some trails may be muddy.</li>
        </ul>
      </div>
    </section>

    <!-- Estimated Costs -->
    <section id="includes">
      <div class="container">
        <h2>Estimated Costs</h2>
        <ul>
          <li>Accommodation: ₹3000–₹12000 per night (budget to luxury).</li>
          <li>Meals: ₹700–₹2500 per day per person.</li>
          <li>Transport: Flights, trains, and local transport costing ₹3000–₹10000 per day.</li>
          <li>Attractions: Entry fees for Machu Picchu, museums, and guided tours.</li>
        </ul>
      </div>
    </section>

    <!-- Booking Section -->
    <section id="booking">
      <div class="container">
        <h2>Book Now</h2>
        <p>Contact us to reserve your spot on this tour.</p>
        <a href="booking.php?place_name=Peru&price=70000&guide_name=Carlos%20Ramirez&contact_no=9876543210" class="btn">Book Now</a>
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


