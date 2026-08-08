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
        <img src="https://cdn.create.vista.com/api/media/small/29282109/stock-photo-picnic" alt="Nature"> <!-- Replace with your image path -->
                <div class="text">Oneday Trips</div>
    </div>
    <section>
      <div class="packages-container">
        <!-- First Card -->
        <div class="package-card">
          <a href="someshwar.php">
            <img src="https://media-cdn.tripadvisor.com/media/photo-s/13/74/24/45/someshwar-water-fall.jpg" alt="Kashmir" />
          </a>
          <div class="content">
            <h4>Someshwar Waterfall,Nashik</h4>
            <p>Rs. 80,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i> 5Days 4Nights</div>
              <div><i class="fas fa-map-marker-alt"></i>Egypt</div>
            </div>
          </div>
        </div>

        <!-- Second Card -->
        <div class="package-card">
          <a href="botanical.php">
            <img src="https://content3.jdmagicbox.com/comp/pune/k1/020pxx20.xx20.200627085002.u2k1/catalogue/empress-garden-ghorpadi-gaon-pune-botanical-gardens-gzslcdwjm3.jpg" alt="Kanyakumari" />
          </a>
          <div class="content">
            <h4>Botanical Garden,Pune</h4>
            <p>Rs. 50,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i> 7Days 6Nights</div>
              <div><i class="fas fa-map-marker-alt"></i> Russia</div>
            </div>
          </div>
        </div>

        <div class="package-card">
          <a href="ajanta.php">
            <img src="https://www.onacheaptrip.com/wp-content/uploads/Kailasa-Temple-at-Ellora-Caves-Aurangabad.jpg" alt="Kanyakumari" />
          </a>
          <div class="content">
            <h4>Ajanta caves,Sambhajinagar</h4>
            <p>Rs. 1,00,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i> 3Days 2Nights</div>
              <div><i class="fas fa-map-marker-alt"></i> France</div>
            </div>
          </div>
        </div>
        <div class="package-card">
          <a href="redfort.php">
            <img src="https://media.istockphoto.com/id/530741074/photo/red-fort-lal-qila-with-indian-flag-delhi-india.jpg?s=612x612&w=0&k=20&c=7BTI-dgQNPPTq2yARrwIBf2yIqO4PUPX1EJY5ITIyoM=" alt="Kanyakumari" />
          </a>
          <div class="content">
            <h4>Red fort,Pune</h4>
            <p>Rs. 1,00,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i> 3Days 2Nights</div>
              <div><i class="fas fa-map-marker-alt"></i> France</div>
            </div>
          </div>
        </div>

        <div class="package-card">
          <a href="mahakalmandir.php">
            <img src="https://feeds.abplive.com/onecms/images/uploaded-images/2022/11/17/5119cfc6d6e321f01b6b1da03e497a051668651076665584_original.jpg?impolicy=abp_cdn&imwidth=640" alt="Goa" />
          </a>
          <div class="content">
            <h4>Mahakaleshwar mandir,Ujjan</h4>
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
          <a href="getwayofindia.php">
            <img src="https://www.godigit.com/content/dam/godigit/directportal/en/contenthm/one-day-trip-from-mumbai.jpg" alt="Kanyakumari" />
          </a>
          <div class="content">
            <h4>Getway of India</h4>
            <p>Rs. 44,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i>  7Days 6Nights</div>
              <div><i class="fas fa-map-marker-alt"></i> India</div>
            </div>
          </div>
        </div>


        <div class="package-card">
          <a href="tajmahal.php">
            <img src="https://images.pexels.com/photos/602607/pexels-photo-602607.png?cs=srgb&dl=pexels-roney-john-171488-602607.jpg&fm=jpg" alt="Kanyakumari" />
          </a>
          <div class="content">
            <h4>Taj mahal</h4>
            <p>Rs. 44,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i>  7Days 6Nights</div>
              <div><i class="fas fa-map-marker-alt"></i> India</div>
            </div>
          </div>
        </div>

        <div class="package-card">
          <a href="elephantacaves.php">
            <img src="https://media1.thrillophilia.com/filestore/qj62nh68fativk30jny3i6osrzgw_1524229348_Elephanta_caves.jpg" alt="Kanyakumari" />
          </a>
          <div class="content">
            <h4>Elephnata caves</h4>
            <p>Rs. 1,00,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i> 3Days 2Nights</div>
              <div><i class="fas fa-map-marker-alt"></i> France</div>
            </div>
          </div>
        </div>
       
        <div class="package-card">
          <a href="ajmer.php">
            <img src="https://www.indiadrivertours.com/wp-content/uploads/2019/08/ajmercity.jpg" alt="Goa" />
          </a>
          <div class="content">
            <h4>Ajmer</h4>
            <p>Rs. 56,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i> 4Days 3Nights</div>
              <div><i class="fas fa-map-marker-alt"></i>Singapur</div>
            </div>
          </div>
        </div>
      

     
        <div class="package-card">
          <a href="havamehelo.php">
            <img src="https://cdn.britannica.com/25/242225-050-72142DF7/Front-facade-of-Palace-of-the-Winds-Hawa-Mahal-Jaipur-Rajasthan-India.jpg" alt="Goa" />
          </a>
          <div class="content">
            <h4>Hava mehel</h4>
            <p>Rs. 56,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i> 4Days 3Nights</div>
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
