<?php
?>
<a href="booking.php?place_name=Munnar&price=90000"></a>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="styles.css" />
    <title>Webb Design Mastery | Munnar Tour</title>
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
        <img src="https://somatheeram-c3c5.kxcdn.com/wp-content/uploads/2019/03/Somatheeram-Kerala-roundtrip-Munnnar-min.jpg" alt="Munnar">
      </div>
      <div class="container">
        <h2>Overview</h2>
        <p>Experience the serene beauty of Munnar, the green paradise of Kerala, over an extensive 19-day journey. From sprawling tea gardens and mist-covered hills to tranquil lakes and vibrant wildlife, this tour provides a truly immersive experience.</p>
      </div>
    </section>

    <!-- Itinerary Section -->
    <section id="itinerary">
      <div class="container">
        <h2>Itinerary for 19 days tour of Munnar</h2>
        <ul>
          <li><strong>Day 1: Arrival in Munnar:</strong> - Transfer to the hotel, rest, and explore local surroundings.</li>
          <li><strong>Day 2: Tea Museum and Pothamedu Viewpoint:</strong> - Visit the Tea Museum, Pothamedu Viewpoint for stunning landscapes.</li>
          <li><strong>Day 3: Mattupetty Dam and Echo Point:</strong> - Enjoy boating at Mattupetty and experience natural echoes.</li>
          <li><strong>Day 4: Kundala Lake and Top Station:</strong> - A day trip to Kundala Lake and Top Station.</li>
          <li><strong>Day 5: Eravikulam National Park:</strong> - Explore the park and spot the Nilgiri Tahr.</li>
          <li><strong>Day 6: Chinnar Wildlife Sanctuary:</strong> - A safari through diverse wildlife habitats.</li>
          <li><strong>Day 7: Marayoor Sandalwood Forests:</strong> - Discover natural sandalwood forests and pre-historic sites.</li>
          <li><strong>Day 8: Anamudi Peak (Trekking):</strong> - Trek to the highest peak in South India.</li>
          <li><strong>Day 9: Blossom Hydel Park:</strong> - A relaxing day amidst flowers and scenic beauty.</li>
          <li><strong>Day 10: Lockhart Gap and Attukad Waterfalls:</strong> - A scenic drive and waterfall exploration.</li>
          <li><strong>Day 11: Final Relaxation Day:</strong> - Unwind at the hotel or a spa.</li>
          <li><strong>Day 12: Departure:</strong> - Transfer to the airport.</li>
        </ul>
      </div>
    </section>

    <section id="includes">
      <div class="container">
        <h2>Best time to visit</h2>
        <ul>
          <li><strong>September to March:</strong> Ideal weather for sightseeing and trekking.</li>
        </ul>
      </div>
    </section>

    <!-- Estimated Costs Section -->
    <section id="includes">
      <div class="container">
        <h2>Estimated Costs</h2>
        <ul>
          <li>Accommodation: ₹500–₹2000 per night (budget to luxury).</li>
          <li>Meals: ₹150–₹300 per day per person (local and international cuisine).</li>
          <li>Transport: Private vehicle hire costing around ₹300–₹700 per day.</li>
          <li>Attractions: Entry fees to parks, waterfalls, and tea estates.</li>
        </ul>
      </div>
    </section>

    <!-- Booking Section -->
    <section id="booking">
      <div class="container">
        <h2>Book Now</h2>
        <p>Contact us to reserve your spot on this tour.</p>
        <a href="booking.php?place_name=Munnar&price=90000&guide_name=Ram%20Nayakr&contact_no=9676543210" class="btn">Book Now</a>
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
