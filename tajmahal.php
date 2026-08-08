<?php
?>
<a href="booking.php?place_name=Taj_Mahal&price=2000"></a>

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
        <img src="https://images.unsplash.com/photo-1564507592333-c60657eea523?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8dGFqJTIwbWFoYWx8ZW58MHx8MHx8fDA%3D" alt="Taj Mahal">
      </div>
      <div class="container">
        <h2>Overview</h2>
        <p>The **Taj Mahal** is a stunning white marble mausoleum located in Agra, India. It was commissioned by Mughal Emperor Shah Jahan in memory of his wife Mumtaz Mahal, who died during childbirth. The Taj Mahal is a UNESCO World Heritage Site and one of the Seven Wonders of the World, famous for its breathtaking architecture and symmetry. It is considered a symbol of eternal love and attracts millions of visitors annually.</p>
      </div>
    </section>

    <!-- Itinerary Section -->
    <section id="itinerary">
      <div class="container">
        <h2>Itinerary for Taj Mahal Tour</h2>
        <ul>
          <li><strong>Day 1: Arrival in Agra:</strong> Arrive in Agra by train or road and check into your hotel. Relax and prepare for the visit to the Taj Mahal.</li>
          <li><strong>9:00 AM – Visit Taj Mahal:</strong> Begin your day by visiting the Taj Mahal, exploring its beautiful gardens, architecture, and intricate marble carvings.</li>
          <li><strong>11:00 AM – Explore the Main Mausoleum:</strong> Marvel at the grand tomb of Mumtaz Mahal and Shah Jahan, with its stunning marble inlays and serene atmosphere.</li>
          <li><strong>12:00 PM – Visit the Taj Museum:</strong> Explore the museum located near the Taj Mahal to learn more about its history and architecture.</li>
          <li><strong>1:00 PM – Lunch at a Local Restaurant:</strong> Enjoy a traditional Indian meal at a local restaurant with a view of the Taj Mahal.</li>
          <li><strong>2:30 PM – Visit Agra Fort:</strong> After lunch, visit the nearby Agra Fort, another UNESCO World Heritage Site, to learn about Mughal history and architecture.</li>
          <li><strong>4:30 PM – Visit Mehtab Bagh:</strong> End your day by visiting Mehtab Bagh for a beautiful view of the Taj Mahal across the Yamuna River, especially at sunset.</li>
        </ul>
      </div>
    </section>

    <section id="includes">
      <div class="container">
        <h2>Best Time to Visit</h2>
        <ul>
          <li><strong>Winter (October to March):</strong> This is the best time to visit, as the weather is cool and comfortable for sightseeing.</li>
          <li><strong>Summer (April to June):</strong> The temperatures can get very high, but if you prefer fewer crowds, this is a good time to visit.</li>
          <li><strong>Monsoon (July to September):</strong> While the weather is lush and green, rainfall might affect your sightseeing experience.</li>
        </ul>
      </div>
    </section>
    <!-- What's Included Section -->
    <section id="includes">
      <div class="container">
        <h2>Estimated Costs</h2>
        <ul>
          <li>Entry Fee for Taj Mahal: ₹50 per person (Indian residents), ₹1300 per person (foreign tourists).</li>
          <li>Entry Fee for Agra Fort: ₹40 per person (Indian residents), ₹550 per person (foreign tourists).</li>
          <li>Meals: ₹300–₹600 per person at local restaurants.</li>
          <li>Transport (if needed): ₹500–₹1000 for taxi or private car hire for the day.</li>
        </ul>
      </div>
    </section>

    <!-- Booking Section -->
    <section id="booking">
      <div class="container">
        <h2>Book Now</h2>
        <p>Contact us to reserve your spot on this tour.</p>
        <a href="booking.php?place_name=Taj_Mahal&price=2000&guide_name=Arvind%20Hian&contact_no=9996543210" class="btn">Book Now</a>
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
