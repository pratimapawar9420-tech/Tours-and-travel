<?php
?>
<a href="booking.php?place_name=Agra&price=44000"></a>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="styles.css" />
    <title>Webb Design Mastery | Agra Tour</title>
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
        <img src="https://static.toiimg.com/photo/msid-105717782,width-96,height-65.cms" alt="Agra Tour">
      </div>
      <div class="container">
        <h2>Overview</h2>
        <p>Immerse yourself in the rich history, iconic architecture, and cultural heritage of Agra with this detailed 7-day tour. From the Taj Mahal to Mughal-era forts and gardens, this journey promises a magical experience.</p>
      </div>
    </section>

    <!-- Itinerary Section -->
    <section id="itinerary">
      <div class="container">
        <h2>Itinerary for 7 days tour of Agra</h2>
        <ul>
          <li><strong>Day 1: Arrival in Agra:</strong>
            - Check-in to your hotel and relax. Evening visit to Mehtab Bagh for sunset views of the Taj Mahal.</li>

          <li><strong>Day 2: Taj Mahal and Agra Fort:</strong>
            - Early morning visit to the Taj Mahal followed by a tour of Agra Fort.</li>

          <li><strong>Day 3: Fatehpur Sikri:</strong>
            - Full-day excursion to the UNESCO World Heritage Site, Fatehpur Sikri, the former Mughal capital.</li>

          <li><strong>Day 4: Itmad-ud-Daula and Local Markets:</strong>
            - Explore the Itmad-ud-Daula Tomb (Baby Taj) and enjoy shopping at Kinari Bazaar and Sadar Bazaar.</li>

          <li><strong>Day 5: Akbar’s Tomb and Dayal Bagh:</strong>
            - Visit Sikandra, Akbar's Tomb, and the Dayal Bagh Temple for its unique marble carvings.</li>

          <li><strong>Day 6: Wildlife SOS and Keetham Lake:</strong>
            - Experience the Wildlife SOS Elephant and Bear Rescue Center followed by a serene evening at Keetham Lake.</li>

          <li><strong>Day 7: Departure:</strong>
            - Spend the morning enjoying a relaxing breakfast before departure from Agra.</li>
        </ul>
      </div>
    </section>

    <section id="includes">
      <div class="container">
        <h2>Best time to visit</h2>
        <ul>
          <li><strong>October to March:</strong> Perfect weather for sightseeing and outdoor exploration.</li>
        </ul>
      </div>
    </section>

    <!-- Estimated Costs Section -->
    <section id="includes">
      <div class="container">
        <h2>Estimated Costs</h2>
        <ul>
          <li>Accommodation: ₹2,000–₹8,000 per night (budget to luxury).</li>
          <li>Meals: ₹500–₹1,000 per day per person (local Mughlai and Indian cuisine).</li>
          <li>Transport: Local taxis or private cars costing ₹1,500–₹3,000 per day.</li>
          <li>Attractions: Entry fees for the Taj Mahal, Agra Fort, Fatehpur Sikri, and Wildlife SOS.</li>
        </ul>
      </div>
    </section>

    <!-- Booking Section -->
    <section id="booking">
      <div class="container">
        <h2>Book Now</h2>
        <p>Contact us to reserve your spot on this tour.</p>
        <a href="booking.php?place_name=Agra&price=44000&guide_name=Menka%20Kumari&contact_no=9905432109" class="btn">Book Now</a>
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
