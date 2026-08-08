<?php
?>
<a href="bookingshimla.php?place_name=Shimla&price=50000"></a>

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
        <img src="https://s3.india.com/wp-content/uploads/2024/05/Feature-Image_-Shimla-2.jpg" alt="Shimla Honeymoon">
      </div>
      <div class="container">
        <h2>Overview</h2>
        <p>Shimla, the charming hill station in the Indian Himalayas, offers a serene and romantic getaway for honeymooners. From snow-capped mountains and lush forests to colonial architecture, Shimla provides the perfect atmosphere for a peaceful and intimate honeymoon experience.</p>
      </div>
    </section>

    <!-- Itinerary Section -->
    <section id="itinerary">
      <div class="container">
        <h2>Itinerary for 5 Days Shimla Honeymoon</h2>
        <ul>
          <li><strong>Day 1: Arrival and Relaxation:</strong> Arrive in Shimla, check into a cozy hilltop resort. Enjoy a scenic walk around Mall Road and a romantic dinner at a hillside café.</li>
          <li><strong>Day 2: Exploring Shimla:</strong> Visit Jakhoo Temple, Ridge, and the Christ Church. Take a leisurely walk through the pine forests and visit the Summer Hill.</li>
          <li><strong>Day 3: Kufri Day Trip:</strong> Take a day trip to Kufri, known for its snow activities like skiing and tobogganing. Visit the Himalayan Nature Park and enjoy horse riding.</li>
          <li><strong>Day 4: Naldehra and Mashobra:</strong> Explore the scenic towns of Naldehra and Mashobra. Enjoy golfing, horse riding, and nature walks amidst the serene landscapes.</li>
          <li><strong>Day 5: Shopping & Departure:</strong> Shop at Shimla's Mall Road for local souvenirs and handicrafts. Enjoy one last scenic drive before departing.</li>
        </ul>
      </div>
    </section>

    <section id="booking">
      <div class="container">
        <h2>Book Now</h2>
        <p>Contact us to reserve your honeymoon trip to Shimla.</p>
        <a href="bookinghoneymoon.php?place_name=Shimla&price=50000&guide_name=Rohan%20Mehta&contact_no=9900112222" class="btn">Book Now</a>
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
