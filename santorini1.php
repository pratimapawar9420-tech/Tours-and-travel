<?php
?>
<a href="bookingsantorini.php?place_name=Santorini&price=70000"></a>

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
        <img src="https://byunique.com/gallery/?album=1527&w=1200&h=600&crop=auto" alt="Santorini Honeymoon">
      </div>
      <div class="container">
        <h2>Overview</h2>
        <p>Santorini, a famous Greek island in the Aegean Sea, is renowned for its dramatic views, stunning sunsets, and pristine white-and-blue architecture. The island offers a blend of history, culture, and luxury, making it an ideal destination for a romantic honeymoon. Enjoy candlelight dinners by the cliffside, explore ancient ruins, and unwind on volcanic beaches, making it the perfect escape.</p>
      </div>
    </section>

    <!-- Itinerary Section -->
    <section id="itinerary">
      <div class="container">
        <h2>Itinerary for 5 Days Santorini Honeymoon</h2>
        <ul>
          <li><strong>Day 1: Arrival and Relaxation:</strong> Arrive in Santorini, transfer to your luxurious hotel overlooking the caldera. Spend the day relaxing and taking in the stunning views of the volcano and the sea.</li>
          <li><strong>Day 2: Explore Oia and Sunset:</strong> Visit Oia, one of the most beautiful villages in Santorini. Wander through its narrow streets and blue-domed churches. Enjoy a romantic sunset from a cliffside café.</li>
          <li><strong>Day 3: Santorini Beaches and Water Activities:</strong> Spend the day at Santorini's iconic black sand beaches like Kamari and Perissa. Enjoy water sports like snorkeling or sailing around the island.</li>
          <li><strong>Day 4: Ancient Akrotiri and Wine Tasting:</strong> Explore the ancient ruins of Akrotiri, a Minoan city destroyed by volcanic eruption. Later, visit a local winery for a wine-tasting experience featuring Santorini's famous Assyrtiko wine.</li>
          <li><strong>Day 5: Relaxation and Departure:</strong> Spend your last day relaxing in your hotel or taking a romantic boat tour around the island. Depart with beautiful memories of your Santorini honeymoon.</li>
        </ul>
      </div>
    </section>

    <section id="booking">
      <div class="container">
        <h2>Book Now</h2>
        <p>Contact us to reserve your honeymoon trip to Santorini.</p>
        <a href="bookinghoneymoon.php?place_name=Santorini&price=70000&guide_name=Alexis%20Pappas&contact_no=9900112222" class="btn">Book Now</a>
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
