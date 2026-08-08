<?php
?>
<a href="booking.php?place_name=Netherlands&price=73000"></a>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="styles.css" />
    <title>Webb Design Mastery | Netherlands Tour</title>
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
        <img src="https://media.istockphoto.com/id/937057490/photo/traditional-dutch-windmills-and-houses-near-the-canal-in-zaanstad-village-zaanse-schans.jpg?s=612x612&w=0&k=20&c=KCX_ueIYeZlqPwJB8gHke2Mvd81eEcuSN_w9KjpG2EI=" alt="Netherlands">
      </div>
      <div class="container">
        <h2>Overview</h2>
        <p>Discover the charm of the Netherlands, from historic canals to vibrant tulip fields, in this exciting 4-day tour.</p>
      </div>
    </section>

    <!-- Itinerary Section -->
    <section id="itinerary">
      <div class="container">
        <h2>Itinerary for 4 days tour of Netherlands</h2>
        <ul>
          <li><strong>Day 1: Arrival in Amsterdam:</strong> - Explore the canals, visit the Anne Frank House, and enjoy a canal cruise.</li>
          <li><strong>Day 2: Zaanse Schans and Volendam:</strong> - Discover traditional windmills, cheese farms, and Dutch culture.</li>
          <li><strong>Day 3: Keukenhof Gardens and The Hague:</strong> - Experience stunning tulip fields and visit government landmarks.</li>
          <li><strong>Day 4: Rotterdam and Departure:</strong> - Explore the modern architecture and bustling port before departure.</li>
        </ul>
      </div>
    </section>

    <!-- Best Time to Visit -->
    <section id="includes">
      <div class="container">
        <h2>Best Time to Visit</h2>
        <ul>
          <li><strong>April to May:</strong> Best time to see the tulip fields in full bloom.</li>
          <li><strong>June to September:</strong> Ideal for exploring the cities and outdoor activities.</li>
        </ul>
      </div>
    </section>

    <!-- Estimated Costs -->
    <section id="includes">
      <div class="container">
        <h2>Estimated Costs</h2>
        
        <ul>
          <li>Accommodation: ₹500–₹2000 per night (budget to luxury).</li>
          <li>Meals: ₹200–$600 per day per person.</li>
          <li>Transport: Private tours and Nile cruises costing ₹1000–₹5000.</li>
          <li>Attractions: Entry fees to pyramids, museums, and temples.</li>
        </ul>
      </div>
    </section>

    <!-- Booking Section -->
    <section id="booking">
      <div class="container">
        <h2>Book Now</h2>
        <p>Contact us to reserve your spot on this tour.</p>
        <a href="booking.php?place_name=Netherlands&price=73000&guide_name=Johan%20van%20Dijk&contact_no=4599543210" class="btn">Book Now</a>
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


