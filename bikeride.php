<?php
?>
<a href="booking.php?place_name=Leh_Bike_Ride&price=44000"></a>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="styles.css" />
    <title>Nisarg Pravasi | Leh Bike Ride Tour</title>
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
        <img src="https://dr7f10k1l6bnm.cloudfront.net/wp-content/uploads/2024/11/tips-for-ladakh-bike-rentals.jpg" alt="Leh Bike Ride">
      </div>
      <div class="container">
        <h2>Overview</h2>
        <p>Experience the thrill of biking through the rugged and picturesque terrain of Leh. On this 7-day Leh bike ride adventure, you’ll explore high mountain passes, remote villages, monasteries, and the stunning landscapes of Ladakh. Get ready for an adrenaline-filled experience with breathtaking views!</p>
      </div>
    </section>

    <section id="itinerary">
      <div class="container">
        <h2>Itinerary for 7 Days Leh Bike Ride Tour</h2>
        <ul>
          <li><strong>Day 1: Arrival in Leh</strong> – Arrive at Leh Airport and transfer to your hotel. Acclimatization to the altitude. Explore Leh Market and local attractions like Leh Palace and Shanti Stupa.</li>
          <li><strong>Day 2: Leh to Nubra Valley</strong> – Begin your bike ride towards Nubra Valley. Cross the famous Khardung La Pass, one of the highest motorable roads in the world.
Arrive in Nubra Valley, visit the sand dunes, and take a camel ride.</li>
          <li><strong>Day 3: Nubra Valley to Pangong Lake</strong> – Ride towards Pangong Lake, passing through beautiful landscapes and villages.
Arrive at the lake and enjoy its serene beauty, perfect for photography and leisure.</li>
          <li><strong>Day 4: Pangong Lake to Leh</strong> – Ride back to Leh, with a stop at the Chang La Pass.
Evening at leisure in Leh to relax and shop in the local market.</li>
          <li><strong>Day 5: Leh to Tso Moriri Lake</strong> – Begin the ride towards Tso Moriri Lake, passing through remote villages and scenic landscapes.
Enjoy the tranquil beauty of the lake and surroundings, perfect for camping under the stars.</li>
          <li><strong>Day 6: Tso Moriri Lake to Leh</strong> – Ride back to Leh via Chumathang, enjoying the scenic views of the valley and the Himalayan ranges.</li>
          <li><strong>Day 7: Departure from Leh</strong> – Explore local markets and monasteries. Transfer to Leh Airport for your flight back home.</li>
        </ul>
      </div>
    </section>

    <section id="includes">
      <div class="container">
        <h2>Best Time to Visit</h2>
        <ul>
          <li><strong>May to September:</strong> Ideal time for biking due to pleasant weather and clear roads.</li>
        </ul>
      </div>
    </section>

    <section id="includes">
      <div class="container">
        <h2>Estimated Costs</h2>
        <ul>
          <li>Accommodation: ₹2,500–₹6,000 per night (budget guesthouses & comfortable hotels).</li>
          <li>Meals: ₹500–₹1,500 per day per person.</li>
          <li>Bike Rental: ₹1,500–₹3,000 per day (depending on the bike model).</li>
          <li>Transport: ₹2,000–₹4,000 for local transport and sightseeing.</li>
        </ul>
      </div>
    </section>

    <section id="booking">
      <div class="container">
        <h2>Book Now</h2>
        <p>Contact us to reserve your spot on this exhilarating Leh bike ride adventure.</p>
        <a href="booking.php?place_name=Leh Bike Ride&price=44000&guide_name=Tenzin%20Norbu&contact_no=7896541230" class="btn">Book Now</a>
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
