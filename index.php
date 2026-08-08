<?php
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="styles.css" />
    <title>Webb Design Mastery | Travel Toor</title>
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
        <li><a href="#home">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="packages.php">Tours</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="review.php">Review</a></li>
        <li><a href="conus.php">Contact</a></li>
        <li><a href="admin.php">Admin</a></li>
        <li><a href="termsandcondition.php">terms & condition</a></li>

      </ul>
      <!--<div class="nav__btns">
      <a href="mybooking.php" class="btn">My bookings</a>
      </div>-->
      <div class="icons">
      <a href="login6.php" class="fas fa-user fa-2x"></a> <!-- 3x larger -->
      </div>
    </nav>

    <header class="section__container header__container" id="home">
      <div class="header__content">
        <h1><span>Let's</span> Create Memorable Journey</h1>
        <p class="section__description">
          Embark on an unforgettable adventure with us! Discover breathtaking
          destinations, create lasting memories, and make every journey
          remarkable.
        </p>
       

</div>
      <div class="header__image">
        <img src="assets/header-1.jpg" alt="header" />
        <img src="assets/header-2.jpg" alt="header" />
        <img src="assets/header-3.jpg" alt="header" />
        <img src="assets/bg.png" alt="bg" />
      </div>
    </header>

    <section class="section__container choose__container" id="about">
      <div class="choose__image">
        <img src="assets/choose.jpg" alt="choose" />
      </div>
      <div class="choose__content">
        <p class="section__subheader">Why Choose Us?</p>
        <h2 class="section__header">Plan Your Trip <span>With Us</span></h2>
        <ul class="choose__list">
          <li>
            <span><i class="ri-verified-badge-fill"></i></span>
            <div>
              <h4>Best Price Gurantee</h4>
              <p>
                We ensure you get the most competitive rates for your travel
                plans, making your dream destinations affordable.
              </p>
            </div>
          </li>
          <li>
            <span><i class="ri-calendar-fill"></i></span>
            <div>
              <h4>Booking Options</h4>
              <p>
                Experience the ease of flexible booking options tailored to suit
                your schedule and preferences.
              </p>
            </div>
          </li>
          <li>
            <span><i class="ri-road-map-fill"></i></span>
            <div>
              <h4>Revising Track Map</h4>
              <p>
                Navigate your adventure with our personalized track maps
                designed for seamless and enjoyable travel experiences.
              </p>
            </div>
          </li>
        </ul>
      </div>
    </section>

   


   

    <footer>
      <div class="section__container footer__container">
        <div class="footer__col">
          <div class="footer__logo">
            <a href="#">TravelToor</a>
          </div>
          <p>
            Explore the world with us! Connect through our social media
            channels, find quick links to essential resources, and access 24/7
            support to make your travel planning effortless.
          </p>
          <ul class="footer__socials">
            <li>
              <a href="#"><i class="ri-facebook-fill"></i></a>
            </li>
            <li>
              <a href="#"><i class="ri-twitter-fill"></i></a>
            </li>
            <li>
              <a href="#"><i class="ri-instagram-line"></i></a>
            </li>
          </ul>
        </div>
        <div class="footer__col">
          <h4>Services</h4>
          <ul class="footer__links">
            <li><a href="about.php">About Us</a></li>
            <li><a href="#">Destinations</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Privacy</a></li>
          </ul>
        </div>
        <div class="footer__col">
          <h4>Instagram</h4>
          <div class="footer__col__flex">
            <img src="assets/instagram-1.jpg" alt="instagram" />
            <img src="assets/instagram-2.jpg" alt="instagram" />
            <img src="assets/instagram-3.jpg" alt="instagram" />
            <img src="assets/instagram-4.jpg" alt="instagram" />
            <img src="assets/instagram-5.jpg" alt="instagram" />
            <img src="assets/instagram-6.jpg" alt="instagram" />
          </div>
        </div>
        <div class="footer__col">
          <h4>Contact</h4>
          <ul class="footer__links">
            <li>
              <a href="#">
                <span><i class="ri-phone-fill"></i></span> +91 9307600509
              </a>
            </li>
            <li>
              <a href="#">
                <span><i class="ri-map-pin-fill"></i></span> Nashik, India
              </a>
            </li>
            <li>
              <a href="#">
                <span><i class="ri-mail-fill"></i></span> nashiktravelcom1313@gmail.com
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="footer__bar">
        Copyright © 2024 Web Design Mastery. All rights reserved.
      </div>
    </footer>

    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="main.js"></script>
  </body>
</html>
