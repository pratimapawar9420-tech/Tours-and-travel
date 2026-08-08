<?php
?>
<a href="booking.php?place_name=Elephanta_Caves&price=1900"></a>

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
        <img src="https://media1.thrillophilia.com/filestore/qj62nh68fativk30jny3i6osrzgw_1524229348_Elephanta_caves.jpg" alt="Elephanta Caves Mumbai">
      </div>
      <div class="container">
        <h2>Overview</h2>
        <p>The **Elephanta Caves** are a network of rock-cut caves located on Elephanta Island, about 11 km from the city of Mumbai. Known for their ancient Hindu temples and sculptures, the caves are dedicated to the Hindu god Shiva. The most famous sculpture is the 20-foot-high Trimurti, depicting a three-headed Shiva. The caves are a UNESCO World Heritage Site and are an iconic part of Mumbai's cultural and historical heritage.</p>
      </div>
    </section>

    <!-- Itinerary Section -->
    <section id="itinerary">
      <div class="container">
        <h2>Itinerary for Elephanta Caves Tour</h2>
        <ul>
          <li><strong>Day 1: Arrival at Elephanta Island:</strong> Begin your day by boarding a ferry to Elephanta Island, taking in the scenic views of Mumbai's coastline.</li>
          <li><strong>9:00 AM – Explore the Elephanta Caves:</strong> Visit the ancient rock-cut caves and marvel at the intricate carvings, including the famous Trimurti sculpture.</li>
          <li><strong>12:00 PM – Visit the Hindu Temples:</strong> Explore the temples dedicated to Lord Shiva and other deities, and enjoy the tranquil atmosphere of the island.</li>
          <li><strong>1:00 PM – Lunch on the Island:</strong> Enjoy a traditional meal at one of the local eateries on the island, offering delicious Indian cuisine.</li>
          <li><strong>2:00 PM – Visit the Museum:</strong> Head to the Elephanta Caves Museum to learn more about the history, art, and cultural significance of the site.</li>
          <li><strong>3:00 PM – Explore the Island:</strong> Spend some time walking around the island, taking in the natural beauty and exploring other attractions.</li>
          <li><strong>5:00 PM – Return to Mumbai:</strong> Board the ferry back to Mumbai, with stunning views of the city’s skyline.</li>
        </ul>
      </div>
    </section>

    <section id="includes">
      <div class="container">
        <h2>Best Time to Visit</h2>
        <ul>
          <li><strong>Winter (November to February):</strong> The weather is cool and pleasant, perfect for outdoor exploration and boat rides.</li>
          <li><strong>Monsoon (June to September):</strong> The monsoon season adds a lush green backdrop to the island, although ferry services might be disrupted due to heavy rains.</li>
        </ul>
      </div>
    </section>
    <!-- What's Included Section -->
    <section id="includes">
      <div class="container">
        <h2>Estimated Costs</h2>
        <ul>
          <li>Entry Fee for Caves: ₹40 per person (Indian residents), ₹600 per person (foreign tourists).</li>
          <li>Ferry Ride: ₹150–₹200 per person for a round trip.</li>
          <li>Meals: ₹200–₹500 per person at local restaurants on the island.</li>
        </ul>
      </div>
    </section>

    <!-- Booking Section -->
    <section id="booking">
      <div class="container">
        <h2>Book Now</h2>
        <p>Contact us to reserve your spot on this tour.</p>
        <a href="booking.php?place_name=Elephanta_Caves&price=1900&guide_name=Rajesh%20Kumar&contact_no=9090112233" class="btn">Book Now</a>
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
