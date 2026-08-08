<?php
?>
<a href="bookingkashmir.php?place_name=Kashmir&price=60000"></a>

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
        <img src="https://c4.wallpaperflare.com/wallpaper/981/537/277/ski-gulmarg-kashmir-india-wallpaper-preview.jpg" alt="Kashmir Honeymoon">
      </div>
      <div class="container">
        <h2>Overview</h2>
        <p>Kashmir, known as "Paradise on Earth," offers a perfect blend of breathtaking landscapes, serene lakes, and snowy mountains, making it an ideal destination for a romantic honeymoon. Whether you're boating on the Dal Lake, exploring the Mughal Gardens, or enjoying a Shikara ride, Kashmir will leave you with unforgettable memories.</p>
      </div>
    </section>

    <!-- Itinerary Section -->
    <section id="itinerary">
      <div class="container">
        <h2>Itinerary for 5 Days Kashmir Honeymoon</h2>
        <ul>
          <li><strong>Day 1: Arrival in Srinagar:</strong> Arrive in Srinagar, check into a beautiful houseboat on Dal Lake. Enjoy a Shikara ride and a romantic dinner on the houseboat.</li>
          <li><strong>Day 2: Exploring Srinagar:</strong> Visit the Mughal Gardens like Nishat Bagh and Shalimar Bagh. Explore Hazratbal Shrine and take a stroll around Dal Lake.</li>
          <li><strong>Day 3: Gulmarg Adventure:</strong> Take a day trip to Gulmarg, enjoy the scenic beauty and indulge in skiing or a cable car ride. Experience the snow-capped mountains and pristine views.</li>
          <li><strong>Day 4: Pahalgam Excursion:</strong> Visit Pahalgam, explore Betaab Valley, and enjoy a romantic walk along the Lidder River. You can also go horseback riding to Baisaran for a panoramic view.</li>
          <li><strong>Day 5: Shopping & Departure:</strong> Shop for Kashmiri handicrafts and dry fruits at Lal Chowk. Depart with unforgettable memories of your honeymoon in Kashmir.</li>
        </ul>
      </div>
    </section>

    <section id="booking">
      <div class="container">
        <h2>Book Now</h2>
        <p>Contact us to reserve your honeymoon trip to Kashmir.</p>
        <a href="bookinghoneymoon.php?place_name=Kashmir&price=60000&guide_name=Rohan%20Mehta&contact_no=9900112222" class="btn">Book Now</a>
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
