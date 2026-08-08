<?php
?>
<a href="bookingswitzerland.php?place_name=Switzerland&price=80000"></a>

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
        <img src="https://images.unsplash.com/photo-1474909409572-e05dcf0b081e?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8c3dpdHplcmxhbmQlMjB3aW50ZXJ8ZW58MHx8MHx8fDA%3D" alt="Switzerland Honeymoon">
      </div>
      <div class="container">
        <h2>Overview</h2>
        <p>Switzerland, known for its snow-capped Alps, crystal-clear lakes, and picturesque villages, offers a romantic atmosphere perfect for a honeymoon. Enjoy scenic train rides, breathtaking mountain views, and cozy alpine chalets. Whether you explore the famous cities like Zurich and Lucerne or take a cable car up to the Matterhorn, Switzerland promises an unforgettable honeymoon experience filled with romance and adventure.</p>
      </div>
    </section>

    <!-- Itinerary Section -->
    <section id="itinerary">
      <div class="container">
        <h2>Itinerary for 5 Days Switzerland Honeymoon</h2>
        <ul>
          <li><strong>Day 1: Arrival and Scenic Views:</strong> Arrive in Zurich, transfer to your luxurious hotel in the Swiss Alps. Spend the day exploring the beautiful city of Zurich and enjoy a relaxing evening by Lake Zurich.</li>
          <li><strong>Day 2: Lucerne and Mount Pilatus:</strong> Visit Lucerne and take a boat ride on Lake Lucerne. Take the cogwheel train up to Mount Pilatus for panoramic views of the Alps. Enjoy a romantic candlelight dinner at a mountaintop restaurant.</li>
          <li><strong>Day 3: Interlaken and Lauterbrunnen Valley:</strong> Take a scenic train ride to Interlaken, nestled between Lake Thun and Lake Brienz. Visit Lauterbrunnen Valley and its stunning waterfalls. Enjoy a cozy evening with your partner at a charming Swiss chalet.</li>
          <li><strong>Day 4: Zermatt and the Matterhorn:</strong> Take the Glacier Express to Zermatt and enjoy spectacular views of the Matterhorn mountain. Take a cable car up to the Matterhorn Glacier Paradise for breathtaking views. Enjoy a romantic dinner in a mountain restaurant.</li>
          <li><strong>Day 5: Geneva and Departure:</strong> Explore Geneva and its famous Jet d'Eau fountain. Visit the United Nations headquarters and stroll along Lake Geneva. Depart with unforgettable memories of your Swiss honeymoon.</li>
        </ul>
      </div>
    </section>

    <section id="booking">
      <div class="container">
        <h2>Book Now</h2>
        <p>Contact us to reserve your honeymoon trip to Switzerland.</p>
        <a href="bookinghoneymoon.php?place_name=Switzerland&price=80000&guide_name=Lukas%20Meier&contact_no=9900112222" class="btn">Book Now</a>
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
