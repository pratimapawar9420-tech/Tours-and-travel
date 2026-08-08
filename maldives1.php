<?php
?>
<a href="bookingmaldives.php?place_name=Maldives&price=120000"></a>

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
        <img src="https://media.cntraveler.com/photos/6579e3d7d9242b5bd3fb4afd/master/pass/sonevajanichaptertwobyakshamabdulghadir_5-soneva-feb21-pr.jpg" alt="Maldives Honeymoon">
      </div>
      <div class="container">
        <h2>Overview</h2>
        <p>The Maldives, with its turquoise waters, pristine beaches, and luxurious overwater bungalows, offers a dream honeymoon experience. Explore underwater adventures with snorkeling and diving, relax on sun-kissed beaches, and indulge in a private candlelight dinner by the ocean. Whether you're looking for romance or adventure, the Maldives is the perfect destination for a honeymoon.</p>
      </div>
    </section>

    <!-- Itinerary Section -->
    <section id="itinerary">
      <div class="container">
        <h2>Itinerary for 5 Days Maldives Honeymoon</h2>
        <ul>
          <li><strong>Day 1: Arrival and Beach Relaxation:</strong> Arrive in Malé, the capital of Maldives. Transfer to your luxury resort, check into your overwater bungalow, and unwind with a private beach dinner under the stars.</li>
          <li><strong>Day 2: Snorkeling and Sunset Cruise:</strong> Spend the day snorkeling in the crystal-clear waters and exploring vibrant coral reefs. In the evening, enjoy a romantic sunset cruise with breathtaking views of the Indian Ocean.</li>
          <li><strong>Day 3: Underwater Adventures:</strong> Take a guided diving trip to explore the rich marine life of the Maldives. In the evening, indulge in a candlelight dinner on a private beach with the sound of the waves crashing in the background.</li>
          <li><strong>Day 4: Spa and Leisure Time:</strong> Pamper yourself with a couples spa treatment at the resort. Spend the rest of the day lounging on the beach or swimming in the lagoon, with plenty of time to relax and enjoy the serenity.</li>
          <li><strong>Day 5: Shopping & Departure:</strong> Visit local markets for souvenirs and gifts, and enjoy one last walk along the beach before catching your flight back home.</li>
        </ul>
      </div>
    </section>

    <section id="booking">
      <div class="container">
        <h2>Book Now</h2>
        <p>Contact us to reserve your unforgettable honeymoon in the Maldives.</p>
        <a href="bookinghoneymoon.php?place_name=Maldives&price=120000&guide_name=Adam%20Hassan&contact_no=9900112222" class="btn">Book Now</a>
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
