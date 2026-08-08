<?php
?>
<a href="booking.php?place_name=Rishikesh_Rafting&price=78000"></a>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="styles.css" />
    <title>Nisarg Pravasi | Rishikesh Rafting Adventure Tour</title>
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
        <img src="https://aquaterra.in/wp-content/uploads/2019/10/Brahmaputra-River-Rafting-Assam-31.jpg" alt="Rishikesh Rafting">
      </div>
      <div class="container">
        <h2>Overview</h2>
        <p>Experience the thrill of rafting in Rishikesh on a 3-day adventure. Paddle through the Ganges, conquer rapids, and enjoy camping by the riverside. Explore the spiritual city of Rishikesh and take in the beauty of the Himalayas during this unforgettable adventure.</p>
      </div>
    </section>

    <section id="itinerary">
      <div class="container">
        <h2>Itinerary for 3 Days Rishikesh Rafting Adventure Tour</h2>
        <ul>
          <li><strong>Day 1: Arrival in Rishikesh & River Rafting</strong> – Pickup from Rishikesh Railway Station/Bus Stand. Check-in at a riverside camp.
Introductory rafting session on the Ganges, navigating mild rapids.
Evening Ganga Aarti at Triveni Ghat.
Overnight stay at the camp.</li>
          <li><strong>Day 2: White Water Rafting & Cliff Jumping</strong> – Full-day rafting expedition through challenging rapids like "Roller Coaster" and "Daniel's Dip".
Optional cliff jumping activity.
Relax and enjoy riverside camping with bonfire and music in the evening.</li>
          <li><strong>Day 3: Visit to Rishikesh & Departure</strong> – Early morning visit to Neelkanth Mahadev Temple.
Explore the city, visit Laxman Jhula, and Ram Jhula.
Departure from Rishikesh Railway Station/Bus Stand.</li>
        </ul>
      </div>
    </section>

    <section id="includes">
      <div class="container">
        <h2>Best Time to Visit</h2>
        <ul>
          <li><strong>September to June:</strong> Ideal for rafting and adventure activities due to favorable weather.</li>
        </ul>
      </div>
    </section>

    <section id="includes">
      <div class="container">
        <h2>Estimated Costs</h2>
        <ul>
          <li>Accommodation: ₹1,500–₹4,000 per night (camping and riverside resorts).</li>
          <li>Meals: ₹300–₹800 per day per person.</li>
          <li>Transport: ₹1,500–₹3,000 per day (private cab/van, hotel pickup and drop included).</li>
          <li>Rafting & Activities: ₹1,000–₹3,000 per person (rafting, cliff jumping, etc.).</li>
        </ul>
      </div>
    </section>

    <section id="booking">
      <div class="container">
        <h2>Book Now</h2>
        <p>Contact us to reserve your spot on this thrilling rafting adventure.</p>
        <a href="booking.php?place_name=Rishikesh Rafting&price=78000&guide_name=Ravi%20Sharma&contact_no=9876543210" class="btn">Book Now</a>
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
