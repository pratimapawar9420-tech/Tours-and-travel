<?php
?>
<a href="booking.php?place_name=Norway&price=89000"></a>

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
        <img src="https://images.travelandleisureasia.com/wp-content/uploads/sites/2/2024/02/15094015/kirkjufell.jpeg" alt="Norway Fjords">
      </div>
      <div class="container">
        <h2>Overview</h2>
        <p>Norway, known for its dramatic landscapes of fjords, mountains, and northern lights, is a top destination for nature enthusiasts. From the scenic beauty of the Lofoten Islands to the cultural charm of Oslo, Norway offers unique experiences like the Midnight Sun and spectacular train journeys. Its picturesque villages and outdoor adventures make it a memorable travel destination.</p>
      </div>
    </section>

    <!-- Itinerary Section -->
    <section id="itinerary">
  <div class="container">
    <h2>Itinerary for 10 days tour of Norway</h2>
    <ul>
      <li><strong>Day 1: Arrival in Oslo:</strong>
        - Visit the Royal Palace and Akershus Fortress.
        - Explore the Vigeland Sculpture Park.</li>

      <li><strong>Day 2: Bergen – Gateway to the Fjords:</strong>
        - Take the Fløibanen Funicular for panoramic views.
        - Wander through the historic Bryggen district.</li>

      <li><strong>Day 3: Hardangerfjord:</strong>
        - Experience the beauty of waterfalls and fruit orchards.
        - Visit the Hardanger Folk Museum.</li>

      <li><strong>Day 4: Geirangerfjord:</strong>
        - Cruise along the UNESCO-listed fjord.
        - See the Seven Sisters Waterfall.</li>

      <li><strong>Day 5: Ålesund – Art Nouveau Architecture:</strong>
        - Climb the 418 steps to Aksla viewpoint.
        - Visit the Art Nouveau Centre.</li>

      <li><strong>Day 6: Trondheim – Historic Charm:</strong>
        - Explore Nidaros Cathedral.
        - Walk through Bakklandet.</li>

      <li><strong>Day 7: Lofoten Islands – Arctic Beauty:</strong>
        - Discover fishing villages like Reine.
        - Enjoy kayaking and hiking.</li>

      <li><strong>Day 8: Tromsø – Gateway to the Arctic:</strong>
        - Experience the Arctic Cathedral.
        - Go on a northern lights safari.</li>

      <li><strong>Day 9: Svalbard – Polar Adventure:</strong>
        - Visit Longyearbyen.
        - Explore the Svalbard Museum.</li>

      <li><strong>Day 10: Stavanger – Pulpit Rock:</strong>
        - Hike to Preikestolen for breathtaking views.
        - Visit the Norwegian Petroleum Museum.</li>
    </ul>
  </div>
</section>

    <section id="includes">
      <div class="container">
        <h2>Best time to visit</h2>
        <ul>
          <li><strong>Summer (June to August):</strong> Ideal for hiking, fjord cruises, and experiencing the Midnight Sun.</li>
          <li><strong>Winter (December to March):</strong> Best for northern lights viewing, skiing, and dog sledding.</li>
        </ul>
      </div>
    </section>

    <!-- What's Included Section -->
    <section id="includes">
      <div class="container">
        <h2>Estimated Costs</h2>
        <ul>
          <li>Accommodation: ₹1500–₹5000 per night (depending on location and hotel class).</li>
          <li>Meals: ₹500–₹1200 per day per person (local and fine dining).</li>
          <li>Transport: Trains, ferries, and car rentals costing approximately ₹700–₹2000 per day.</li>
          <li>Attractions: Entry fees for museums and excursions: ₹300–₹1500.</li>
        </ul>
      </div>
    </section>

    <!-- Booking Section -->
    <section id="booking">
      <div class="container">
        <h2>Book Now</h2>
        <p>Contact us to reserve your spot on this tour.</p>
        <a href="booking.php?place_name=Norway&price=89000&guide_name=Sanket%20Lawan&contact_no=9034788732" class="btn">Book Now</a>
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
