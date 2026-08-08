<?php
?>
<a href="booking.php?place_name=Majorca Island&price=90000"></a>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="styles.css" />
    <title>Nisarg Pravasi | Majorca Island Tour</title>
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
        <img src="https://media.istockphoto.com/id/1124706098/photo/formentor-beach-palma-mallorca.jpg?s=612x612&w=0&k=20&c=-0OXnfQnwQuFJBeZVmh5P1M07TjOvvSdfw3OAfA1LQI=" alt="Majorca Island">
      </div>
      <div class="container">
        <h2>Overview</h2>
        <p>Majorca Island is the largest of the Balearic Islands in Spain, offering a beautiful mix of beaches, mountains, historical sites, and vibrant nightlife. Whether you're into nature, history, or relaxing on the beach, Majorca has it all.</p>
      </div>
    </section>

    <section id="itinerary">
      <div class="container">
        <h2>10-Day Itinerary for Majorca Island</h2>
        <ul>
          <li><strong>Day 1: Arrival & Beach Relaxation:</strong> Arrive in Majorca, unwind on the beach, and enjoy the local seafood.</li>
          <li><strong>Day 2: Explore Palma City:</strong> Visit the famous Palma Cathedral, explore the old town, and stroll along the beautiful promenade.</li>
          <li><strong>Day 3: Boat Trip to Cabrera Island:</strong> Take a boat trip to Cabrera, a protected nature reserve, and explore the wildlife and crystal-clear waters.</li>
          <li><strong>Day 4: Hiking in the Serra de Tramuntana:</strong> Go on a scenic hike in the Tramuntana mountain range with breathtaking views and visit the charming village of Valldemossa.</li>
          <li><strong>Day 5: Caves of Drach:</strong> Visit the famous caves and explore the underground lakes, followed by a classical music concert.</li>
          <li><strong>Day 6: Cycling Tour of the Island:</strong> Rent a bike and explore the island on a guided cycling tour, enjoying its diverse landscapes.</li>
          <li><strong>Day 7: Beach Day at Cala Millor:</strong> Spend a relaxing day at one of the island's most famous beaches, Cala Millor, known for its clear waters and golden sands.</li>
          <li><strong>Day 8: Visit Soller & Port de Soller:</strong> Take a scenic train ride to the town of Soller, enjoy its quaint streets, and visit the coastal Port de Soller.</li>
          <li><strong>Day 9: Wine Tasting Tour:</strong> Discover the island’s wine culture with a wine tasting tour, visiting local vineyards and learning about Majorca's wine production.</li>
          <li><strong>Day 10: Relaxation & Departure:</strong> Enjoy a final day of relaxation at your resort or on the beach before your departure.</li>
        </ul>
      </div>
    </section>

    <section id="includes">
      <div class="container">
        <h2>Best Time to Visit</h2>
        <ul>
          <li><strong>May to October:</strong> The ideal time for sunny weather and beach activities.</li>
          <li><strong>March to April:</strong> A quieter time for those who prefer cooler weather and fewer tourists.</li>
        </ul>
      </div>
    </section>

    <section id="costs">
      <div class="container">
        <h2>Estimated Costs</h2>
        <ul>
          <li>Accommodation: $150–$350 per night (luxury resorts).</li>
          <li>Meals: $30–$70 per day per person.</li>
          <li>Transport: Car rental: ~$40 per day, Public transport: ~$2 per ride.</li>
          <li>Attractions: ~$50–$150 (including boat trips, wine tours, and hiking).</li>
        </ul>
      </div>
    </section>

    <section id="booking">
      <div class="container">
        <h2>Book Now</h2>
        <p>Contact us to reserve your spot on this unforgettable Majorca Island tour.</p>
        <a href="booking.php?place_name=Majorca Island&price=90000&guide_name=Elena%20Gomez&contact_no=1122373344" class="btn">Book Now</a>
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
