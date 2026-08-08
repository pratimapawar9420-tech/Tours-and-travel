<?php
?>
<a href="booking.php?place_name=Kashmir&price=40000"></a>

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
        <img src="https://www.ekashmirtourism.com/wp-content/uploads/2022/08/Shikara-boats-floating-on-Dal-Lake.jpg" alt="Nature">
      </div>
      <div class="container">
        <h2>Overview</h2>
        <p> Kashmir, known as "Paradise on Earth," offers a breathtaking blend of scenic beauty, cultural richness, and historical significance. Nestled in the northern part of India, it is famous for its snow-capped mountains, lush valleys, pristine lakes, and vibrant culture. A Kashmir tour offers a memorable experience for nature lovers, adventure seekers, and those looking to immerse themselves in the local traditions.</p>
      </div>
    </section>

    <!-- Itinerary Section -->
    <section id="itinerary">
      <div class="container">
        <h2>Itinerary for 5 days tour of Kashmir</h2>
        <ul>
          <li><strong>Day 1:Arrival in Srinagar – The heart of Kashmir:</strong>Dal Lake: Enjoy a Shikara (boat) ride on Dal Lake and stay in a traditional houseboat for a unique experience.
Mughal Gardens: Visit beautiful gardens like Nishat Bagh, Shalimar Bagh, and Chashme Shahi, showcasing the Mughal era’s architectural beauty.
Hazratbal Shrine: A revered Muslim shrine, offering serene views of Dal Lake.
Shankaracharya Temple: Located on a hilltop, offering panoramic views of the entire city and the surrounding valley.</li>

          <li><strong>Day 2: Gulmarg – The Skiing Paradise:</strong> Gulmarg Gondola: Ride the world’s highest cable car for stunning views of the mountains.
Skiing & Snow Activities: Winter activities such as skiing, snowboarding, and snowball fighting are popular during the colder months.
Meadow of Flowers: During the summer, the area is filled with vibrant wildflowers, making it a haven for photographers.</li>

          <li><strong>Day 3: Pahalgam – A Tranquil Retreat:</strong>Betaab Valley: Named after a Bollywood movie, this lush green valley is perfect for nature walks and picnics.
Aru Valley: A serene spot for trekking and outdoor activities.
Lidder River: Experience the beautiful Lidder River, ideal for trout fishing or rafting.</li>

          <li><strong>Day 4: Kashmir Valley Trekking:</strong> Surrounded by glaciers and towering mountains, Sonamarg is a great base for treks and adventure activities.
          Thajiwas Glacier: A popular trekking destination where you can witness snow throughout the year.</li>

          <li><strong>Day 5: Shopping & Local Culture:</strong> Kashmiri Handicrafts: Buy exquisite Pashmina shawls, carpets, and walnut wood artifacts.
Kashmiri Cuisine: Savor the famous Wazwan cuisine, including dishes like Rogan Josh, Gustaba, Yakhni, and the iconic Kahwa tea.</li>
        </ul>
      </div>
    </section>

    <section id="includes">
      <div class="container">
        <h2>Best time to visit</h2>
        <ul>
          <li><strong>Summer (March to June):</strong>Best for sightseeing, outdoor activities, and exploring the lush green landscapes.</li>
          <li><strong>Winter (November to February): </strong>Meals: 20–₹40 per day per person.</li>
   
        </ul>
      </div>
    </section>
    <!-- What's Included Section -->
    <section id="includes">
      <div class="container">
        <h2>Estimated Costs</h2>
        <ul>
          <li>Accommodation: ₹1000–₹1500 per night (mid-range hotels).</li>
          <li>Meals: ₹200–$400 per day per person.</li>
          <li>Transport: Moscow to Saint Petersburg (Sapsan train): ~₹500–$1000 (economy), Metro and local transport: ~₹500
             per day.</li>
          <li>Attractions: ~₹500–$1000 (depending on choices).</li>
        </ul>
      </div>
    </section>

    <!-- Booking Section -->
    <section id="booking">
      <div class="container">
        <h2>Book Now</h2>
        <p>Contact us to reserve your spot on this tour.</p>
        <a href="booking.php?place_name=Kashmir&price=40000&guide_name=Samira%20Rane&contact_no=9900111111" class="btn">Book Now</a>
   
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
