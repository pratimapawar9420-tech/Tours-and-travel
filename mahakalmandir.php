<?php
?>
<a href="booking.php?place_name=Mahakal_Mandir&price=1500"></a>

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
        <img src="https://static.toiimg.com/photo/94055833.cms" alt="Mahakal Mandir">
      </div>
      <div class="container">
        <h2>Overview</h2>
        <p>The **Mahakal Mandir** is one of the most revered temples dedicated to Lord Shiva, located in Ujjain, Madhya Pradesh. This ancient temple is believed to be one of the twelve Jyotirlingas, making it an important pilgrimage site for Hindus. The Mahakal Mandir has a rich historical and cultural significance, attracting thousands of devotees and tourists alike. The temple is renowned for its stunning architecture and religious rituals, including the evening aarti, which is a mesmerizing experience.</p>
      </div>
    </section>

    <!-- Itinerary Section -->
    <section id="itinerary">
      <div class="container">
        <h2>Itinerary for Mahakal Mandir Tour</h2>
        <ul>
          <li><strong>Day 1: Arrival in Ujjain:</strong> Arrive in Ujjain and check into your hotel. Relax and prepare for your visit to Mahakal Mandir.</li>
          <li><strong>9:00 AM – Visit Mahakal Mandir:</strong> Start your day with a visit to the famous Mahakal Mandir. Attend the early morning prayers and explore the temple.</li>
          <li><strong>11:00 AM – Explore the Surrounding Temples:</strong> After visiting Mahakal Mandir, explore nearby temples like the Harsiddhi Temple and Kal Bhairav Temple.</li>
          <li><strong>1:00 PM – Lunch at a Local Restaurant:</strong> Enjoy a traditional meal at a local restaurant in Ujjain.</li>
          <li><strong>3:00 PM – Visit the Ujjain Museum:</strong> Explore the Ujjain Museum, which houses artifacts and relics related to Ujjain’s cultural and religious history.</li>
          <li><strong>5:00 PM – Attend the Evening Aarti:</strong> Return to Mahakal Mandir in the evening for the famous **Bhasma Aarti**, a unique and spiritually uplifting ritual performed at the temple.</li>
        </ul>
      </div>
    </section>

    <section id="includes">
      <div class="container">
        <h2>Best Time to Visit</h2>
        <ul>
          <li><strong>Winter (November to February):</strong> This is the best time to visit Ujjain, as the weather is cool and pleasant for temple visits and sightseeing.</li>
          <li><strong>Summer (March to June):</strong> The weather is hot, but the temple offers spiritual solace during the scorching heat.</li>
          <li><strong>Monsoon (July to October):</strong> The monsoon season offers lush green surroundings, although heavy rains may cause some inconvenience in travel.</li>
        </ul>
      </div>
    </section>

    <!-- What's Included Section -->
    <section id="includes">
      <div class="container">
        <h2>Estimated Costs</h2>
        <ul>
          <li>Entry Fee for Mahakal Mandir: Free.</li>
          <li>Special Aarti Tickets: ₹200–₹500 (for Bhasma Aarti, depending on the seating and timing).</li>
          <li>Meals: ₹250–₹700 per person at local restaurants.</li>
          <li>Transport (if needed): ₹300–₹600 for local taxis or private car hire for the day.</li>
        </ul>
      </div>
    </section>

    <!-- Booking Section -->
    <section id="booking">
      <div class="container">
        <h2>Book Now</h2>
        <p>Contact us to reserve your spot on this spiritually enriching tour.</p>
        <a href="booking.php?place_name=Mahakal_Mandir&price=1500&guide_name=Anil%20Sharma&contact_no=9899543210" class="btn">Book Now</a>
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
