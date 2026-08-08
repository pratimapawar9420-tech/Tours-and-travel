<?php
?>
<a href="booking.php?place_name=Red_Fort&price=1700"></a>

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
        <img src="https://images.pexels.com/photos/12446112/pexels-photo-12446112.jpeg?cs=srgb&dl=pexels-laura-barragan-247861147-12446112.jpg&fm=jpg" alt="Red Fort">
      </div>
      <div class="container">
        <h2>Overview</h2>
        <p>The **Red Fort**, also known as **Lal Qila**, is a historical fortification located in the city of Delhi, India. It served as the main residence of the Mughal emperors for around 200 years, from the mid-17th century until the British colonial period. The fort is a UNESCO World Heritage site and is considered one of the finest examples of Mughal architecture. With its imposing red sandstone walls, intricate carvings, and grand structures, the Red Fort stands as a symbol of India's rich history and cultural heritage. It is one of the most popular tourist destinations in Delhi.</p>
      </div>
    </section>

    <!-- Itinerary Section -->
    <section id="itinerary">
      <div class="container">
        <h2>Itinerary for Red Fort Tour</h2>
        <ul>
          <li><strong>Day 1: Arrival in Delhi:</strong> Arrive in Delhi and check into your hotel. Relax and prepare for your visit to the Red Fort.</li>
          <li><strong>9:00 AM – Visit Red Fort:</strong> Start your day with a visit to the magnificent Red Fort. Explore the various sections, including the Diwan-i-Aam, Diwan-i-Khas, and the Rang Mahal.</li>
          <li><strong>11:00 AM – Explore the Museums:</strong> Inside the fort, visit the **Red Fort Museum** and the **Archaeological Museum**, which display artifacts from India's Mughal era.</li>
          <li><strong>1:00 PM – Lunch at a Local Restaurant:</strong> Enjoy a traditional meal at a local restaurant in Old Delhi.</li>
          <li><strong>3:00 PM – Visit Jama Masjid:</strong> After lunch, visit the nearby **Jama Masjid**, one of the largest mosques in India.</li>
          <li><strong>5:00 PM – Attend the Sound and Light Show:</strong> Return to the Red Fort in the evening to witness the **Sound and Light Show** that narrates the history of the fort.</li>
        </ul>
      </div>
    </section>

    <section id="includes">
      <div class="container">
        <h2>Best Time to Visit</h2>
        <ul>
          <li><strong>Winter (October to March):</strong> The best time to visit the Red Fort is during the winter months when the weather is cool and pleasant.</li>
          <li><strong>Summer (April to June):</strong> The temperature can be extremely hot, making the visit less comfortable. It is advisable to visit early in the morning or late in the evening.</li>
          <li><strong>Monsoon (July to September):</strong> While the weather is cooler, the monsoon rains can cause disruptions in travel plans.</li>
        </ul>
      </div>
    </section>

    <!-- What's Included Section -->
    <section id="includes">
      <div class="container">
        <h2>Estimated Costs</h2>
        <ul>
          <li>Entry Fee for Red Fort: ₹35 (Indian Citizens), ₹550 (Foreign Tourists).</li>
          <li>Sound and Light Show Ticket: ₹60 (Indian Citizens), ₹100 (Foreign Tourists).</li>
          <li>Meals: ₹200–₹500 per person at local restaurants.</li>
          <li>Transport (if needed): ₹300–₹600 for local taxis or private car hire for the day.</li>
        </ul>
      </div>
    </section>

    <!-- Booking Section -->
    <section id="booking">
      <div class="container">
        <h2>Book Now</h2>
        <p>Contact us to reserve your spot on this historical tour of the Red Fort.</p>
        <a href="booking.php?place_name=Red_Fort&price=1700&guide_name=Amit%20Kumari&contact_no=6676543210" class="btn">Book Now</a>
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
