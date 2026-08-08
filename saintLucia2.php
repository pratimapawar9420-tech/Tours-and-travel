<?php
?>
<a href="booking.php?place_name=Saint Lucia&price=88000"></a>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="styles.css" />
    <title>Webb Design Mastery | Saint Lucia Tour</title>
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
        <img src="https://www.stlucia.org/wp-content/uploads/2018/06/St-Lucia-Caribbean-Sea.jpg" alt="Saint Lucia">
      </div>
      <div class="container">
        <h2>Overview</h2>
        <p>Experience the tropical paradise of Saint Lucia on this 4-day tour. From stunning beaches to volcanic peaks, explore the natural beauty and vibrant culture of this Caribbean gem.</p>
      </div>
    </section>

    <!-- Itinerary Section -->
    <section id="itinerary">
      <div class="container">
        <h2>Itinerary for 4 days tour of Saint Lucia</h2>
        <ul>
          <li><strong>Day 1: Arrival in Castries:</strong> - Explore the capital city, visit local markets, and relax on Reduit Beach.</li>
          <li><strong>Day 2: Soufrière and Pitons:</strong> - Discover the majestic Piton mountains, Sulphur Springs, and Diamond Falls.</li>
          <li><strong>Day 3: Snorkeling and Pigeon Island:</strong> - Enjoy a snorkeling adventure and explore the historic Pigeon Island National Park.</li>
          <li><strong>Day 4: Marigot Bay and Departure:</strong> - Visit the picturesque Marigot Bay and enjoy a farewell lunch before departure.</li>
        </ul>
      </div>
    </section>

    <!-- Best Time to Visit -->
    <section id="includes">
      <div class="container">
        <h2>Best Time to Visit</h2>
        <ul>
          <li><strong>December to April:</strong> Peak season with perfect beach weather.</li>
          <li><strong>May to June:</strong> Fewer crowds and great hotel deals.</li>
        </ul>
      </div>
    </section>

    <!-- Estimated Costs -->
    <section id="includes">
      <div class="container">
        <h2>Estimated Costs</h2>
       
        <ul>
          <li>Accommodation:  ₹100– ₹5000 per night (budget to luxury).</li>
          <li>Meals:  ₹300– ₹1000 per day per person.</li>
          <li>Transport: Metro, domestic flights, and car rentals.</li>
          <li>Attractions: Entry fees for national parks, museums, and historical sites.</li>
        </ul>
      </div>
    </section>

    <!-- Booking Section -->
    <section id="booking">
      <div class="container">
        <h2>Book Now</h2>
        <p>Contact us to reserve your spot on this tour.</p>
        <a href="booking.php?place_name=Saint Lucia&price=88000&guide_name=Daniel%20Jean&contact_no=4599543210" class="btn">Book Now</a>
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


