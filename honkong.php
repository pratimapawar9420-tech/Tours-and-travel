<?php
?>
<a href="booking.php?place_name=HongKong&price=100000"></a>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="styles.css" />
    <title>Webb Design Mastery | Hong Kong Tour</title>
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
        <img src="https://lumiere-a.akamaihd.net/v1/images/disney-in_holiday_hero_sp_imgch1_a08dc91d.jpeg?region=0,0,750,863" alt="Hong Kong">
      </div>
      <div class="container">
        <h2>Overview</h2>
        <p>Immerse yourself in the vibrant culture and iconic attractions of Hong Kong on this exciting 9-day tour. From towering skyscrapers and traditional temples to scenic harbors and thrilling theme parks, Hong Kong offers an unforgettable experience.</p>
      </div>
    </section>

    <!-- Itinerary Section -->
    <section id="itinerary">
      <div class="container">
        <h2>Itinerary for 9 days tour of Hong Kong</h2>
        <ul>
          <li><strong>Day 1: Arrival in Hong Kong:</strong>
            - Transfer to the hotel, evening at leisure.</li>

          <li><strong>Day 2: City Tour:</strong>
            - Visit Victoria Peak, Aberdeen Fishing Village, and Repulse Bay.</li>

          <li><strong>Day 3: Ocean Park:</strong>
            - Spend the day exploring rides, aquariums, and animal exhibits.</li>

          <li><strong>Day 4: Day Trip to Lantau Island:</strong>
            - Experience the Big Buddha, Po Lin Monastery, and Ngong Ping 360.</li>

          <li><strong>Day 5: Disneyland:</strong>
            - Enjoy a full day at Hong Kong Disneyland.</li>

          <li><strong>Day 6: Tsim Sha Tsui and Kowloon:</strong>
            - Explore cultural markets, Avenue of Stars, and Symphony of Lights.</li>

          <li><strong>Day 7: Visit Macau:</strong>
            - Day trip to Macau including Ruins of St. Paul's and Macau Tower.</li>

          <li><strong>Day 8: Hong Kong Markets:</strong>
            - Visit Temple Street Night Market and Ladies’ Market.</li>

          <li><strong>Day 9: Departure:</strong>
            - Final shopping and airport transfer.</li>
        </ul>
      </div>
    </section>

    <section id="includes">
      <div class="container">
        <h2>Best time to visit</h2>
        <ul>
          <li><strong>October to December:</strong> Comfortable temperatures and clear skies.</li>
        </ul>
      </div>
    </section>

    <!-- Estimated Costs Section -->
    <section id="includes">
      <div class="container">
        <h2>Estimated Costs</h2>
        <ul>
          <li>Accommodation: ₹600–₹2500 per night (budget to luxury).</li>
          <li>Meals: ₹200–₹400 per day per person (local and international options).</li>
          <li>Transport: MTR and ferries costing around ₹100–₹200 per day.</li>
          <li>Attractions: Tickets for theme parks, tours, and museums.</li>
        </ul>
      </div>
    </section>

    <!-- Booking Section -->
    <section id="booking">
      <div class="container">
        <h2>Book Now</h2>
        <p>Contact us to reserve your spot on this tour.</p>
        <a href="booking.php?place_name=HongKong&price=100000&guide_name=Chetanyag%20Lodha&contact_no=1276543210" class="btn">Book Now</a>
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
