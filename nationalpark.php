<?php
?>
<a href="booking.php?place_name=Kaziranga_National_Park_Adventure&price=66000"></a>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="styles.css" />
    <title>Nisarg Pravasi | Kaziranga National Park Adventure Tour</title>
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
        <img src="https://static.toiimg.com/thumb/msid-109916534,width-748,height-499,resizemode=4,imgsize-139290/.jpg" alt="Kaziranga National Park">
      </div>
      <div class="container">
        <h2>Overview</h2>
        <p>Explore the natural wonders of Kaziranga National Park, a UNESCO World Heritage Site in Assam! Famous for its population of one-horned rhinoceroses, Kaziranga is also home to a rich variety of wildlife. This 4-day adventure tour takes you through thrilling jeep safaris, boat rides, and birdwatching, offering an unforgettable experience amidst lush greenery and diverse flora and fauna.</p>
      </div>
    </section>

    <section id="itinerary">
      <div class="container">
        <h2>Itinerary for 4 Days Kaziranga National Park Adventure Tour</h2>
        <ul>
          <li><strong>Day 1: Arrival in Guwahati & Transfer to Kaziranga</strong> – Arrive in Guwahati and drive to Kaziranga National Park. The journey offers scenic views of the Brahmaputra River and the surrounding countryside. Check-in to your lodge and prepare for your first evening safari.</li>
          <li><strong>Day 2: Jeep Safari in Kaziranga</strong> – Start your day with a thrilling jeep safari in the central range of Kaziranga. Encounter the famous one-horned rhinoceros, tigers, elephants, and a variety of birds. In the evening, relax at the lodge or enjoy a nature walk.</li>
          <li><strong>Day 3: Boat Ride & Exploration of Eastern Range</strong> – Experience a boat ride on the Brahmaputra River, where you can spot water birds, wild buffalo, and other wildlife. In the afternoon, embark on another jeep safari in the eastern range of the park, known for its diverse ecosystems and rich wildlife.</li>
          <li><strong>Day 4: Return to Guwahati</strong> – After breakfast, enjoy your final safari in the park. Later, drive back to Guwahati, where you can explore local attractions before preparing for your departure.</li>
        </ul>
      </div>
    </section>

    <section id="includes">
      <div class="container">
        <h2>Best Time to Visit</h2>
        <ul>
          <li><strong>November to April:</strong> The best time to visit for wildlife sightings, jeep safaris, and boat rides. The weather is pleasant and conducive for outdoor activities.</li>
        </ul>
      </div>
    </section>

    <section id="includes">
      <div class="container">
        <h2>Estimated Costs</h2>
        <ul>
          <li>Accommodation: ₹3,000–₹8,000 per night (resorts and lodges).</li>
          <li>Meals: ₹800–₹2,000 per day per person.</li>
          <li>Jeep Safari: ₹2,000–₹5,000 per person (depending on the range and package).</li>
          <li>Boat Ride: ₹500–₹1,500 per person.</li>
        </ul>
      </div>
    </section>

    <section id="booking">
      <div class="container">
        <h2>Book Now</h2>
        <p>Contact us to reserve your spot on this exhilarating Kaziranga National Park adventure.</p>
        <a href="booking.php?place_name=Kaziranga National Park Adventure&price=66000&guide_name=Rahul%20Das&contact_no=9876543210" class="btn">Book Now</a>
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
