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
        <img src="https://images.pexels.com/photos/221471/pexels-photo-221471.jpeg?cs=srgb&dl=pexels-pixabay-221471.jpg&fm=jpg" alt="Nature"> <!-- Replace with your image path -->
                <div class="text">Island</div>
    </div>
    <section>
      <div class="packages-container">
        <!-- First Card -->
        <div class="package-card">
          <a href="baraisland.php">
            <img src="https://www.tahiti.com/images1/thumbs/BOBPBR-aerial7-1200x720.jpg" alt="Kashmir" />
          </a>
          <div class="content">
            <h4>Bara bara Island,France</h4>
            <p>Rs. 80,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i>  5Days 4Nights</div>
              <div><i class="fas fa-map-marker-alt"></i>Island</div>
            </div>
          </div>
        </div>

        <!-- Second Card -->
        <div class="package-card">
          <a href="southasia.php">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSdRKOju9aoI5wASDdzphTqR9ouMJpLbX6s7w&s" alt="Kanyakumari" />
          </a>
          <div class="content">
            <h4>South asia,Moldives</h4>
            <p>Rs. 50,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i> 7Days 6Nights</div>
              <div><i class="fas fa-map-marker-alt"></i>Island</div>
            </div>
          </div>
        </div>

        <div class="package-card">
          <a href="vancouver.php">
            <img src="https://cdn.audleytravel.com/2058/1470/79/526979-a-pod-of-orca-off-vancouver-island.jpg" alt="Kanyakumari" />
          </a>
          <div class="content">
            <h4>vancouver Island</h4>
            <p>Rs.75,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i> 3Days 2Nights</div>
              <div><i class="fas fa-map-marker-alt"></i>Island</div>
            </div>
          </div>
        </div>
        <div class="package-card">
          <a href="maltaisland.php">
            <img src="https://curlytales.com/wp-content/uploads/2021/04/magdalena-smolnicka-Exf495AtWZI-unsplash-1.jpg" alt="Kanyakumari" />
          </a>
          <div class="content">
            <h4>Malta Island</h4>
            <p>Rs. 65,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i>  4Days 3Nights</div>
              <div><i class="fas fa-map-marker-alt"></i>Island</div>
            </div>
          </div>
        </div>

        <div class="package-card">
          <a href="majorca.php">
            <img src="https://thesibarist.com/wp-content/uploads/2023/07/PALMA-DE-MAYORCA-1.jpeg" alt="Goa" />
          </a>
          <div class="content">
            <h4>majorca Island</h4>
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
          <a href="kosamui.php">
            <img src="https://www.pinyourfootsteps.com/wp-content/uploads/2023/09/samui-6-1024x576.jpg" alt="Kanyakumari" />
          </a>
          <div class="content">
            <h4>ko samui</h4>
            <p>Rs. 67,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i> 6Days 5Nights</div>
              <div><i class="fas fa-map-marker-alt"></i>Island</div>
            </div>
          </div>
        </div>


        <div class="package-card">
          <a href="kevis.php">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ1FFRF0TziExA4yP7yX90uT-goniZS1hzRSw&s"alt="Kanyakumari" />
          </a>
          <div class="content">
            <h4>kevis Island</h4>
            <p>Rs. 56,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i>  4Days 5Nights</div>
              <div><i class="fas fa-map-marker-alt"></i> India</div>
            </div>
          </div>
        </div>

        <div class="package-card">
          <a href="santorini.php">
            <img src="https://lp-cms-production.imgix.net/2024-06/GettyImages-1336913670.jpg?w=600&h=400" alt="Kanyakumari" />
          </a>
          <div class="content">
            <h4>santorini,Greece</h4>
            <p>Rs. 89,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i> 6Days 5Nights</div>
              <div><i class="fas fa-map-marker-alt"></i>Island</div>
            </div>
          </div>
        </div>
       
        <div class="package-card">
          <a href="tahiti.php">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTApFw8zf8nQMwYcgFSITafcyUBS8rlhDMGrA&s" alt="Goa" />
          </a>
          <div class="content">
            <h4>Tahiti Island</h4>
            <p>Rs. 56,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i>  4Days 3Nights</div>
              <div><i class="fas fa-map-marker-alt"></i>Island</div>
            </div>
          </div>
        </div>
      

     
        <div class="package-card">
          <a href="kauai.php">
            <img src="https://img1.10bestmedia.com/Images/Photos/307075/10629686-10152512251338323-8750685814729341442-n_55_660x440.jpg" alt="Goa" />
          </a>
          <div class="content">
            <h4>Kauai</h4>
            <p>Rs. 56,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i>  4Days 3Nights</div>
              <div><i class="fas fa-map-marker-alt"></i>Island</div>
            </div>
          </div>
        </div>
      </div>
    </section>

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
