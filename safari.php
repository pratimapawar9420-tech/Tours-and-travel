<?php
?>
<a href="booking.php?place_name=Rajasthan_Safari&price=38000"></a>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="styles.css" />
    <title>Nisarg Pravasi | Rajasthan Safari Tour</title>
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
        <img src="https://static.toiimg.com/thumb/msid-92721827,width-748,height-499,resizemode=4,imgsize-132048/.jpg" alt="Rajasthan Safari">
      </div>
      <div class="container">
        <h2>Overview</h2>
        <p>Embark on an exhilarating 7-day safari ride through the heart of Rajasthan, exploring its majestic deserts, wildlife sanctuaries, and historic forts. Experience thrilling camel and jeep safaris while staying in luxury desert camps and heritage hotels.</p>
      </div>
    </section>

    <section id="itinerary">
      <div class="container">
        <h2>Itinerary for 7 Days Rajasthan Safari Tour</h2>
        <ul>
          <li><strong>Day 1: Arrival in Jaisalmer & Camel Safari</strong> – Pickup from Jaisalmer Airport/Railway Station.
Check-in at a luxury desert camp.
Explore Jaisalmer Fort, Patwon Ki Haveli & Gadisar Lake.
Evening camel safari at Sam Sand Dunes followed by a cultural Rajasthani folk dance show.
Overnight stay at the desert camp</li>
          <li><strong>Day 2: Jeep Safari & Jodhpur Visit   </strong> – arly morning Jeep Safari at Thar Desert.
Breakfast at the camp & check-out.
Travel to Jodhpur (5-hour journey).
Visit Mehrangarh Fort, Jaswant Thada, and Umaid Bhawan Palace.
Explore local markets for shopping.
Check-in at a heritage hotel in Jodhpur</li>
          <li><strong>Day 3:Ranthambore Wildlife Safari & Departure</strong> – Early morning departure to Ranthambore National Park.
Enjoy an exciting jungle safari spotting tigers, leopards, and other wildlife.
Return to Jaipur in the evening.
Drop-off at Jaipur Airport/Railway Station for deputure</li>
        </ul>
      </div>
    </section>

    <section id="includes">
      <div class="container">
        <h2>Best time to visit</h2>
        <ul>
          <li><strong>October to March:</strong> Ideal for pleasant weather and safari adventures.</li>
          <li><strong>April to June:</strong> Best for fewer crowds and off-season discounts.</li>
        </ul>
      </div>
    </section>

    <section id="includes">
      <div class="container">
        <h2>Estimated Costs</h2>
        <ul>
          <li>Accommodation: ₹2,500–₹7,000 per night (heritage hotels & desert camps).</li>
          <li>Meals: ₹500–₹1,500 per day per person.</li>
          <li>Transport: ₹3,000–₹6,000 per day (private cab/van, hotel pickup and drop included).</li>
          <li>Safari Rides: ₹2,000–₹6,000 per person (camel safari, jeep safari, wildlife safari).</li>
        </ul>
      </div>
    </section>

    <section id="booking">
      <div class="container">
        <h2>Book Now</h2>
        <p>Contact us to reserve your spot on this adventure tour.</p>
        <a href="booking.php?place_name=Rajasthan Safari&price=38000&guide_name=Rajveer%20Singh&contact_no=5698765432" class="btn">Book Now</a>
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