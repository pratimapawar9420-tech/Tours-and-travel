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
        <img src="https://images.pexels.com/photos/386015/pexels-photo-386015.jpeg?cs=srgb&dl=pexels-nubikini-386015.jpg&fm=jpg" alt="Nature"> <!-- Replace with your image path -->
                <div class="text">Honeymoon</div>
    </div>
    <section>
      <div class="packages-container">
        <!-- First Card -->
        <div class="package-card">
          <a href="goa1.php">
            <img src="https://t3.ftcdn.net/jpg/02/43/24/76/360_F_243247620_Clg6rXsX4K0lhPWip3oo9Oee28J30L23.jpg" alt="Kanyakumari" />
          </a>
          <div class="content">
            <h4>Goa</h4>
            <p>Rs. 75,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i>  5Days 4Nights</div>
              <div><i class="fas fa-map-marker-alt"></i> France</div>
            </div>
          </div>
        </div>

        <!-- Second Card -->
        <div class="package-card">
          <a href="shimla1.php">
            <img src="https://media.istockphoto.com/id/1223612773/photo/the-kalka-to-shimla-railway-is-a-2-ft-6-in-narrow-gauge-railway-in-north-india-which.jpg?s=612x612&w=0&k=20&c=vYxFBTbvcLcivcYjtFB-S_P7ETUwgIj0mAk84l9uC1g=" alt="Kanyakumari" />
          </a>
          <div class="content">
            <h4>Shimla</h4>
            <p>Rs. 74,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i>  5Days 4Nights</div>
              <div><i class="fas fa-map-marker-alt"></i> India</div>
            </div>
          </div>
        </div>

        <div class="package-card">
          <a href="kashmir1.php">
            <img src="https://media.istockphoto.com/id/1323846766/photo/a-beautiful-view-of-dal-lake-in-winter-srinagar-kashmir-india.jpg?s=612x612&w=0&k=20&c=Dp3peie2t-jdLEmqe4W-DD09GACu2Cr-JjHHeB6rpBc=" alt="Kashmir" />
          </a>
          <div class="content">
            <h4>Kashmir</h4>
            <p>Rs. 78,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i>  5Days 4Nights</div>
              <div><i class="fas fa-map-marker-alt"></i> India</div>
            </div>
          </div>
        </div>

        <div class="package-card">
          <a href="malta1.php">
            <img src="https://curlytales.com/wp-content/uploads/2021/04/magdalena-smolnicka-Exf495AtWZI-unsplash-1.jpg" alt="Kanyakumari" />
          </a>
          <div class="content">
            <h4>Malta Island</h4>
            <p>Rs. 87,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i>  5Days 4Nights</div>
              <div><i class="fas fa-map-marker-alt"></i> France</div>
            </div>
          </div>
        </div>

        <div class="package-card">
          <a href="bali1.php">
            <img src="https://media.istockphoto.com/id/653953140/photo/hindu-temple-in-bali.jpg?s=612x612&w=0&k=20&c=ysj3S2kV1ZgCr4QZWDzjvHRowCI3-cR1xQNnqE8-BS4=" alt="Kanyakumari" />
          </a>
          <div class="content">
            <h4>Bali</h4>
            <p>Rs. 70,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i> 5Days 4Nights</div>
              <div><i class="fas fa-map-marker-alt"></i> India</div>
            </div>
          </div>
        </div>
     
    </section>



    <!--2nd line-->

    <section>
      <div class="packages-container">
        <!-- First Card -->
        <div class="package-card">
          <a href="bankok1.php">
            <img src="https://media.istockphoto.com/id/483816132/photo/bangkok-cityscape.jpg?s=612x612&w=0&k=20&c=58yp-hppLeL4rmCav2Kvs7IgAfhlqn_JSWh9Jw2QiXs=" alt="Kanyakumari" />
          </a>
          <div class="content">
            <h4>Bankok & pattaya</h4>
            <p>Rs. 50,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i> 5Days 4Nights</div>
              <div><i class="fas fa-map-marker-alt"></i> Russia</div>
            </div>
          </div>
        </div>


        <div class="package-card">
          <a href="kerla1.php">
            <img src="https://t3.ftcdn.net/jpg/04/02/08/38/360_F_402083813_4dLEweSrZCiooyhx4ihf5nLTNrRQuucp.jpg"alt="Kanyakumari" />
          </a>
          <div class="content">
            <h4>kerla</h4>
            <p>Rs. 44,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i>  5Days 4Nights</div>
              <div><i class="fas fa-map-marker-alt"></i> India</div>
            </div>
          </div>
        </div>

        <div class="package-card">
          <a href="santorini1.php">
            <img src="https://c4.wallpaperflare.com/wallpaper/250/895/790/santorini-corner-wallpaper-preview.jpg" alt="Kanyakumari" />
          </a>
          <div class="content">
            <h4>santorini,Greece</h4>
            <p>Rs. 1,00,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i>  5Days 4Nights</div>
              <div><i class="fas fa-map-marker-alt"></i> France</div>
            </div>
          </div>
        </div>
       
        <div class="package-card">
          <a href="maldives1.php">
            <img src="https://content.tui.co.uk/adamtui/2021_12/7_13/878f7fde-84ca-4804-85a5-adf700e44176/LOC_MDV_shutterstock_1938868960WebOriginalCompressed.jpg?i10c=img.resize(width:1080);img.crop(width:1080%2Cheight:608)s" alt="Goa" />
          </a>
          <div class="content">
            <h4>Maldives</h4>
            <p>Rs. 95,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i>  5Days 4Nights</div>
              <div><i class="fas fa-map-marker-alt"></i>Singapur</div>
            </div>
          </div>
        </div>
      

     
        <div class="package-card">
          <a href="swizerland1.php">
            <img src="https://career-advice.jobs.ac.uk/wp-content/uploads/Switzerland-e1634207571492-1170x630.jpg.optimal.jpg" alt="Goa" />
          </a>
          <div class="content">
            <h4>Swizerland</h4>
            <p>Rs. 1,50,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i>  5Days 4Nights</div>
              <div><i class="fas fa-map-marker-alt"></i>Singapur</div>
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
