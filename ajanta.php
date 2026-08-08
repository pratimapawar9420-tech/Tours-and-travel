<?php
?>
<a href="booking.php?place_name=Ajanta_Caves&price=2500"></a>

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
        <img src="https://indiaforbeginners.com/wp-content/uploads/2020/04/India-for-Beginners-custom-tours-5.jpg" alt="Ajanta Caves">
      </div>
      <div class="container">
        <h2>Overview</h2>
        <p>The **Ajanta Caves** are a group of 30 rock-cut Buddhist cave monuments, located in the state of Maharashtra, India. They were excavated in two phases, the first being around the 2nd century BCE and the second around the 5th century CE. The caves are renowned for their intricate frescoes, detailed sculptures, and stunning architecture, depicting the life of Lord Buddha and various Jataka tales. The caves have been recognized as a UNESCO World Heritage site for their historical significance and artistic brilliance. It’s one of the most significant and well-preserved examples of ancient Indian art and culture.</p>
      </div>
    </section>

    <!-- Itinerary Section -->
    <section id="itinerary">
      <div class="container">
        <h2>Itinerary for Ajanta Caves Tour</h2>
        <ul>
          <li><strong>Day 1: Arrival in Aurangabad:</strong> Arrive in Aurangabad, the nearest city to the Ajanta Caves. Check-in to your hotel and relax.</li>
          <li><strong>9:00 AM – Visit Ajanta Caves:</strong> Start your day with a visit to the Ajanta Caves. Explore the 30 caves, viewing the murals, sculptures, and architecture that narrate the stories of Buddha's life.</li>
          <li><strong>1:00 PM – Lunch at a Local Restaurant:</strong> Enjoy a traditional Maharashtrian meal at a local restaurant near the caves.</li>
          <li><strong>2:00 PM – Continue Exploration:</strong> After lunch, continue exploring the other caves and visit the main temple inside Cave 26 to see the magnificent Buddha statue.</li>
          <li><strong>5:00 PM – Evening at Ellora Caves:</strong> After Ajanta, visit the Ellora Caves if time permits, as they are also famous for their rock-cut architecture.</li>
        </ul>
      </div>
    </section>

    <section id="includes">
      <div class="container">
        <h2>Best Time to Visit</h2>
        <ul>
          <li><strong>Winter (October to March):</strong> The best time to visit Ajanta Caves is during the winter months when the weather is pleasant and cool.</li>
          <li><strong>Summer (April to June):</strong> The weather can get very hot during summer, so it is advisable to visit early in the morning or late in the evening to avoid the heat.</li>
          <li><strong>Monsoon (July to September):</strong> The monsoon rains can disrupt travel plans, but the lush greenery around the caves is a sight to behold.</li>
        </ul>
      </div>
    </section>

    <!-- What's Included Section -->
    <section id="includes">
      <div class="container">
        <h2>Estimated Costs</h2>
        <ul>
          <li>Entry Fee for Ajanta Caves: ₹40 (Indian Citizens), ₹600 (Foreign Tourists).</li>
          <li>Guide Fee: ₹500–₹800 (depending on the guide’s experience).</li>
          <li>Meals: ₹200–₹400 per person at local restaurants.</li>
          <li>Transport (if needed): ₹500–₹700 for local taxis or private car hire for the day.</li>
        </ul>
      </div>
    </section>

    <!-- Booking Section -->
    <section id="booking">
      <div class="container">
        <h2>Book Now</h2>
        <p>Contact us to reserve your spot on this historical tour of the Ajanta Caves.</p>
        <a href="booking.php?place_name=Ajanta_Caves&price=2500&guide_name=Vikram%20Patel&contact_no=1176543670" class="btn">Book Now</a>
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
