<?php
?>
<a href="booking.php?place_name=Cappadocia Adventure&price=90000"></a>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="styles.css" />
    <title>Nisarg Pravasi | Cappadocia Adventure Tour</title>
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
        <img src="https://media.istockphoto.com/id/1484200613/photo/aerial-view-of-a-fleet-of-hot-air-balloons-in-cappadocia-turkey.jpg?s=612x612&w=0&k=20&c=AmLVjztB0kTPgd15XNMYDOR4XWFsEn-tiPsYq_B93so=" alt="Cappadocia Adventure">
      </div>
      <div class="container">
        <h2>Overview</h2>
        <p>Experience the thrill of Cappadocia's unique landscape on a 6-day adventure tour. From hot air balloon rides to paragliding, explore the surreal terrain, ancient cave dwellings, and indulge in unforgettable outdoor activities.</p>
      </div>
    </section>

    <section id="itinerary">
      <div class="container">
        <h2>Itinerary for 6 Days Cappadocia Adventure Tour</h2>
        <ul>
          <li><strong>Day 1: Arrival in Cappadocia & Göreme Exploration</strong> – Arrival at Kayseri or Nevşehir Airport. Check-in at a cave hotel in Göreme.
Explore Göreme Open-Air Museum, fairy chimneys, and Pasabag Valley.
Evening free to relax or explore the local markets.</li>
          <li><strong>Day 2: Hot Air Balloon Ride & Paragliding</strong> – Early morning hot air balloon ride over the stunning landscapes of Cappadocia.
Post-breakfast, experience paragliding over the beautiful valleys of the region.
Visit the Red Valley and Cavusin Village in the afternoon.</li>
          <li><strong>Day 3: Hiking through Ihlara Valley & Derinkuyu Underground City</strong> – Hike through the lush Ihlara Valley, exploring cave churches and beautiful scenery.
Visit the Derinkuyu Underground City, one of the largest and deepest underground cities in Cappadocia.</li>
          <li><strong>Day 4: ATV Ride & Sunset View</strong> – Take an exciting ATV ride through the rugged terrain of Cappadocia, visiting Love Valley and Devrent Valley.
In the evening, enjoy a stunning sunset view from Uchisar Castle.</li>
          <li><strong>Day 5: Horseback Riding & Avanos Pottery Workshop</strong> – Experience a horseback riding tour through the beautiful valleys of Cappadocia.
Visit the town of Avanos for a pottery workshop, learning the ancient craft of pottery making.</li>
          <li><strong>Day 6: Departure</strong> – Free day for shopping and leisure activities.
Transfer to the airport for your flight back home.</li>
        </ul>
      </div>
    </section>

    <section id="includes">
      <div class="container">
        <h2>Best Time to Visit</h2>
        <ul>
          <li><strong>April to June:</strong> Perfect weather for outdoor activities and paragliding.</li>
          <li><strong>September to October:</strong> Ideal for hot air balloon rides and hiking.</li>
        </ul>
      </div>
    </section>

    <section id="includes">
      <div class="container">
        <h2>Estimated Costs</h2>
        <ul>
          <li>Accommodation: ₹4,000–₹10,000 per night (cave hotels and boutique resorts).</li>
          <li>Meals: ₹1,000–₹2,000 per day per person.</li>
          <li>Transport: ₹3,000–₹6,000 per day (private cab/van for sightseeing and airport transfers).</li>
          <li>Activities: ₹4,000–₹10,000 per person (hot air balloon ride, paragliding, ATV, etc.).</li>
        </ul>
      </div>
    </section>

    <section id="booking">
      <div class="container">
        <h2>Book Now</h2>
        <p>Contact us to reserve your spot on this thrilling Cappadocia adventure tour.</p>
        <a href="booking.php?place_name=Cappadocia Adventure&price=90000&guide_name=Ahmet%20Kaya&contact_no=5348765432" class="btn">Book Now</a>
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
