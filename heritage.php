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
        <img src="https://thumbs.dreamstime.com/b/temple-ancient-hindus-holy-site-indian-heritage-temple-ancient-hindus-holy-site-indian-heritage-ai-345742569.jpg" alt="Nature"> <!-- Replace with your image path -->
                <div class="text">Heritage</div>
    </div>
    <section>
      <div class="packages-container">
        <!-- First Card -->
        <div class="package-card">
          <a href="italy.php">
            <img src="https://plus.unsplash.com/premium_photo-1661952706536-ab7f47e92c1c?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8Y29sb3NzZW98ZW58MHx8MHx8fDA%3Dp" alt="Kashmir" />
          </a>
          <div class="content">
            <h4>Colosseon,Italy</h4>
            <p>Rs. 80,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i> 5Days 4Nights</div>
              <div><i class="fas fa-map-marker-alt"></i>Italy</div>
            </div>
          </div>
        </div>

        <!-- Second Card -->
        <div class="package-card">
          <a href="wallofchina.php">
            <img src="https://media.istockphoto.com/id/497356748/photo/the-great-wall-of-china.jpg?s=612x612&w=0&k=20&c=mqFogPHfA7R3cZUGlSLOAVEGW2ihSlokpQPESmG8t2U=" alt="Kanyakumari" />
          </a>
          <div class="content">
            <h4>wall of china</h4>
            <p>Rs. 50,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i> 7Days 6Nights</div>
              <div><i class="fas fa-map-marker-alt"></i>China</div>
            </div>
          </div>
        </div>

        <div class="package-card">
          <a href="rajastan.php">
            <img src="https://w0.peakpx.com/wallpaper/785/148/HD-wallpaper-gaitore-cenotaphs-near-jaipur-rajasthan-gaitore-cenotaphs-place-thumbnail.jpg" alt="Kanyakumari" />
          </a>
          <div class="content">
            <h4>Rajasthan</h4>
            <p>Rs. 40,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i> 3Days 2Nights</div>
              <div><i class="fas fa-map-marker-alt"></i>India</div>
            </div>
          </div>
        </div>
        <div class="package-card">
          <a href="rameshwaram.php">
            <img src="https://w0.peakpx.com/wallpaper/35/562/HD-wallpaper-temple-god-rameshwaram-worship.jpg" alt="Kanyakumari" />
          </a>
          <div class="content">
            <h4>Rameshwaram</h4>
            <p>Rs. 65,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i> 3Days 2Nights</div>
              <div><i class="fas fa-map-marker-alt"></i> France</div>
            </div>
          </div>
        </div>

        <div class="package-card">
          <a href="amritsar.php">
            <img src="https://media.istockphoto.com/id/478673422/photo/golden-temple-amritsar.jpg?s=612x612&w=0&k=20&c=LvdukkiiqHZmQxOTjf9UPGHcWldxaFLIZc8k2FEFxfM=" alt="Goa" />
          </a>
          <div class="content">
            <h4>Amritsar</h4>
            <p>Rs. 90,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i> 10Days 9Nights</div>
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
          <a href="kedarnath1.php">
            <img src="https://w0.peakpx.com/wallpaper/824/946/HD-wallpaper-kedarnath-view-in-ice-mountain-ice-mountain.jpg" alt="Kanyakumari" />
          </a>
          <div class="content">
            <h4>Kedarnath</h4>
            <p>Rs. 44,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i>7Days 6Nights</div>
              <div><i class="fas fa-map-marker-alt"></i> India</div>
            </div>
          </div>
        </div>


        <div class="package-card">
          <a href="agra.php">
            <img src="https://images.pexels.com/photos/602607/pexels-photo-602607.png?cs=srgb&dl=pexels-roney-john-171488-602607.jpg&fm=jpg" alt="Kanyakumari" />
          </a>
          <div class="content">
            <h4>Agra</h4>
            <p>Rs. 44,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i> 7Days 6Nights</div>
              <div><i class="fas fa-map-marker-alt"></i> India</div>
            </div>
          </div>
        </div>

        <div class="package-card">
          <a href="omkareshwar.php">
            <img src="https://t3.ftcdn.net/jpg/06/70/06/28/360_F_670062860_xwkOMEMnsBYwf7qyiKWuqNxxERJKdLc6.jpg" alt="Kanyakumari" />
          </a>
          <div class="content">
            <h4>Omkareshwar</h4>
            <p>Rs. 1,00,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i>3Days 2Nights</div>
              <div><i class="fas fa-map-marker-alt"></i>India</div>
            </div>
          </div>
        </div>
       
        <div class="package-card">
          <a href="madhyapradesh.php">
            <img src="https://media.istockphoto.com/id/508628776/photo/sunset-over-kandariya-mahadeva-temple.jpg?s=612x612&w=0&k=20&c=YOpVZmLiY4ccl_aoWRJhfqLpNEDgjyOGuTAKbobCO-U=" alt="Goa" />
          </a>
          <div class="content">
            <h4>Bhopal,MP</h4>
            <p>Rs. 56,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i> 4Days 3Nights</div>
              <div><i class="fas fa-map-marker-alt"></i>India</div>
            </div>
          </div>
        </div>
      

     
        <div class="package-card">
          <a href="asam.php">
            <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/12/5f/2f/9d/20180318-200321-largejpg.jpg?w=1200&h=1200&s=1" alt="Goa" />
          </a>
          <div class="content">
            <h4>Asam,Guhati</h4>
            <p>Rs. 56,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i>4Days 3Nights</div>
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
