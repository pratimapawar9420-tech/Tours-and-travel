<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="styles.css" />
    <title>Adjustable Image with Text</title>
    <style>
         .packages-container {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 30px;
        padding: 20px;
        flex-wrap: nowrap;
        overflow-x: auto; /* Allows horizontal scrolling if needed */
      }

      .package-card {
        border: 1px solid #ddd;
        border-radius: 10px;
        overflow: hidden;
        width: 250px;
        background-color: #fff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        text-align: center;
      }

      .package-card img {
        width: 100%;
        height: 180px;
        object-fit: cover;
        border-bottom: 1px solid #ddd;
        border-radius: 10px 10px 0 0; /* Rounds the top corners */
      }

      .package-card .content {
        padding: 15px;
      }

      .package-card .content h4 {
        margin: 10px 0;
        font-size: 1.2em;
        color: #333;
      }

      .package-card .content p {
        margin: 5px 0;
        font-size: 1em;
        color: #555;
      }

      .package-card .details {
        display: flex;
        justify-content: space-between;
        margin-top: 10px;
        font-size: 0.9rem;
        color: #777;
      }
    </style>
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
        <li><a href="holiday.php">All Tours</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="review.php">Review</a></li>
        <li><a href="conus.php">Contact</a></li>

      </ul>
     
      <div class="icons">
      <a href="login.php" class="fas fa-user fa-2x"></a> <!-- 3x larger -->
      </div>
    </nav>
    <div class="image-container">
        <img src="https://images.unsplash.com/photo-1666907418714-1b5f85aaf146?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8YWR2ZW50dXJlJTIwbW90b3JjeWNsZXxlbnwwfHwwfHx8MA%3D%3D" alt="Nature"> <!-- Replace with your image path -->
                <div class="text">Adventure</div>
    </div>
    <section>
      <div class="packages-container">
        <!-- First Card -->
        <div class="package-card">
          <a href="manali.php">
            <img src="https://image.kesari.in/upload/H3/paragliding-in-solang.jpg" alt="Kashmir" />
          </a>
          <div class="content">
            <h4>Manali</h4>
            <p>Rs. 40,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i> 5Days 4Nights</div>
              <div><i class="fas fa-map-marker-alt"></i>Egypt</div>
            </div>
          </div>
        </div>

        <!-- Second Card -->
        <div class="package-card">
          <a href="sikkim.php">
            <img src="https://www.tripsavvy.com/thmb/LV9cMvf0PkFRA1hO6-CfTyFBxgs=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/GettyImages-606222988-5a823cff1d64040037dfd9a1.jpg" alt="Kanyakumari" />
          </a>
          <div class="content">
            <h4>Sikkim</h4>
            <p>Rs. 55,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i>  7Days 6Nights</div>
              <div><i class="fas fa-map-marker-alt"></i> Russia</div>
            </div>
          </div>
        </div>

        <div class="package-card">
          <a href="safari.php">
            <img src="https://cheetahgarh.com/wp-content/uploads/2023/09/2-1.webp" alt="Kanyakumari" />
          </a>
          <div class="content">
            <h4>Safari ride,Rajasthan</h4>
            <p>Rs. 38,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i> 3Days 2Nights</div>
              <div><i class="fas fa-map-marker-alt"></i> France</div>
            </div>
          </div>
        </div>
        <div class="package-card">
          <a href="rafting.php">
            <img src="https://www.kolad.in/cdn/shop/t/3/assets/slideshow_1.jpg?v=101858263937160793371392805806" alt="Kanyakumari" />
          </a>
          <div class="content">
            <h4>Rafting,Rishikesh</h4>
            <p>Rs. 78,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i>  3Days 2Nights</div>
              <div><i class="fas fa-map-marker-alt"></i> France</div>
            </div>
          </div>
        </div>

        <div class="package-card">
          <a href="capadocia.php">
            <img src="https://www.travelandleisure.com/thmb/MbwHC-LaxhJsfeBEBVAYCBrg5wY=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/hot-air-balloons-festival-cappadocia-turkey-HOTAIR0605-6d61318b9ac0462d9d20f387e5c7d1a9.jpg" alt="Goa" />
          </a>
          <div class="content">
            <h4>Capadocia,Turkey</h4>
            <p>Rs. 90,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i>  6Days 5Nights</div>
              <div><i class="fas fa-map-marker-alt"></i>  United Kingdom</div>
            </div>
          </div>
        </div>
     
    </section>



    <!--2nd line-->

    <section>
      <div class="packages-container">
        <!-- First Card -->
        <div class="package-card">
          <a href="bikeride.php">
            <img src="https://ihplb.b-cdn.net/wp-content/uploads/2021/05/bike-trip.png" alt="Kanyakumari" />
          </a>
          <div class="content">
            <h4>Bike ride,Leh</h4>
            <p>Rs. 44,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i> 7Days 6Nights</div>
              <div><i class="fas fa-map-marker-alt"></i> India</div>
            </div>
          </div>
        </div>


        <div class="package-card">
          <a href="skydyving.php">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS1RYjIanJWcW4Q9Dw5XmKGcMcPf1uC7HZ-fQ&s" alt="Kanyakumari" />
          </a>
          <div class="content">
            <h4>Sky dyving,Dubai</h4>
            <p>Rs. 44,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i> 3Days 2Nights</div>
              <div><i class="fas fa-map-marker-alt"></i> India</div>
            </div>
          </div>
        </div>

        <div class="package-card">
          <a href="iceland1.php">
            <img src="https://cvsqtgaxsa.cloudimg.io/https://images.prismic.io/indiahike/2d688409-a836-4f99-9900-c12ee64b2b56_Kalsubai+Trek+-+Jay+Mehta+-+View+of+Kalsubai+Peak+1+-+June+-+Indiahikes+-+Contribution.jpg?&q=50&org_if_sml=1" alt="Kanyakumari" />
          </a>
          <div class="content">
            <h4>Iceland</h4>
            <p>Rs. 30,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i> 4Days 3Nights</div>
              <div><i class="fas fa-map-marker-alt"></i> France</div>
            </div>
          </div>
        </div>
       
        <div class="package-card">
          <a href="spitivalley.php">
            <img src="https://media.cntraveller.in/wp-content/uploads/2017/01/spiti-lead-image-1366x768.jpg" alt="Goa" />
          </a>
          <div class="content">
            <h4>Spiti Valley, Himachal Pradesh</h4>
            <p>Rs. 56,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i> 4Days 3Nights</div>
              <div><i class="fas fa-map-marker-alt"></i>Singapur</div>
            </div>
          </div>
        </div>
      

     
        <div class="package-card">
          <a href="nationalpark.php">
            <img src="https://dwq3yv87q1b43.cloudfront.net/public/blogs/fit-in/1200x675/Blog_20240706-1034555815-1720264105.jpg" alt="Goa" />
          </a>
          <div class="content">
            <h4>Kaziranga National Park,Asam</h4>
            <p>Rs. 66,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i>  5Days 4Nights</div>
              <div><i class="fas fa-map-marker-alt"></i>Singapur</div>
            </div>
          </div>
        </div>
      </div>
    </section>
<!--2nd line-->

    <style>

        body {
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        .image-container {
            position: relative;
            width: 1700px; /* Adjust the width as needed */
            height: 500px; /* Adjust the height as needed */
            margin: 20px; /* Add margin if needed */
        }
        .image-container img {
            width: 100%; /* Fill container width */
            height: 100%; /* Fill container height */
            object-fit: cover; /* Ensure image does not stretch and maintains aspect ratio */
            border-radius: 10px; /* Optional: rounded corners */
        }
        .image-container .text {
            position: absolute;
            font-size: 72px; /* Increased text size */

            top: 50%; /* Center vertically */
            left: 50%; /* Center horizontally */
            transform: translate(-50%, -50%); /* Adjust text to exactly center */
            color: white;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7); /* Shadow for better readability */
        }
    </style>
</body>

</html>
