<?php
?>
<a href="booking.php?place_name=Vancouver Island&price=75000"></a>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="styles.css" />
    <title>Nisarg Pravasi | Vancouver Island Tour</title>
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
        <img src="https://media.istockphoto.com/id/476702254/photo/otemanu-mountain-palms-with-hammock-and-ocean-bora-bora-polynesia.jpg?s=612x612&w=0&k=20&c=6wCAGp5A9Mxae7qyQdSM8PhzjJ11Y9U-KbRVUUczdz4=" alt="Vancouver Island">
      </div>
      <div class="container">
        <h2>Overview</h2>
        <p>Vancouver Island, located off the coast of British Columbia, is known for its stunning landscapes, diverse wildlife, and outdoor adventures. With its temperate climate, it offers the perfect blend of natural beauty and modern culture.</p>
      </div>
    </section>

    <section id="itinerary">
      <div class="container">
        <h2>4-Day Itinerary for Vancouver Island</h2>
        <ul>
          <li><strong>Day 1: Arrival & Victoria Exploration:</strong> Arrive in Victoria, the capital city of British Columbia, and explore the beautiful Butchart Gardens and the Royal BC Museum.</li>
          <li><strong>Day 2: Whale Watching & Tofino:</strong> Take a whale-watching tour to see orcas and humpback whales, then drive to Tofino, a quaint town on the west coast known for its beaches and surfing.</li>
          <li><strong>Day 4: Departure & Cowichan Valley:</strong> Explore the Cowichan Valley’s wineries, sample local wines, and then head to the airport for your departure.</li>
        </ul>
      </div>
    </section>

    <section id="includes">
      <div class="container">
        <h2>Best Time to Visit</h2>
        <ul>
          <li><strong>May to September:</strong> Warm weather and ideal for outdoor activities like hiking and whale watching.</li>
          <li><strong>October to April:</strong> Perfect for fewer crowds and an opportunity to enjoy the island’s tranquility.</li>
        </ul>
      </div>
    </section>

    <section id="costs">
      <div class="container">
        <h2>Estimated Costs</h2>
        <ul>
          <li>Accommodation: $130–$250 per night (mid-range hotels and lodges).</li>
          <li>Meals: $25–$60 per day per person.</li>
          <li>Transport: Car rental: ~$50–$70 per day, Local buses: ~$2 per ride.</li>
          <li>Attractions: ~$80–$200 (including whale watching, garden entries, and national park tours).</li>
        </ul>
      </div>
    </section>

    <section id="booking">
      <div class="container">
        <h2>Book Now</h2>
        <p>Contact us to reserve your spot on this exciting Vancouver Island tour.</p>
        <a href="booking.php?place_name=Vancouver Island&price=75000&guide_name=Olivia%20Miller&contact_no=9988771122" class="btn">Book Now</a>
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
