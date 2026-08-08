<?php
?>
<a href="booking.php?place_name=Ajmer&price=2500"></a>

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
        <img src="https://media.assettype.com/outlooktraveller%2F2023-12%2Fe6a89ceb-c603-4bb3-b2dd-6b7dc15335cc%2Fshutterstock_1129764152.jpg" alt="Ajmer Sharif Dargah">
      </div>
      <div class="container">
        <h2>Overview</h2>
        <p>Ajmer, a historic city in Rajasthan, is famous for its religious and cultural significance. The Ajmer Sharif Dargah, dedicated to the Sufi saint Khwaja Moinuddin Chishti, is one of the most revered pilgrimage sites in India. The city also offers attractions like Ana Sagar Lake, Ajmer Fort, and the beautiful Taragarh Fort, reflecting its rich Mughal and Rajput history.</p>
      </div>
    </section>

    <!-- Itinerary Section -->
    <section id="itinerary">
      <div class="container">
        <h2>Itinerary for Ajmer Tour</h2>
        <ul>
          <li><strong>Day 1: Arrival at Ajmer:</strong> Start your visit by exploring the Ajmer Sharif Dargah and paying respects at the holy shrine.</li>
          <li><strong>10:00 AM – Visit to Ana Sagar Lake:</strong> Enjoy a peaceful boat ride or a walk around this scenic lake, a favorite spot for locals and tourists alike.</li>
          <li><strong>12:00 PM – Explore Ajmer Fort:</strong> Discover the historical grandeur of the Ajmer Fort, built by the Mughal emperor Akbar.</li>
          <li><strong>1:00 PM – Lunch at Local Restaurant:</strong> Enjoy a meal at a local restaurant offering traditional Rajasthani cuisine.</li>
          <li><strong>2:00 PM – Visit Taragarh Fort:</strong> Explore this 16th-century fort, which offers stunning views of the surrounding city and hills.</li>
          <li><strong>4:00 PM – Explore Local Markets:</strong> Take a stroll through Ajmer's bustling markets, known for their handicrafts, textiles, and souvenirs.</li>
          <li><strong>6:00 PM – Evening at Dargah:</strong> Experience the spiritual atmosphere of the Ajmer Sharif Dargah during the evening prayers.</li>
          <li><strong>7:00 PM – Departure:</strong> Conclude your tour with a sense of peace and satisfaction, enriched by the culture and history of Ajmer.</li>
        </ul>
      </div>
    </section>

    <section id="includes">
      <div class="container">
        <h2>Best Time to Visit</h2>
        <ul>
          <li><strong>Winter (November to February):</strong> The weather is cool and pleasant, ideal for exploring Ajmer's attractions.</li>
          <li><strong>Monsoon (July to September):</strong> The monsoon season adds a unique charm, especially for the lakes and forts.</li>
        </ul>
      </div>
    </section>
    <!-- What's Included Section -->
    <section id="includes">
      <div class="container">
        <h2>Estimated Costs</h2>
        <ul>
          <li>Entry Fee for Dargah: Free, but donations are welcome.</li>
          <li>Meals: ₹200–₹600 per person at local restaurants.</li>
          <li>Transport: Local transport in Ajmer: ₹150–₹400 per person (depending on travel mode).</li>
        </ul>
      </div>
    </section>

    <!-- Booking Section -->
    <section id="booking">
      <div class="container">
        <h2>Book Now</h2>
        <p>Contact us to reserve your spot on this tour.</p>
        <a href="booking.php?place_name=Ajmer&price=2500&guide_name=Irfan%20Ahmed&contact_no=2220556677" class="btn">Book Now</a>
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
