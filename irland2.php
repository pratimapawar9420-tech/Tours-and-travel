<?php
?>
<a href="booking.php?place_name=Ireland&price=90000"></a>

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
        <img src="https://www.retter-reisen.at/wp-content/uploads/2020/03/irland-depositphotos-201677184-xl-2015-rgb.jpg" alt="Ireland">
      </div>
      <div class="container">
        <h2>Overview</h2>
        <p> Ireland, known as the "Emerald Isle," offers breathtaking landscapes, rich history, and vibrant culture. From the stunning Cliffs of Moher to the lively streets of Dublin, Ireland is a perfect blend of nature, history, and hospitality.</p>
      </div>
    </section>

    <!-- Itinerary Section -->
    <section id="itinerary">
      <div class="container">
        <h2>Itinerary for 10 days tour of Ireland</h2>
        <ul>
          <li><strong>Day 1: Dublin – The Capital City:</strong> Explore Trinity College, Dublin Castle, and Temple Bar.</li>
          <li><strong>Day 2: Dublin – Local Exploration:</strong> Visit Guinness Storehouse, Phoenix Park, and Kilmainham Gaol.</li>
          <li><strong>Day 3: Wicklow & Glendalough:</strong> Enjoy scenic views of the Wicklow Mountains and Glendalough Monastic Site.</li>
          <li><strong>Day 4: Cork – The Rebel County:</strong> Discover Blarney Castle, English Market, and Cobh Heritage Centre.</li>
          <li><strong>Day 5: Killarney – Natural Beauty:</strong> Visit Killarney National Park, Muckross House, and Ross Castle.</li>
          <li><strong>Day 6: Ring of Kerry – Scenic Drive:</strong> Experience the stunning coastal and mountain landscapes.</li>
          <li><strong>Day 7: Galway – The Cultural Heart:</strong> Stroll along Eyre Square, visit Spanish Arch, and enjoy traditional Irish music.</li>
          <li><strong>Day 8: Cliffs of Moher & The Burren:</strong> Witness Ireland’s iconic cliffs and explore the rocky Burren region.</li>
          <li><strong>Day 9: Belfast – Northern Ireland:</strong> Tour Titanic Belfast, Giant’s Causeway, and Dark Hedges.</li>
          <li><strong>Day 10: Return to Dublin:</strong> Final shopping, relaxing, and enjoying Irish hospitality.</li>
        </ul>
      </div>
    </section>

    <section id="includes">
      <div class="container">
        <h2>Best time to visit</h2>
        <ul>
          <li><strong>Spring (March to May):</strong> Best for mild weather and fewer crowds.</li>
          <li><strong>Summer (June to August):</strong> Peak tourist season with festivals and warm weather.</li>
        </ul>
      </div>
    </section>

    <!-- Estimated Costs Section -->
    <section id="includes">
      <div class="container">
        <h2>Estimated Costs</h2>
        <ul>
          <li>Accommodation: $120–$250 per night (mid-range hotels).</li>
          <li>Meals: $40–$70 per day per person.</li>
          <li>Transport: Local transport and intercity travel: ~$30–$60 per day.</li>
          <li>Attractions: ~$60–$150 (depending on choices).</li>
        </ul>
      </div>
    </section>

    <!-- Booking Section -->
    <section id="booking">
      <div class="container">
        <h2>Book Now</h2>
        <p>Contact us to reserve your spot on this tour.</p>
        <a href="booking.php?place_name=Ireland&price=90000&guide_name=Sean%20O'Brien&contact_no=9888555555" class="btn">Book Now</a>
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



