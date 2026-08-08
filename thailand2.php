<?php
?>
<a href="booking.php?place_name=Thailand&price=240000"></a>

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
        <img src="https://cdn.tourradar.com/s3/serp/original/4600_t8afNwa2.jpg" alt="Thailand Beaches">
      </div>
      <div class="container">
        <h2>Overview</h2>
        <p>Thailand, a tropical paradise known for its stunning beaches, ornate temples, and vibrant street markets, offers an enchanting mix of cultural experiences and natural beauty. Explore the bustling streets of Bangkok, relax on the idyllic islands, and discover ancient ruins in the north.</p>
      </div>
    </section>

    <section id="itinerary">
      <div class="container">
        <h2>Itinerary for 11 Days Tour of Thailand</h2>
        <ul>
          <li><strong>Day 1: Arrival in Bangkok:</strong> Enjoy a city tour covering the Grand Palace and Wat Phra Kaew, followed by a relaxing dinner cruise.</li>
          <li><strong>Day 2: Ayutthaya:</strong> Visit the historic city of Ayutthaya, a UNESCO World Heritage Site, and explore ancient temples and ruins.</li>
          <li><strong>Day 3: Chiang Mai:</strong> Fly to Chiang Mai for a cultural tour and experience its famous night markets.</li>
          <li><strong>Day 4: Doi Suthep and Temples:</strong> Explore Doi Suthep Temple with panoramic views and visit local craft villages.</li>
          <li><strong>Day 5: Phuket:</strong> Travel to Phuket for leisure at Patong Beach and a city tour.</li>
          <li><strong>Day 6: Phi Phi Islands:</strong> Embark on a boat trip to discover the beauty of Maya Bay and surrounding islands.</li>
          <li><strong>Day 7: Krabi:</strong> Enjoy a relaxing day exploring Railay Beach and the limestone cliffs.</li>
          <li><strong>Day 8: Phang Nga Bay:</strong> Visit James Bond Island and paddle through sea caves by canoe.</li>
          <li><strong>Day 9: Koh Samui:</strong> Unwind on Koh Samui beaches and explore waterfalls and iconic temples.</li>
          <li><strong>Day 10: Pattaya:</strong> Take a speedboat to Coral Island for water activities and visit the Floating Market.</li>
          <li><strong>Day 11: Departure from Bangkok:</strong> Leisure time before departure.</li>
        </ul>
      </div>
    </section>

    <section id="includes">
      <div class="container">
        <h2>Best time to visit</h2>
        <ul>
          <li><strong>November to February:</strong> Dry season, ideal for sightseeing and beaches.</li>
          <li><strong>April to June:</strong> Hot season, great for island hopping.</li>
        </ul>
      </div>
    </section>

    <section id="includes">
      <div class="container">
        <h2>Estimated Costs</h2>
        <ul>
          <li>Accommodation: $50–$300 per night.</li>
          <li>Meals: $20–$70 per day per person.</li>
          <li>Transport: $30–$100 per day.</li>
          <li>Attractions: $10–$150 for excursions and tours.</li>
        </ul>
      </div>
    </section>

    <section id="booking">
      <div class="container">
        <h2>Book Now</h2>
        <p>Contact us to reserve your spot on this tour.</p>
        <a href="booking.php?place_name=Thailand&price=240000&guide_name=Uma%20Tilak&contact_no=9034788732" class="btn">Book Now</a>
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
      }

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
