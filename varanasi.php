<?php
?>
<a href="booking.php?place_name=Varanasi&price=100000"></a>

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
        <img src="https://www.sotc.in/blog/wp-content/uploads/2024/04/Varanasi-Ghat-2.jpg" alt="Varanasi">
      </div>
      <div class="container">
        <h2>Overview</h2>
        <p>Varanasi, the spiritual capital of India, is renowned for its ghats along the sacred Ganges River, ancient temples, and rich cultural heritage. A pilgrimage site for Hindus, it offers a profound experience of rituals, spirituality, and a glimpse into India’s deep-rooted traditions. A journey to Varanasi is an immersion in faith, culture, and history.</p>
      </div>
    </section>

    <!-- Itinerary Section -->
    <section id="itinerary">
      <div class="container">
        <h2>Itinerary for 7 days tour of Varanasi</h2>
        <ul>
          <li><strong>Day 1: Arrival in Varanasi:</strong>
            - Evening Ganga Aarti at Dashashwamedh Ghat.</li>

          <li><strong>Day 2: Temples and Ghats Tour:</strong>
            - Visit Kashi Vishwanath Temple, Sankat Mochan, and Durga Temple.</li>

          <li><strong>Day 3: Sarnath – The Buddhist Pilgrimage:</strong>
            - Explore Dhamek Stupa, Sarnath Museum, and Chaukhandi Stupa.</li>

          <li><strong>Day 4: Boat Ride on the Ganges:</strong>
            - Experience sunrise with a boat ride along the ghats.</li>

          <li><strong>Day 5: Ramnagar Fort and Bharat Kala Bhavan:</strong>
            - Explore the royal heritage and a museum of artifacts.</li>

          <li><strong>Day 6: Local Markets and Cultural Walk:</strong>
            - Discover traditional markets and street food.</li>

          <li><strong>Day 7: Departure:</strong>
            - Morning free for leisure before departure.</li>
        </ul>
      </div>
    </section>

    <section id="includes">
      <div class="container">
        <h2>Best time to visit</h2>
        <ul>
          <li><strong>October to March:</strong> Pleasant weather for sightseeing and ceremonies.</li>
        </ul>
      </div>
    </section>

    <!-- What's Included Section -->
    <section id="includes">
      <div class="container">
        <h2>Estimated Costs</h2>
        <ul>
          <li>Accommodation: ₹500–₹1500 per night (depending on location and hotel class).</li>
          <li>Meals: ₹150–₹300 per day per person (local and fine dining).</li>
          <li>Transport: Buses and local jeeps costing approximately ₹200–₹500 per day.</li>
          <li>Attractions: Entry fees for temples and cultural sites: ₹100–₹200.</li>
        </ul>
      </div>
    </section>

    <!-- Booking Section -->
    <section id="booking">
      <div class="container">
        <h2>Book Now</h2>
        <p>Contact us to reserve your spot on this tour.</p>
        <a href="booking.php?place_name=Varanasi&price=100000&guide_name=Supriya%20sign&contact_no=9034788732" class="btn">Book Now</a>
      </div>
   

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

