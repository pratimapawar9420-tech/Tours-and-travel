<?php
?>
<a href="booking.php?place_name=Bhopal&price=56000"></a>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="styles.css" />
    <title>Webb Design Mastery | Madhya Pradesh Tour</title>
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
        <img src="https://cdn.elebase.io/173fe953-8a63-4a8a-8ca3-1bacb56d78a5/870c46f5-fcab-4169-9dd2-596770d444b0-bhopalheritage-gallery-03-michaelturtle.jpg?w=1000&h=500&fit=crop&q=75" alt="Madhya Pradesh Tour">
      </div>
      <div class="container">
        <h2>Overview</h2>
        <p>Embark on a cultural and historical journey through Madhya Pradesh, the heart of India. This 4-day tour includes iconic destinations like Sanchi Stupa, Khajuraho Temples, and the serene beauty of Pachmarhi hill station.</p>
      </div>
    </section>

    <!-- Itinerary Section -->
    <section id="itinerary">
      <div class="container">
        <h2>Itinerary for 4 days tour of Madhya Pradesh</h2>
        <ul>
          <li><strong>Day 1: Arrival in Bhopal:</strong>
            - Visit the historic Sanchi Stupa and the Bhimbetka Rock Shelters. Explore the vibrant local markets in the evening.</li>

          <li><strong>Day 2: Khajuraho Temples:</strong>
            - Travel to Khajuraho. Visit the UNESCO World Heritage Sites - the Western and Eastern group of temples known for their intricate sculptures.</li>

          <li><strong>Day 3: Pachmarhi Hill Station:</strong>
            - Relax amidst nature at Pachmarhi. Explore Bee Falls, Jata Shankar Caves, and enjoy a scenic sunset at Dhupgarh.</li>

          <li><strong>Day 4: Departure from Bhopal:</strong>
            - Visit Upper Lake in Bhopal for a morning boat ride. Shopping for handicrafts and souvenirs before departure.</li>
        </ul>
      </div>
    </section>

    <section id="includes">
      <div class="container">
        <h2>Best time to visit</h2>
        <ul>
          <li><strong>October to March:</strong> Perfect weather to explore the rich history and natural beauty of Madhya Pradesh.</li>
        </ul>
      </div>
    </section>

    <!-- Estimated Costs Section -->
    <section id="includes">
      <div class="container">
        <h2>Estimated Costs</h2>
        <ul>
          <li>Accommodation: ₹2,000–₹5,000 per night (budget to premium).</li>
          <li>Meals: ₹500–₹1,000 per day per person (local and multi-cuisine options).</li>
          <li>Transport: Private taxis or tour buses costing ₹1,000–₹2,500 per day.</li>
          <li>Attractions: Entry fees for temples, parks, and boat rides.</li>
        </ul>
      </div>
    </section>

    <!-- Booking Section -->
    <section id="booking">
      <div class="container">
        <h2>Book Now</h2>
        <p>Contact us to reserve your spot on this tour.</p>
        <a href="booking.php?place_name=Bhopal&price=56000&guide_name=Chandu%20Ramvan&contact_no=8923116789" class="btn">Book Now</a>
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
