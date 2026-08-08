<?php
?>
<a href="booking.php?place_name=Maldives&price=50000"></a>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="styles.css" />
    <title>Nisarg Pravasi | Maldives Tour</title>
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
        <img src="https://c1.wallpaperflare.com/preview/559/761/312/malta-harbor-sunset-sky.jpg" alt="Maldives">
      </div>
      <div class="container">
        <h2>Overview</h2>
        <p>The Maldives, a tropical paradise in South Asia, is renowned for its crystal-clear waters, luxury resorts, and vibrant marine life. A perfect destination for relaxation, adventure, and exploring beautiful coral reefs.</p>
      </div>
    </section>

    <section id="itinerary">
      <div class="container">
        <h2>7-Day Itinerary for Maldives</h2>
        <ul>
          <li><strong>Day 1: Arrival & Resort Check-In:</strong> Arrive in the Maldives, transfer to your luxurious resort, and relax with a private beach view. Enjoy a welcome dinner at the resort.</li>
          <li><strong>Day 2: Snorkeling & Water Sports:</strong> Explore the vibrant coral reefs with snorkeling, and indulge in water sports like jet-skiing and paddleboarding.</li>
          <li><strong>Day 3: Dolphin Watching & Sunset Cruise:</strong> Embark on a dolphin-watching tour and enjoy a romantic sunset cruise over the Indian Ocean.</li>
          <li><strong>Day 4: Scuba Diving & Island Exploration:</strong> Go scuba diving to explore underwater life and take a boat tour to a nearby uninhabited island.</li>
          <li><strong>Day 5: Visit Local Maldivian Village & Cultural Experience:</strong> Discover the local culture by visiting a nearby island village, exploring local markets, and learning about Maldivian traditions.</li>
          <li><strong>Day 6: Spa Day & Lagoon Relaxation:</strong> Pamper yourself with a full day at the resort’s spa and relax in the pristine lagoons with clear blue water.</li>
          <li><strong>Day 7: Departure:</strong> Enjoy a final day at leisure before heading to the airport for your departure.</li>
        </ul>
      </div>
    </section>

    <section id="includes">
      <div class="container">
        <h2>Best Time to Visit</h2>
        <ul>
          <li><strong>December to April:</strong> Dry season with the best weather for beach activities and water sports.</li>
          <li><strong>May to November:</strong> Rainy season with fewer tourists and lower prices for accommodation and activities.</li>
        </ul>
      </div>
    </section>

    <section id="costs">
      <div class="container">
        <h2>Estimated Costs</h2>
        <ul>
          <li>Accommodation: $250–$500 per night (luxury resorts).</li>
          <li>Meals: $50–$100 per day per person (resort dining).</li>
          <li>Transport: Seaplane transfers: ~$300–$500, Boat transfer: ~$50 per trip.</li>
          <li>Attractions: ~$100–$250 (including snorkeling, scuba diving, and boat tours).</li>
        </ul>
      </div>
    </section>

    <section id="booking">
      <div class="container">
        <h2>Book Now</h2>
        <p>Contact us to reserve your spot on this luxurious Maldives tour.</p>
        <a href="booking.php?place_name=Maldives&price=50000&guide_name=Amy%20Lee&contact_no=1188771122" class="btn">Book Now</a>
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
