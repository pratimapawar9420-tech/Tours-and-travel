<?php
?>
<a href="booking.php?place_name=Singapore&price=150000"></a>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="styles.css" />
    <title>Webb Design Mastery | Singapore Tour</title>
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
        <img src="https://images.unsplash.com/photo-1525625293386-3f8f99389edd?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8c2luZ2Fwb3JlfGVufDB8fDB8fHww" alt="Singapore">
      </div>
      <div class="container">
        <h2>Overview</h2>
        <p>Discover the vibrant city-state of Singapore over 9 days. Explore iconic landmarks, luxurious shopping malls, thrilling theme parks, and indulge in local cuisine while experiencing the mix of tradition and modernity.</p>
      </div>
    </section>

    <!-- Itinerary Section -->
    <section id="itinerary">
      
      <div class="container">
        <h2>Itinerary for 9 days tour of Singapore</h2>
        <ul>
          <li><strong>Day 1: Arrival in Singapore:</strong> - Check-in, explore Orchard Road for shopping.</li>
          <li><strong>Day 2: Marina Bay Sands & Gardens by the Bay:</strong> - Visit Marina Bay Sands SkyPark, explore Gardens by the Bay.</li>
          <li><strong>Day 3: Sentosa Island:</strong> - Spend the day at Universal Studios Singapore and S.E.A. Aquarium.</li>
          <li><strong>Day 4: Chinatown & Little India:</strong> - Visit Chinatown, Sri Mariamman Temple, and explore Little India.</li>
          <li><strong>Day 5: Singapore Zoo & Night Safari:</strong> - Experience the world-famous Singapore Zoo and enjoy a Night Safari.</li>
          <li><strong>Day 6: Sentosa Island - Adventure Cove & Dolphin Lagoon:</strong> - Fun day at Adventure Cove Waterpark and Dolphin Lagoon.</li>
          <li><strong>Day 7: Jurong Bird Park & Science Centre:</strong> - Visit Jurong Bird Park and Singapore Science Centre.</li>
          <li><strong>Day 8: Shopping and City Tour:</strong> - Explore Bugis Street, Chinatown, and enjoy shopping at VivoCity.</li>
          <li><strong>Day 9: Departure:</strong> - Leisure day and transfer to the airport.</li>
        </ul>
      </div>
    </section>

    <!-- Best Time to Visit -->
    <section id="includes">
      <div class="container">
        <h2>Best Time to Visit</h2>
        <ul>
          <li><strong>February to April:</strong> Ideal weather for outdoor activities and sightseeing.</li>
          <li><strong>July to September:</strong> Great time for shopping and festivals.</li>
        </ul>
      </div>
    </section>

    <!-- Estimated Costs -->
    <section id="includes">
      <div class="container">
        <h2>Estimated Costs</h2>
        <ul>
          <li>Accommodation: ₹800–₹2500 per night (budget to luxury).</li>
          <li>Meals: ₹200–₹500 per day per person.</li>
          <li>Transport: Private vehicle hire around ₹500–₹1000 per day.</li>
          <li>Attractions: Entry fees to Universal Studios, Gardens by the Bay, Sentosa, etc.</li>
        </ul>
      </div>
    </section>

    <!-- Booking Section -->
    <section id="booking">
      <div class="container">
        <h2>Book Now</h2>
        <p>Contact us to reserve your spot on this tour.</p>
        <a href="booking.php?place_name=Singapore&price=56000&guide_name=Tan%20Wei%20Lee&contact_no=3333543210" class="btn">Book Now</a>
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
