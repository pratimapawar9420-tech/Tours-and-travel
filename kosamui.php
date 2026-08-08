<?php
?>
<a href="booking.php?place_name=Ko Somui Island&price=67000"></a>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="styles.css" />
    <title>Nisarg Pravasi | Ko Somui Island Tour</title>
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
        <img src="https://images.pexels.com/photos/457878/pexels-photo-457878.jpeg?cs=srgb&dl=pexels-asadphoto-457878.jpg&fm=jpg" alt="Ko Somui Island">
      </div>
      <div class="container">
        <h2>Overview</h2>
        <p>Ko Somui Island is a tropical paradise known for its stunning beaches, luxurious resorts, vibrant nightlife, and rich culture. A perfect blend of relaxation, adventure, and island exploration.</p>
      </div>
    </section>

    <section id="itinerary">
      <div class="container">
        <h2>6-Day Itinerary for Ko Somui Island</h2>
        <ul>
          <li><strong>Day 1: Arrival & Beach Relaxation:</strong> Arrive and unwind at the beach, enjoy the island's sunset and indulge in a tropical drink.</li>
          <li><strong>Day 2: Water Sports & Snorkeling:</strong> Explore the colorful marine life, enjoy snorkeling, and try out kayaking or jet skiing.</li>
          <li><strong>Day 3: Cultural Tour & Temple Visit:</strong> Visit the famous Big Buddha Temple, enjoy the culture, and explore local markets.</li>
          <li><strong>Day 4: Jungle Safari & Waterfall Trek:</strong> Take a jungle safari and visit the spectacular Na Muang Waterfalls for a refreshing dip.</li>
          <li><strong>Day 5: Island Hopping & Scuba Diving:</strong> Embark on an island-hopping adventure and try out scuba diving in crystal-clear waters.</li>
          <li><strong>Day 6: Relaxation & Departure:</strong> Spend the day relaxing by the beach or spa before departure.</li>
        </ul>
      </div>
    </section>

    <section id="includes">
      <div class="container">
        <h2>Best Time to Visit</h2>
        <ul>
          <li><strong>November to February:</strong> Enjoy cool weather and a quieter atmosphere with fewer tourists.</li>
          <li><strong>March to May:</strong> Great for diving and exploring, though it can get a bit warmer.</li>
        </ul>
      </div>
    </section>

    <section id="costs">
      <div class="container">
        <h2>Estimated Costs</h2>
        <ul>
          <li>Accommodation: $150–$300 per night (luxury resorts).</li>
          <li>Meals: $25–$50 per day per person.</li>
          <li>Transport: Scooter rental: ~$10 per day, Boat trips: ~$40 per trip.</li>
          <li>Attractions: ~$50–$120 (including water sports, cultural tours, and diving).</li>
        </ul>
      </div>
    </section>

    <section id="booking">
      <div class="container">
        <h2>Book Now</h2>
        <p>Contact us to reserve your spot on this tour.</p>
        <a href="booking.php?place_name=Ko Somui Island&price=67000&guide_name=Sarah%20Williams&contact_no=9988779090" class="btn">Book Now</a>
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
